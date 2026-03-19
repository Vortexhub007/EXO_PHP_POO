<?php
class Product {
    public $name;
    public $price;
    public $description;
    public $inStock;

    public function __construct($name, $price, $description, $inStock = true) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->inStock = $inStock;
    }

    // Formate le prix avec deux décimales et le symbole €
    public function getFormattedPrice() {
        return number_format($this->price, 2, ',', ' ') . " €";
    }

    // Retourne le code HTML d'une carte produit
    public function displayCard() {
        // Logique de stock pour le style du badge
        $stockStatus = $this->inStock ? 
            "<span style='color: green;'>En stock</span>" : 
            "<span style='color: red;'>Rupture de stock</span>";
        
        $buttonState = $this->inStock ? "" : "disabled style='opacity: 0.5;'";

        return "
        <div style='border: 1px solid #ccc; border-radius: 10px; padding: 15px; width: 200px; box-shadow: 2px 2px 5px #eee;'>
            <h3 style='margin: 0;'>{$this->name}</h3>
            <p style='font-size: 0.9em; color: #555;'>{$this->description}</p>
            <p><strong>{$this->getFormattedPrice()}</strong></p>
            <p>{$stockStatus}</p>
            <button {$buttonState} style='width: 100%; cursor: pointer;'>Ajouter au panier</button>
        </div>
        ";
    }
}