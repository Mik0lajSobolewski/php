<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    <form action="strona.php" method="POST">
        <label>Produkt</label>
        <input type="text" name="Produkt">
        <label>Kategoria</label>
        <input type="text" name="Kategoria">
        <label>Cena</label>
        <input type="text" name="Cena">
        <button type="submit">Dodaj</button>

        <?php
        if (isset($_POST['produkt'], $_POST['kategoria'], $_POST['cena'])) {
            $produkt = $_POST['produkt'];
            $kategoria = $_POST['kategoria'];
            $cena = $_POST['cena'];
            $con = mysqli_connect('localhost', 'root', "", 'sklep');
            $zapytanie = "INSERT INTO produkty ('produkty', 'kategoria', 'cena') VALUES ('$produkt', '$kategoria', '$cena');";
            mysqli_query($con,$zapytanie);
            mysqli_close($con);
        }
        
            $con = mysqli_connect('localhost', 'root', "", 'sklep');
            $zapytanie1 = "SELECT * from produkty";
            $wyniki1 = mysqli_query($con, $zapytanie1);
            echo
                '<table>
                    <tr>
                    <th>ID</th>
                    <th>Produkt</th>
                    <th>Kategoria</th>
                    <th>Cena</th>
                <tr>';
            while ($wiersz = mysqli_fetch_array($wyniki1)) {
            echo '<tr><td>' . $wiersz[0] . '</td><td>' . $wiersz[1] . '</td><td>' . $wiersz[2] . '</td><td>' . $wiersz[3] . '</td><tr>';
            }
            echo '</table>';

            mysqli_close($con);
            ?>
    </form>
</body>
</html>