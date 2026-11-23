<?php

include("db.php");

if(isset($_POST["brukernavn"]))
{
    $brukernavn = $_POST["brukernavn"];

    $sql = "DELETE FROM student
            WHERE brukernavn='$brukernavn'";

mysqli_query($kobling,$sql);

echo "Student slettet!";
}

?>

<!DOCTYPE html>
<html>
<body>

<h1>Slett student</h1>

<form method="post">

<select name="brukernavn">

<?php

$sql = "SELECT * FROM student";
$resultat = mysqli_query($kobling,$sql);

while($rad = mysqli_fetch_array($resultat))
{
    echo "<option value='".$rad['brukernavn']."'>";
    echo $rad['brukernavn'];
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
