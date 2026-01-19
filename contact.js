// e fshin red text si tifllosh me shkrujt per sdytsh
const inputs = ['name', 'email', 'message'];
inputs.forEach(id => {
    const el = document.getElementById(id);
    if (el) {
        el.addEventListener('input', function() {
            // i fshin krejt mesazhet kur ndrron dicka
            document.getElementById('mesazhi1').innerText = '';
            document.getElementById('mesazhi2').innerText = '';
            document.getElementById('mesazhi3').innerText = '';
            if(document.getElementById('mesazhi')) {
                document.getElementById('mesazhi').innerText = '';
            }
        });
    }
});


function Validate() {
    let name = document.getElementById('name');
    let email = document.getElementById('email');
    let message = document.getElementById('message');

    let errorFocus = null;
    let hasErrors = false;

    let regexName = /^[a-zA-Z\s]{3,}$/;
    let regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // i kontrollon krejt perniher a jon mir

    // emri
    if (name.value.trim() == "") {
        document.getElementById('mesazhi1').innerText = 'Please enter your name';
        if (!errorFocus) errorFocus = name;
        hasErrors = true;
    } else if (!(regexName.test(name.value))) {
        document.getElementById('mesazhi1').innerText = 'Name must be at least 3 letters';
        if (!errorFocus) errorFocus = name;
        hasErrors = true;
    }

    // email
    if (email.value.trim() == "") {
        document.getElementById('mesazhi2').innerText = 'Please enter your email';
        if (!errorFocus) errorFocus = email;
        hasErrors = true;
    } else if (!(regexEmail.test(email.value))) {
        document.getElementById('mesazhi2').innerText = 'Invalid email address';
        if (!errorFocus) errorFocus = email;
        hasErrors = true;
    }

    // mesazhi
    if (message.value.trim().length < 10) {
        document.getElementById('mesazhi3').innerText = 'Message must be at least 10 characters';
        if (!errorFocus) errorFocus = message;
        hasErrors = true;
    }


    if (hasErrors) {
        errorFocus.focus(); // e qon kursorin te fusha e par me gabime
        return false; // e nal faqen me bo refresh
    }

    // DING DING DING PO BON
    alert("Thank you! Your message for iSTUDIO has been sent.");
    document.getElementById('contactForm').reset();
    
    return false; // prap e nal refresh met kallxu qe hey kashku mesazhi
}