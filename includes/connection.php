<?php 

require_once 'config/settings.php';
$con = mysqli_connect($DBServer, $DBUser , $DBPass, $DBName);

if(!$con){
    die('Problem z pod��czeniem bazy' .mysqli_error());
}

?>