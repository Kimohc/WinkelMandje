<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boodschappen Lijstje</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a4d79bb58d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
    <h1>Grocery List</h1>
    <form action="{{route('taken.store')}}" method="POST">
        @csrf
    <input type="text" name='userInput'>
    <input type="submit" id='submit' class='btnitto' value="Toevoegen">
    </form>
    </div>
    <div class="container">
        @foreach($taken as $taak)
       <div class="taakitto" id="taakitto">{{$taak->taak}}</div>
       <div class="container2">
       <form action="{{ route('taken.destroy', $taak) }}" method="POST">
        @csrf
        @METHOD('DELETE')
        <button type="submit" class="btn"><i class="fa-solid fa-x"></i></button>
    </form>
    <a href="{{ route('taken.edit', ['id' => $taak->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
    </div>   
    @endforeach
    </div>
    <script src="../js/app.js"></script>
</body>
</html>