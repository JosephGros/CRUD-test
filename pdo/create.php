<?php

include_once("setup.php");

//kod för create
try{

    $sql = "INSERT INTO Contacts(firstname, lastname, email)
    VALUES ('Joseph', 'Gros', 'wiley.joseph.gros@gmail.com')";

    $conn->exec($sql);

    echo "New record created successfully";

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}



$conn = null;

?>