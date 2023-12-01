<?php

include_once("setup.php");

try {
    
    $sql = "SELECT firstname, lastname, email, favorite FROM Contacts";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //den här $result är samma som det som är nedanför.

    echo "<ul>";

    foreach ($stmt->fetchAll() as $row) {
        echo "<li>";
        print($row["firstname"] . " " . $row["lastname"] . " - " . $row["email"]);
        echo "</li>";
    }
    echo "</ul>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null; //Bra att alltid stänga connection

?>