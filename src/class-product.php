<?php

class Product {
    private $id;
    private $name;
    private $description;
    private $price;
    private $stock;

    // Konstruktor för att skapa en produktinstans
    public function __construct($id, $name, $description, $price, $stock) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
    }

    // Getter-metoder för att hämta produktinformation
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getStock() {
        return $this->stock;
    }

    // Metod för att uppdatera lagerstatus
    public function updateStock($quantity) {
        // Lägg till eller dra av från lagerstatus beroende på köp eller återbetalning
        $this->stock -= $quantity;
    }
}

// Exempel på användning:
$product1 = new Product(1, 'Produkt A', 'En beskrivning av Produkt A', 19.99, 50);

// Hämta produktinformation
echo "Produkt: " . $product1->getName() . "<br>";
echo "Beskrivning: " . $product1->getDescription() . "<br>";
echo "Pris: $" . $product1->getPrice() . "<br>";
echo "Lagerstatus: " . $product1->getStock() . "<br>";

// Uppdatera lagerstatus efter ett köp
$quantityPurchased = 3;
$product1->updateStock($quantityPurchased);
echo "Lagerstatus efter köp av $quantityPurchased enheter: " . $product1->getStock() . "<br>";

?>