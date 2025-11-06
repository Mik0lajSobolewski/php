<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uczniowie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</body>
<?php
$polonczenie = mysqli_connect('localhost', 'root', "", 'uczniowie');
if(!$polonczenie){
    die("Błąd połączenia!");
}
$zapytanie = "select * from Uczniowie;";
$wyniki = mysqli_query($polonczenie, $zapytanie);
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

mysqli_close($polonczenie);
?>
</html>