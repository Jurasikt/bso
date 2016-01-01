<?php defined('APPPATH') or die('No direct script access.');

use Kernel\Controller;
use Kernel\Error\HTTP_Exception;
use Kernel\View;
use App\DB;
use App\Users;

/**
* 
*/
class Home extends Controller
{

    

    public function action_index()
    {
        if (Users::login()) {
            $user = Users::factory();
            View::factory()
                ->bind('email',$user->_email)
                ->bind('name',$user->_fio)
                ->response('index');
        } else {
            View::factory()->response('promo_new');
        }
    }

    public function action_faq()
    {
        if (Users::login()) {
            $user = Users::factory();
            View::factory()
                ->bind('email',$user->_email)
                ->bind('name',$user->_fio)
                ->response('faq');
        } else {
            $this->header('Location',URL);
        }
    }

    public function action_catalog()
    {
        if (Users::login()) {
            $user = Users::factory();
            View::factory()
                ->bind('email',$user->_email)
                ->bind('name',$user->_fio)
                ->response('catalog_first');
        } else {
            $this->header('Location',URL);
        }
    }

  
    public function action_privileges()
    {
        if (Users::login()) {
            $user = Users::factory();
            View::factory()
                ->bind('email',$user->_email)
                ->bind('name',$user->_fio)
                ->response('spr_lgot');
        } else {
            $this->header('Location',URL);
        }
    }

    public function action_limits()
    {
        if (Users::login()) {
            $user = Users::factory();
            View::factory()
                ->bind('email',$user->_email)
                ->bind('name',$user->_fio)
                ->response('spr_norma');
        } else {
            $this->header('Location',URL);
        }
    }

    public function action_tariff()
    {
    
        if (Users::login()) {
            $user = Users::factory();
            View::factory()
                ->bind('email',$user->_email)
                ->bind('name',$user->_fio)
                ->response('tariff');
        } else {
            $this->header('Location',URL);
        }
    }

    public function action_news()
    {
        if (Users::login()) {
            $user = Users::factory();
            View::factory()
                ->bind('email',$user->_email)
                ->bind('name',$user->_fio)
                ->response('news');
        } else {
            $this->header('Location',URL);
        }
    }
}

 ?>