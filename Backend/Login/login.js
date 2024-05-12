$(document).ready(function() {
    $('#login-form').submit(function(event) {
        event.preventDefault();
        login();
    });
});

function login() {
    var form = $('#login-form');
    var formData = form.serialize();
    console.log(formData);

    $.ajax({
        type: 'POST',
        url: '/recyclemart/backend/login/login.php',
        data: formData,
        success: function(response){
            if (response.trim() === "pass") {
                window.location.href = '/recyclemart/Pages/shopPage/shopPage.php';
            } else {
                $('.invalid-account').text('Invalid username or password');
            }
        },
    });
}
