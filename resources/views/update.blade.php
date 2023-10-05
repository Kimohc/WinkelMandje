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
    <input type="hidden" name="id" value="{{ $taak->id }}">
    <input type="text" name="userInputEdit" value="{{ $taak->taak }}" >
    <button type="submit" class="btnitto">Update</button>
</form>
</div>
</body>
</html>