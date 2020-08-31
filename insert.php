<?php 

require_once 'includes/connection.php';
global $con;
$first_name = $_POST['Ufirst_name'];
$last_name = $_POST['Ulast_name'];
$street = $_POST['Ustreet'];
$postal_code = $_POST['Upostal_code'];
$city= $_POST['Ucity'];

$query = "insert into 
list 
(first_name, last_name, postal_code, street, city) 
values 
('$first_name', '$last_name', '$postal_code', '$street', '$city') ";
$result= mysqli_query($con,$query);

if($result){
    echo 'Użytkownik ' .$first_name ." " .$last_name .' został zapisany. </br> Dodaj kolejnego użytkownika';
}else{
    echo 'Wystąpił błąd, użytkownik ' .$first_name ." " .$last_name .' nie został zapisany.';
}
?>

