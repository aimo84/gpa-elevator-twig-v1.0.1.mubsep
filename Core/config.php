<?php
namespace Core;
use \Core\DB;
use \Core\init;
/**
 *configuration paths to location in globals variable
 
 * Z-frame
 * version 1.0
 */
class config{
    /**
     * gets path of global variables for configuration
     * @param $string gets the the input string
     * @return string returns value stored in globals config array
     */
public static function get ($path=NULL){

    if($path){

        $config = $GLOBALS['config'];
        $path =explode('/',$path);
        foreach($path as $bit){
            if (isset($config[$bit])){
            $config = $config[$bit];
            }
        }
        return $config;
}
return  false;   
}


}




?>