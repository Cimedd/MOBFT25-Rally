document.addEventListener('DOMContentLoaded', () => {
    // --- Variabel & State Awal ---
    const DURATION_IN_SECONDS = 2 * 60; // DURASI TIMER 2 MENIT

    const mainGamePage = document.getElementById('mainGamePage');
    const levelCircles = {
        start: document.getElementById('level-start'),
        level1: document.getElementById('level-1'),
        level2: document.getElementById('level-2'),
        level3: document.getElementById('level-3')
    };

    let gameData = {
        group1Name: document.getElementById('group1NameDisplay').textContent,
        group2Name: document.getElementById('group2NameDisplay').textContent,
        group1Score: 0,
        group2Score: 0,
        timers: {},
        remainingTimes: {}, 
        levelsLocked: false,
        levelWinners: { 1: null, 2: null, 3: null }
    };    

    // --- Fungsi Utama ---

    function updateScoreDisplay() {
        document.getElementById('group1Score').textContent = String(gameData.group1Score).padStart(2, '0');
        document.getElementById('group2Score').textContent = String(gameData.group2Score).padStart(2, '0');
    }

    function toggleLevelCirclesAccess(lock) {
        const circlesToToggle = [levelCircles.start, levelCircles.level1, levelCircles.level2, levelCircles.level3];
        circlesToToggle.forEach(circle => {
            if (circle) {
                circle.style.opacity = lock ? '0.5' : '1';
                circle.style.cursor = lock ? 'not-allowed' : 'pointer';
            }
        });
    }

    // --- Popup Handling ---
    window.openPopup = (popupId) => {
        const popup = document.getElementById(popupId);
        if (!popup) return;

        if (gameData.levelsLocked && popupId.startsWith('level')) {
            alert('Please enter group names in the side menu first!');
            return;
        }
        popup.style.display = 'flex';
    };

    window.closePopup = (popupId) => {
        const popup = document.getElementById(popupId);
        if (popup) {
            if (popupId.startsWith('level')) {
                const levelNum = parseInt(popupId.replace('level', '').replace('Popup', ''));
                const timerDisplay = document.getElementById(`timer${levelNum}`);
                const winnerSelect = document.getElementById(`winner${levelNum}`);

                if (winnerSelect && winnerSelect.value !== '' && !gameData.levelWinners[levelNum]) {
                    processLevelCompletion(levelNum, winnerSelect.value);
                } else if (timerDisplay && timerDisplay.textContent === "Time's Up!" && winnerSelect && winnerSelect.value === '' && !gameData.levelWinners[levelNum]) {
                    alert('Time is up! Please select a winner for this level before closing.');
                    return;
                }
            }
            popup.style.display = 'none';
        }
    };

    // --- Timer Logic ---
    function startTimer(duration, displayElement, levelNum) {
    if (gameData.timers[levelNum]) {
        clearInterval(gameData.timers[levelNum]);
    }

    // Cek sisa waktu yang tersimpan, jika tidak ada, gunakan durasi awal
    let remaining = gameData.remainingTimes[levelNum] !== undefined ? gameData.remainingTimes[levelNum] : duration;

    // Jika waktu sudah habis, jangan mulai lagi
    if (remaining <= 0) {
        displayElement.textContent = "Time's Up!";
        return;
    }

    let timer = remaining; // Mulai timer dari sisa waktu

    gameData.timers[levelNum] = setInterval(() => {
        let minutes = parseInt(timer / 60, 10).toString().padStart(2, '0');
        let seconds = parseInt(timer % 60, 10).toString().padStart(2, '0');
        displayElement.textContent = `${minutes}:${seconds}`;

        // Simpan sisa waktu saat ini ke gameData setiap detiknya
        gameData.remainingTimes[levelNum] = timer;

        if (--timer < 0) {
            clearInterval(gameData.timers[levelNum]);
            delete gameData.timers[levelNum];
            delete gameData.remainingTimes[levelNum]; // Hapus sisa waktu jika sudah habis
            displayElement.textContent = "Time's Up!";
            const winnerSelect = document.getElementById(`winner${levelNum}`);
            if (winnerSelect && winnerSelect.value === '' && !gameData.levelWinners[levelNum]) {
                alert(`Time is up! Please select a winner for Level ${levelNum}.`);
            }
        }
    }, 1000);
}

    
    function stopTimer(levelNum) {
        if (gameData.timers[levelNum]) {
            clearInterval(gameData.timers[levelNum]);
            delete gameData.timers[levelNum];
            document.getElementById(`startTimer${levelNum}`).disabled = false;
            console.log(`Timer for level ${levelNum} stopped.`);
        }
    } 

    function restartTimer(levelNum) {
    stopTimer(levelNum); // Menghentikan timer yang sedang berjalan

    // Hapus sisa waktu yang tersimpan untuk level ini
    delete gameData.remainingTimes[levelNum];

    const display = document.getElementById(`timer${levelNum}`);
    const duration = DURATION_IN_SECONDS;

    display.textContent = `${String(Math.floor(duration / 60)).padStart(2, '0')}:${String(duration % 60).padStart(2, '0')}`;
    startTimer(duration, display, levelNum); // Memulai timer baru (yang sekarang akan menggunakan durasi penuh)
    document.getElementById(`startTimer${levelNum}`).disabled = true;
    console.log(`Timer for level ${levelNum} restarted.`);
}

    // --- Logika Skor & Pemenang ---
    function processLevelCompletion(levelNum, winner) {
        if (gameData.levelWinners[levelNum]) return;

        if (winner === 'group1') {
            gameData.group1Score += 1;
        } else if (winner === 'group2') {
            gameData.group2Score += 1;
        }
        gameData.levelWinners[levelNum] = winner;
        updateScoreDisplay();

        if (gameData.levelWinners[1] && gameData.levelWinners[2] && gameData.levelWinners[3]) {
            checkGameEnd();
        }
    }
    
    function checkGameEnd() {
        let winnerMessage = "";
        if (gameData.group1Score > gameData.group2Score) {
            winnerMessage = `${gameData.group1Name} wins the Jungle Clash!`;
        } else if (gameData.group2Score > gameData.group1Score) {
            winnerMessage = `${gameData.group2Name} wins the Jungle Clash!`;
        } 
        document.getElementById('finalWinnerMessage').textContent = winnerMessage;
        openPopup('winnerPopup');
    }

    // --- Initial Setup & Event Listeners ---
    updateScoreDisplay();
    toggleLevelCirclesAccess(false);

    // Level Circle Listeners
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

    // Timer Button Listeners (Start, Stop, Restart)
    for (let i = 1; i <= 3; i++) {
        const startBtn = document.getElementById(`startTimer${i}`);
        const stopBtn = document.getElementById(`stopTimer${i}`);
        const restartBtn = document.getElementById(`restartTimer${i}`);

        if (startBtn) {
            startBtn.addEventListener('click', () => {
                const display = document.getElementById(`timer${i}`);
                startTimer(DURATION_IN_SECONDS, display, i);
                startBtn.disabled = true;
            });
        }
        if (stopBtn) {
            stopBtn.addEventListener('click', () => stopTimer(i));
        }
        if (restartBtn) {
            restartBtn.addEventListener('click', () => restartTimer(i));
        }
    }
});


    