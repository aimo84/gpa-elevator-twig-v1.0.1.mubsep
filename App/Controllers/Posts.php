<?php
namespace App\Controllers;
/**
 * Posts controller
 * z_frame version 1.0
 */

class Posts extends \Core\Controller
{
    /**
     * show the index page
     * @return void
     */

    public function indexAction()
    {
        echo 'hello from index action in posts controller';
        echo '<p> Query String parameters: <pre>' . htmlspecialchars(print_r($_GET,true)) . '</pre></p>';
    }
    /**
     * show add new page 
     * @return void
     */
    public function addNewAction()
    {
        echo 'hello from add new action in the Posts Controller';

    }
    public function editAction(){
        echo ' hello from edit function in the post controller';
        echo '<p> Route paramaters <pre>'. htmlspecialchars(print_r($this->route_params,true)) . '</pre></p>';
    }



}







?>