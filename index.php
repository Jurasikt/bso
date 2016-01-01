<?php 
use Symfony\Component\Yaml\Yaml;
use Kernel\Route;
use App\Validation;

define('EXT','.php');

define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);

define('APPPATH', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR.'Application'.DIRECTORY_SEPARATOR);

require_once APPPATH.'autoload'.EXT;

require_once APPPATH.'bootstrap'.EXT;