<?php 
function __autoload($class)
{

    $map[] = APPPATH.str_replace('\\',DIRECTORY_SEPARATOR, $class).EXT;
    $map[] = APPPATH.str_replace('\\',DIRECTORY_SEPARATOR,'vendor\\symfony\\src\\'.$class).EXT;
    //var_dump($map);
    foreach ($map as $name) {
	    if (file_exists($name)) {
	        require_once $name;
	        break;
	    }    	
    }

}

 ?>