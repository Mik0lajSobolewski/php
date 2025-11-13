<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styledodaj.css">
</head>
<body>
    <header>
        <h1>Księgarnia</h1>
    </header>
    <div class="srodek">
        <aside>
            <ol>
                <li><a href="stronakatalog.php">Katalog</a></li>
                <li><a href="strona.php">Strona Główna</a></li>
            </ol>
        </aside>
        <main>
            <form action="stronadodaj.php" method="POST">
            <label>Tytuł:</label>
            <input type="text" name="tytul">
            <label>Autor:</label>
            <input type="text" name="autor">
            <label>Rok:</label>
            <input type="text" name="rok">
            <button type="submit">Wyślij</button>
            </form>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $tytul = $_POST['tytul'];
                $autor = $_POST['autor'];
                $rok = $_POST['rok'];
                $polonczenie = mysqli_connect("localhost", "root", "", "ksiegarnia");
                $zapytanie = "INSERT INTO ksiazki (Tytul, Autor, Rok) VALUES ('$tytul', '$autor', '$rok')";
                mysqli_query($polonczenie, $zapytanie);
                }
                $polonczenie = mysqli_connect("localhost", "root", "", "ksiegarnia");
                $zapytanie1 = "SELECT * FROM ksiazki";
                $wyniki = mysqli_query($polonczenie, $zapytanie1);
                echo
                    '<table>
                         <tr>
                            <th>ID</th>
                            <th>Tytuł</th>
                            <th>Autor</th>
                            <th>Rok</th>
                        <tr>';
                while ($wiersz = mysqli_fetch_array($wyniki)) 
                {
                echo '<tr><td>' . $wiersz[0] . '</td><td>' . $wiersz[1] . '</td><td>' . $wiersz[2] . '</td><td>' . $wiersz[3] . '</td><tr>';
                }
                echo '</table>';
                mysqli_close($polonczenie);
                ?>
        </main>
    </div>
    <footer>
        <p>Bobowa 2025</p>
    </footer>
</body>
</html>