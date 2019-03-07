function cambiarCatSelect(){
    $.getJSON("http://localhost:8000/api/listarCategorias", function( data ){
        var ultimaCategoria = data[data.length-1];
        // console.log(ultimaCategoria);
        $(lugar_categoria).append(new Option(ultimaCategoria["nombre"], ultimaCategoria["id"]));
    });
}

function nuevaCatAdd(){
    var ejecutarNuevaCat = $.post("http://localhost:8000/api/insertarCategoria/"+$(nuevaCat).val(), function(){
        $(nuevaCat).val("");
        cambiarCatSelect();
        alert("Nueva categoria insertada");
    })
    .fail(function(){
        alert("Se ha producido un error");
    })
}