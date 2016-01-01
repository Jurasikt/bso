<?php 
use App\DB;

define('EXT','.php');

define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);

define('APPPATH', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR.'Application'.DIRECTORY_SEPARATOR);

require_once APPPATH.'autoload'.EXT;

$file = DOCROOT.'install/sql.sql';

$all = file_get_contents($file);
$sql = preg_split('/;/',$all);

foreach ($sql as $item) {

    if ($item != '') {
        $res = DB::query($item)
            ->execute()
            ->_error;  

        if ($res == '') {
            echo "<pre>Таблица создана успешна</pre>";
        } else {
            echo "<pre>$res</pre>";
        }
    }
}
?>