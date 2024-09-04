<?php

require_once "user_details.php";

$obj = new user_details();


$arr = ["black","white","green","yellow"];

foreach($arr AS $color){
    print $color. "<br>";
}

//brings path of current directory!
print dirname(__FILE__);
print "<br>";
print "<br>";

//shows the current file name
print basename($_SERVER["PHPh_SELF"]);


?>