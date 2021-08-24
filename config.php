<?php
define('DBSERVER','localhost');
define('DBUSERNAME','root');
define('DBPASSWORD','');
define('DBNAME','rental-system');

//CONNECT TO DB
$db = mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);

//CHECKING CONNECTION
if($db == false){
    die("Error: connection error." .mysqli_connect_error());
}
// else{
//     echo "connected to database";
// }


?>