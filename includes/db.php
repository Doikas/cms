<?php 
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

//we can use this its work but its seems like an error $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$connection = mysqli_connect('localhost', 'root', '', 'cms');
// if($connection){
//     echo "we are connected";

// }
// i have to test it first
// $query = "SET NAMES utf8";
// mysqli_query($connection,$query);

?>