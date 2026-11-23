<?php

include("db.php");

if(isset($_POST["klassekode"]))
{
    $klassekode = $_POST["klassekode"];

    $sql = "DELETE FROM klasse
            WHERE klassekode='$klassekode'";

    mysqli_query($kobling,$sql);

    echo "Klasse slettet!";
}

?>

<!DOCTYPE html>
<html>
<body>

<h1>Slett klasse</h1>

<form method="post">

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

<input type="submit"
       value="Slett"
       onclick="return confirm('Er du sikker?')">

</form>

<br>
<a href="index.php">Tilbake til hovedmeny</a>

</body>
</html>
