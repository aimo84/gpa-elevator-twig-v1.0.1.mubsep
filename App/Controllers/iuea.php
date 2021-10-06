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

 class iuea extends \Core\Controller
 {

    /**
     * @string server uri
     */
     /**
      * show index from home controller
      */
   
    public function Faculty_Of_lawAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/iuea/Faculty-of-law/flaw.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/iuea/Faculty-of-law/flaw.html',['token'=>$token]);
            }
    }
public function Faculty_Of_Business_and_ManagementAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/iuea/FOBAM/fobam.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/iuea/FOBAM/fobam.html',['token'=>$token]);
            }
    }
public function Faculty_Of_EngineeringAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/iuea/FOE/foe.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/iuea/FOE/foe.html',['token'=>$token]);
            }
    }
public function Faculty_Of_Science_and_TechnologyAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/iuea/FOST/fost.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/iuea/FOST/fost.html',['token'=>$token]);
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