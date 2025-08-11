<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pilih Halaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-image: url('{{ asset("img/background-home.webp") }}');
            background-size: cover; 
            background-position: center;
        }
    </style>
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="text-center">
        <h1 class="mb-4" style="color: white">Pilih Halaman</h1>
        <a href="{{ url('/find-the-relic') }}" class="btn btn-primary btn-lg mx-2">Find The Relic</a>
        <a href="{{ url('/jungleclash') }}" class="btn btn-success btn-lg mx-2">Jungle Clash</a>
    </div>

</body>
</html>