<?php
//creating constants

//use define
//identifier- value
// change DBTYPE to MySQLi if you want to use MySQLi
define('DBTYPE','PDO' );
define('HOSTNAME','localhost' );
define('DBPORT','3307' ); 
define('HOSTUSER','root' );
define('HOSTPASS','232312' );
define('DBNAME','IAPDB' );

// print date("l"); // Prints the full day name (e.g., Sunday, Monday, Tuesday)

// if (date("l") == "Sunday") {
//     print "Yes";
// } else {
//     print "No";
// }

//using switch
print "<br>";

switch (date("1")){
    case 'Sunday': "Yes";
    break;
    case 'Monday' : "No";
}




