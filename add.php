<?php
include("connection.php");
include("cleanse.php");

$q = cleanseData($_GET['q']);

if ($q == "") {
    echo "you cant make an empty entry >:(";
} else {
    $sql = $con->prepare("INSERT INTO toDoList VALUES(?)");
    $sql->bind_param('s', $q);
    echo "test";
}
?>