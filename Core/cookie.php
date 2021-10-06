<?php
namespace Core;
/**
 * handle cookies
 * Z-frame
 * version 1.0
 */

class cookie
{
     /**
      * @param $string in the name of the cookie
     * @return boolean if cookie exists
     */

    public static function exists($name)
    {
         return (isset($_COOKIE[$name])) ? true : false;

    }

    /**
     * @param $string name of the cookie
     * @param int value of to be stored in cookie
     * @param int expiry of cookie 
     * @return boolean
     */

    public static function put($name, $value,$expiry)
    {
        if(setcookie($name,$value,time() + $expiry,'/')){
            return true;
        }else{
            return  false;
        }
    }

    /**
     * get name of the cookie
     * @param $string  name of cookie to find
     * @return string
     */

    public static function get($name)
    {
        return $_COOKIE[$name];
        
    }

    /**
     * delete cookie seesiom
     * @param $string name of cookie
     * @return void
     */

    public static function delete($name)
    {
        self::put($name,'',time() -1);
    }


}






?>