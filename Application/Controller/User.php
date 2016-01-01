<?php defined('APPPATH') or die('No direct script access.');

use Kernel\Controller;
use Kernel\Error\HTTP_Exception;
use Kernel\View;
use App\Validation;
use App\Users;
/**
* 
*/
class User extends Controller
{

    public function action_index()
    {
        if (Users::login()) {
            $user = Users::factory();

            View::factory()
                ->bind('email',$user->_email)
                ->bind('name',$user->_fio)
                ->response('personal_info');

        } else {
            throw new HTTP_Exception(401);
        }

    }

    public function action_signup()
    {
        $return = array();
        switch ($this->post('level')) {
            case '1':
                $valid = Validation::factory($_POST);

                $valid->rule('private-num','digit',0)
                    ->rule('public-num','digit',1);
                $json = json_encode(array(
                    'error'   => !($valid->check()),
                    'message' => $valid->_errors,
                    ));

                $this->header('Content-type','application/json')
                    ->body($json);
                break;
            case '2':
                $valid = Validation::factory($_POST);

                $valid->rule('email','email',3)
                    ->rule('password','min_length',4,6)
                    ->rule('password','equals',5,$this->post('re-password'));

                $json = array(
                    'error'   => !($valid->check()),
                    'message' => $valid->_errors,
                    );
                if (!$json['error']) {
                    $e = Users::email(mb_strtolower($this->post('email')));
                    $json = array(
                        'error'   => $e,
                        'message' => $e?array('Tакой e-mail уже используется'):array(),
                        );
                }
                $this->header('Content-type','application/json')
                    ->body(json_encode($json));
                break;

            case '3':
                $valid = Validation::factory($_POST);

                $valid->rule('email','email',3)
                    ->rule('password','min_length',4,6)
                    ->rule('password','equals',5,$this->post('re-password'))
                    ->rule('fio','alpha',6)
                    ->rule('public-num','digit',1)
                    ->rule('private-num','digit',0);

                $json = array(
                    'error'   => !($valid->check()),
                    'message' => $valid->_errors,
                    );
                if (!$json['error']) {
                    $e = Users::email(mb_strtolower($this->post('email')));
                    $json = array(
                        'error'   => $e,
                        'message' => $e?array('Tакой e-mail уже используется'):array(),
                        );
                }
                if (!$json['error']) {
                    $user = new Users;

                    $json['error'] = !($user->create());
                }
                $this->header('Content-type','application/json')
                    ->body(json_encode($json));
                break;
            
            default:
                throw new HTTP_Exception(500);
                break;
        }
    }


    public function action_email()
    {
        $user = new Users;

        if ($user->email_check($this->get('token'))) {

            $this->header('Location',URL);
        } else {

        }
    }

    public function action_login()
    {
        if (Users::oath($this->post('email'),$this->post('password'))) {
            $json = array(
                'error'  => false,
                'message'=> array(), 
                );
        } else {
            $json = array(
                'error'  => true,
                'message'=> array('Пользователь с указанными данными не зарегистирован'), 
                );
        }

        $this->header('Content-type','application/json')
            ->body(json_encode($json));
    }

    public function action_logout()
    {
        setcookie('rememberme','',0,'/');
        $this->header('Location',URL);
    }


    public function action_message()
    {
        if (Users::login()) {

            $user  = Users::factory();
            $valid = Validation::factory($_POST);

            $valid->rule('fio','alpha',0)
                ->rule('phone','digit',0);

            if ($valid->check()) {

                $this->header('Content-type','application/json')
                    ->body(json_encode(array(
                        'error' => !$user->message()
                        )));
            } else {

                $this->header('Content-type','application/json')
                    ->body(json_encode(array(
                        'error' => true,
                        'message' => 'data'
                        )));
            }
        } else {
            throw new  HTTP_Exception(401);
            
        }

    }

}