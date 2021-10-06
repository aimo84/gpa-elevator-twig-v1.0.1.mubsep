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

 class Home extends \Core\Controller
 {

    /**
     * @string server uri
     */
     /**
      * show index from home controller
      */
    public static function indexAction(){
        if (session::exists(('home'))){
            echo session::flash('home');
        }
        $token = Token::generate();

       $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/index.php',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/index.php',['token'=>$token]);
                // View::renderTemplate('Home/index.html');
            }
    }

    public function loginAction(){
        
            
        $token = Token::generate();
        View::renderTemplate('Home/login.html',['token'=>$token]);
    }

    public function registerAction(){

   
        $token = Token::generate();


        View::renderTemplate('Home/register.html',['token'=>$token]);
    }

    public function editAction(){

   
        $token = Token::generate();
        $user = new user();

        View::renderTemplate('Home/update.html',['token'=>$token,'user'=>$user->data()->username]);
    }

    // College/faculty functions to render college/faculty 
    // public function cedatAction(){

   
    //     $token = Token::generate();
    //     $user = new user();
    //    $loggedin = $user->isloggedin();
    //         if ($loggedin){
    //     View::renderTemplate('gpa_elevator/muk/cedat/cedat.html',
    //         ['loggedIn' => $loggedin,
    //         'user' => $user->data()->username]);
    //         }else{
    //              View::renderTemplate('gpa_elevator/muk/cedat/cedat.html',['token'=>$token]);
    //         }
    // }
    public function cobamsAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cobams/cobams.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cobams/cobams.html',['token'=>$token]);
            }
    }
    public function chsAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/chs/chs.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/chs/chs.html',['token'=>$token]);
            }
    }
    public function conasAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/conas/conas.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/conas/conas.html',['token'=>$token]);
            }
    }
    public function chussAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/chuss/chuss.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/chuss/chuss.html',['token'=>$token]);
            }
    }
    public function ceesAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cees/cees.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cees/cees.html',['token'=>$token]);
            }
    }
    public function caesAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/caes/caes.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/caes/caes.html',['token'=>$token]);
            }
    }
    public function cocisAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cocis/cocis.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cocis/cocis.html',['token'=>$token]);
            }


        }
    public function schlawAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/law/sch_of_law.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/law/sch_of_law.html',['token'=>$token]);
            }
    }
    public function covabAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/covab/covab.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/covab/covab.html',['token'=>$token]);
            }
    }
    public function munAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/mun/mun_univ.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/mun/mun_univ.html',['token'=>$token]);
            }
    }






   
    public function downloadAction(){
        $dompdf = new Dompdf();
        // $dompdf->loadHtml(file_get_contents('http://localhost/pdf/computer_eng/year1/sem2/CMP1203-architecture/Lecture_notes/lecture1.pdf'));
        $dompdf->loadHtml('<b>hello<b>');


// (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
        $dompdf->render();

// Output the generated PDF to Browser
        $dompdf->stream();
    }


//When users click on any course unint on the college/faculty page
 
    public function passAction(){

   
        $token = Token::generate();
        $user = new user();

        View::renderTemplate('Home/changePassword.html',['token'=>$token,'user'=>$user->data()->username]);
    }
   public function errorAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/404-error-page.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/404-error-page.html',['token'=>$token]);
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