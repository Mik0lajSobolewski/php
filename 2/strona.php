<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="strona.php" method="POST">
    <label>ID:</label>
    <input type="number" name="id"><br>
    <label>Imię:</label>
    <input type="text" name="imie"><br>
    <label>Nazwisko:</label>
    <input type="text" name="nazwisko"><br>
    <button type="submit">Wyślij</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    echo "ID: " . $id . " Imie: " . $imie . " Nazwisko: " . $nazwisko; 
    }
    ?>
</body>
</html>