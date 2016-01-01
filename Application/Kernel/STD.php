<?php 
namespace Kernel;
/**
* 
*/
class STD 
{

    public static $_salt = 'gutfdidQtegrhd';
    /**
     * проверяет массив на сощестования элемента 
     * c ключем name если он не сущетвует возвращает $value
     *
     */
    public static function arr($arr,$name,$value = '')
    {
        if (isset($arr[$name])) {
            return $arr[$name];
        }
        return $value;
    }

    /**
     * подгружает конфиги
     *
     */
    public static function config($name)
    {
        if (file_exists(APPPATH."config/$name".EXT)) {

            return require_once APPPATH."config/$name".EXT;
        }

        return false;
    }

    /**
     * random string 
     */
    public static function rand($length = 12)
    {
        $str_shuffle = 'qsUIwoOPdfghDHeAS123456789rV812tLZyYuNp'.
            'aFJ4458i6jklCBGmQTXKxcW95MzERvb730nqq';
        $shuffle = '';
        $round       = strlen($str_shuffle)-1;
        for ($i=0; $i < $length; $i++){
            $rnd = rand(1,rand(10,10000));
            $shuffle = $shuffle.$str_shuffle[$rnd%$round];
        } 
        return $shuffle;
    }

    public static function set_cookie($name,$value)
    {
        $data = array(
            'value' => $value,
            'sign'  => md5(STD::$_salt.$value),
            );
        $data = base64_encode(json_encode($data));
        return setcookie($name,$data,time()+314159,'/');
    }

    /**
     * вернет значение или false если подпись не действительная
     *
     */
    public static function get_cookie($name)
    {
        $val = STD::arr($_COOKIE,$name);

        if ($val == '') {

            return false;
        }
        $val = json_decode(base64_decode($val));

        if (!isset($val->value) || !isset($val->sign) || $val->sign != md5(STD::$_salt.$val->value)) {

            return false;
        }
        return $val->value;
    }
}


 ?>