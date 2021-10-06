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

 class ndu extends \Core\Controller
 {

    /**
     * @string server uri
     */
     /**
      * show index from home controller
      */
   
public function Faculty_of_Basic_Sci_and_ItAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/ndejje/faculty-of-basic-sciences-and-it/faculty-of-basic-sci-and-it.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/ndejje/faculty-of-basic-sciences-and-it/faculty-of-basic-sci-and-it.html',['token'=>$token]);
            }
    }
public function Faculty_of_EngineeringAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/ndejje/faculty-of-engineering/faculty-of-engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/ndejje/faculty-of-engineering/faculty-of-engineering.html',['token'=>$token]);
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