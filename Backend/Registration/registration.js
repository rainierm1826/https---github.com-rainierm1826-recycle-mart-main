// send data to registration js to registration php
$(document).ready(function() {
  $('#registration-form').submit(function(event) {
      event.preventDefault();

      register();
  });
});

function register() {
  var form = $('#registration-form');
  var formData = form.serialize();

  $.ajax({
      type: 'POST',
      url: '/recyclemart/backend/registration/registration.php',
      data: formData,
      success: function(response){
        var errors = response.split(':');
        if (errors[0] === "Registration successful.") {
            $('#response').text(errors[0]);
            $('#username-err').text('');
            $('#full-name-err').text('');
            $('#password-err').text('');
            $('#address-err').text('');
            $('#contact-number-err').text('');
            $('#confirm-password-err').text('');
        } else if (errors[1] === "Username is already taken.") {
            $('#username-err').text(errors[1]);
            $('#response').text('');
        } else {
            $('#username-err').text(errors[0]);
            $('#full-name-err').text(errors[1]);
            $('#password-err').text(errors[2]);
            $('#address-err').text(errors[3]);
            $('#contact-number-err').text(errors[4]);
            $('#confirm-password-err').text(errors[5]);
            $('#response').text('');
        }
    },
    
  });
}