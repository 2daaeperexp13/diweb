function volcarProducto(producto,container) {
    container.producto=producto;
    //ASGINO EL ID DEL PRDUCTO A CADA ELEMENTO QUE CONTENGA DATOS DEL MISMO
    container.attr("id",container.attr("id")+'_'+producto.id);
    $("#imgprod").attr({
        "id":$("#imgprod").attr("id")+'_'+producto.id,
        "src":producto.imagenes[0]
    });

    $("#nombre").attr({
        "id":$("#nombre").attr("id")+'_'+producto.id
    
    }).text(producto.nombre)
    $("#precio").attr("id",$("#precio").attr("id")+'_'+producto.id).text(producto.precio);
    
}

function cargaProductos(productos, productosContainer) {
    
    $.ajax({
        "url":"/prodIndex.html",
        "type": "GET",
        "success":  function (data) {
            productosContainer.append(data);
            let numP=productos.length;
            for (let i = 0; i < numP; i++){
                let producto=productos[i];
                let container= $("#producto").clone();
                //Compruebo si el usuario a iniciado sesión para mostrar o no 
                //la opción de añadir producto al carrito
                debugger;
                if($("header").find($("#login"))[0]) $(".sesion").hide();
                else $("#prodcarro").attr("id", $("#prodcarro").attr("id")+'_'+producto.id);
                volcarProducto(producto,$("#producto"));
                

                (i==productos.length-1)?'':productosContainer.append(container);
            }
        }
    })
    
}

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
