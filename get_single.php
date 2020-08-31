<?php

require_once 'includes/connection.php';

global $con;
$value = "";

$query = "SELECT * FROM list  WHERE id='" . $_GET['UserId'] . "' ";
$result = mysqli_query($con, $query);
$data = array();

while ($row = mysqli_fetch_assoc($result)) {

  $value = '
<div class="form-group col-md-6">
  <label for="first_name">Imię</label>
<input type="text" name="first_name" class="form-control" id="first_name" value="' . $row['first_name'] . '" >
</div>
<div class="form-group col-md-6">
  <label for="last_name">Nazwisko</label>
<input id="last_name" type="text" name="last_name" class="form-control" value="' . $row['last_name'] . '" >
</div>
<div class="form-group col-md-6 ">
  <label for="street">Nazwa ulicy</label>
<input id="street" type="text" name="street"  class="form-control" value="' . $row['street'] . '" >
</div>
<div class="form-group col-md-6">
  <label for="postal_code">Kod pocztowy</label>
<input id="postal_code" type="text" name="postal_code"  class="form-control" value="' . $row['postal_code'] . '">
</div>
<div class="form-group col-md-6">
  <label for="city">Miasto</label>
<input id="city" type="text" name="city" class="form-control"  value="' . $row['city'] . '">
</div>
<div class="form-group col-md-6">
  <label for="age">Age</label>
<input id="age" type="text" name="age" class="form-control" value="' . $row['age'] . '" >
</div>
<input type="hidden" id="id" name="id" value="' . $row['id'] . '">
';
}

echo json_encode(['status' => 'success', 'html' => $value]);

// update elemenent PUT method
