<?php 
namespace Kernel;

use Kernel\Error\HTTP_Exception;


class View 
{
    
    private $view = APPPATH.'View/';

    private $variable = array();


    public static function factory()
    {
        return new View;
    }

    /**
     * передает переменые в вид
     * @param  string $name  название переменый 
     * @param  string $value значение переменой 
     * @return object $this
     *
     */
    public function bind($name,$value)
    {
        $this->variable[$name] = $value;

        return $this;
    }

    /**
     * отображает страницу $page
     *
     *
     */
    public function response($page)
    {
        if (file_exists($this->view.$page.EXT)) {
            
            foreach ($this->variable as $name => $value) {
                $$name = $value;
            }
            include $this->view.$page.EXT;
        } else {

            throw new HTTP_Exception(404);
        }
        return $this;
    }


}
?>