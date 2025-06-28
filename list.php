<?php
    include('connection.php');
    $query = $_GET['q'];

    $sql = "nil";
    $result = "nil";

    if ($query == "") {
        $sql = "SELECT * FROM toDoList";
        $result = $con->query($sql);
    }

    foreach ($result as $item) {
        echo $item->item . "<br>" . $item->id;
    }
?>
