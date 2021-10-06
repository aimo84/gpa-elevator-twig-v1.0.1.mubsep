<?php
namespace Core;
/**
 * creating sessions on the platform
 * Z-frame
 * version 1.0
 */
class session
{
    /**
     * create session
     * @param $string session name
     * @param $string session value
     */

    public static function put($name,$value)
    {

        return $_SESSION[$name]= $value;



    }

    /**
     * checks if session exists
     * @param $string name of session
     * @return boolean
     * 
     * 
     */
    public static function exists($name)
    {
        return (isset($_SESSION[$name])) ? true : false;

    }

    /**
     * delete session
     * @param $string name of session to unset
     * @return void
     */

    public static function delete($name)
    {
        if(self::exists($name)){
            unset($_SESSION[$name]);

        }
    }

    /**
     * get session
     * @param $string name of session to get
     * @return session
     */
    
    public static function get($name)
    {
        return $_SESSION[$name];
    }

    /**
     * flashes session if it exists or creates a new one if it doesnt
     * @param $string name of session to unset
     * @param $string session value
     * @return string
     */

    public static function flash($name,$string='')
    {
        if(self::exists($name)){
            $session = self::get($name);
            self::delete($name);
            return $session;
        } else {
            self::put($name,$string); 
        }
        return '';
    }


}







?>