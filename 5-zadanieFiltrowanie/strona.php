<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Sklep</h1>
    </header>
    <main>
        <a href="dodaj.php">Strona Dodaj</a>
        <form action="strona.php" method="POST">
            <select name="kategoria">
        <?php
        $con = mysqli_connect('localhost', 'root', "", 'sklep');
        $zapytanie1 = "SELECT DISTINCT kategoria FROM produkty;";
        $wyniki1 = mysqli_query($con, $zapytanie1);
        while ($wiersz1 = mysqli_fetch_array($wyniki1)) {
            echo "<option>" . $wiersz1[0] . "</option>";
            }
        ?>
        </select>
        <button type="submit">Pokaż</button>
        <?php
        if (isset($_POST['kategoria'])) {
            $kategoria = $_POST['kategoria'];
            $con = mysqli_connect('localhost', 'root', "", 'sklep');
            $zapytanie = "SELECT * from produkty WHERE kategoria = '$kategoria';";
            $wyniki = mysqli_query($con, $zapytanie);
            echo
                '<table>
                    <tr>
                    <th>ID</th>
                    <th>Produkt</th>
                    <th>Kategoria</th>
                    <th>Cena</th>
                <tr>';
            while ($wiersz = mysqli_fetch_array($wyniki)) {
            echo '<tr><td>' . $wiersz[0] . '</td><td>' . $wiersz[1] . '</td><td>' . $wiersz[2] . '</td><td>' . $wiersz[3] . '</td><tr>';
            }
            echo '</table>';

            mysqli_close($con);
        }
            ?>
    </main>
</body>
</html>