<?php defined('APPPATH') or die('No direct script access.');
use Kernel\Route;
use Symfony\Component\Yaml\Yaml;



$content = file_get_contents(APPPATH.'config/general.yml');
if ($content === false) {

    die('Файл '.APPPATH.'config/general.yml не найден');
}
$_config = Yaml::parse($content);

/**
 * например если сайт находиться относильно док рут как в прим
 * host/name1/name2/ , то SITE = /name1/name2/ else SITE = '/'
 */
define('SITE',$_config['site']);

define('URL',$_config['url']);



date_default_timezone_set($_config['timezone']);


Route::page();

?>