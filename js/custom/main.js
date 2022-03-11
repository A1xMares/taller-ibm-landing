//-----------------------------------------------
//-------  MENSAJE DE COOKIES Y PROVACIDAD
//-----------------------------------------------
document.addEventListener("DOMContentLoaded", function(event) {
    var cookies = localStorage.getItem('cookies') != null && localStorage.getItem('cookies') != undefined ? localStorage.getItem('cookies') : '';
    if(cookies != ''){
        document.getElementById('cookiesAlert').classList.add('cerrar');
    } else {
        var cerrar = document.getElementById('cerrarCookies');
        cerrar.addEventListener("click", function() {
            document.getElementById('cookiesAlert').classList.add('cerrar');
            localStorage.setItem('cookies', "cerrado")
        });
    }
});