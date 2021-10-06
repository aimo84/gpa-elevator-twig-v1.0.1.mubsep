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

 class cedat extends \Core\Controller
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
        View::renderTemplate('gpa_elevator/muk/cedat/index.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/index.html',['token'=>$token]);
            }
    }


//When users click on any course unit on the college/faculty page

//**********YEAR 1 SEM 1 *******************/

    //Bs.cmp
        public function EMT1101Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/EMT1101-Engineering-Math-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                View::renderTemplate('gpa_elevator/muk/cedat/cmp/EMT1101-Engineering-Math-I.html',['token'=>$token]);
            
            }

        
    }
        public function CMP1101Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP1101-electronics-1.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP1101-electronics-1.html',['token'=>$token]);
            
            }

        
    }
        public function CMP1102Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP1102-Computer-Engineering-Ethics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP1102-Computer-Engineering-Ethics.html',['token'=>$token]);
            
            }

        
    }
    public function CMP1103Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP1103-Info-communication-tech(cmp1).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP1103-Info-communication-tech(cmp1).html',['token'=>$token]);
            
            }

        
    }
    public function UNI1001Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/UNI1001-Communication-skills.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                View::renderTemplate('gpa_elevator/muk/cedat/Qs/UNI1001-Communication-skills.html',['token'=>$token]);
            
            }

        
    }

    //Bs.ele
    public function ELE1104Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE1104-Physical-Electronics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE1104-Physical-Electronics.html',['token'=>$token]);
               
            }     
    }
    public function ELE1105Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE1105-Circuit-Theory.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE1105-Circuit-Theory.html',['token'=>$token]);
               
            }     
    }
    public function ELE1112Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE1112-Introduction-To-Electrical-Engineering-and-Society.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE1112-Introduction-To-Electrical-Engineering-and-Society.html',['token'=>$token]);
               
            }     
    }

    //Bs.civil
    public function CIV1101Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV1101-Engineering-Drawing.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV1101-Engineering-Drawing.html',['token'=>$token]);
               
            }     
    }
    public function CIV1102Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV1102-Introduction-to-Civil-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV1102-Introduction-to-Civil-Engineering.html',['token'=>$token]);
               
            }     
    }
    public function CIV1103Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV1103-Statics-and-Dynamics-for-Civil-Engineers.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV1103-Statics-and-Dynamics-for-Civil-Engineers.html',['token'=>$token]);
               
            }     
    }



    //Bs.tel


    //Bs.mech
    public function MEC1101Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC1101-Engineering-Drawing.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC1101-Engineering-Drawing.html',['token'=>$token]);
               
            }     
    }
    public function MEC1102Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC1102-Engineering-Mechanics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC1102-Engineering-Mechanics.html',['token'=>$token]);
               
            }     
    }
    public function MEC1103Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC1103-Electrical-Engineering-for-Mechanical-Engineers.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC1103-Electrical-Engineering-for-Mechanical-Engineers.html',['token'=>$token]);
               
            }     
    }


    //Bs.QS
    public function CSC1101Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/CSC1101-Computer-Literacy.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/Qs/CSC1101-Computer-Literacy.html',['token'=>$token]);
               
            }     
    }
    public function EMT1108Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/EMT1108-Engineering-Mathematics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/Qs/EMT1108-Engineering-Mathematics.html',['token'=>$token]);
               
            }
        
    }
    public function LAW1120Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/LAW1120-Basic-Law-and-Governance-Structures.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/Qs/LAW1120-Basic-Law-and-Governance-Structures.html',['token'=>$token]);
               
            }

        
    }
    public function QUS1101Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS1101-Introduction-to-Quantity-Surveying.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS1101-Introduction-to-Quantity-Surveying.html',['token'=>$token]);
               
            }

        
    }



    //**********YEAR 1 SEM 2 *******************/


     //cmp
     public function EMT1201Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/EMT1201-Engineering-Math-II(cmp).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/cmp/EMT1201-Engineering-Math-II(cmp).html',['token'=>$token]);
               
            }

        
    }
    public function CMP1201Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/computer-programming-fundamentals-muk.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/cmp/computer-programming-fundamentals-muk.html',['token'=>$token]);
               
            }
        

    }
    public function CMP1202Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP1202-electronics 2(cmp1).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP1202-electronics 2(cmp1).html',['token'=>$token]);
               
            }

    }
    
    public function CMP1203Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP1203-Computer-architecure&organisation.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP1203-Computer-architecure&organisation.html',['token'=>$token]);
               
            }
    }

    public function ELE1202Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/ELE1202-Electricity-and-magnetism.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/cmp/ELE1202-Electricity-and-magnetism.html',['token'=>$token]);
               
            }
    }
    //Bs.civil
    public function CIV1201Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV1201-Strength_of_Materials.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV1201-Strength_of_Materials.html',['token'=>$token]);
            
            }
    }
    public function CIV1202Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV1202-Fluid_mechanics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV1202-Fluid_mechanics.html',['token'=>$token]);
            
            }
        

    }
    public function CIV1203Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV1203-Electrical_engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV1203-Electrical_engineering.html',['token'=>$token]);
            
            }
    
    }
    //Bs.ele
    public function ELE1201Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE1201-Introduction-To-Digital-Electronics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE1201-Introduction-To-Digital-Electronics.html',['token'=>$token]);
               
            }     
    }
    public function ELE1204Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE1204-Statics-Dynamics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE1204-Statics-Dynamics.html',['token'=>$token]);
               
            }     
    }
    public function ELE1205Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE1205-Electrical-Materials.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE1205-Electrical-Materials.html',['token'=>$token]);
               
            }     
    }
    public function TEC1202Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/TEC1202-Introduction-To-Sociology.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/ele/TEC1202-Introduction-To-Sociology.html',['token'=>$token]);
               
            }     
    }
    


    //Bs.tel



    //Bs.mech
    public function MEC1202Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC1202-Engineering-Mechanics-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC1202-Engineering-Mechanics-II.html',['token'=>$token]);
               
            }
    }
    public function MEC1203Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC1203-Thermodynamics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC1203-Thermodynamics.html',['token'=>$token]);
               
            }
    }
    public function MEC1204Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC1204-Mechanics-of-Materials.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC1204-Mechanics-of-Materials.html',['token'=>$token]);
               
            }
    }


    //Bs.Qs
    public function ARC1206Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/ARC1206-Elements-of-Architectural-Design-Fundamentals.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/Qs/ARC1206-Elements-of-Architectural-Design-Fundamentals.html',['token'=>$token]);
               
            }
    }
    public function CIV1205Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/CIV1205-Elements-of-Structural-Analysis.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/Qs/CIV1205-Elements-of-Structural-Analysis.html',['token'=>$token]);
               
            }
        

    }
    public function LAW1220Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/LAW1220-Law-of-Contract-for-Surveyors.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/Qs/LAW1220-Law-of-Contract-for-Surveyors.html',['token'=>$token]);
               
            }
        

    }
    public function QUS1205Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS1205-Construction-Technology-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS1205-Construction-Technology-I.html',['token'=>$token]);
               
            }
        

    }
    public function QUS1206Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS1206-Construction-Drawing.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS1206-Construction-Drawing.html',['token'=>$token]);
               
            }
        

    }
    public function QUS1207Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS1207-Quantity-Surveying-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS1207-Quantity-Surveying-I.html',['token'=>$token]);
               
            }
        

    }



//**********YEAR 2 SEM 1 *******************/

    //Bs.cmp
    public function CMP2101Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2101-Software engineering(cmp).php',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2101-Software engineering(cmp).php',['token'=>$token]);
               
            }
        

    }
    public function EMT2101Action(){

   
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/EMT2101-Engineering-Math-III(cmp).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/cmp/EMT2101-Engineering-Math-III(cmp).html',['token'=>$token]);
               
            }

        }

    public function CMP2102Action(){

   
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2102-electric_circuits_and_signals-muk.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2102-electric_circuits_and_signals-muk.html',['token'=>$token]);
               
            }

        }
    public function CMP2103Action(){

   
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2103-OOP(cmp).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                 View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2103-OOP(cmp).html',['token'=>$token]);
               
            }

        }
    public function TEC2101Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/TEC22101-Sociology for Technology(cmp).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/TEC22101-Sociology for Technology(cmp).html',['token'=>$token]);
                
            }

    }

    //Bs.ele
    public function ELE2102Action(){

   
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE2102-Electronic-Circuits.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE2102-Electronic-Circuits.html',['token'=>$token]);
                       
            }
        }
    public function ELE2111Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE2111-Network-Theory.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE2111-Network-Theory.html',['token'=>$token]);
                        
            }
        }
    public function ELE2112Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE2112-Electromagnetics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE2112-Electromagnetics.html',['token'=>$token]);
                        
            }
        }
 
    //Bs.civ
    public function CIV2101Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2101-Theory-of-Structures-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2101-Theory-of-Structures-I.html',['token'=>$token]);
                        
            }
        }
    public function CIV2102Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2102-Engineering-Geology.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2102-Engineering-Geology.html',['token'=>$token]);
                        
            }
        }
    public function CIV2103Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2103-Engineering-Surveying-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2103-Engineering-Surveying-I.html',['token'=>$token]);
                        
            }
        }
    public function CIV2104Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2104-Hydraulics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2104-Hydraulics.html',['token'=>$token]);
                        
            }
        }
    public function CIV2105Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2105-Thermodynamics-for-Civil-engineers.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2105-Thermodynamics-for-Civil-engineers.html',['token'=>$token]);
                        
            }
        }
    public function CIVEMT2101Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/EMT2101-Engineering-Mathematics-III.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/EMT2101-Engineering-Mathematics-III.html',['token'=>$token]);
                        
            }
        }

    //Bs.tel


    //Bs.Mech
    public function MEC2101Action(){

   
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2101-Fluid-Mechanics-for-Mechanical-Engineers.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2101-Fluid-Mechanics-for-Mechanical-Engineers.html',['token'=>$token]);
                       
            }
        }
    public function MEC2102Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2102-Mechanics-of-Materials-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2102-Mechanics-of-Materials-II.html',['token'=>$token]);
                        
            }
        }
    public function MEC2103Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2103-Computer-Aided-Design-for-Mechanical-Engineers.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2103-Computer-Aided-Design-for-Mechanical-Engineers.html',['token'=>$token]);
                        
            }
        }


    //Bs.Qs
    public function CMG2102Action(){

   
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/CMG2102-Construction-Materials.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/CMG2102-Construction-Materials.html',['token'=>$token]);
                       
            }
        }
    public function ECO2104Action(){

   
            $token = Token::generate();
            $user = new user();
            $loggedin = $user->isloggedin();
                if ($loggedin){
            View::renderTemplate('gpa_elevator/muk/cedat/Qs/ECO2104-Principles-of-Management.html',
                ['loggedIn' => $loggedin,
                'user' => $user->data()->username]);
                }else{
                        View::renderTemplate('gpa_elevator/muk/cedat/Qs/ECO2104-Principles-of-Management.html',['token'=>$token]);
                           
                }
         }
        public function LAW2106Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/LAW2106-Law-of-Torts-for-Construction.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/LAW2106-Law-of-Torts-for-Construction.html',['token'=>$token]);
                        
            }
        }
        public function QUS2102Action(){


            $token = Token::generate();
            $user = new user();
            $loggedin = $user->isloggedin();
                if ($loggedin){
            View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS2102-Building-Finishes-and-Fixtures.html',
                ['loggedIn' => $loggedin,
                'user' => $user->data()->username]);
                }else{
                        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS2102-Building-Finishes-and-Fixtures.html',['token'=>$token]);
                            
                }
            }
        public function QUS2104Action(){


            $token = Token::generate();
            $user = new user();
            $loggedin = $user->isloggedin();
                if ($loggedin){
            View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS2104-Construction-Technology-II.html',
                ['loggedIn' => $loggedin,
                'user' => $user->data()->username]);
                }else{
                        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS2104-Construction-Technology-II.html',['token'=>$token]);
                            
                }
            }
        public function SOC2103Action(){


            $token = Token::generate();
            $user = new user();
            $loggedin = $user->isloggedin();
                if ($loggedin){
            View::renderTemplate('gpa_elevator/muk/cedat/Qs/SOC2103-Sociology-for-Technology.html',
                ['loggedIn' => $loggedin,
                'user' => $user->data()->username]);
                }else{
                        View::renderTemplate('gpa_elevator/muk/cedat/Qs/SOC2103-Sociology-for-Technology.html',['token'=>$token]);
                            
                }
            }
        


//**********YEAR 2 SEM 2 *******************/

    // Bs.cmp
    public function CMP2201Action(){

   
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2201-Discrete-Mathematics-and-Random-Processes.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2201-Discrete-Mathematics-and-Random-Processes.html',['token'=>$token]);
                       
            }
        }

    public function CMP2202Action(){

   
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2202-Analysis-and-Design-Of-Algorithms.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2202-Analysis-and-Design-Of-Algorithms.html',['token'=>$token]);
                               
            }

        
    }

    public function CMP2203Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2203-Digital-Logic.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2203-Digital-Logic.html',['token'=>$token]);
                            
            }

        
    }

    public function CMP2204Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2204-Operating-Systems-Technologies.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2204-Operating-Systems-Technologies.html',['token'=>$token]);
                            
            }

        
    }


    public function CMP2205Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2205-Computer-Networks.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP2205-Computer-Networks.html',['token'=>$token]);
                            
            }

        
    }

     //Bs.civ

    public function CIV2201Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2201-Soil-mechanics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2201-Soil-mechanics.html',['token'=>$token]);
                
            }
        

    }
    public function CIV2202Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2202-Theory_of_structure_II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2202-Theory_of_structure_II.html',['token'=>$token]);
                
            }
        

    }
    public function CIV2203Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2203-civil_engineering_materials.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2203-civil_engineering_materials.html',['token'=>$token]);
                
            }
        

    }
    public function CIV2204Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2204-Engineering_surveying_2.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV2204-Engineering_surveying_2.html',['token'=>$token]);
                
            }
        

    }

    //Bs.ele
    public function EMT2201Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/EMT2201-Engineering-Mathematics-IV.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/EMT2201-Engineering-Mathematics-IV.html',['token'=>$token]);
                        
            }
        }
    public function ELE2211Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE2211-Electromagnetic-Fields.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE2211-Electromagnetic-Fields.html',['token'=>$token]);
                        
            }
        }
    public function ELE2212Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE2212-Electrical-Energy-Systems.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE2212-Electrical-Energy-Systems.html',['token'=>$token]);
                        
            }
        }
    public function ELE2213Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE2213-Instrumentation.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE2213-Instrumentation.html',['token'=>$token]);
                        
            }
        }
    public function TEC2202Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/TEC2202-Technology-Ethics-Human-Rights.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/TEC2202-Technology-Ethics-Human-Rights.html',['token'=>$token]);
                        
            }
        }

    //Bs.tel


    //Bs.mech
    public function MEC2201Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2201-Electrical-Engineering-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2201-Electrical-Engineering-II.html',['token'=>$token]);
                        
            }
        }
    public function MEC2202Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2202-Theory-of-Machine-Elements.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2202-Theory-of-Machine-Elements.html',['token'=>$token]);
                        
            }
        }
    public function MEC2203Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2203-Computer-Programming.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2203-Computer-Programming.html',['token'=>$token]);
                        
            }
        }
    public function MEC2204Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2204-Material-Science-and-Engineering-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2204-Material-Science-and-Engineering-I.html',['token'=>$token]);
                        
            }
        }
    public function MEC2205Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2205-Fluid-Mechanics-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC2205-Fluid-Mechanics-II.html',['token'=>$token]);
                        
            }
        }

    //Bs.Qs
    public function LAW2202Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/LAW2202-Commercial-Law-for-Construction.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/LAW2202-Commercial-Law-for-Construction.html',['token'=>$token]);
                        
            }
        }
    public function QUS2201Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS2201-Quantity-Surveying-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS2201-Quantity-Surveying-II.html',['token'=>$token]);
                        
            }
        }
    public function QUS2202Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS2202-Building-Services.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS2202-Building-Services.html',['token'=>$token]);
                        
            }
        }
    public function QUS2203Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS2203-Economics-of-Property-and-Construction.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS2203-Economics-of-Property-and-Construction.html',['token'=>$token]);
                        
            }
        }
    public function QUS2205Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS2205-Cost-and-Value-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS2205-Cost-and-Value-Engineering.html',['token'=>$token]);
                        
            }
        }
    public function SUV2206Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/SUV2206-Land-Surveying-for-Construction.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/SUV2206-Land-Surveying-for-Construction.html',['token'=>$token]);
                        
            }
        }



    //**********YEAR 3 SEM 1 *******************/

    //Bs.cmp

    public function CMP3101Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3101-Database-Systems.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3101-Database-Systems.html',['token'=>$token]);
                            
            }

        
    }
    public function CMP3104Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3104-Computer-Based-Medical-Systems.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3104-Computer-Based-Medical-Systems.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE3101Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/ELE3101-Electro-Magnetic-Fields.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/ELE3101-Electro-Magnetic-Fields.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE3102Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/ELE3102-Applied-Analouge-Electronics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/ELE3102-Applied-Analouge-Electronics.html',['token'=>$token]);
                            
            }

        
    }
    public function EMT3105Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/EMT3105-Engineering-Mathematics-V.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/EMT3105-Engineering-Mathematics-V.html',['token'=>$token]);
                            
            }

        
    }
    //Bs.ele
    public function COE3100Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/COE3100-Entrepreneurship.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/COE3100-Entrepreneurship.html',['token'=>$token]);
                            
            }   
    }
    public function LAW1104Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/LAW1104-Law-of-Contracts.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/LAW1104-Law-of-Contracts.html',['token'=>$token]);
                            
            }   
    }
    public function ELE3113Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3113-Power-Systems-Theory.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3113-Power-Systems-Theory.html',['token'=>$token]);
                            
            }   
    }
    public function TEL3111Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL3111-Communication-Theory.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL3111-Communication-Theory.html',['token'=>$token]);
                            
            }   
    }
    public function ELE3114Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3114-Electrical-Machines-Drives-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3114-Electrical-Machines-Drives-I.html',['token'=>$token]);
                            
            }   
    }
    public function ELE3112Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3112-Radio-Wave-Propagation-Antennas.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3112-Radio-Wave-Propagation-Antennas.html',['token'=>$token]);
                            
            }   
    }
    public function ELE3103Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3103-Applied-Digital-Electronics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3103-Applied-Digital-Electronics.html',['token'=>$token]);
                            
            }   
    }

    //Bs.civ
    public function CIV3101Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3101-Organisational-Theory-for-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3101-Organisational-Theory-for-Engineering.html',['token'=>$token]);
                
            }

    }
    public function CIV3102Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3102-Design-of-Structures-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3102-Design-of-Structures-I.html',['token'=>$token]);
                
            }

    }
    public function CIV3103Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3103-Highway-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3103-Highway-Engineering.html',['token'=>$token]);
                
            }

    }
    public function CIV3104Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3104-Hydrology-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3104-Hydrology-I.html',['token'=>$token]);
                
            }

    }
    public function CIV3105Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3105-Construction-Technology.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3105-Construction-Technology.html',['token'=>$token]);
                
            }

    }
    public function CIV3106Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3106-Environmental-Chemistry.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3106-Environmental-Chemistry.html',['token'=>$token]);
                
            }

    }
    public function CIV3107Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3107-Principles-of-Quantity-surveying.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3107-Principles-of-Quantity-surveying.html',['token'=>$token]);
                
            }

    }



    //Bs.tel


    //Bs.mech
    public function MEC3101Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3101-Material-Science-and-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3101-Material-Science-and-Engineering.html',['token'=>$token]);
                
            }

    }
    public function MEC3102Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3102-Engineering-Management.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3102-Engineering-Management.html',['token'=>$token]);
                
            }

    }
    public function MEC3103Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3103-Production-Engineering-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3103-Production-Engineering-I.html',['token'=>$token]);
                
            }

    }
    public function MEC3104Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3104-Design-of-Machine-Elements.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3104-Design-of-Machine-Elements.html',['token'=>$token]);
                
            }

    }
    public function MEC3105Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3105-Dynamic-Systems-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3105-Dynamic-Systems-Engineering.html',['token'=>$token]);
                
            }

    }



    //Bs.Qs
    
    public function CMG3103Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/CMG3103-Maintenance-Management.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/CMG3103-Maintenance-Management.html',['token'=>$token]);
                            
            }   
    }
    public function COE3103Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/COE3103-Principles-of-Accounting-for-Surveyors.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/COE3103-Principles-of-Accounting-for-Surveyors.html',['token'=>$token]);
                            
            }

        
    }
    public function LAW3109Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/LAW3109-Elements-of-Property-Law.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/LAW3109-Elements-of-Property-Law.html',['token'=>$token]);
                            
            }

        
    }
    public function LAW3110Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/LAW3110-Elements-of-Planning-Law.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/LAW3110-Elements-of-Planning-Law.html',['token'=>$token]);
                            
            }

        
    }
    public function QUS3101Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS3101-Construction-Technology-III.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS3101-Construction-Technology-III.html',['token'=>$token]);
                            
            }

        
    }
    public function QUS3102Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS3102-Housing-Development-and-Management.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS3102-Housing-Development-and-Management.html',['token'=>$token]);
                            
            }

        
    }




//**********YEAR 3 SEM 2 ***********/


    //cmp
    public function CMP3201Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3201-Embedded Systems(cmp3).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3201-Embedded Systems(cmp3).html',['token'=>$token]);
                            
            }

        
    }

    public function CMP3202Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3202-Human Computer Interaction(cmp3).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3202-Human Computer Interaction(cmp3).html',['token'=>$token]);
                            
            }

        
    }

    public function CMP3203Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3203-Computer Systems Maintenance(cmp3).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3203-Computer Systems Maintenance(cmp3).html',['token'=>$token]);
                            
            }

        
    }

    public function CMP3204Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3204-Distributed Information Systems(cmp3).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3204-Distributed Information Systems(cmp3).html',['token'=>$token]);
                            
            }

        
    }

    public function CMP3205Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3205-Intelligent Systems(cmp3).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3205-Intelligent Systems(cmp3).html',['token'=>$token]);
                            
            }

        
    }
    public function CMP3206Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3206-Saftey Critical System(cmp3).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3206-Saftey Critical System(cmp3).html',['token'=>$token]);
                            
            }

        
    }
    public function CMP3207Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3207-Sustainable Energy Systems(cmp3).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP3207-Sustainable Energy Systems(cmp3).html',['token'=>$token]);
                            
            }

        
    }
    //Bs.ele
    public function EMT3201Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/EMT3201-Engineering-Mathematics-VI.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/EMT3201-Engineering-Mathematics-VI.html',['token'=>$token]);
                            
            }    
    } 
    public function ELE3202Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3202-Control-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3202-Control-Engineering.html',['token'=>$token]);
                            
            }    
    } 
    public function ELE3203Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3203-Power-Electronics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3203-Power-Electronics.html',['token'=>$token]);
                            
            }    
    } 
    public function ELE3204Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3204-Communication-Engineering-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3204-Communication-Engineering-I.html',['token'=>$token]);
                            
            }    
    }
    public function ELE3205Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3205-Electrical-Machines-Drives-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3205-Electrical-Machines-Drives-II.html',['token'=>$token]);
                            
            }    
    }
    public function ELE3211Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3211-Industrial-Electronics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3211-Industrial-Electronics.html',['token'=>$token]);
                            
            }    
    }
    public function ELE3215Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3215-Power-Systems-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3215-Power-Systems-Engineering.html',['token'=>$token]);
                            
            }    
    }
    public function TEL3214Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL3214-Computer-Communication-Networks.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL3214-Computer-Communication-Networks.html',['token'=>$token]);
                            
            }    
    }
    public function ELE3216Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3216-Energy-Conversion-and-Generation.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3216-Energy-Conversion-and-Generation.html',['token'=>$token]);
                            
            }    
    }
    public function TEL3212Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL3212-Digital-Communications-Systems.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL3212-Digital-Communications-Systems.html',['token'=>$token]);
                            
            }    
    }
    public function TEL3217Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL3217-Systems-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL3217-Systems-Engineering.html',['token'=>$token]);
                            
            }    
    }
    public function ELE3217Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3217-Mobile-Communication-Systems.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE3217-Mobile-Communication-Systems.html',['token'=>$token]);
                            
            }    
    }
    public function COE1102Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/COE1102-Fundamental-Acccounts-Principles.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/COE1102-Fundamental-Acccounts-Principles.html',['token'=>$token]);
                            
            }    
    }


    //Bs.civ
    public function CIV3201Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3201-Foundation-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3201-Foundation-Engineering.html',['token'=>$token]);
                            
            }

        
    }
    public function CIV3202Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3202-Group-Design-Project.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3202-Group-Design-Project.html',['token'=>$token]);
                            
            }

        
    }
    public function CIV3203Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3203-Design-of-Structures-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3203-Design-of-Structures-II.html',['token'=>$token]);
                            
            }

        
    }
    public function CIV3204Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3204-Water-Resources-Engineering-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3204-Water-Resources-Engineering-I.html',['token'=>$token]);
                            
            }

        
    }
    public function CIV3205Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3205-Public-Health-Engineering-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV3205-Public-Health-Engineering-I.html',['token'=>$token]);
                            
            }

        
    }


    //Bs.tel


    //Bs.Mech
    public function MEC3201Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3201-Maintenance-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3201-Maintenance-Engineering.html',['token'=>$token]);
                
            }

    }
    public function MEC3202Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3202-Production-Engineering-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3202-Production-Engineering-II.html',['token'=>$token]);
                
            }

    }
    public function MEC3203Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3203-Product-Design-and-Development.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3203-Product-Design-and-Development.html',['token'=>$token]);
                
            }

    }
    public function MEC3204Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3204-Heat-Transfer.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3204-Heat-Transfer.html',['token'=>$token]);
                
            }

    }
    public function MEC3205Action(){


        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3205-Control-Systems-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC3205-Control-Systems-Engineering.html',['token'=>$token]);
                
            }

    }


    //Bs.Qs

    public function COE3202Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/COE3202-Entrepreneurship.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/COE3202-Entrepreneurship.html',['token'=>$token]);
                            
            }

        
    }
    public function LEC3204Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/LEC3204-Research-Methods-and-Statistics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/LEC3204-Research-Methods-and-Statistics.html',['token'=>$token]);
                            
            }

        
    }
    public function QUS3201Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS3201-Quantity-Surveying-III.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS3201-Quantity-Surveying-III.html',['token'=>$token]);
                            
            }

        
    }
    public function QUS3202Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS3202-Construction-Production-Management.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS3202-Construction-Production-Management.html',['token'=>$token]);
                            
            }

        
    }
    public function QUS3203Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS3203-Construction-Contract-Administration.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS3203-Construction-Contract-Administration.html',['token'=>$token]);
                            
            }

        
    }



//*********YEAR 4 SEM 1*************/
    //Bs.cmp
    public function CMP4101Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP4101-Digital-Signal-Processing.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP4101-Digital-Signal-Processing.html',['token'=>$token]);
                            
            }

        
    }
    public function CMP4102Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP4102-Instrumention-and-Control-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP4102-Instrumention-and-Control-Engineering.html',['token'=>$token]);
                            
            }

        
    }
    public function CMP4103Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP4103-Computer-Systems-and-Network-Security.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP4103-Computer-Systems-and-Network-Security.html',['token'=>$token]);
                            
            }

        
    }
    public function CMP4104Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP4104-Digital-Image-and-Video-Processing.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP4104-Digital-Image-and-Video-Processing.html',['token'=>$token]);
                            
            }

        
    }
    public function TEC4101Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/TEC4101-Research-Methods.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/TEC4101-Research-Methods.html',['token'=>$token]);
                            
            }

        
    }
    public function TEC4102Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/TEC4102-Principles-of-Management.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/TEC4102-Principles-of-Management.html',['token'=>$token]);
                            
            }

        
    }

    //Bs.ele
    public function ELE4100Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4100-Electrical-Engineering-Project.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4100-Electrical-Engineering-Project.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4101Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4101-Communication-Engineering-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4101-Communication-Engineering-II.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4102Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4102-Propagation.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4102-Propagation.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4103Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4103-Telecommunication-Systems-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4103-Telecommunication-Systems-I.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4104Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4104-Microprocessors.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4104-Microprocessors.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4105Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4105-Power-Systems-Engineering-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4105-Power-Systems-Engineering-I.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4106Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4106-Network-Theory-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4106-Network-Theory-II.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4115Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4115-Power-Systems-Protection.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4115-Power-Systems-Protection.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4108Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4108-Business-Management-for-Electrical-Engineers-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4108-Business-Management-for-Electrical-Engineers-II.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4112Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4112-Microprocessor-Based-Systems.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4112-Microprocessor-Based-Systems.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4116Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4116-Electrical-Installation-Design.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4116-Electrical-Installation-Design.html',['token'=>$token]);
                            
            }

        
    }

    public function TEL4113Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL4113-Optical-Communication.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL4113-Optical-Communication.html',['token'=>$token]);
                            
            }

        
    }
    public function TEL4114Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL4114-Television-and-Video-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL4114-Television-and-Video-Engineering.html',['token'=>$token]);
                            
            }

        
    }
    public function TEL4111Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL4111-Digital-Signal-Processing.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL4111-Digital-Signal-Processing.html',['token'=>$token]);
                            
            }

        
    }



    //Bs.civ
    public function CIV4100Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4100-Civil-Engineering-Project-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4100-Civil-Engineering-Project-I.html',['token'=>$token]);
                            
            }
    }
    public function CIV4101Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4101-Civil-Engineering-Management.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4101-Civil-Engineering-Management.html',['token'=>$token]);
                            
            }
    }
    public function CIV4102Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4102-Civil-Engineering-Infrastructure-Maintenance.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4102-Civil-Engineering-Infrastructure-Maintenance.html',['token'=>$token]);
                            
            }
    }
    public function CIV4103Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4103-Traffic-and-Transportation-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4103-Traffic-and-Transportation-Engineering.html',['token'=>$token]);
                            
            }
    }
    public function CIV4104Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4104-Public-Health-Engineering-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4104-Public-Health-Engineering-II.html',['token'=>$token]);
                            
            }
    }
    public function CIV4105Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4105-Design-of-Structures-III.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4105-Design-of-Structures-III.html',['token'=>$token]);
                            
            }
    }
    public function CIV4106Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4106-Hydrology-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4106-Hydrology-II.html',['token'=>$token]);
                            
            }
    }
    //Bs.mech
    public function MEC4101Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4101-Business-Management-for-Mechanical-Engineers.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4101-Business-Management-for-Mechanical-Engineers.html',['token'=>$token]);
                            
            }
    }
    public function MEC4102Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4102-Applied-Thermodynamics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4102-Applied-Thermodynamics.html',['token'=>$token]);
                            
            }
    }
    public function MEC4103Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4103-Production-Planning-and-Control.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4103-Production-Planning-and-Control.html',['token'=>$token]);
                            
            }
    }
    public function MEC4104Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4104-Mechanical-Engineering-Project-I.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4104-Mechanical-Engineering-Project-I.html',['token'=>$token]);
                            
            }
    }
    public function MEC4105Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4105-Renewable-Energy-Technologies.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4105-Renewable-Energy-Technologies.html',['token'=>$token]);
                            
            }
    }
    public function MEC4106Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4106-Materials-Handling.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4106-Materials-Handling.html',['token'=>$token]);
                            
            }
    }
    public function MEC4107Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4107-Welding-Technology.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4107-Welding-Technology.html',['token'=>$token]);
                            
            }
    }

    //Bs.tel


    //Bs.Qs

    public function QUS4101Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4101-Construction-Technology-IV.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4101-Construction-Technology-IV.html',['token'=>$token]);
                            
            }

        
    }
    public function QUS4102Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4102-Operations-Research-Techniques.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4102-Operations-Research-Techniques.html',['token'=>$token]);
                            
            }

        
    }
    public function QUS4103Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4103-Building-Surveying.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4103-Building-Surveying.html',['token'=>$token]);
                            
            }

        
    }
    public function QUS4104Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4104-Professional-Practice-Procedure-and-Ethics.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4104-Professional-Practice-Procedure-and-Ethics.html',['token'=>$token]);
                            
            }

        
    }
    public function QUS4105Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4105-Construction-Project-Management.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4105-Construction-Project-Management.html',['token'=>$token]);
                            
            }

        
    }



//*********YEAR 4 SEM 2*************/

    //Bs.cmp
    public function CMP4202Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP4202-VLSI Systems Design(cmp4).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP4202-VLSI Systems Design(cmp4).html',['token'=>$token]);
                            
            }

        
    }
    public function CMP4204Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP4204-Wireless Technologies(cmp).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP4204-Wireless Technologies(cmp).html',['token'=>$token]);
                            
            }

        
    }
    public function CMP4205Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP4205-Audio and Speech Signal Processing(cmp4).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/CMP4205-Audio and Speech Signal Processing(cmp4).html',['token'=>$token]);
                            
            }

        
    }
    public function TEC4201Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/cmp/TEC4201-Entrepreneurship(cmp4).html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/cmp/TEC4201-Entrepreneurship(cmp4).html',['token'=>$token]);
                            
            }

        
    }
    //Bs.civ 
    public function CIV4200Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4200-Civil-Engineering-Project-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4200-Civil-Engineering-Project-II.html',['token'=>$token]);
                            
            }     
    }
    public function CIV4201Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4201-Civil-Engineering-Law.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4201-Civil-Engineering-Law.html',['token'=>$token]);
                            
            }     
    }
    public function CIV4202Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4202-Water-Resources-Engineering-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4202-Water-Resources-Engineering-II.html',['token'=>$token]);
                            
            }     
    }
    public function CIV4203Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4203-Civil-Engineering-Economy.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4203-Civil-Engineering-Economy.html',['token'=>$token]);
                            
            }     
    }
    public function CIV4204Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4204-Environmental-Quality-Management.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4204-Environmental-Quality-Management.html',['token'=>$token]);
                            
            }     
    }
    public function CIV4206Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4206-Introductory-Dynamics-of-Structures.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4206-Introductory-Dynamics-of-Structures.html',['token'=>$token]);
                            
            }     
    }
    public function CIV4209Action(){

        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4209-Human-Resources-Management-and-Entrepreneurship.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                View::renderTemplate('gpa_elevator/muk/cedat/civ/CIV4209-Human-Resources-Management-and-Entrepreneurship.html',['token'=>$token]);
            
            }
    }


    //Bs.ele

    public function ELE4203Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4203-Computer-Systems-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4203-Computer-Systems-Engineering.html',['token'=>$token]);
                            
            }     
    }
    public function ELE4204Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4204-Radio-Frequency-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4204-Radio-Frequency-Engineering.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4205Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4205-Antennas.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4205-Antennas.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4206Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4206-Intergrated-Circuits-Design-and-Fabrication.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4206-Intergrated-Circuits-Design-and-Fabrication.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4207Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4207-Control-Engineering-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4207-Control-Engineering-II.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4208Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4208-Power-Systems-Engineering-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4208-Power-Systems-Engineering-II.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4209Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4209-High-Voltage-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4209-High-Voltage-Engineering.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4210Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4210-Electrical-Installation-Design.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4210-Electrical-Installation-Design.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4214Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4214-Power-Economics-and-Management.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4214-Power-Economics-and-Management.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4216Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4216-Advanced-Topics-In-Electronic-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4216-Advanced-Topics-In-Electronic-Engineering.html',['token'=>$token]);
                            
            }

        
    }
    public function ELE4217Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4217-Advanced-Topics-In-power-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/ELE4217-Advanced-Topics-In-power-Engineering.html',['token'=>$token]);
                            
            }

        
    }
    public function TEL4211Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL4211-Business-Management.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL4211-Business-Management.html',['token'=>$token]);
                            
            }

        
    }
    public function TEL4212Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL4212-Satellite-Communications.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL4212-Satellite-Communications.html',['token'=>$token]);
                            
            }

        
    }
    public function TEL4213Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL4213-Radio-Frequency-Microwave-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL4213-Radio-Frequency-Microwave-Engineering.html',['token'=>$token]);
                            
            }

        
    }
    public function TEL4215Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL4215-Broadband-and-Advanced-Communications.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/TEL4215-Broadband-and-Advanced-Communications.html',['token'=>$token]);
                            
            }

        
    }
    //Bs.tel
    public function TEL4200Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/tel/.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/.html',['token'=>$token]);
                            
            }

        
    }

    public function ELE4211Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/tel/.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/.html',['token'=>$token]);
                            
            }

        
    }
    public function COE1104Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/tel/.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/ele/.html',['token'=>$token]);
                            
            }

        
    }
    //Bs.mech
    public function MEC4201Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4201-Entrepreneurship-for-Mechanical-Engineers.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4201-Entrepreneurship-for-Mechanical-Engineers.html',['token'=>$token]);
                            
            }
    }
    public function MEC4202Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4202-Environmental-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4202-Environmental-Engineering.html',['token'=>$token]);
                            
            }
    }
    public function MEC4204Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4204-Mechanical-Engineering-Project-II.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4204-Mechanical-Engineering-Project-II.html',['token'=>$token]);
                            
            }
    }
    public function MEC4205Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4205-Air-Conditioning-and-Refrigeration.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4205-Air-Conditioning-and-Refrigeration.html',['token'=>$token]);
                            
            }
    }
    public function MEC4206Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4206-Fluid-Power-systems.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4206-Fluid-Power-systems.html',['token'=>$token]);
                            
            }
    }
    public function MEC4207Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4207-Operations-research-and-project-management-for-Mechanical-Engineers.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4207-Operations-research-and-project-management-for-Mechanical-Engineers.html',['token'=>$token]);
                            
            }
    }
    public function MEC4208Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4208-Computer-Aided-Engineering-for-mechanical-Engineers.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4208-Computer-Aided-Engineering-for-mechanical-Engineers.html',['token'=>$token]);
                            
            }
    }
    public function MEC4209Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4209-Automotive-Engineering.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/mec/MEC4209-Automotive-Engineering.html',['token'=>$token]);
                            
            }
    }

    //Bs.Qs

    public function QUS4202Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4202-Quantity-Surveying-IV.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4202-Quantity-Surveying-IV.html',['token'=>$token]);
                            
            }

        
    }
    public function QUS4203Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4203-Facilities-Management.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4203-Facilities-Management.html',['token'=>$token]);
                            
            }

        
    }
    public function QUS4204Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4204-Analysis-of-Prices-and-Estimating.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4204-Analysis-of-Prices-and-Estimating.html',['token'=>$token]);
                            
            }

        
    }
    public function QUS4205Action(){

    
        $token = Token::generate();
        $user = new user();
        $loggedin = $user->isloggedin();
            if ($loggedin){
        View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4205-Arbitration-Alternative-Dispute-Resolution-in-Construction.html',
            ['loggedIn' => $loggedin,
            'user' => $user->data()->username]);
            }else{
                    View::renderTemplate('gpa_elevator/muk/cedat/Qs/QUS4205-Arbitration-Alternative-Dispute-Resolution-in-Construction.html',['token'=>$token]);
                            
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