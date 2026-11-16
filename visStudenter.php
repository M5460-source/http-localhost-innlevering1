<?php

include("db.php");

$sql = "SELECT * FROM student";

$resultat = mysqli_query($kobling,$sql);

?>

<!DOCTYPE html>
<html>
<body>

<h1>Alle studenter</h1>

<?php

while($rad = mysqli_fetch_array($resultat))
{
    echo $rad["brukernavn"] . " ";
    echo $rad["fornavn"] . " ";
    echo $rad["etternavn"] . " ";
    echo $rad["klassekode"] . "<br>";
}

?>

<br>
<a href="index.php">Tilbake til hovedmeny</a>

</body>
</html>