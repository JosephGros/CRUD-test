<?php

class User 
{
    private $username;
    private $password;

    // Konstruktor för att skapa en användarinstans med användarnamn och lösenord
    public function __constructor($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername(){
        echo `<h3>The user is` . $this->username . `</h3>`;
    }

}

$user = new User("JosephGros", "1234");

$user->getUsername();

?>