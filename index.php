<?php
 $request = $_SERVER['REQUEST_URI'];

$router =str_replace('/okna/','', $request);
$pattern = '/[0-9]$/';


if($router== ""){
    include('Szablony/home.php');
}else if($router == "user" ){
        include('Szablony/user.php');
}else if( preg_match("/user\/[0-9]/", $router)){

 include('Szablony/edit.php');
} else{
            include('Szablony/404.php');
        };



?>