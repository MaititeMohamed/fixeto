  //variable 
  const email=document.getElementById("email");
  const Password=document.getElementById("Password");
  const login=document.getElementById("login");
   var inputVnum=0;
  //event 
email.addEventListener("focusout", valdateemail);
Password.addEventListener("focusout", validatepass);
Password.addEventListener("focusout", activelogin);

//valdateemail 
function valdateemail(){
    let mail = email.value;
    if (mail == "" && !mail.match(/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/)) {
        email.classList.add("Danger");
    } 
    else {
        email.classList.remove("Danger");
        inputVnum++;
    }
}
//validatepass
function validatepass() {
    let pass = Password.value;
    if (pass == "" && !pass.match(/^[0-9]{6}$/)) {
    
    Password.classList.add("Danger");
    } else {
    Password.classList.remove("Danger"); 
    inputVnum++;
     }
   
}

//acive login button if inputVnum=2
    function activelogin(){
        if(inputVnum==2){
            login.disabled=false;
        }
    }