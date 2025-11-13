<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Księgarnia</h1>
    </header>
    <div class="srodek">
        <aside>
            <ol>
                <li><a href="strona.php">Strona Główna</a></li>
                <li><a href="stronadodaj.php">Dodaj</a></li>
            </ol>
        </aside>
        <main>
            <?php
            $polonczenie = mysqli_connect('localhost', 'root', "", 'Ksiegarnia');
            if(!$polonczenie){
                die("Błąd połączenia!");
            }
            $zapytanie = "select * from Ksiazki;";
            $wyniki = mysqli_query($polonczenie, $zapytanie);
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