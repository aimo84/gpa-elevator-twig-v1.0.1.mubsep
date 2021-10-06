<?php
namespace Core;
/**
 * Error and exception handler
 * z_frame
 */

 class Error
 {
     /**
      * Error handler Convert all errors to exceptions by throwing an ErrorException

      *@param int $level Error level
      *@param $string $message Error Message
      *@param $string $file Filename the error was raised in
      *@param int $Line line number in the file
      *@return void
      */


      public static function errorHandler($level,$message,$file,$line)
      {
          if (error_reporting() !== 0){
              //to keep the @ operator working
              throw new \ErrorException($message,0,$level,$file,$line);
          }
      }

      /**
       * exception handler
       * 
       * @param Exception $exception
       * 
       * @return void
       */
      public static function exceptionHandler($exception)
      {
          // code is 404 (not found) or 500 (general error)
          $code = $exception->getCode();
          if ($code != 404){
              $code = 500;
          }
          http_response_code($code);
          $show_errors = true;
          if ($show_errors){
            echo "<h1> Fatal error </h1>";
            echo "<p> Uncaught exception: '" . get_class($exception) . "'</p>";
            echo "<p>Message: '" . $exception->getMessage() . "'</p>";
            echo "<p>Stack trace: <pre>" . $exception->getTraceAsString() . "</pre></p>";
            echo "<p>Thrown in '" . $exception->getFile() . "'on line" . $exception->getLine() . "</p>";
          }else{

                $log = dirname(__DIR__) . '/logs/' . date('Y-m-d') . '.txt';
                ini_set('error_log',$log);
                $message = " Uncaught exception: '" . get_class($exception) . "'";
                $message .= "with Message: '" . $exception->getMessage() . "'";
                $message .= "\nStack trace: <pre>" . $exception->getTraceAsString() ;
                $message .= "\nThrown in '" . $exception->getFile() . "'on line" . $exception->getLine() ;
                error_log($message);
                // echo "<h1> an error occured</h1>";
                if ($code == 404){
                    
                    echo "<h1> Page not found </h1>";
             }else{

                 echo "<h1>An error occured</h1>";
             }
          }

      }






 }





?>