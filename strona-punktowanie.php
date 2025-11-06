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
echo'<ul>';
while ($wiersz = mysqli_fetch_array($wyniki)) 
{
echo '<li>' . $wiersz[1] . " " . $wiersz[2] . '</li>';
}
echo '</ul>';

mysqli_close($polonczenie);
?>
</html>