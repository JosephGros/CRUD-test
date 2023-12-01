<?php

// class User 
// {
//     private $username;
//     private $password;

//     // Konstruktor för att skapa en användarinstans med användarnamn och lösenord
//     public function __construct($username, $password)
//     {
//         $this->username = $username;
//         $this->password = $password;
//     }

//     public function getUsername(){
//         echo "<h3>The user is" . $this->username . "</h3>";
//     }

// }

// $user = new User("JosephGros", "1234");

// $user->getUsername();

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

}

$user = new User("JosephGros", "1234");
$user2 = new User("Anna", "4321");

echo "<h3> Hej " . $user->getUsername() . "</h3>";
echo "<h3> Username: " . $user->getUsername() . "</h3>";

echo "<h3> Hej " . $user2->getUsername() . "</h3>";
echo "<h3> Username: " . $user2->getUsername() . "</h3>";
?>