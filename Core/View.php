<?php
namespace Core;
require_once dirname(__DIR__) . '/vendor/autoload.php';
/**
 * View
 * 
 * z_frame
 * version 1.0
 */
class View
{
    /**
     * Render a view file
     * 
     * @param string $view the view file
     * 
     * @return void
     */

    public static function render($view,$args = [])
    {
        extract($args,EXTR_SKIP);

        $file = "../App/Views/$view"; // relative core directory

        if (is_readable($file)){
            require $file;
        }else{
            // echo "$file not found"; 
            throw new \Exception("$file not found");
        }
    }
    public static function renderTemplate($template,$args = [])
    {
        static $twig = null;
        if ($twig === null){

             $loader = new \Twig\Loader\FilesystemLoader('../App/Views');
            
            
            $twig = new \Twig\Environment($loader);

            echo $twig->render($template,$args);
        }
    }


}



?>
