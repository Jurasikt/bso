<?php 
namespace Kernel\Error;

use Kernel\Controller;
use Kernel\View;
use Kernel\STD;


class HTTP_Exception extends \Exception
{

    public $code_error = array(
        '400' => '400 Bad Request',
        '401' => '401 Unauthorized',
        '403' => '403 Forbidden',
        '404' => '404 Not Found',
        '429' => '429 Too Many Requests',
        '500' => '500 Internal Server Error',
        );

    public function show()
    {
        $code = STD::arr($this->code_error,$this->message,$this->code_error['500']);
        Controller::factory()
            ->header($_SERVER['SERVER_PROTOCOL'],$code);

        View::factory()
            ->bind('error',$code)
            ->response('http_error/default');
    }

}

?>