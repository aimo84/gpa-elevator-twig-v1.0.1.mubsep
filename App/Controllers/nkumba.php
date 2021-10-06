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

 class nkumba extends \Core\Controller
 {

    /**
     * @string server uri
     */
     /**
      * show index from home controller
      */
   
    public function sch_of_business_adminAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/nkumba/sch-of-business-admin/sch-of-business-admin.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/nkumba/sch-of-business-admin/sch-of-business-admin.html',['token'=>$token]);
            }
    }
public function sch_of_scienceAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/nkumba/sch-of-sciences/sch-of-sci.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/nkumba/sch-of-sciences/sch-of-sci.html',['token'=>$token]);
            }
    }
public function sch_of_social_scienceAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/nkumba/sch-of-social sciences/sch-of-social sciences.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/nkumba/sch-of-social sciences/sch-of-social sciences.html',['token'=>$token]);
            }
    }
public function sch_of_lawAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/nkumba/slaw/sch-of-law.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/nkumba/slaw/sch-of-law.html',['token'=>$token]);
            }
    }
public function sch_of_educ_humanities_and_sciencesAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/nkumba/sch-of-educ-humanities-and-sci/sch-of-educ-humanities-and-sci.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/nkumba/sch-of-educ-humanities-and-sci/sch-of-educ-humanities-and-sci.html',['token'=>$token]);
            }
    }
public function sch_of_commercial_industrial_art_and_designAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/nkumba/sch-of-commercial-industrial-art-and-design/sch-of-commercial-arts-design.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/nkumba/sch-of-commercial-industrial-art-and-design/sch-of-commercial-arts-design.html',['token'=>$token]);
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