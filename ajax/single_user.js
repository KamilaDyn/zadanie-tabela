$(document).ready(function () {

    getId();
    update();
    delete_record();

});

function getId() {
    var url = document.URL;
    var url_array = url.split('/');
    let last_segment = url_array[url_array.length - 1];
    console.log(last_segment);

    $.ajax({
        url: '../get_single.php',
        method: 'GET',
        data: {
            UserId: last_segment
        },
        dataType: 'json',

        success: function (data) {
            $('#form').html(data);
            $('#first_name').val(data.first_name);
            $('#id').val(data.id);
            $('#last_name').val(data.last_name);

            if (data.status == 'success') {
                $('#form').html(data.html);
            }


        }
    });

}
/// edytuj istniejące dane

function update() {

    $(document).on('click', '#btn_update', function () {
        var updateId = $('#id').val();
        var updateFirst_name = $('#first_name').val();
        var updateLast_name = $('#last_name').val();
        var updateStreet = $('#street').val();
        var updatePostal_code = $('#postal_code').val();
        var updateAge = $('#age').val();
        var updateCity = $('#city').val();
        console.log(updateId, updateFirst_name, updateLast_name, updateStreet);

        if (updateFirst_name == "" || updateLast_name == "") {
            $('#up-message').html('uzupełnij puste pola');

        } else {



            $.ajax({
                url: '../update.php',
                method: 'PUT',
                contentType: 'json',

                data: {
                    UpdateId: updateId,
                    UpdateFirst_name: updateFirst_name,
                    UpdateLast_name: updateLast_name,
                    UpdateStreet: updateStreet,
                    UpdatePostal_code: updatePostal_code,
                    UpdateAge: updateAge,
                    UpdateCity: updateCity,

                },
                success: function (data) {
                    $('#message').html(data);
                }
            });

        }

    })

}

// usuń użytkownika

function delete_record() {

    $(document).on('click', '#btn_delete', function () {
        var deleteId = $('#id').val();
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();

        $.ajax({
            url: '../delete.php',
            type: 'DELETE',

            data: {
                deleteId: deleteId,
                first_name: first_name,
                last_name: last_name,

            },
            success: function (data) {
                $('#delete_message').html(data);
                var url = `http://localhost/ekookna/`;
                setTimeout(() => {
                    $(location).attr('href', url);
                }, 1500);
            }
        });

    })


}