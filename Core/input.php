<?php
namespace Core;


// require_once './core/int.php ';
/**
 * capturing input from the user
 * Z-frame
 * version 1.0
 */

class Input
{
    /**
     * checks to see if user has posted data
     * @param $string type of post
     * @return boolean
     */

    public static function exists($type= 'post')
    {

        switch ($type){
            case 'post':
                return (!empty($_POST)) ? true : false;
                break;
            case 'get':
                return (!empty($_GET)) ? true : false;
                break;
            default:
                return false;
                break;
        }
    }

    /**
    * gets value specified by the user
    *@param string name of item to captrun
    *@return string
    */
    
    public static function get($item)
    {
        if(isset($_POST[$item])){
        return $_POST[$item];
        }
        else if(isset($_GET[$item])){

        return $_GET($item);
        }
        return '';

    }




}
?>