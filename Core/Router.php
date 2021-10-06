<?php
namespace Core;

use Exception;

/* 
*router
*
*z_frame version 1.0 */



class Router
{
/**
 * Associative array or routes (routing table)
 * @var array
 */
protected $routes = [];
/**
 * 
 * parameters from the matched route
 * @var array
 */
protected $params = [];


/**
 * Add a route to the routing table
 * 
 * @param string $route The route Url
 * @param array $params Parametres (controller, action, etc)
 * @return void
 */

public function dispatch($url)
{
    $url = $this->removeQueryStringVariables($url);
    if ($this->match($url)){
        $controller = $this->params['controller'];
        $controller = $this->convertToStudlyCaps($controller);
        $controller = $this->getNamespace() . $controller;

        if (class_exists($controller)){
            $controller_object = new $controller($this->params);
            $action = $this->params['action'];
            $action = $this->convertToCamelCase($action);

            if (is_callable([$controller_object,$action])){
                $controller_object->$action();
            }else{
                //echo "method $action (in controller $controller) not found";
                throw new \Exception("method $action (in controller $controller)");
            }
        }else{
            // echo "Controller class $controller not found";
            throw new \Exception("controller class $controller not found");
        }
    }else{
        // echo "NO route matched";
        throw new \Exception("No route matched",404);
    }
}

public function add($route,$params=[])
{
    // convert the route to a regular expression: escape foward slashes
    $route = preg_replace('/\//','\\/',$route);

    // convert variables e.g. {controller}
    $route = preg_replace('/\{([a-zA-Z0-9!@#$&()_-`.+,"]+)\}/','(?P<\1>[a-zA-Z0-9!@#$&()_-`.+,"-]+)',$route);

    // convert variables with custom regular expressions e.g. {id : \d+}
    $route = preg_replace('/\{([a-zA-Z0-9!@#$&()_-`.+,"]+):([^\}]+)\}/','(?P<\1>\2)',$route);

    // Add start and end delimiters and case insensitive flag
    $route = '/^'. $route . '$/i';
    
    $this->routes[$route] = $params;
    
}
/**
 * getg all routes from routing table
 * @return array
 */

public function getRoutes()
{
    return $this->routes;
}
/**
 * Match the route to the requests in the routing table setting the params
 * property if a route is found
 * @param string url the route url
 * @return boolean true if a match is found false otherwise
 */

public function match($url)
{
    // foreach ($this->routes as $route => $params){
    //     if($url == $route){
    //         $this->params = $params;
    //         return true;
    //     }
    // }

        //Match to the fixed URL format /controller / action
        // $regex = "/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/";


        foreach ($this->routes as $route => $params){
        if (preg_match($route,$url,$matches)){
            //Get named capture group values
            // $params = [];

            foreach ($matches as $key=>$match){
                if (is_string($key)){
                    $params[$key] = $match;
                }
            }
            $this->params = $params;
            return true; 
        }
    }

    return false;
     
}

/**
 * Get the currently matched paramaters
 * 
 * @return array
 */

 public function getParams()
 {
     return $this->params;
 }



/**
 *Convert strings with hyphens to StudlyCaps
 *e.g. post-author => PostAuthors
 *@param string $string Thestring to convert

 *@return string
*/
protected function convertToStudlyCaps($string)
{
    return str_replace(' ','',ucwords(str_replace('-',' ',$string)));
}

/**
 *Convert strings with hyphens to CamelCase
 *e.g. post-author => postAuthors
 *@param string $string Thestring to convert

 *@return string
*/
protected function convertToCamelCase($string){
    return lcfirst($this->convertToStudlyCaps($string));
}
/**
 * A URL of the fromat localhost/?page (one variable name, no value) won't 
 * work however (note that the htaccess file converts the first ? to an & when it's
 * passed through to the $_SERVER variable)
 * @param string $url the full URL
 * 
 * @return string The URL with query string variables removed
  

 
  */
protected function removeQueryStringVariables($url)
{
    if ($url != ''){
        $parts = explode('&',$url,2);
        if (strpos($parts[0], '=') === false){
            $url = $parts[0];
        }else{
            $url = '';
        }
    }
    return $url;
}
/**
 * get the name space for the controller class. the namespace defined in the route
 * parameters is added if present
 * @return string the request URl
 */
protected function getNamespace()
{
    $namespace = 'App\Controllers\\';
    if (array_key_exists('namespace',$this->params)){
        $namespace .= $this->params['namespace'] . '\\';
    }
    return $namespace;
}

}
?>