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

print "<br>";
print "<br>";

//checks if file exists
if(file_exists("index.php")){
    print "File exists";
}
else{
    print "File does not exist";
}

print "<br>";
print "<br>";

//checks if it is a file
if(is_file("index.php")){
    print "It is a file";
}
else{
    print "It is not a file";
}

?>