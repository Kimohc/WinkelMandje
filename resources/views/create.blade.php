<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a4d79bb58d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container3">
<form action="{{route('taken.store')}}" method="POST">
        @csrf
        
        <br>
        <label for="Name">Wat moet je nog halen? <i class="fa-solid fa-cart-shopping"></i></label>
        <br>
        <select name="Winkel" id="winkel">
            <option value="Jumbo">Jumbo</option>
            <option value="AlbertHeijn">Albert Heijn</option>
            <option value="Aldi">Aldi</option>
            <option value="Lidl">Lidl</option>
        </select>
        <br>
    <input type="text" name='userInput' id="Name" required>
    <input type="submit" id='submit' class='btnitto' value="Toevoegen">
    </form>
    </div>
</body>
</html>