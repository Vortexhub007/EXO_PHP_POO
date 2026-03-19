<?php
class Comment {
    public $author;
    public $message;
    public $createdAt;

    public function __construct($author, $message, $createdAt) {
        $this->author = $author;
        $this->message = $message;
        $this->createdAt = $createdAt;
    }

    /**
     * Vérifie si le commentaire est publiable.
     * Règle : l'auteur et le message ne doivent pas être vides.
     */
    public function isValid() {
        return !empty(trim($this->author)) && !empty(trim($this->message));
    }

    // Affiche le commentaire de manière élégante
    public function displayItem() {
        return "
        <div style='background: #f9f9f9; border-left: 4px solid #007bff; padding: 10px 15px; margin-bottom: 15px;'>
            <strong style='color: #333;'>{$this->author}</strong> 
            <small style='color: #999; margin-left: 10px;'>le {$this->createdAt}</small>
            <p style='margin: 8px 0 0 0; color: #555;'>{$this->message}</p>
        </div>
        ";
    }
}