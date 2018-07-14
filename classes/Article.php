<?php

class Article       //3.1 Создаём класс Article
{
    protected $caption;//заголовок статьи
    protected $sText; //краткий текст статьи
    protected $fText; //полный текст статьи

    public function __construct(string $caption, string $sText, string $fText)
    {
        $this->caption = $caption;
        $this->sText = $sText;
        $this->fText = $fText;
    }

    public function getCaption()
    {
        return $this->caption;
    }

    public function getSText()
    {
        return $this->sText;
    }

    public function getFText()
    {
        return $this->fText;
    }

}