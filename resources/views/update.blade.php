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
<form action="{{ route('taken.update', $taak->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="taaknaam">Weet je zeker dat je niet dit hoeft te halen?</label>
    <br>
    <input type="text" name="taak" value="{{ $taak->taak }}" id="taaknaam" >
    <select name="winkel" id="winkelNaam" value="{{$taak->winkel}}">
        <option value="Jumbo">Jumbo</option>
        <option value="AlbertHeijn">Albert Heijn</option>
        <option value="Aldi">Aldi</option>
        <option value="Lidl">Lidl</option>
    </select>
    <button type="submit" class="btnitto">Update</button>
</form>
</div>
</body>
</html>
