<?php
namespace App\Database;

use App\DB;

/**
 *  Kонструктор запросов 
 *  
 *  @version 1.1.3   
 *  @author  nobody
 *  Last Moduficate 2015-12-31
 */
class Query
{
    


    public $_sql;

    /**
     * содержит результат выполнения запроса
     * @var mysqli object
     */
    public $_result;

    /**
     * описание ошибки при выполнении запроса
     *
     */
    public $_error;

    /**
     * 
     *
     */
    public $_link;


    function __construct($sql = '')
    {
        $this->_sql  = $sql;
    }


  
    public function connect()
    {
        $db = new DB();
        $this->_link = $db->link;
    }

    /**
     * Выбирает столбцы таблицы для select запроса 
     * @param  array  $columns  список названий имен сталбцов таблице 
     *                          и их псевдонимов AS например array('col1',col2, ...)
     *                          соответствует SELECT col1,col2, ....
     *                          а array('col1', array('col2','cl')) -- SELECT col1,col2 AS cl...
     * @return class  $this 
     */
    public function select($columns = '')
    {
        $columns = func_get_args();
        $this->_sql.= "SELECT ";

        if (empty($columns)) {

            $this->_sql.=" * ";
        } else {

            $tmp = array();
            foreach ($columns as $item) {
                if (is_array($item)) {
                    //
                    $tmp[] = implode(' AS ',$item);
                } else {

                    $tmp[] = $item;
                }
            }
            $this->_sql.= implode(",",$tmp);
        }
        $this->_sql.=" ";
        return $this;
    }

    /**
     * Выбирает таблицу для insert запроса
     * @param  string  $table имя таблицы 
     * @return object  $this
     */
    public function insert($table)
    {
        $this->_sql = "INSERT INTO $table ";
        return $this;
    }

    /**
     * делает insert запрос 
     * @param array $key    ключи по которым значени будут вставлены в таблицу
     * @param array $values значения для всавки в таблицу, может быть двумерным массивом
     *                      например если ключ один, то всегда одномерный массив(даже если 
     *                      надо вставить одно значение), если ключей несколько, то может быть 
     *                      одномерным, если надо вставить одну строку, или двумерным если 
     *                      надо вставить несколько сторк   
     * @return class $this
     */
    public function values(array $key, array $values)
    {

        if (is_array($key)) {
            if (count($key) == 1) {
                $this->_sql.="($key[0]) VALUES (";

                $values = array_map(
                        function($v) {
                            return $this->escape($v);
                        },$values);
                $this->_sql.=implode("),(",$values).")";
            } else {

                $this->_sql.= " (".implode(',',$key).") VALUES ";
                $items = array();
                if (isset($values[0]) && is_array($values[0])) {

                    foreach ($values as $item) {
                        $item = array_map(
                            function($v) {
                                return $this->escape($v);
                            },$item);

                        $items[] = "(".implode(',',$item).")";
                    }
                    $this->_sql.= implode(',',$items);  

                } else {
                    $values = array_map(
                        function($v) {
                            return $this->escape($v);
                        },$values);
                    $this->_sql.= "(".implode(',',$values).")";
                }
                
            }
        }
        return $this;
    }

    /**
     * update запрс в бд
     * @param  update
     *
     */
    public function update($table)
    {
        $this->_sql = "UPDATE $table ";

        return $this;
    }

    /**
     * устанавливает новые значение поле для update запрса
     * @param  array  $pairs "name" => "value" , ....
     * @return object $this 
     */
    public function set(array $pairs)
    {
        $this->_sql.="SET ";
        $items = array();
        foreach ($pairs as $key => $value) {

            $items[] = "$key = ".$this->escape($value);
        }
        $this->_sql.= implode(',',$items);

        return $this;
    }

    /**
     * запрос Delete
     * @param  string  $table  таблица для deelete e звапроса 
     * @return object $this
     */
    public function delete($table)
    {
        $this->_sql = "DELETE FROM $table ";

        return $this;
    }


    /**
     * Выбор таблицы для select запроса 
     * @param array  $tables  
     *
     * @return  
     */
    public function from($tables = '')
    {
        $tables = func_get_args();

        $this->_sql.= "FROM ";
        if (is_array($tables)) {

            $this->_sql.= implode(",",$tables);
        } else {

            $this->_sql.= $tables;
        }
        $this->_sql.= " ";
        return $this;
    }

    /**
     * условие wheere в sql запросе 
     * @param   string  $col
     * @param   string  $op
     * @param   string  $value 
     * @return  class $this
     */
    public function where($col,$op,$value)
    {
        $args = func_get_args();

        $this->_sql.="WHERE ";
        if (count($args) < 2) {

            $this->_sql.= "1";
        } else {

            $this->_sql.="$col $op ".$this->escape($value);
        }
        return $this;
    }

    /**
     *
     *
     */
    public function order_by($column, $direction = NULL)
    {
        $this->_sql.= "ORDER BY $columns ";
        if ($direction) {

            $this->_sql.=$direction;
        } else {

            $this->_sql.= "ASC";
        }
        return $this;
    }

    /**
     *
     *
     */
    public function and_where($col,$op,$value)
    {
        $args = func_get_args();

        $this->_sql.="AND ";
        if (count($args) == 3) {

           $this->_sql.="$col $op ".$this->escape($value); 
        }
        return $this;
    }

    /**
     *
     *
     */
    public function or_where($col,$op,$value)
    {
        $args = func_get_args();

        $this->_sql.="OR ";
        if (count($args) == 3) {

            $this->_sql.="$col $op ".$this->escape($value); 
        }
        return $this;
    }


    public function limit($int)
    {
        $this->_sql.="LIMIT $int";
        return $this;
    }


    /**
     * возвращает стороку sql запроса
     * @return string
     */
    public function sql()
    {
        return "( $this->_sql )"  ;
    }



    public function execute()
    {
        $this->_link or $this->connect();

        if (!empty($this->_sql)) {

            $this->_result = mysqli_query($this->_link,$this->_sql);
            $this->_error  = mysqli_error($this->_link);
        }
        return $this;
    }


    /**
     * выводит первые результат выполненого запроса 
     * @param  string  $col название столбца 
     * 
     * @return mixed если произошла ошибка то false
     */
    public function current($col='')
    {
        if ($this->_result) {
            $item = mysqli_fetch_assoc($this->_result);
            // если указано значение  $col возвращаем только одно значение
            if (!empty($col) && isset($item[$col])) {

                return $item[$col];
            }
            return $item;
        } else {

            return false;
        }
    }

    /**
     * выводит результаты запрса в виде ассоциативного массива 
     * @return  array или в случаи ошибки false
     */
    public function items()
    {

        $items = array();

        while($item = mysqli_fetch_assoc($this->_result)) {
            $items[] = $item;
        }
        return $items;
    }

    /**
     * подсчитывает количество при выполдении запрса
     * @return  int 
     */
    public function count()
    {
        $count = 0;
        while (mysqli_fetch_assoc($this->_result)) {
            $count++;
        }
        return $count;
    }

    /**
     * проверяет не пустой ли результат запроа 
     * @return bool
     */
    public function exist()
    {
        if (mysqli_fetch_assoc($this->_result)) {

            return true;
        } else {

            return false;
        }
    }

    public function escape($value)
    {
        $this->_link or $this->connect();

        if ($value = mysqli_real_escape_string($this->_link,$value)) {

            return "'$value'";
        } else {

            $this->_error = mysqli_error($this->_link);
            //throw new \Exception;
        }
    }

    /**
     * 
     * 
     */
    public function error()
    {
        if (empty($this->_error)) {

            return false;
        } else {
            return true;
        }
    }


}