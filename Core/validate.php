<?php 
namespace Core;
/**
 * Validating informationn input by user
 * Z-frame
 * version 1.0
 */

class validate
{
            /**
             * stores errors encoured during execution
             * @var array 
             */
            private $_errors = array();

            /**
             * stores validation state intialized to false
             * @var boolean
             */
            private $_passed = false;

            /**
             * stores stores db conenction instance
             * @var array 
             */
            private $_db = null;

            /**
             * constructor function connects to db
             */


            public function __construct()
            {
                $this->_db = DB::getinstance();
            }

            /**
             * function checks if input data matches the requirements
             * @param @var array the source array of the items
             * @param @var array the items contained in the array
             * @return void
             */


            public function check ($source, $items = array())
            {
                foreach ($items as $item => $rules)
                {
                    foreach($rules as $rule => $rule_value)
                    {
                        $value = trim($source[$item]);

                        if( $rule === 'required' && empty($value))
                        {
                            $this->addError("{$item } is required");

                        }else if (!empty($value)){
                            switch ($rule){
                                case 'min':
                                if (strlen($value) < $rule_value){
                                $this->addError("a min length of {$rule_value} is required");

                                }
                                break;

                                case 'max':
                                if (strlen($value) >$rule_value){
                                    $this->addError("a maximun length of {$rule_value} is required");
        
                                    }
                                break;
                                case 'unique':
                                $dbe = new DB();
                                $check = $dbe->get($rule_value,array($item, '=', $value));

                                // if($check->count()){

                                //     $this->addError("{$item} already exists");
                                // }
                                break;


                                case 'matches':
                                if($value != $source[$rule_value]){
                                    $this->addError("{$rule_value} does not match {$item}");

                                }
                                break;
                                
                                


                            }
                        }

                    }
                }

                if(empty($this->error())) {

                    return  $this->_passed = true;
                }
                return $this; 

            }

            /**
             * adds error to errors arrray
             * @param $string error to be stored
             * @return void
             */

            public function addError($error)
            {
            $this->_errors[]= $error;
            }

            /**
             * returns errors
             
             * @return @var array containing errors
             */

            public function error()
            {
                return $this->_errors;
            }

            /**
             * checks if validation is passed
            
             * @return boolean
             */


            public function passed()
            {
                return $this->_passed;
            }












}




?>