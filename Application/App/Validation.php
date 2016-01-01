<?php 
namespace App;

defined('APPPATH') or die('No direct script access.');
use Kernel\STD;
use Symfony\Component\Yaml\Yaml;


/**
*
*/
class Validation 
{
    
    private $_rules = array();

    public $_errors = array();

    private $_content;


        
    function __construct(array $content)
    {
        $this->_content = $content;
    }

    public static function factory($content)
    {
        return new Validation($content);
    }


    /**
     * Checks that a field is long enough.
     *
     * @param   string  $value  value
     * @param   integer $length minimum length required
     * @return  boolean
     */
    public function min_length($value, $length)
    {
        return mb_strlen($value,'UTF-8') >= $length;
    }

    /**
     * Checks that a field is short enough.
     *
     * @param   string  $value  value
     * @param   integer $length minimum length required
     * @return  boolean
     */
    public function max_length($value, $length)
    {
        return mb_strlen($value,'UTF-8') <= $length;
    }

    /**
     * Check an email address for correct format.
     *
     * @link  http://www.iamcal.com/publish/articles/php/parsing_email/
     * @link  http://www.w3.org/Protocols/rfc822/
     *
     * @param   string  $email  email address
     * @return  boolean
     */
    public function email($email)
    {
        if (mb_strlen($email,'UTF-8') > 254) {

            return false;
        }
        $expression = '/^[-_a-z0-9\'+*$^&%=~!?{}]++(?:\.[-_a-z0-9\'+*$^&%=~!?{}]+)*+@(?:(?![-.])[-a-z0-9.]+(?<![-.])\.[a-z]{2,6}|\d{1,3}(?:\.\d{1,3}){3})$/iD';

        return (bool) preg_match($expression, (string) $email);
    }

    /**
     * Checks if a phone number is valid.
     *
     * @param   string  $number     phone number to check
     * @param   array   $lengths
     * @return  boolean
     */
    public function phone($number, $lengths = NULL)
    {
        if ( ! is_array($lengths))
        {
            $lengths = array(9,12);
        }

        // Remove all non-digit characters from the number
        $number = preg_replace('/\D+/', '', $number);

        // Check if the number is within range
        return in_array(strlen($number), $lengths);
    }


    /**
     * Checks whether a string consists of digits only (no dots or dashes).
     *
     * @param   string  $str    input string
     * @param   boolean $utf8   trigger UTF-8 compatibility
     * @return  boolean
     */
    public function digit($str, $utf8 = false)
    {
        if ($utf8 === true)
        {
            return (bool) preg_match('/^\pN++$/uD', $str);
        }
        else
        {
            return (is_int($str) AND $str >= 0) OR ctype_digit($str);
        }
    }

    /**
     * Checks whether a string consists of alphabetical characters only.
     *
     * @param   string  $str    input string
     * @return  boolean
     */
    public  function alpha($str)
    {
        $str = (string) $str;
        $str = preg_replace('/\x20/','', $str);
        return (bool) preg_match('/^\pL++$/uD', $str);
    }

    /**
     *
     *
     */
    public function equals($value1, $value2)
    {
        return ($value1 === $value2);
    }

    /**
     * Checks if a field is not empty.
     *
     * @return  boolean
     */
    public function not_empty($value)
    {
        if (is_object($value) AND $value instanceof ArrayObject)
        {
            // Get the array from the ArrayObject
            $value = $value->getArrayCopy();
        }

        // Value cannot be NULL, FALSE, '', or an empty array
        return ! in_array($value, array(NULL, FALSE, '', array()), TRUE);
    }

    /**
     * устанавливает правила валидации 
     * @param  string  $field 
     * @param  string  $rule
     * @param  string  $code код ошибки, для сообщения 
     * @param  mixed   $param  
     */
    public function rule($field,$rule,$code = '0',$param = false)
    {
        $this->_rules[] = array(
            'field' => $field,
            'rule'  => $rule,
            'code'  => $code,
            'param' => $param,
            );
        return $this;
    }

    public function check()
    {
        $path    = APPPATH.'message/validation.yml';
        $content = file_get_contents($path);
        if ($content === false) {

            throw new HTTP_Exception(500);
        }
        $message  = Yaml::parse($content);

        foreach ($this->_rules as $rule) {
            $rule   = (object)$rule;
            $method = $rule->rule;
            if (method_exists($this,$method)) {

                if ($rule->param !== false) {
                    
                    $res = $this->$method(STD::arr($this->_content,$rule->field),$rule->param);
                } else {
                    $res = $this->$method(STD::arr($this->_content,$rule->field));
                }
                if ($res != true) {

                    $this->_errors[] = STD::arr($message,$rule->code);
                }
            }
        }
        return (count($this->_errors) == 0);
    }


}