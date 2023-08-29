document.getElementById("btn_iniciarSesion").addEventListener("click",iniciarSesion);
document.getElementById("btn_registrarse").addEventListener("click",register);
window.addEventListener("resize",anchoPagina);


//Declaración de variables 
var contenedorLogin_Register = document.querySelector(".contenedorLogin-Register");
var formulario_Login = document.querySelector(".formulario-Login");
var formulario_Register = document.querySelector(".formulario-Register");
var cajaTracera_Login = document.querySelector(".cajaTrasera-Login");
var cajaTracera_Register = document.querySelector(".cajaTrasera-Register");

//**Funciones--------------------------------------------------------------<
function anchoPagina(){
    if(window.innerWidth > 850){
        cajaTracera_Login.style.display = "block";
        cajaTracera_Register.style.display = "block";
    }else{
        cajaTracera_Register.style.display = "block";
        cajaTracera_Register.style.opacity = "1";
        cajaTracera_Login.style.display = "none";
        formulario_Login.style.display = "block";
        formulario_Register.style.display = "none";
        contenedorLogin_Register.style.left = "0";
    }
}

anchoPagina();


function iniciarSesion(){

    if(window.innerWidth > 850){
        formulario_Register.style.display = "none";
        contenedorLogin_Register.style.left = "10px";
        formulario_Login.style.display = "block";
        cajaTracera_Register.style.opacity = "1";
        cajaTracera_Login.style.opacity = "0";
    }else{
        formulario_Register.style.display = "none";
        contenedorLogin_Register.style.left = "0px";
        formulario_Login.style.display = "block";
        cajaTracera_Register.style.display = "block";
        cajaTracera_Login.style.display = "none";

    }    
}

function register(){

    if(window.innerWidth > 850){
        formulario_Register.style.display = "block";
        contenedorLogin_Register.style.left = "410px";
        formulario_Login.style.display = "none";
        cajaTracera_Register.style.opacity = "0";
        cajaTracera_Login.style.opacity = "1";
    }else{
        formulario_Register.style.display = "block";
        contenedorLogin_Register.style.left = "0px";
        formulario_Login.style.display = "none";
        cajaTracera_Register.style.display = "none";
        cajaTracera_Login.style.display = "block";
        cajaTracera_Login.style.opacity = "1";
    }
}