<?php 

require_once 'config/settings.php';
$con = mysqli_connect($DBServer, $DBUser , $DBPass, $DBName);

if(!$con){
    die('Problem z podłączeniem bazy' .mysqli_error());
}

?>