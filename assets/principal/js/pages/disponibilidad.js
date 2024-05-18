const frm = document.querySelector('#formulario')

document.addEventListener('DOMContentLoaded', function(){
    
    //VALIDAR CAMPOS
    frm.addEventListener('submit', function(e){
        e.preventDefault();
        if (frm.f_salida.value == '' 
        || frm.f_llegada.value == '' 
        || frm.habitacion.value == '') {
            alertaSW('TODOS LOS CAMPOS SON REQUERIDOS', 'warning');
        }else{
            this.submit();
        }

    });
})