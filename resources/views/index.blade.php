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
    <form action="{{route('taken.store')}}" method="POST">
        @csrf
    <input type="text" name='userInput'>
    <input type="submit" id='submit' class='btn'>
    </form>
    </div>
    <div class="container">
        @foreach($taken as $taak)
       <div class="taakitto" id="taakitto">{{$taak->taak}}</div>
        @endforeach
    </div>
    <script src="../js/app.js"></script>
</body>
</html>