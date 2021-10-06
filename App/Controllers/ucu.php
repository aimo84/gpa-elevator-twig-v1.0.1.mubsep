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

 class Ucu extends \Core\Controller
 {

    /**
     * @string server uri
     */
     /**
      * show index from home controller
      */
   
    public function Faculty_Of_Business_and_AdminAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/ucu/FBA/foba.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/ucu/FBA/foba.html',['token'=>$token]);
            }
    }
public function Faculty_of_Educ_and_ArtAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/ucu/FOEA/educ-and-arts.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/ucu/FOEA/educ-and-arts.html',['token'=>$token]);
            }
    }
public function Faculty_of_Sci_and_TechnologyAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/ucu/FOST/fost.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/ucu/FOST/fost.html',['token'=>$token]);
            }
    }
public function  Faculty_Of_Journalism_Media_and_CommAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/ucu/JMass/faculty-of-mass-comm.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/ucu/JMass/faculty-of-mass-comm.html',['token'=>$token]);
            }
    }
public function Faculty_Of_LawAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/ucu/law/faculty-of-law.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/ucu/law/faculty-of-law.html',['token'=>$token]);
            }
    }
public function School_Of_MedicineAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/ucu/SM/school-of-medicine.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/ucu/SM/school-of-medicine.html',['token'=>$token]);
            }
    }

    public function School_Of_Theology_and_DivinityAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/ucu/STheo/School-of-theology-divinity.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/ucu/STheo/School-of-theology-divinity.html',['token'=>$token]);
            }
    }
public function School_Of_Social_SciencesAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/ucu/faculty-of-social-sciences/faculty-of-social-sciences.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/ucu/faculty-of-social-sciences/faculty-of-social-sciences.html',['token'=>$token]);
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