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
    <label>Imię:</label>
    <select name="imie">
        <option value="Paweł">Paweł</option>
        <option value="Jan">Jan</option>
        <option value="Kacper">Kacper</option>
    </select><br>
    <button type="submit">Wyślij</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST['imie'];
    echo "Imie: " . $imie; 
    $con = mysqli_connect("localhost", "root", "", "szkola");
    $zapytanie1 = "SELECT * from Uczeń WHERE imie = '$imie';";
    $wyniki = mysqli_query($con, $zapytanie1);
    echo
        '<table>
            <tr>
                <th>ID</th>
                <th>Imię</th>
                <th>Nazwisko</th>
            <tr>';
    while ($wiersz = mysqli_fetch_array($wyniki)) 
    {
    echo '<tr><td>' . $wiersz[0] . '</td><td>' . $wiersz[1] . '</td><td>' . $wiersz[2] . '</td><tr>';
    }
    echo '</table>';
    mysqli_close($con);
    }
    ?>
</body>
</html>