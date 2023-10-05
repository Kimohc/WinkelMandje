<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a4d79bb58d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container3">
    <h1>Wat je moet halen: {{ $taak->taak }}</h1>
        <h2>Winkel: {{ $taak->winkel }}</h2>
    <a href="/">Go Home <i class="fa-solid fa-house"></i></a>
    </div>
</body>
</html>

