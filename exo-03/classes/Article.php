<?php
class Article {
    public $title;
    public $content;
    public $createdAt;

    public function __construct($title, $content, $createdAt) {
        $this->title = $title;
        $this->content = $content;
        $this->createdAt = $createdAt;
    }

    // Retourne un extrait du contenu (120 caractères max)
    public function getExcerpt() {
        if (strlen($this->content) <= 120) {
            return $this->content;
        }
        // Découpe à 120 et ajoute des points de suspension
        return substr($this->content, 0, 120) . "...";
    }

    // Affiche l'article sous forme de bloc
    public function displayCard() {
        return "
        <article style='border-bottom: 2px solid #eee; margin-bottom: 20px; padding-bottom: 10px; max-width: 600px;'>
            <h2 style='color: #333;'>{$this->title}</h2>
            <small style='color: #999;'>Publié le : {$this->createdAt}</small>
            <p style='line-height: 1.6;'>{$this->getExcerpt()}</p>
            <a href='#' style='color: #007bff; text-decoration: none; font-weight: bold;'>Lire la suite →</a>
        </article>
        ";
    }
}