<?php

require __DIR__ . '/Article.php';

class News                          //3.2 Создаём класс News
{
    protected $articles = [];
    protected $path;
   // protected $arts;


    public function __construct($path)
    {
        if ( file_exists( $path ) ) {
            $arts = file_get_contents($path);
            if (false !== $arts) {
                $arts = unserialize($arts);
                if (is_array($arts)) {
                    $this->articles = $arts;
                }
            }
        }
    }

    public function getArticles()
    {
        return $this->articles;
    }

    public function add(Article $article)
    {
        $this->articles[] = $article;
    }

    public function save()
    {
        $art = serialize( $this->articles );
        if ( isset($art) ) {
            file_put_contents(__DIR__ . '/../new.txt', $art);
        }
    }
}