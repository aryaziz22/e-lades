<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body>
    <h1>Selamat Datang!</h1>
    @if(isset($name))
        <p>Hello, {{ $name }}!</p>
    @endif
    <p>Selamat datang di halaman saya, semoga membantu!</p>
</body>
</html>
