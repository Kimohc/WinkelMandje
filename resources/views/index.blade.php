<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boodschappen Lijstje</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="header">
    <h1>Grocery List</h1>
    <input type="text" name='userInput'>
    <input type="submit" id='submit' class='btn'>
    </div>
    <div class="container">
        @foreach($taken as $taak)
        {{ $taak->taak }}
        @endforeach
    </div>
</body>
</html>