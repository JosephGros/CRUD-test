<?php

include_once("setup.php");


try{

    $sql = "UPDATE Contacts SET firstname='Anna', lastname='Holmqvist' WHERE id=2";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo $stmt->rowCount() . " records UPDATED successfully";


} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>