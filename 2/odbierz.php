<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    echo "ID: " . $id . " Imie: " . $imie . " Nazwisko: " . $nazwisko; 
    }
    else {
        echo "Formularz nie został wypełniony";
    }
    ?>
</body>
</html>