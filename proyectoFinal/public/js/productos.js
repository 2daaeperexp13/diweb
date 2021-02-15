$(document).ready(function(){
    var productosContainer= $("#productosIndex")

    $.ajax({
        "url":"/producto/prodindex",
        "dataType": "json",
        "type": "GET",
        "success":  function (data) {
            cargaProductos(data,productosContainer);
        }
    })
    
});