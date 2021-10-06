<?php
namespace Core;
use PDO;
/**
 * handle database connections
 * manage tables and migrations
 * z-frame
 * version 1.0
 */



class DB{
        /**
         * define instance variables
         * @var
        */
        private static $_instance = null;

        /**
         * store query to be executed
         * @var
         */
        private $_query;

        /**
         * stores results fetched after query has been executed
         * @var
         */
        private $_result;
        /**
         * stores pdo instance used in singleton structure
         * @var
         */
        private $_pdo;
        /**
         * stores the number of rows returned after a query has been executed intialized to zero
         * @var
         */
        private $_count = 0;
        /**
         * tigger for error occasion intialized to false
         * @var boolean 
         */
        private $_error = false;

    /**
     * constructor where database connection is made
    */
    public function __construct(){

     
        
     


        $host = config::get('mysql/host');
        $username = config::get('mysql/username');
        $password = config::get('mysql/password');
        $db = config::get('mysql/db');

        try {
            $this->_pdo = new PDO('mysql:host='.$host.';dbname='.$db.'',$username,$password);
            

        }
        catch (\PDOException $e)
        {

            die($e->getMessage());

        }




    }
    
    /**
     * gets instance of the db
    * create new instance of db class
    *@return instance
    */

    public static function getinstance ()
    {
        if(!isset(self::$_instance)){

        self::$_instance= new DB;

        }

        else{
            return self::$_instance;
        }

    }

    /**
     * performs query to database
     * @param string contains sql to be executed
     * @param @var array parameters and place holders
     * @return the instance
     */

    public  function query ($sql, $params = array())
    {
        $this->_error = false;
        if ($this->_query= $this->_pdo->prepare($sql)){

            $x=1;
            if(count($params)){
            
                foreach($params as  $param){    
                    $this->_query->bindValue($x,$param);
                    $x++;

                }

            }   

            if($this->_query->execute()){
                $this->_result = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();


            }
            else {
                $this->_error = true;
            }
        }   

        return $this;

    }

    /**
     * performs specified function on database
     * @param string action to be executed
     * @param string name of table where the action is going to be executed
     * @param @var array operators to be used
     * @return boolean
     */

    public function action($action,$table,$where = array())
    {
        if (count($where) === 3){
        
            $operators= array('<', '>', '<=', '>=', '=');
            $field = $where[0];
            $operator = $where[1];
            $value = $where[2];

            if(in_array($operator,$operators)){
                $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ? ";

                if(!$this->query($sql,array($value))->error()){
                    return $this;
                }



            }
        }
        return false;
    }

    /**
     * select data from table 
     * @param name of the table to select from
     * @param  @var array operators to be used
     * @return the instance
     */

    public function get($table,$where)
    {
        return $this->action('SELECT *', $table,$where);

    }

    /**
     * find the final result
     * @return @var array containg results
     */

    public function result()
    {
        return $this->_result;
    }

    /**
     * delete records from a particular table
     * @param $string name of the table to delete from
     * @param  @var array operators to be used
     * @return this instance
     */

    public function delete($table,$where)
    {
        return $this->action('DELETE', $table,$where);

    }

    /**
     * insert records into a specified table in the database
     * @param $string name of table to insert data into
     * @param @var array fields to insert data in
     * @return boolean
     */

    public  function insert($table, $fields = array())
    {
        if (count($fields)){
            $keys = array_keys($fields);// capture indexes of the array 
            $values = null;

            $x = 1;

            foreach ($fields as $field){
                
                $values .= '?';//append to values place holders

                if($x < count($fields)){

                    $values .= ' , ';// append to values a comma
                    }
                $x++;
            }

        $sql = "INSERT INTO {$table}(`".implode('`,`',$keys)."`) VALUES({$values})";
        if (!$this->query($sql,$fields)->error()){
           
            return true;
        }else{
        throw new \Exception("something went wrong with adding user to database");
            
        }
        
        }
        return false;
    }

    /**
     * update rows in the specified table
     * @param $string name of the table
     * @param int id of row from table whose records to be updated
     * @param @var array fields to insert data in
     * @return boolean
     */

    public function update($table, $id, $fields)
    {
        $set = '';
        $x = 1;
        foreach ($fields as $name => $value){
            $set .= "{$name} = ?";

            if ($x < count($fields)){
                $set .= ", ";
            }

        $x++;
        }

        $sql = "UPDATE {$table} SET {$set} WHERE id = {$id} ";

        if(!$this->query($sql,$fields)->error()){
            return true;
        }
        return false;

    }


    /**
     * returns the errors
     */

    public function error()
    {

        return $this->_error;
    }

    /**
     * returns first result in the array of results
     * @return @var array
     */

    public function first()
    {
        return $this->result()[0];
    }

    /**
     * returns the number of reuslts after a query is executed
     * @return int
     */

    public function count(){
        return $this->_count;
    }






}







?>