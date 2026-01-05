let fullName = document.getElementById('fullname');
let email = document.getElementById('email');
let password = document.getElementById('password');
let confirmPassword = document.getElementById('confirmPassword');

fullName.addEventListener('input', function() {
    document.getElementById('mesazhiName').innerText = '';
});

email.addEventListener('input', function() {
    document.getElementById('mesazhiEmail').innerText = '';
});

password.addEventListener('input', function() {
    document.getElementById('mesazhiPassword').innerText = '';
});

confirmPassword.addEventListener('input', function() {
    document.getElementById('mesazhiConfirm').innerText = '';
});

function ValidateSignup() {
    let errorsFullName = null;
    let errorsEmail = null;
    let errorsPassword = null;
    let errorsConfirm = null;
    let errorField = null;

    let regexName = /^[A-Za-z\s]{3,}$/;
    let regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let regexPassword = /^(?=.*\d)(?=.*[!@#$%])[A-Za-z\d!@#$%]{12,}$/;

    
    if (fullName.value.trim() === '') {
        errorsFullName = 'Please enter your full name';
        errorField = fullName;
    } else if (!regexName.test(fullName.value.trim())) {
        errorsFullName = 'Full name must be ≥ 3 letters';
        errorField = fullName;
    }

    
    if (email.value.trim() === '') {
        errorsEmail = 'Please enter your email';
        errorField = email;
    } else if (!regexEmail.test(email.value.trim())) {
        errorsEmail = 'Enter a valid email address';
        errorField = email;
    }

   
    if (password.value === '') {
        errorsPassword = 'Please enter your password';
        errorField = password;
    } else if (!regexPassword.test(password.value)) {
        errorsPassword = 'Password ≥ 12 chars, 1 symbol & 1 digit';
        errorField = password;
    }

   
    if (confirmPassword.value === '') {
        errorsConfirm = 'Please confirm your password';
        errorField = confirmPassword;
    } else if (confirmPassword.value !== password.value) {
        errorsConfirm = 'Passwords do not match';
        errorField = confirmPassword;
    }

    
    document.getElementById('mesazhiName').innerText = errorsFullName;
    document.getElementById('mesazhiEmail').innerText = errorsEmail;
    document.getElementById('mesazhiPassword').innerText = errorsPassword;
    document.getElementById('mesazhiConfirm').innerText = errorsConfirm;

    if (errorField) {
        errorField.focus();
        return false;
    }

    return true;
}
