<?php
include("db.php");

if(isset($_POST["klassekode"]))
{
    $klassekode = $_POST["klassekode"];
    $klassenavn = $_POST["klassenavn"];
    $studiumkode = $_POST["studiumkode"];

    $sql = "INSERT INTO klasse
            VALUES('$klassekode','$klassenavn','$studiumkode')";

try
{
    mysqli_query($kobling,$sql);
    echo "Klasse registrert!";
}
catch(mysqli_sql_exception $e)
{
    echo "Klassekoden finnes allerede.";
}


?>

<!DOCTYPE html>
<html>
<body>

<h1>Registrer klasse</h1>

<form method="post">

Klassekode:<br>
<input type="text" name="klassekode"><br><br>

Klassenavn:<br>
<input type="text" name="klassenavn"><br><br>

Studiumkode:<br>
<input type="text" name="studiumkode"><br><br>

<input type="submit" value="Registrer">

</form>

<br>
<a href="index.php">Tilbake til hovedmeny</a>

</body>
</html>
