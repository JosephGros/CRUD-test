<?php 

include_once("setup.php");

try {

    $sql = "DELETE FROM Contacts WHERE id=3";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo "Person deleted successfully";

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}


$conn = null;

?>