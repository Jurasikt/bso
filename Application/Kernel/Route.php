<?php 
namespace Kernel;

use Kernel\Error\HTTP_Exception;
use Symfony\Component\Yaml\Yaml;


class Route 
{

    /**
     * конфиг маршрутизации /config/routing.yml
     */
    private $routes;

    /**
     * array - request_url 
     */
    private $args;

    private $request;

        
    function __construct()
    {
        $pattern  = "/^".preg_replace('/\//','\/',SITE)."/";
        $this->request = preg_replace($pattern,'',$_SERVER['REQUEST_URI']);
        $this->request = preg_split('/\?/',$this->request)[0].'/';
        $this->args    = preg_split('/\//',$this->request);
        $this->args    = preg_filter('/\w+/','$0',$this->args);

        $path    = APPPATH.'config/routing.yml';

        $content = file_get_contents($path);
        if ($content === false) {

            throw new HTTP_Exception(500);
        }
        $this->routes  = Yaml::parse($content);
    }
    

 
    /**
     * @param $controllers  string
     * @param $defualt      string
     *
     */
    public function execute($controller,$action)
    {
        //echo "$controller $action<br>";
        $class = ucfirst($controller);
        if (file_exists(APPPATH."Controller/$class".EXT)) {

            require_once APPPATH."Controller/$class".EXT;
            $controller = new $class;

            if (method_exists($controller, "action_$action")) {

                $method = "action_$action";
                $controller->$method();
                return true;
            }
        } 
        return false;
    }


    public function matches()
    {
        $url  = $this->args;
        foreach ($this->routes as $args) {
            $path = preg_split('/\//',$args['url']);
            $path = preg_filter('/\w+/','$0',$path);

            if (count($path) != count($url)) {
                continue;
            }
            $callback = function(array $matches) use ($url, $path, &$args) {
                $key = array_search($matches[0], $path);
                if ($key !== false && array_key_exists($key,$url)) {
                    $find = array_search($matches[1], $args);

                    if ($find !== false && array_key_exists($find, $args)) {
                        $args[$find] = $url[$key];
                    }
                    return $url[$key];
                }
                return $matches[1];
            };

            $path = preg_replace_callback('/\((.\w+)\)/',$callback,$path);
            $pattern = "^".implode('\/',$path);
            
            if (preg_match("/$pattern/", $this->request)) {

                if ($this->execute($args['controller'],$args['action'])) {
                    
                    return $this;
                }
            }

        }

        throw new HTTP_Exception(404);
    }

    /**
     *
     */
    public static function page()
    {
        try {
            $route = new Route();
            $route->matches();

        } catch (HTTP_Exception $e) {
            $e->show();
        }
    }


}

 ?>