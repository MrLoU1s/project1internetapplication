<?php
$servername = "localhost";
$username = "root";
$password = "232312"; 
$dbname = "IAPDB";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    //set the PDO error mode to exception
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);    
    echo "Connection Successful :)";
}
    catch(PDOException $e){
        echo "Connection failed: ". $e->getMessage();
    }

?>
 
