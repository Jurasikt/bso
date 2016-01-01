<?php 
namespace App;
defined('APPPATH') or die('No direct script access.');

use Kernel\STD;

/**
* 
*/
class Users 
{
    private $_salt ='pSn7vmZ';

    private $_config;

    public $_uid;

    public $_fio;

    public $_private_num;

    public $_public_num;

    public $_email;

    public $_password;

    public $_date;

    public $_ip;

    public $_check;
    

    function __construct()
    {
        
    }

    /**
     * создает аккаунт пользователю
     */
    public function create() 
    {
        $post = $_POST;

        $this->_ip           = STD::arr($_SERVER,'REMOTE_ADDR');
        $this->_fio          = STD::arr($post,'fio');
        $this->_public_num   = STD::arr($post,'public-num');
        $this->_private_num  = STD::arr($post,'private-num');
        $this->_email        = mb_strtolower(STD::arr($post,'email'));
        $this->_password     = serialize($this->hash_data(STD::arr($post,'password')));
        $this->_date         = date('Y-m-d H:i:s');

        $e = DB::query()
                ->insert('user')
                ->values(array('fio','`private-num`','`public-num`','email','password',
                    'date','ip'),
                array($this->_fio,$this->_private_num,$this->_public_num,$this->_email,
                    $this->_password,$this->_date,$this->_ip))
                ->execute()
                ->error();
        if ($e) {
            return false;
        }
        $this->_uid = 
        DB::query(
            "SELECT MAX(id) as uid
            FROM user"
            )
            ->execute()
            ->current('uid');

        if ($this->verification('remote')) {

            return true;
        }
        //var_dump($this->_uid);
        return false;

    }


    /**
     * записывает электроное обращение
     * @return bool 
     */
    public function message()
    {
        $dir  = DOCROOT.'upload/'.date('Y_m_d').'/';
        if (!file_exists($dir)) {

            if (!mkdir($dir,644)) {
                return false;
            }
        }

        if (isset($_FILES['file'])) {
            $file = $_FILES['file'];
            $mime = STD::arr($file,'type');
            if (!preg_match('/pdf|msword|jpeg|zip|rar|text/',$mime)) {
                return false;
            }
            $attachment = $dir.STD::rand(6).STD::arr($file,'name');
            move_uploaded_file(STD::arr($file,'tmp_name'),$attachment);  

        } else {

            $attachment = 'null';
        }
        
        if (STD::arr($_POST,'browser') == 1) {
            $callback = STD::arr($_POST,'email');
        } else {
            $callback = "address";
        }
        
        return  !DB::query()
            ->insert('message')
            ->values(array('`user-id`','text','place','phone','address','callback',
                'attachment','fio','ip','date','`user-agent`'),

                array($this->_uid,STD::arr($_POST,'text','null'),STD::arr($_POST,'place','null'),STD::arr($_POST,'phone','null'),
                STD::arr($_POST,'address','null'),$callback,$attachment,STD::arr($_POST,'fio','null'),
                STD::arr($_SERVER,'REMOTE_ADDR','null'),date('Y-m-d H:i:s'),STD::arr($_SERVER,'HTTP_USER_AGENT','null')))
            ->execute()
            ->error();
    }

    /**
     * проверяет не был ли зарегистрирован этот e-mail ранее 
     * @return   bool (true если существует)
     */
    public static function email($email)
    {
        return DB::query()
                ->select()
                ->from('user')
                ->where('email','=',$email)
                ->execute()
                ->exist();

    }

    /**
     * хэширует многократно данные, возвращает  массив содержащий 
     * ключ и соль
     * @param string   $data данные для хэширования
     * @param mixed    $salt использование соли  
     * @param integer  $it   количество итераций хэширования
     * @return string 
     */
    public function hash_data($data,$salt = true,$it = 3141)
    {
        if ($salt === true) {
            $salt = STD::rand();

        } elseif($salt === false) {

            $salt = $this->_salt;
        }
        while ($it--) {
            $data = md5($data.$salt);
        }
        return array(
            'hash' => $data,
            'salt' => $salt
            );
    }

    /**
     * проверет на валидность данные и хэш
     * @param string   $data данные для хэширования
     * @param string   $hash хэш
     * @param string   $salt соль  
     * @param integer  $it   количество итераций хэширования
     * @return bool 
     */
    public function hash_check($data,$hash,$salt,$it = 3141)
    {
        while ($it--) {
            $data = md5($data.$salt);
        }
        return ($data == $hash);
    }

    /**
     * отправляет письмо на почту для проверки
     * @param   string $mode 
     * @return  bool   
     */
    public function  verification($mode)
    {
        $site     = URL;
        $mail_url = 'http://jurasikt.u-host.in/welcom/mail';
        //секретный ключ для подписи транзакций
        $sign     = 'dQjfu3';
        $salt     =  STD::rand();

        $token    = $this->hash_data($this->_uid,$this->_salt.$salt);
        $token    = json_encode(array(
            'uid' => $this->_uid,
            'salt'=> $salt,
            'hash'=> $token['hash']
            ));
        $token = base64_encode($token);

        $message = 'Для потверждения почты перейдите по ссылке '.
            $site."user/email?token=$token";

        $subject = 'Потверждение email';
        // отправка почты через удаленный хост
        if ($mode == 'remote') {

            //произвольное не уменьшающиеся число для включения в транцакцию
            $nonce = preg_replace('/0\.(\d+) (\d+)/', '${2}${1}', microtime());

            $ch    = curl_init();
            $form  = http_build_query(array(
                'nonce'   => $nonce,
                'to'      => $this->_email,
                'subject' => $subject,
                'message' => $message,
                ));

            $headers = array(
                'sign: '.hash_hmac('sha512',$form, $sign)
                );

            curl_setopt_array($ch, array(
                CURLOPT_URL            => $mail_url,
                CURLOPT_POST           => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER     => $headers,
                CURLOPT_POSTFIELDS     => $form,
                ));

            $ans = json_decode(curl_exec($ch));
            return !($ans->error);

        } else {

            return mail($this->_email,$subject,$message);
        }

    }


    public function email_check($token)
    {
        $token = (array)json_decode(base64_decode($token));
        //var_dump($token);
        $this->_uid = STD::arr($token,'uid');

        if ($this->hash_check(
            $this->_uid,
            STD::arr($token,'hash'),
            $this->_salt.STD::arr($token,'salt')))
        {
            DB::query()
                ->update('user')
                ->set(array('`check-e`' => 1))
                ->where('id','=',$this->_uid)
                ->execute();
            STD::set_cookie('rememberme',$this->_uid);
            return true;

        } else {

            return false;
        }

    }

    /**
     * проверяет авторизован ли пользователь
     *
     */
    public static function login()
    {
        return (STD::get_cookie('rememberme') !== false);
    }


    public static function factory($uid = false)
    {
        if ($uid === false) {
            $uid = STD::get_cookie('rememberme');
        }
        
        $user = new Users;
        if ($uid !== false) {
            
            $user->_uid  = $uid;
            $sql = DB::query()
                ->select('fio','email','`private-num`','`public-num`')
                ->from('user')
                ->where('id','=',$uid)
                ->execute()
                ->current();

            $user->_email = STD::arr($sql,'email');
            $user->_fio = STD::arr($sql,'fio');
            $user->_private_num = STD::arr($sql,'private-num');
            $user->_public_num = STD::arr($sql,'public-num');

        }
        return $user;

    }

    public static function oath($email, $password) 
    {
        $p = DB::query()
            ->select('password','id')
            ->from('user')
            ->where('email','=',$email)
            ->and_where('`check-e`','=',1)
            ->execute()
            ->current();
        if ($p === false) {

            return false;
        } 
        
        $data = unserialize($p['password']);
        $user = new Users;
        if ($user->hash_check($password,$data['hash'],$data['salt'])) {
            STD::set_cookie('rememberme',$p['id']);
            return true;
        }
        return false;
    }


}


 ?>