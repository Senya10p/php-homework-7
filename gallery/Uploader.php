<?php

class Uploader
{
    protected $upl;
    protected $nameF;

    //3.1 В конструктор передается имя поля формы, от которого мы ожидаем загрузку файла
    public function __construct($upl)
    {
        $this->upl = $upl;
    }

    //3.2 Метод isUploaded() проверяет - был ли загружен файл от данного имени поля
    public  function isUploaded()
    {
        if  ( isset( $_FILES[$this->upl] ) ) { //Проверка, что файл существует
            if ( 0 === $_FILES[$this->upl]['error'] ) { //Проверка, нет ли ошибок при загрузке файла
                if ( is_uploaded_file( $_FILES[$this->upl]['tmp_name'] ) ) { //проверяем был ли загружен файл

                    return true;
                }
            }
        }
        return false;
    }

    //3.3 Метод upload() осуществляет перенос файла (если он был загружен!) из временного места в постоянное
    public function upload($path, $types)
    {
        if ( $this->isUploaded() ) { //Проверка - был ли загружен файл

            $type = $_FILES[$this->upl]['type']; //Проверка удовлетворяет ли тип загружаемого файла списку разрешённых типов

            if ( in_array( $type, $types ) ) {
                if ( file_exists( $path . $_FILES[$this->upl]['name'] ) ) { //Проверка наличия файла с таким же именем

                    $i = 1;
                    //Пока файл с таким именем существует, добавляем к загружаемому файлу в начале имени число(сначала 1, если такой есть, то добавляем 2 и т.д.)
                    while ( file_exists($path . $i . $_FILES[$this->upl]['name'] ) ) {

                        $i++;
                    }
                    $this->nameF = $i . $_FILES[$this->upl]['name'];
                } else { //Иначе оставляем имя файла от пользователя
                    $this->nameF = $_FILES[$this->upl]['name'];
                }

                move_uploaded_file( //Если файл был загружен, то переносим из временного места в постоянное
                    $_FILES[$this->upl]['tmp_name'],
                    $path . $this->nameF
                );
            }
        }
    }

    //Метод добавления лог(кто, когда и какой файл загрузил)
    public function addLog( $logp ){
        if ( isset( $_FILES[$this->upl] ) ) { //Проверка, что файл существует
            if ( 0 == $_FILES[$this->upl]['error'] ) { //Проверка, нет ли ошибок при загрузке файла

                $type = $_FILES[$this->upl]['type'];
                $type1 = ['image/jpg', 'image/png', 'image/jpeg']; //Список разрешённых для загрузки типов

                if ( in_array($type, $type1) ) { //Проверка удовлетворяет ли тип загружаемого файла списку разрешённых типов

                    //4. Если картинка успешно загружена оставляем лог
                    $log2 = 'User: '. getCurrentUser() . '| Date: ' . date('Y-m-d H:i:s') . '| Image: ' . $this->nameF; //Добавляем лог с данными
                    $log = fopen($logp, 'a'); //Задаём путь к файлу с данными.
                    fwrite( $log, $log2 . PHP_EOL );
                    fclose($log);
                }
            }
        }
    }
}