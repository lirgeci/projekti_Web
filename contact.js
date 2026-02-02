let name1 = document.getElementById('name');
let email = document.getElementById('email');
let message=document.getElementById('message');

name1.addEventListener("input",function(){
    document.getElementById('m').innerText="";
   
})

email.addEventListener("input",function(){
    document.getElementById('m').innerText="";
})

function Validate(){
    
let name = document.getElementById('name').value
let email = document.getElementById('email').value
let message=document.getElementById('message').value;
let regName=/^[a-zA-Z0-9]{3,}$/;
let regEmail=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,}$/;
    if(name.trim()=="" || email.trim()=="" || message.trim()==""){
        document.getElementById('m').innerText='Fill all fields!';
        return false;
    } else if(!regName.test(name)){
         document.getElementById('m').innerHTML='Enter valid name!';
        return false;
    }else if(!regEmail.test(email)){
        document.getElementById('m').innerHTML='Enter valid email!';
        return false
    }
    return true;
   
}

