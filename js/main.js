
// /MODAL / //
let modal = document.getElementById('miModal');
let flex = document.getElementById('flex');
let abrir = document.getElementById('abrir');
let cerrar = document.getElementById('close');

abrir.addEventListener('click', function () {
    modal.style.display = 'block';
});

cerrar.addEventListener('click', function () {
    modal.style.display = 'none';
});

window.addEventListener('click', function (e) {
    console.log(e.target);
    if (e.target == flex) {
        modal.style.display = 'none';
    }
});

function cargarurl(url,contenedor){
    var url = url;
    var contenedor = contenedor;

    $.get(url,{}, function(data){
        $("#" + contenedor).html(data);
    });
}
function clientes(contenedor) {
    //Variables que proviene del formulario de insertar.php
    var nombres = $('#nombres').val();
    var paterno = $('#paterno').val();
    var materno = $('#materno').val();
    var email = $('#email').val();
    var dni = $('#dni').val();
    var celular = $('#celular').val();
    var comentario = $('#comentario').val();
    var terminos = $('#terminos').val();

    //Variables que recogemos como parámetro de la función
    var contenedor = contenedor;
    var expresion = /\w+@\w+\.+[a-z]/;
    if (nombres === "" || paterno === "" || materno ==="" || email ==="" || dni ==="" || celular ==="" || comentario ==="") {
        alert("ALGUNOS DE LOS CAMPOS ESTAN VACIOS, INTENTE NUEVAMENTE");
    } else if(nombres.length > 15){
        alert("EL NOMBRE NO DEBE DE SOBREPASAR LOS 15 CARACTERES");
    
    } else if(paterno.length > 10){
        alert("EL APELLIDO PATERNO NO DEBE DE SOBREPASAR LOS 10 CARACTERES");

    } else if(materno.length > 10){
        alert("EL APELLIDO MATERNO NO DEBE DE SOBREPASAR LOS 10 CARACTERESO");

    }else if(!expresion.test(email)){
        alert("EL CORREO NO ES VALIDO");

    } else if(email.length > 50){
        alert("EL EMAIL NO DEBE DE SOBREPASAR LOS 50 CARACTERES");

    } else if(dni.length > 8){
        alert("EL DNI NO DEBE DE SOBREPASAR LOS 8 CARACTERES");

    } else if(celular.length > 9){
        alert("EL CELULAR NO DEBE DE SOBREPASAR LOS 9 CARACTERES");

    } else if(comentario.length > 100){
        alert("EL COMENTARIO NO DEBE DE SOBREPASAR LOS 100 CARACTERES");

    } else if(terminos.checked === ""){
        alert("LOS TERMINOS DEBEN DE ESTAR CHEKEADOS");
    }else{
        $.get("consultabd.php", {
            nombres: nombres,
            paterno: paterno,
            materno: materno,
            email: email,
            dni: dni,
            celular:celular,
            comentario:comentario,
            terminos:terminos
            
        }, function (data) {
            $("#" + contenedor).html(data);
            document.getElementById("nombres").value = "";
            document.getElementById("paterno").value = "";
            document.getElementById("materno").value = "";
            document.getElementById("email").value = "";
            document.getElementById("dni").value= "";
            document.getElementById("celular").value = "";
            document.getElementById("comentario").value = "";
            document.getElementById("terminos").checked = "";
        });
    }
}
// funccion checked
let terminos = document.getElementById("terminos");
function enviar(){
    if (terminos.checked == true) {
        terminos.value = "ACEPTADO";
    } else if(terminos.checked == false){
        terminos.value = "NO ACEPTADO";
    }
}

/* DESAPARECER Y APARECER PARRAFO*/
let parrafo = document.getElementById("parrafo");
let desaparecer = document.querySelector(".desaparecer");
function ocultar(){
    parrafo.classList.toggle("desaparecer");
    document.querySelector(".div-iconospreguntas i").classList.toggle("fa-circle-arrow-down");
}
let parrafo1 = document.getElementById("parrafo1");
function ocultar1(){
    parrafo1.classList.toggle("desaparecer");
    document.querySelector(".div-iconospreguntas1 i").classList.toggle("fa-circle-arrow-down");
}
let parrafo2 = document.getElementById("parrafo2");
function ocultar2(){
    parrafo2.classList.toggle("desaparecer");
    document.querySelector(".div-iconospreguntas2 i").classList.toggle("fa-circle-arrow-down");
}
let parrafo3 = document.getElementById("parrafo3");
function ocultar3(){
    parrafo3.classList.toggle("desaparecer");
    document.querySelector(".div-iconospreguntas3 i").classList.toggle("fa-circle-arrow-down");
}