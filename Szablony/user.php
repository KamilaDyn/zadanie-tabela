<?php include_once 'header.php';
?>
<main class="d-flex justify-content-center">
<p id="added-user"></p>
<div class="card  mt-5 col-md-10 ">
  <div class="card-header text-center ">
<h3>Rejestracja nowego użytkownika</h3>
  </div>

<p class='text-danger text-center pt-2'id="message"></p>
<form  action="" id="form" >
<div  class="form-row p-3">
<div class="form-group col-md-12">
<input type="text" id="id" class="form-control" style="display:none;">
</div>
<div class="form-group col-md-6">
  <label for="first_name">Imię</label>
<input type="text" placeholder="imię"  class="form-control" id="first_name">
</div>
<div class="form-group col-md-6">
  <label for="last_name">Nazwisko</label>
<input id="last_name" type="text"  class="form-control" placeholder="nazwisko">
</div>
<div class="form-group col-md-6 ">
  <label for="street">Nazwa ulicy</label>
<input id="street" type="text"  class="form-control" placeholder="ulica">
</div>
<div class="form-group col-md-6">
  <label for="postal_code">Kod pocztowy</label>
<input id="postal_code" type="text"  class="form-control" placeholder="kod pocztowy">
</div>
<div class="form-group col-md-6">
  <label for="city">Miasto</label>
<input id="city" type="text" class="form-control" placeholder="miasto">
</div>
<div class="form-group col-md-6">
  <label for="age">Wiek</label>
<input id="age" type="text" class="form-control" placeholder="wiek">
</div>
</div>
<button type="button"  class="btn btn-info mb-3" id="btn_register">Zarejestruj</button>
</form>

</div>
</main>
<?php  require_once 'footer.php';?>