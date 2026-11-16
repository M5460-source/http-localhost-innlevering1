<?php

$kobling = mysqli_connect(
    "localhost",
    "root",
    "",
    "skole"
);

if (!$kobling)
{
    die("Kunne ikke koble til databasen");
}

?>
