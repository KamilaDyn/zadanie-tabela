<?php 
require_once 'includes/connection.php';

      global $con;

      $method = $_SERVER['REQUEST_METHOD'];

if ('DELETE' === $method) {
    parse_str(file_get_contents('php://input'), $_DELETE);
    json_encode($_DELETE);
}
      
        $id = $_DELETE["deleteId"];
        $first_name = $_DELETE['first_name'];
        $last_name = $_DELETE['last_name'];
        $query = "delete from list where id='$id' ";

        $result = mysqli_query($con, $query);
        if($result)
        {
            echo 'Usunięty użytkownik:  '  .$first_name ." ".$last_name;
        }
        else
        {
            echo 'Problemy z usunięciem użytkownika';
        }
      

