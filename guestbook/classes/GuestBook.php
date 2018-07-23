<?php

require __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
    //1.3 Метод append($text) добавляет новую запись к массиву записей
    public function append($text)
    {
            if ( $text != '') {
                $this->data[] = $text . PHP_EOL;

                return $this; //4. Метод заканчиваем конструкцией return $this
            }
    }
}