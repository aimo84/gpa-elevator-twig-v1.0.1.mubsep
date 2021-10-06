<?php
namespace Core;
/**
 * Base Controller
 * z_frame
 */
abstract class Controller
{
    /**
     * parameters from matched route
     * @var array
     */
    protected $route_params = [];
    /**
     * Class constructor
     * 
     * @param array $route_params Paramater from route
     * 
     * @return void
     */
    public function __construct($route_params)
    {
        $this->route_params = $route_params;
    }
    public function __call($name, $arguments)
    {
        $method = $name . 'Action';

        if (method_exists($this, $method)){
            if ($this->before() !== false){
                call_user_func_array([$this,$method],$arguments);
                $this->after();
            }
        }else {
           // echo "method $method not found in controller". get_class($this);
           throw new \Exception("method $method not found in controller " . get_class($this) );
        }
    }
    /**
     * Before filter - called before an action method
     * 
     * @return void
     */
    protected function before()
    {

    }

    /**
     * After filter - called after an ation method
     * @return void
     */
    
     protected function after()
     {
          
     }



}




?>