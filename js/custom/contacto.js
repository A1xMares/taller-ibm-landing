//-----------------------------------------------
//-------  CARGA DEL DOM 
//-----------------------------------------------
document.addEventListener("DOMContentLoaded", function(event) {
    var asunto = document.getElementById('asunto');
    var otroAsunto = document.getElementById('otroAsunto');
    asunto.addEventListener("change", function() {
        if(asunto.value == "cotizacion"){
            otroAsunto.value = "";
            otroAsunto.disabled = true;
        } else if(asunto.value == "duda"){
            otroAsunto.value = "";
            otroAsunto.disabled = true;
        } else if(asunto.value == "estado"){
            otroAsunto.value = "";
            otroAsunto.disabled = true;
        } else {
            otroAsunto.disabled = false;
        }
    });
});