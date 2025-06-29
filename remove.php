<?php
include("connection.php");
include("cleanse.php");

$q = cleanseData($_GET['q']); // ID is used to remove

if ($q == "") {
    echo "there is no entry to remove";
} else {
    $sql = $con->prepare("DELETE FROM toDoList WHERE toDoList.id = ?");
    $sql->bind_param('i', $q);
    $sql->execute();
    echo "removed id: " . $q . " from entries.";
}

  $con->close();
?>