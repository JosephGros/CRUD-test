<?php

function create($conn){

    try{

        $sql = "INSERT INTO Contacts(firstname, lastname, email)
        VALUES ('Joseph', 'Gros', 'wiley.joseph.gros@gmail.com')";
    
        $conn->exec($sql);
    
        echo "New record created successfully";
    
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

}

function read($conn){

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

}

function update($conn, $param){

    try{

        $sql = "UPDATE Contacts SET firstname='Anna', lastname='Holmqvist' WHERE id=:id";
    
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(":id", $param);

        $stmt->execute();
    
        echo $stmt->rowCount() . " records UPDATED successfully";
    
    
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

}

function delete($conn, $param){

    try {

        $sql = "DELETE FROM Contacts WHERE id=:id";
    
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(":id", $param);

        $stmt->execute();
    
        echo "Person deleted successfully";
    
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

}

?>