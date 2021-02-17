function mostrarCarrito(productos,cantidad=1) {
    if(productos.length!=0){
        var plantillaProducto="";
        var contenedorProd="";
        $.ajax({
            "url":"/prodCarrito.html",
            "type":"get",
            "success": function (data) {
                $("#listaCarrito").append(data);
                productos.forEach(producto => {
                    plantillaProducto=$("#productocarro").clone();
                    contenedorProd=$("#productocarro").attr("id","productocarro"+producto.id);
                    contenedorProd.find("img").first().attr("src",producto.imagenes[0]).addClass("rounded-circle");
                    $("#nombreProducto").text(producto.nombre).attr("id","nombreProducto"+producto.id);
                    $("#precioProducto").text(producto.precio+" €").attr("id","precioProducto"+producto.id);
                    $("#subtotal").text(($("#subtotal").text().split("€")[0]*1 + producto.precio)+" €");
                    $("#precioCantidad").text(producto.precio*cantidad+" €").attr("id","precioCantidad"+producto.id);
                    $("#cantidad").attr("id","cantidad"+producto.id).on("change",function(){
                        if($(this).val()<1)$(this).val(1);
                        $("#precioCantidad"+producto.id).text(producto.precio*$(this).val()+" €");
                        calcularTotal(productos);
                    });
                    $("#total").text($("#subtotal").text());
                    $("#carritoOut").attr("id","carritoOut"+producto.id).on("click",function (){
                        if(confirm("¿Estás seguro de eliminar el producto del carrito?"))quitarProducto(producto);
                        
                    });
                    $("#listaCarrito").append(plantillaProducto);
                });
                $("#productocarro").remove();
            }
        });
    }
}
function calcularTotal(productos) {
    var total=0;
    productos.forEach(producto=>{

        total=total + $("#precioCantidad"+producto.id).text().split("€")[0]*1;
    });
    $("#total").text(total+" €");
}
function quitarProducto(producto){
    $.ajax({
        "url":"/pedido/carritoProductoOut",
            "type":"post",
            "data": {"producto":producto.id},
            "success": function(data){
                if(data){
                    var productoStorage=JSON.parse(localStorage.getItem("carrito"));
                    productoStorage.splice(productoStorage.indexOf(producto),1);
                    localStorage.setItem("carrito",JSON.stringify(productoStorage));
                    $("#productocarro"+producto.id).remove();
                    
                    
                }
            }
    });
}
mostrarCarrito(JSON.parse(localStorage.getItem("carrito")));
