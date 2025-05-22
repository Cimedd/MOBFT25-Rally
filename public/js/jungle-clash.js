document.addEventListener('DOMContentLoaded', () => {
    const playButton = document.getElementById('playButton');
    const landingPage = document.getElementById('landingPage');
    const mainGamePage = document.getElementById('mainGamePage');
    const sideNav = document.getElementById('mySidenav');
    const levelCircles = {
        start: document.getElementById('level-start'),
        level1: document.getElementById('level-1'),
        level2: document.getElementById('level-2'),
        level3: document.getElementById('level-3')
    };
    // Popups (IDs are used directly, this object is for reference)
    // const popups = {
    //     start: document.getElementById('startPopup'),
    //     level1: document.getElementById('level1Popup'),
    //     level2: document.getElementById('level2Popup'),
    //     level3: document.getElementById('level3Popup'),
    //     winner: document.getElementById('winnerPopup')
    // };

    let gameData = {
        dealerName: '',
        group1Name: document.getElementById('group1NameDisplay').textContent,
        group2Name: document.getElementById('group2NameDisplay').textContent,
        group1Score: 0,
        group2Score: 0,
        timers: {}, // Stores interval IDs for timers {1: intervalId1, 2: intervalId2, ...}
        levelsLocked: true,
        levelWinners: {1: null, 2: null, 3: null} // Tracks if a winner is set for each level
    };

    // --- Initial Setup ---
    updateScoreDisplay();
    toggleLevelCirclesAccess(true); // Initially lock levels

    // --- Event Listeners ---
    if (playButton) {
        playButton.addEventListener('click', () => {
            console.log('Play button clicked');
            landingPage.style.transform = 'translateY(-100%)';
            mainGamePage.style.display = 'flex'; 
            setTimeout(() => {
                mainGamePage.style.transform = 'translateY(0)';
                landingPage.style.display = 'none'; 
            }, 50); 
        });
    }

    // Side Navigation
    // window.openNav = () => {
    //     sideNav.style.width = '250px';
    // };

    // window.closeNav = () => {
    //     sideNav.style.width = '0';
    // };

    window.saveNames = () => {
        const dealerNameInput = document.getElementById('dealerName');
        const group1NameInput = document.getElementById('group1Name');
        const group2NameInput = document.getElementById('group2Name');

        if (dealerNameInput.value.trim() === '' || group1NameInput.value.trim() === '' || group2NameInput.value.trim() === '') {
            alert('Please enter names for the dealer and both groups.');
            return;
        }

        gameData.dealerName = dealerNameInput.value.trim();
        gameData.group1Name = group1NameInput.value.trim();
        gameData.group2Name = group2NameInput.value.trim();

        document.getElementById('group1NameDisplay').textContent = gameData.group1Name;
        document.getElementById('group2NameDisplay').textContent = gameData.group2Name;
        
        updateWinnerDropdowns();

        gameData.levelsLocked = false;
        toggleLevelCirclesAccess(false);
        closeNav();
        alert('Names saved! You can now start the game.');
    };
    
    function updateWinnerDropdowns() {
        const winnerSelects = [document.getElementById('winner1'), document.getElementById('winner2'), document.getElementById('winner3')];
        winnerSelects.forEach(select => {
            if (select) {
                const currentValue = select.value; // Preserve current selection if possible
                // Clear existing options except the first one ("Select Winner")
                while (select.options.length > 1) {
                    select.remove(1);
                }
                // Add new options
                const option1 = document.createElement('option');
                option1.value = 'group1';
                option1.textContent = gameData.group1Name;
                select.appendChild(option1);

                const option2 = document.createElement('option');
                option2.value = 'group2';
                option2.textContent = gameData.group2Name;
                select.appendChild(option2);

                // Restore previous selection if it's still valid
                if (currentValue === 'group1' || currentValue === 'group2') {
                    select.value = currentValue;
                }
            }
        });
    }

    // Popup Handling
    window.openPopup = (popupId) => {
        const popup = document.getElementById(popupId);
        if (!popup) return;

        // if (gameData.levelsLocked && (popupId === 'startPopup' || popupId.startsWith('level'))) {
        //     alert('Please enter dealer and group names in the side menu first by clicking the menu icon (☰).');
        //     return;
        // }
        popup.classList.remove('hidden'); 
        popup.style.display = 'flex';
    };

    window.closePopup = (popupId) => {
        const popup = document.getElementById(popupId);
        if (popup) {
            if (popupId.startsWith('level')) {
                const levelNum = parseInt(popupId.replace('level', '').replace('Popup', ''));
                const timerDisplay = document.getElementById(`timer${levelNum}`);
                const winnerSelect = document.getElementById(`winner${levelNum}`);
                
                // If a winner is selected and level not yet processed, process it.
                if (winnerSelect && winnerSelect.value !== '' && !gameData.levelWinners[levelNum]) {
                    processLevelCompletion(levelNum, winnerSelect.value);
                } 
                // Else, if timer is up and no winner is selected (and level not yet processed)
                else if (timerDisplay && timerDisplay.textContent === "Time's Up!" && winnerSelect && winnerSelect.value === '' && !gameData.levelWinners[levelNum]) {
                    alert('Time is up! Please select a winner for this level before closing.');
                    return; // Prevent closing
                }
            }
            popup.style.display = 'none';
        }
    };

    // Level Circle Click Handlers
    if (levelCircles.start) {
        levelCircles.start.addEventListener('click', () => openPopup('startPopup'));
    }

    [levelCircles.level1, levelCircles.level2, levelCircles.level3].forEach((circle, index) => {
        if (circle) {
            circle.addEventListener('click', () => {
                const levelNum = index + 1;
                openPopup(`level${levelNum}Popup`);
            });
        }
    });

    function toggleLevelCirclesAccess(lock) {
        const circlesToToggle = [levelCircles.start, levelCircles.level1, levelCircles.level2, levelCircles.level3];
        circlesToToggle.forEach(circle => {
            if (circle) {
                if (lock) {
                    circle.style.opacity = '0.5';
                    circle.style.cursor = 'not-allowed';
                } else {
                    circle.style.opacity = '1';
                    circle.style.cursor = 'pointer';
                }
            }
        });
    }

    // Timer Logic
    function startTimer(duration, displayElement, levelNum, winnerSelectId) {
        if (gameData.timers[levelNum]) { 
            clearInterval(gameData.timers[levelNum]);
        }
        let timer = duration;
        gameData.timers[levelNum] = setInterval(() => {
            let minutes = parseInt(timer / 60, 10);
            let seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            displayElement.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                clearInterval(gameData.timers[levelNum]);
                delete gameData.timers[levelNum]; // Remove from active timers
                displayElement.textContent = "Time's Up!";
                const winnerSelect = document.getElementById(winnerSelectId);
                if (winnerSelect && winnerSelect.value === '' && !gameData.levelWinners[levelNum]) {
                    alert('Time is up! Please select a winner for Level ' + levelNum + '.');
                }
            }
        }, 1000);
    }

    if (document.getElementById('startTimer1')) {
        document.getElementById('startTimer1').addEventListener('click', () => {
            const tenMinutes = 2 * 60; // Example time: 10 minutes
            const display = document.getElementById('timer1');
            startTimer(tenMinutes, display, 1, 'winner1');
            document.getElementById('startTimer1').disabled = true;
        });
    }

    if (document.getElementById('startTimer2')) {
        document.getElementById('startTimer2').addEventListener('click', () => {
            const fifteenMinutes = 2 * 60; // Example time: 15 minutes
            const display = document.getElementById('timer2');
            startTimer(fifteenMinutes, display, 2, 'winner2');
            document.getElementById('startTimer2').disabled = true;
        });
    }

    if (document.getElementById('startTimer3')) {
        document.getElementById('startTimer3').addEventListener('click', () => {
            const twentyMinutes = 2 * 60; // Example time: 20 minutes
            const display = document.getElementById('timer3');
            startTimer(twentyMinutes, display, 3, 'winner3');
            document.getElementById('startTimer3').disabled = true;
        });
    }

    // Score and Winner Logic
    function updateScoreDisplay() {
        document.getElementById('group1Score').textContent = String(gameData.group1Score).padStart(2, '0');
        document.getElementById('group2Score').textContent = String(gameData.group2Score).padStart(2, '0');
    }

    function checkGameEnd() {
        if (gameData.levelWinners[1] && gameData.levelWinners[2] && gameData.levelWinners[3]) {
            let winnerMessage = "";
            if (gameData.group1Score > gameData.group2Score) {
                winnerMessage = `${gameData.group1Name} wins the Jungle Clash!`;
            } else if (gameData.group2Score > gameData.group1Score) {
                winnerMessage = `${gameData.group2Name} wins the Jungle Clash!`;
            } else {
                winnerMessage = "It's a tie in the Jungle Clash!";
            }
            document.getElementById('finalWinnerMessage').textContent = winnerMessage;
            openPopup('winnerPopup');
        }
    }

    function processLevelCompletion(levelNum, winner) {
        if (gameData.levelWinners[levelNum]) return; // Already processed

        if (winner === 'group1') {
            gameData.group1Score += 1; 
        } else if (winner === 'group2') {
            gameData.group2Score += 1;
        }
        gameData.levelWinners[levelNum] = winner;
        updateScoreDisplay();
        
        // Check if all levels are completed
        if (gameData.levelWinners[1] && gameData.levelWinners[2] && gameData.levelWinners[3]) {
            checkGameEnd();
        }
    }
    
    // Reset game functionality
    window.resetGame = () => {
        // Clear any active timers first
        Object.values(gameData.timers).forEach(timerId => clearInterval(timerId));

        gameData = {
            dealerName: '',
            group1Name: 'Group 1',
            group2Name: 'Group 2',
            group1Score: 0,
            group2Score: 0,
            timers: {},
            levelsLocked: true,
            levelWinners: {1: null, 2: null, 3: null}
        };
        document.getElementById('dealerName').value = '';
        document.getElementById('group1Name').value = 'Group 1'; // Reset to default
        document.getElementById('group2Name').value = 'Group 2'; // Reset to default
        
        document.getElementById('group1NameDisplay').textContent = gameData.group1Name;
        document.getElementById('group2NameDisplay').textContent = gameData.group2Name;
        updateWinnerDropdowns(); // Update dropdowns with default names

        updateScoreDisplay();
        toggleLevelCirclesAccess(true);
        
        for (let i = 1; i <= 3; i++) {
            document.getElementById(`timer${i}`).textContent = (i === 1 ? '10:00' : (i === 2 ? '15:00' : '20:00'));
            document.getElementById(`startTimer${i}`).disabled = false;
            document.getElementById(`winner${i}`).value = ''; // Reset winner selection
        }
        closePopup('winnerPopup'); // Close winner popup if it was open
        
        // Transition back to landing page
        
    };
});


    