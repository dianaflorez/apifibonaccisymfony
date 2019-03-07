var tiposValidos = ['image/jpeg', 'image/png'];

function validarTipo(file){
    for(var i = 0; i<tiposValidos.length; i++){
        if(file.type ===  tiposValidos[i]){
            return true;
        }
    }
    return false;
}
function onChange(event){
    // alert('HOLA');
    var file = event.target.files[0];
    if(validarTipo(file)){
        var lugarMiniatura = document.getElementById('lugarThumb');
        lugarMiniatura.src = window.URL.createObjectURL(file);
    }
}