<?php

require __DIR__ . '/Article.php';

class News //3.2 Создаём класс News
{
    protected $news = []; //защищённое свойство с новостями


    public function __construct($path) //в конструкторе указывается путь до файла с новостями
    {
        if ( file_exists($path) ) {
            $arts = file_get_contents($path); //читаем содержимое файла в строку

            if (false !== $arts) {
                $arts = unserialize($arts);

                if ( is_array($arts) ) { //если файл является массивом, то добавляем новую статью в массив
                    $this->news = $arts;
                }
            }
        }
    }

    public function getArticles() //возвращает статьи новостей
    {
        return $this->news;
    }

    public function getArticleById($id)
    {
        if ( isset( $this->news[$id] ) ) {
            return $this->news[$id];
        }
    }

    public function add(Article $article) //метод для добавления статьи
    {
        $this->news[] = $article;
    }

    public function save() //метод для сохранения статьи в файл
    {
        $ar = serialize($this->news);
        if ( isset($ar) ) {
            $path = __DIR__ . '/../news.txt'; //путь до файла с новостями
            file_put_contents($path, $ar);
        }
    }
}