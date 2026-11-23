<?php

include("db.php");

if(isset($_POST["brukernavn"]))
{
    $brukernavn = $_POST["brukernavn"];
    $fornavn = $_POST["fornavn"];
    $etternavn = $_POST["etternavn"];
    $klassekode = $_POST["klassekode"];

    $sql = "INSERT INTO student
            VALUES('$brukernavn','$fornavn','$etternavn','$klassekode')";

try
{
    mysqli_query($kobling,$sql);
    echo "Student registrert!";
}
catch(mysqli_sql_exception $e)
{
    echo "Brukernavnet finnes allerede.";
}

}  
?>

<!DOCTYPE html>
<html>
<body>

<h1>Registrer student</h1>

<form method="post">

Brukernavn:<br>
<input type="text" name="brukernavn"><br><br>

Fornavn:<br>
<input type="text" name="fornavn"><br><br>

Etternavn:<br>
<input type="text" name="etternavn"><br><br>

Klasse:<br>

<select name="klassekode">

<?php

$sql = "SELECT * FROM klasse";
$resultat = mysqli_query($kobling,$sql);

while($rad = mysqli_fetch_array($resultat))
{
    echo "<option value='".$rad['klassekode']."'>";
    echo $rad['klassekode'];
    echo "</option>";
}

?>

</select>

<br><br>

<input type="submit" value="Registrer student">

</form>

<br>
<a href="index.php">Tilbake til hovedmeny</a>

</body>
</html>
