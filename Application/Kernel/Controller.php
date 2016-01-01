<?php 
namespace Kernel;

class Controller 
{

    public $_config;


    function __construct()
    {
        $this->_config = STD::config('general');
    }


    public static function factory()
    {
        return new Controller;
    }

    /**
     * выводит текст на экран 
     * @param $text   string
     */
    public function body($text)
    {
        echo $text;
        return $this;
    }

    public function header($h,$value)
    {
        header("$h: $value");
        return $this;
    }

    /**
     * возращает значение get запроса
     * @param  string  $name     занчение ключа 
     * @param  string  $defualt  если ключ не существует вернет $defualt
     * @return mixed
     */
    public function get($name,$defualt='')
    {
        if (isset($_GET[$name])) {

            return $_GET[$name];
        } else {

            return $defualt;
        }
    }

    /**
     * возращает значение post запроса
     * @param  string  $name     занчение ключа 
     * @param  string  $defualt  если ключ не существует вернет 
     * @return mixed
     */
    public function post($name,$defualt='')
    {
        if (isset($_POST[$name])) {

            return $_POST[$name];
        } else {

            return $defualt;
        }
    }

}