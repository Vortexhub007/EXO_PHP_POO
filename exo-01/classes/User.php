<?php
class User {
    // Propriétés
    public $firstname;
    public $lastname;
    public $email;

    // Le constructeur pour initialiser l'objet
    public function __construct($firstname, $lastname, $email) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    // Méthode pour obtenir le nom complet
    public function getFullName() {
        return ucfirst($this->firstname) . " " . strtoupper($this->lastname);
    }

    // Méthode de rendu HTML
    public function displayProfile() {
        return "
        <div style='border: 1px solid #ddd; padding: 20px; border-radius: 8px; width: 250px; font-family: sans-serif;'>
            <h2 style='margin-top: 0;'> " . $this->getFullName() . " </h2>
            <p style='color: #666;'>📧 " . $this->email . "</p>
            <button style='background: #007bff; color: white; border: none; padding: 5px 10px; border-radius: 4px;'>Voir le profil</button>
        </div>
        ";
    }
}