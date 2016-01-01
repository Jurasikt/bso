<?php 
namespace App;


defined('APPPATH') or die('No direct script access.');

use App\Database\Query;
use Symfony\Component\Yaml\Yaml;

/**
 * Класс для работы с базами данных MySQL.
 * @author  nobody
 * @version 3.0.0
 *
 */


class DB
{

    /**
     * насторики подключения БД
     * @var  array()
     */
    protected static $config;
    
    /**
    * название таблицы для записи переменных в базу данных 
    */
    protected static $var = 'tb_variable';


    public $link;



    /**
     * имя файла для записи логов относительно APPAHT
     */
    protected $log;


    function __construct()
    {

        $content = file_get_contents(APPPATH.'config/general.yml');
        if ($content === false) {

            throw new HTTP_Exception(500);   
        }
        $_config = Yaml::parse($content);

       
        $this->link = mysqli_connect(
            $_config['database']['hostname'],
            $_config['database']['username'],
            $_config['database']['password'],
            $_config['database']['database']
            );
    }



    /**
     * создает новый DatabaseQuery type 
     * @param integet   $type  example DB::select, DB::update etc
     * @param intege 
     */
    public static function query($sql = '') 
    {
        return new Query($sql);
    }


    /**
    * Выполняет простой INSERT в таблицу $table используя в качестве имен колонок
    * ключи массива $data, а в качестве данных значения из $data. Можно 
    * использовать двумерный массив
    * @param $table string 
    * @param $data array
    * @return boolean 
    */

    public static function insert($table, $data)
    {
        if (isset($data[0]) && is_array($data[0])) {

            $keys  = array_keys($data[0]);
            $items = array();
            foreach ($data as $item) {
                if (count($keys) == 1) {

                    $items[] = $item[$keys[0]];
                } else {

                    $items[] = array_values($item);
                }
            }

        } else {

            $items = array_values($data);
            $keys  = array_keys($data);
        }
        $res = DB::query()
                ->insert($table)
                ->values($keys,$items)
                ->execute()
                ->error();
        return $res;
    }


    /**
    * сохраняет переменную в базу данных, если
    * переменая существует функция перезапишит ее значение 
    * таблица  поля id, var_name(str(32)), value(str(1024))
    * @param $name   string название сохраняемой переменной 
    * @param $value  mixed  ее значение 
    * @return        bool 
    */
    public static function set_var($name, $value)
    {

        if (DB::query()
                ->select()
                ->from(DB::$var)
                ->where('var_name','=',$name)
                ->execute()
                ->exist()
                ) {
            DB::query()
                ->update(DB::$var)
                ->set(array(
                    'value' => serialize($value),
                    ))
                ->where('var_name','=',$name)
                ->execute();

        } else {
            DB::query()
                ->insert(DB::$var)
                ->values(array('var_name','value'),
                    array($name,serialize($value)))
                ->execute();
        }
    }

    /**
    * возращает значение сохраненной переменой 
    * @param  $name    string название переменной
    * @return mixed    false если не существует поля $name
    */
    public static function get_var($name)
    {
        $val = DB::query()
                ->select('value')
                ->from(DB::$var)
                ->where('var_name','=',$name)
                ->execute()
                ->current('value');
        if ($val) {

            return unserialize($val);
        } else {

            return false;
        }
    }
} 
