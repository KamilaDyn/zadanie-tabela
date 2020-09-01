<?php
require_once  'includes/connection.php';

global $con;
$value = "";
$value .= '<table class="table table-hover"> <thead class="table-primary"><tr class="tableRow">
<th scope="col" class="text-white" hidden>User id</th>
<th scope="col " class="text-white">Imię</th>
<th scope="col" class="text-white">Nazwisko</th>
<th scope="col" class="text-white">Ulica</th>
<th scope="col" class="text-white">Kod pocztowy</th>
<th scope="col" class="text-white">Miasto</th>
<th scope="col" class="text-white">Wiek</th>
<th scope="col" class="text-white">Edytuj</th>
</tr>
 </thead><tbody>';
$query = "SELECT * FROM list ";
$result = mysqli_query($con, $query);
$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $value .= '<tr id="' . $row['id'] . '">
<td scope="row" hidden>' . $row['id'] . '</td>
<td data-target="first_name">' . $row['first_name'] . '</td>
<td data-target="last_name">' . $row['last_name'] . '</td>
<td data-target="street">' . $row['street'] . '</td>
<td data-target="postal_code">' . $row['postal_code'] . '</td>
<td data-target="city">' . $row['city'] . '</td>
<td data-target="age">' . $row['age'] . '</td>
<td><div class="btn btn-info" id="btn_edit" data-id=' . $row['id'] . '>Edytuj</div></td>
</tr>
';
}
$value .= '</tbody></table>';
echo json_encode(['status' => 'success', 'html' => $value]);
