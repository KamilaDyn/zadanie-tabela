
<?php

require_once 'includes/connection.php';

global $con;

$method = $_SERVER['REQUEST_METHOD'];

if ('PUT' === $method) {
    parse_str(file_get_contents('php://input'), $_PUT);
    json_encode($_PUT);
}
    
$UpdateId = $_PUT['UpdateId'];
$UpdateFirst_name = $_PUT['UpdateFirst_name'];
$UpdateLast_name = $_PUT['UpdateLast_name'];
$UpdateStreet = $_PUT['UpdateStreet'];
$UpdatePostal_code = $_PUT['UpdatePostal_code'];
$UpdateCity = $_PUT['UpdateCity'];
$UpdateAge = $_PUT['UpdateAge'];
 
$query = "update list set 
first_name='$UpdateFirst_name',
 last_name='$UpdateLast_name',
 street='$UpdateStreet',
 postal_code ='$UpdatePostal_code',
 city = '$UpdateCity',
 age= '$UpdateAge'
 where id='$UpdateId'";

$result = mysqli_query($con, $query);

if ($result) {
    echo ' Twoje dane zostalły zmienione ';
} else {
    echo ' Wystąpił problem, sprawdź zapytanie. ';
}


?>