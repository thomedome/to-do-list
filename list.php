<?php
    include('connection.php');
    include('cleanse.php');
    $query = cleanseData($_GET['q']);

    $sql = "nil";
    $result = "nil";

    if ($query == "") {
        $sql = "SELECT * FROM toDoList";
        $result = $con->query($sql);
    } else {
        $sql = "SELECT * FROM toDoList WHERE item LIKE '%$query%' ";
        $result = $con->query($sql);
    }

    echo "<table class='mx-auto'>";
    echo "<th>Item</th> <th>ID</th>";

    foreach ($result as $item) {

        $itemItem = $item['item'];
        $id = $item['id'];
        
        echo "<tr class='animate__animated animate__fadein'>";
        echo "<td>" . $item['item'] . "</td>";
        echo "<td>" . $item['id'] . "</td>";
        echo "<td>" . "<input type='button' onclick='removeEntry($id)' value='Remove'>" . "</td>";
        echo "</tr>";

        // $item['item'] . " ID: " . $item['id'] . "<br>";
    }

    echo "</table>";

    $con->close();
?>
