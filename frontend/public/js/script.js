function readURL(input) {
    if (input.files && input.files[0]) {

        let reader = new FileReader();

        reader.onload = function (e) {
            $(input).prev().children().attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(".image_input").change(function () {
    readURL(this);
});


$('input[name="contactNumber"]').keypress(function () {
    if (this.value.length >= 11) {
        return false;
    }
});

$('#input_r_Password, #input_r_ConfirmPassword').on('keyup', function () {
    if ($('#input_r_Password').val() == "" || $('#input_r_ConfirmPassword').val() == "") {

    } else if ($('#input_r_Password').val() == $('#input_r_ConfirmPassword').val()) {
        $('#message').html('Passwords Match').css('color', 'lightblue');
    } else {
        $('#message').html("Passwords does not match").css('color', 'darkred');
    }
});

$(document).ready(function () {
    $('#dataTable').DataTable();
});
