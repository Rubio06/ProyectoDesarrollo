
let btnCheck = document.getElementById("btnclientes");
let terminos = document.getElementById("terminos");
function checkBoton() {
    if (terminos.checked == true) {
        btnCheck.disabled = false;
        btnCheck.style.background = "rgba(5, 5, 59, 59)";
    }else{
        btnCheck.disabled = true;
        btnCheck.style.background = "rgba(5, 5, 59, 0.59)";
    }
}
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
function limpiarCampos(){
    document.getElementById("nombres").value ="";
    document.getElementById("paterno").value ="";
    document.getElementById("materno").value ="";
    document.getElementById("email").value ="";
    document.getElementById("dni").value ="";
    document.getElementById("celular").value ="";
    document.getElementById("comentario").value ="";
    document.getElementById("terminos").checked ="";
}
//REGISTRAR CLIENTES
function clientes(){
    let btnCheck = document.getElementById("btnclientes");
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("clientesRespuesta").innerHTML = this.response;
            limpiarCampos();
            btnCheck.disabled = true;
            btnCheck.style.background = "rgba(5, 5, 59, 0.59)";

            setTimeout(()=>{
                document.getElementById("clientesRespuesta").innerHTML = "";
            },3000)
        }
    }
    xhttp.open("POST","./consultas.php",true);
    data = new FormData();
    data.append("nombres", document.getElementById("nombres").value);
    data.append("paterno",document.getElementById("paterno").value);
    data.append("materno",document.getElementById("materno").value);
    data.append("email",document.getElementById("email").value);
    data.append("dni",document.getElementById("dni").value);
    data.append("celular",document.getElementById("celular").value);
    data.append("comentario",document.getElementById("comentario").value);
    data.append("op","mandarClientes");
    xhttp.send(data);
}
//MANDAR LINKS
function mandarLink(){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("sitios").innerHTML = this.response;
            document.getElementById("sitio").value = "";
        }
    }
    xhttp.open("POST","./consultas.php",true);
    data = new FormData();
    data.append("sitio", document.getElementById("sitio").value);
    data.append("op","mandarLink");
    xhttp.send(data);
}
//MANDAR SUGERENCIAS
function mandarSugerencias(){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("sugerencias").innerHTML = this.response;
            document.getElementById("sugerencias").value ="";
        }
    }
    xhttp.open("POST","./consultas.php",true);
    data = new FormData();
    data.append("sugerencias", document.getElementById("sugerencias").value);
    data.append("op","mandarSugerencias");
    xhttp.send(data);
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

//MENU HAMBURGESA 1
let btnAbrir = document.getElementById("btnAbrir");
let primerNav1 = document.getElementById("primerNav1");
let btnCerrar = document.getElementById("btnCerrar");


btnAbrir.addEventListener("click", ()=>{
    primerNav1.classList.add("visible");
});

btnCerrar.addEventListener("click", ()=>{
    primerNav1.classList.remove("visible");

});

//MENU HAMBURGESA 2
let btnabrirdos = document.getElementById("btn-Abrir2");
let ul = document.getElementById("ul");
let btncerrardos = document.getElementById("btn-cerrar2");


btnabrirdos.addEventListener("click", ()=>{
    ul.classList.add("visible2");

});

btncerrardos.addEventListener("click", ()=>{
    ul.classList.remove("visible2");
});



