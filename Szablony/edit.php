<!DOCTYPE html>
<html>

<head>
	<title>EKO OKNA</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto&family=Russo+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>

<body>
<nav class="nav justify-content-start pt-2 pl-5">
	<h1 class="title text-white w-100 text-center pt-2">OKNA</h1>
<ul class="nav nav-pills mb-4">
			<li class="nav-item">
				<a class="nav-link active" href="http://localhost/okna/">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="http://localhost/okna/user">Dodaj</a>
			</li>

		</ul>
	</nav>
	<main class="main d-flex justify-content-center">
		<div class="card  mt-5 col-md-10 ">
			<div class="card-header text-center ">
				<h3>Edytuj użytkownika</h3>
			</div>

			<p class='text-danger text-center pt-2' id="message"></p>
			<p id="up-message" class="text-dark"></p>
			<p id="delete_message" class="text-danger">

			<form>
				<div class="form-row p-3" id="form">

				</div>
				<button type="button" class="btn btn-info mb-3" id="btn_update">Zaktualizuj</button>
				<button type="button" class="btn btn-danger mb-3" id="btn_delete">Usuń</button>
			</form>

		</div>
	</main>

	<footer class="footer mt-2 container-fluid pt-2 pb-2">
		<h4 class="text-center text-secondary"><a href="https://ekookna.pl/" title='ekookna.pl' target="_blank">Zapraszamy do naszej firmy</a></h4>
	</footer>

	 
	<script src=".././ajax/edit.js"></script>

</body>

</html>