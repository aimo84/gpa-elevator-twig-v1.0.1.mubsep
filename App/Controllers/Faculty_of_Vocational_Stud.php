<?php
 namespace App\Controllers;
 
 use \Core\View;
 use \Core\user;
 use \Core\session;
 use \Core\validate;
 use \Core\input;
 use \Core\token;
 use \Core\harsh;
use Twig\Token as TwigToken;
use Dompdf\Dompdf;

/**
 * Home Controller
 * z_frameWorl
 * version 1.0 
 * 
 */

 class Faculty_of_Vocational_Stud extends \Core\Controller
 {

    /**
     * @string server uri
     */
     /**
      * show index from home controller
      */
   
    public function indexAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/kyu/FOVS/fovs.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/kyu/FOVS/fovs.html',['token'=>$token]);
            }
    }





    /**
     * Action filter
     * @return void
     * 
     */
    protected function after()
    {
        
        
    }
    /**
     * Action filter
     * @return void
     * 
     */
    protected function before()
    {
        
       
    }
 
    }




?>