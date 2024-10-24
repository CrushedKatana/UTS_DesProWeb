$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        let valid = true;
        let username = $('#username').val();
        let password = $('#password').val();
        
        if (username === '') {
            $('#usernameError').text('Must be filled');
            valid = false;
        } else {
            $('#usernameError').text('');
        }

        if (password === '') {
            $('#passwordError').text('Must be filled');
            valid = false;
        } else if (password.length > 6) {
            $('#passwordError').text('Password is more than 6 characters');
            valid = false;
        } else if (!/[A-Z]/.test(password) || !/[a-z]/.test(password)) {
            $('#passwordError').text('Password must be uppercase and lowercase.');
            valid = false;
        } else {
            $('#passwordError').text('');
        }

        if (!valid) {
            event.preventDefault();
        }
    });
});
