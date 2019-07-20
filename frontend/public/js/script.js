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
