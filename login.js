let user = document.getElementById('user');
let psw = document.getElementById('password');

user.addEventListener('input', function() {
    document.getElementById('mesazhi1').innerText = '';
    document.getElementById('mesazhi').innerText = '';
});

psw.addEventListener('input', function() {
    document.getElementById('mesazhi2').innerText = '';
    document.getElementById('mesazhi').innerText = '';
});

function Validate(){
    let user =document.getElementById('user');
    let psw = document.getElementById('password');
    let errors=null;
    let errorsUser=null;
    let errorsPass=null;
    let error1=null;
    let regex1=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,}$/;

    if(user.value==""){
        errorsUser='Please enter your email';
        error1=user;
    }else if(!(regex1.test(user.value))){
        errorsUser='Please enter a valid email address';
        error1=user;
    }
   
    if(psw.value==""){
         errorsPass='Please enter your password';
        error1=psw;
    }
    if(errorsUser!=null && errorsPass!=null){
        errors=errorsUser+ " and "+errorsPass;
        var mesazhi = document.getElementById('mesazhi').innerText=errors;
        error1=user;
        error1.focus();
        return false;
    }else if(errorsUser!=null){
         var mesazhi1 = document.getElementById('mesazhi1').innerText=errorsUser;
          error1.focus();
        return false;
    }else{
         var mesazhi2 = document.getElementById('mesazhi2').innerText=errorsPass;
          error1.focus();
        return false;
    }
    /* if(errors!=null){
        var mesazhi= document.getElementById('mesazhi').innerText=errors;
        error1.focus();
        return false;
    } */

    return true;
}

