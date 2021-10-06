<?php 
namespace Core;
/**
 * class performs all harshing on the platform
 * Z-frame
 * version 1.0
 */
  
 class harsh
 {
    /**
      * harshes two strings
      *@param $string string to be harshed
      *@param $string salt combined with string before harshing
      *@return string harshed using sha256 encryption alogorithm
      */

    public static function make($string, $salt='')
    {
      return hash('sha256',$string.$salt);

    }

    /**
     * creates a salt from a given string
     * @param string to be salted
     * @return string in salt form
     */

    public static function salt($length)
    {
        
      return random_bytes($length);
        
    }
    public static function unique()
    {
      return self::make(uniqid());
      
  }













  }  
    










?>