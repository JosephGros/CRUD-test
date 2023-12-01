<?php

class ContactCRUD {

    //Properties 
    private $conn;


    function __construct()
    {

        $servername = "db";
        $username = "mariadb";
        $password = "mariadb";
        $dbname = "mariadb";

        try {
        //mariadb eller my sql så:
        $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully <br>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }

    function __destruct()
    {
        $this->conn = null;
    }

    //Alla 4 metoder
function create(){

    try{

        $sql = "INSERT INTO Contacts(firstname, lastname, email)
        VALUES ('Joseph', 'Gros', 'wiley.joseph.gros@gmail.com')";
    
        $this->conn->exec($sql);
    
        echo "New record created successfully";
    
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

}

function read(){

    try {
    
        $sql = "SELECT firstname, lastname, email, favorite FROM Contacts";
    
        $stmt = $this->conn->prepare($sql);
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

function update($param){

    try{

        $sql = "UPDATE Contacts SET firstname='Anna', lastname='Holmqvist' WHERE id=:id";
    
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":id", $param);

        $stmt->execute();
    
        echo $stmt->rowCount() . " records UPDATED successfully";
    
    
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

}

function delete($param){

    try {

        $sql = "DELETE FROM Contacts WHERE id=:id";
    
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":id", $param);

        $stmt->execute();
    
        echo "Person deleted successfully";
    
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

}

}

?>