<?php
class Cart {
    // Tableau qui contiendra des instances de Product
    public $items = [];

    // Ajoute un objet Product au tableau
    public function addProduct(Product $product) {
        $this->items[] = $product;
    }

    // Calcule la somme des prix de tous les produits
    public function getTotal() {
        $total = 0;
        foreach ($this->items as $product) {
            $total += $product->price;
        }
        return $total;
    }

    // Affiche le récapitulatif HTML
    public function displayCart() {
        $html = "<div style='border: 2px solid #333; padding: 15px; width: 300px;'>";
        $html .= "<h3>Mon Panier (" . count($this->items) . " articles)</h3><ul>";
        
        foreach ($this->items as $product) {
            $html .= "<li>{$product->name} : {$product->price} €</li>";
        }
        
        $html .= "</ul><hr>";
        $html .= "<strong>Total : " . $this->getTotal() . " €</strong>";
        $html .= "</div>";
        
        return $html;
    }
}