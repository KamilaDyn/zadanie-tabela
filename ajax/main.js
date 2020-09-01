$(document).ready(function () {
	insert_record();
	get_records();
	get_singleRecord();

});

// wyświetl wszystkie elementy

function get_records() {

	$.ajax({
		url: 'get.php',
		method: 'GET',
		dataType: 'json',
		success: function (data) {
			if (data.status == 'success') {
				$('#table').html(data.html);
			}
		},
	})
}

//pobierz pojedyńczy element

function get_singleRecord() {
	$(document).on("click", "#btn_edit", function (e) {
		e.preventDefault();

		var ID = $(this).attr('data-id');

		var url = `http://localhost/ekookna/user/${ID}`;

		$(location).attr('href', url);

	});
}

// dodaj nowego użytkownika

function insert_record() {

	$(document).on('click', '#btn_register', function () {
		var first_name = $('#first_name').val();
		var last_name = $('#last_name').val();
		var city = $('#city').val();
		var postal_code = $('#postal_code').val();
		var street = $('#street').val();
		var age = $('#age').val();

		if (first_name == "" || last_name == "" || street == "" || city == "" || postal_code == "") {
			$('#message').html('Proszę uzupełnić wszystkie miejsca');
		} else {
			$.ajax({
				url: 'insert.php',
				method: 'POST',
				data: {
					Ufirst_name: first_name,
					Ulast_name: last_name,
					Ucity: city,
					Upostal_code: postal_code,
					Ustreet: street,
					Uage: age,
				},
				success: function (data) {
					$('#message').html(data);
					$('#form').trigger('reset');
				}
			})
		}
	})

}