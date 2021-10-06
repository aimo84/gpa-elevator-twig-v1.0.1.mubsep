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

        class must extends \Core\Controller
        {

            /**
            * @string server uri
            */
            /**
            * show index from home controller
            */
    public function Faculty_Of_MedicineAction(){

        
        $token = Token::generate();
        $user = new user();
    $loggedin = $user->isloggedin();
             if ($loggedin){
        View::renderTemplate('gpa_elevator/must/faculty-of-Medicine/faculty-of-medicine.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                View::renderTemplate('gpa_elevator/must/faculty-of-Medicine/faculty-of-medicine.html',['token'=>$token]);
            }
    } 
    public function Faculty_Of_AgricultureAction(){

   
        $token = Token::generate();
        $user = new user();
       $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/must/faculty-of-Medicine/faculty-of-medicine.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/must/faculty-of-Medicine/faculty-of-medicine.html',['token'=>$token]);
            }
    }   

            public function Faculty_Of_Computing_and_InformaticsAction(){

        
                $token = Token::generate();
                $user = new user();
            $loggedin = $user->isloggedin();
                    if ($loggedin){
                View::renderTemplate('gpa_elevator/must/FCI/fci.html',
                    ['loggedIn' => $loggedin,
                    'user' => $user->data()->username]);
                    }else{
                        View::renderTemplate('gpa_elevator/must/FCI/fci.html',['token'=>$token]);
                    }
            }

        public function Faculty_of_Applied_Sci_and_technologyAction(){

        
                $token = Token::generate();
                $user = new user();
            $loggedin = $user->isloggedin();
                    if ($loggedin){
                View::renderTemplate('gpa_elevator/must/faculty-of-applied-sc-and-technology/faculty-of-applied-science-and-technology.html',
                    ['loggedIn' => $loggedin,
                    'user' => $user->data()->username]);
                    }else{
                        View::renderTemplate('gpa_elevator/must/faculty-of-applied-sc-and-technology/faculty-of-applied-science-and-technology.html',['token'=>$token]);
                    }
            }

        public function Faculty_Of_Interdisciplinary_StudAction(){

        
                $token = Token::generate();
                $user = new user();
            $loggedin = $user->isloggedin();
                    if ($loggedin){
                View::renderTemplate('gpa_elevator/must/faculty-of-interdisciplinary-studies/faculty-of-interdisciplinary-studies.html',
                    ['loggedIn' => $loggedin,
                    'user' => $user->data()->username]);
                    }else{
                        View::renderTemplate('gpa_elevator/must/faculty-of-interdisciplinary-studies/faculty-of-interdisciplinary-studies.html',['token'=>$token]);
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