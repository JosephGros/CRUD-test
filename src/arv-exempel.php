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

    // Metod för att hämta användarnamnet
    public function getUsername()
    {
        return $this->username;
    }

    // Metod för att registrera en användare
    public function register()
    {
        // Här kan du lägga till logik för att spara användaren i en databas eller liknande
        echo "Användaren {$this->username} har registrerats.";
    }

    // Metod för att logga in en användare
    public function login($enteredPassword)
    {
        // Kontrollera om det angivna lösenordet matchar användarens lösenord
        if ($enteredPassword === $this->password) {
            echo "Inloggning lyckades för användaren {$this->username}.";
        } else {
            echo "Fel lösenord för användaren {$this->username}.";
        }
    }
}



// Klassen Merchant ärver från klassen User
class Merchant extends User
{
    private $shopName;

    public function __construct($username, $password, $shopName)
    {
        // Anropae föräldraklassens konstruktor för att hantera användarnamn och lösenord
        parent::__construct($username, $password);

        // Sätter butiksnamnet
        $this->shopName = $shopName;
    }

    // Getter för att hämta butiksnamnet
    public function getShopName()
    {
        return $this->shopName;
    }
}



// Exempel på användning:
$merchant = new Merchant("merchant1", "password123", "MyShop");

// Hämta och skriv ut information
echo "Merchant: " . $merchant->getUsername() . "<br>";
echo "Shop Name: " . $merchant->getShopName() . "<br>";