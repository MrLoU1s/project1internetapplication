<?php
class dbConnection{
    //creating properies
    private $connection;

    private $db_type;
    private $db_host;
    private $db_port;
    private $db_user;
    private $db_pass;
    private $db_name;

    //defining construct/magic function
    public function __construct( $db_type,$db_host,$db_port,$db_user,$db_pass,$db_name){
        //$this is for properties already defined in the object
        $this->db_type= $db_type;
        $this->db_host= $db_host;   
        $this->db_port= $db_port;
        $this->db_user= $db_user;
        $this->db_pass= $db_pass;
        $this->db_name= $db_name;

        $this->connection($db_type,$db_host,$db_port,$db_user,$db_pass,$db_name);
    }
    //creating connection itself
    public function connection($db_type,$db_host,$db_port,$db_user,$db_pass,$db_name){

        switch($db_type){
            case 'PDO':
                if($db_port<>Null){
                    $db_port.=":" . $db_port;  
                }
                try {
                    $this -> connection = new PDO("mysql:host=$db_host;dbname=$db_name",$db_pass,$db_user);
                    //set the PDO error mode to exception
                    $this ->connection-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);    
                    echo "Connection Successful :)";
                }
                    catch(PDOException $e){
                        return "Connection failed: ". $e->getMessage();
                    }
                    break;
                    case 'MySQLi':
                        $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
                        if ($this->connection->connect_error) {
                            echo "MySQLi Connection failed: " . $this->connection->connect_error . "\n";
                        } else {
                            echo " Connection successful :)\n";
                        }
                        break;

                        default:
                            echo "Invalid DB type\n";
                            break;
                        

        }

    }

}

