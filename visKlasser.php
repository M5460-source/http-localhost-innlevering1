<?php

include("db.php");

$sql = "SELECT * FROM klasse";

$resultat = mysqli_query($kobling,$sql);

?>

<!DOCTYPE html>
<html>
<body>

<h1>Alle klasser</h1>

<?php

while($rad = mysqli_fetch_array($resultat))
{
    echo $rad["klassekode"] . " ";
    echo $rad["klassenavn"] . " ";
    echo $rad["studiumkode"] . "<br>";
}

?>

<br>
<a href="index.php">Tilbake til hovedmeny</a>

</body>
</html>
