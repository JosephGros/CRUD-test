<?php 

class User 
{
    private $username;
    private $password;

    // Konstruktor för att skapa en användarinstans med användarnamn och lösenord
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername(){
        return $this->username;
    }

    public function register(){
        //kod som sparar i databasen skulle läggas till här
        echo "Welcome : " . $this->getUsername();
    }

}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    if (isset($_POST["reg_username"]) && isset($_POST["reg_password"])){

        //Hämtar användarnamn och lösenord från formuläret
        $username = $_POST["reg_username"];
        $password = $_POST["reg_password"];

        // echo $username . "<br>" . $password;

        //Skapa objekt av class user
        $newUser = new User($username, $password);

        $newUser->register();
    }

}

?>