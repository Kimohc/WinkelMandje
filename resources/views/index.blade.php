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
    <a href="/taken/create" >Create a new task <i class="fa-solid fa-plus"></i></a>
    </div>
    <div class="container">
        @foreach($taken as $taak)
       <div class="taakitto" id="taakitto">
       <div class="taakitto-container">{{$taak->taak}} </div>
    <div class="winkel">{{$taak->winkel}}</div>
    </div>

       <div class="container2">
       <form action="{{ route('taken.destroy', $taak) }}" method="POST">
        @csrf
        @METHOD('DELETE')
        <button type="submit" class="btn"><i class="fa-solid fa-x"></i></button>
    </form>
    <a href="{{ route('taken.edit', ['id' => $taak->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
    <a href="/taken/{{$taak->id}}"><i class="fa-solid fa-eye"></i></a>
    </div>
    @endforeach
    </div>
    <script src="../js/app.js"></script>
</body>
</html>
