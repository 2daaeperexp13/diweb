function mostrarCarrito(productos) {
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
                    $("#precioCantidad").text(producto.precio*producto.cantidad+" €").attr("id","precioCantidad"+producto.id);
                    $("#cantidad").attr("id","cantidad"+producto.id).val(producto.cantidad).on("change",function(){
                        if($(this).val()<1)$(this).val(1);
                        $("#precioCantidad"+producto.id).text(producto.precio*$(this).val()+" €");
                        calcularTotal(productos);
                    }).on("blur",function(){

                        quitarProducto(producto,function(){
                            añadiraCarrito(producto,$("#cantidad"+producto.id).val(),true);
                        });
                        
                    });
                    
                    
                    $("#carritoOut").attr("id","carritoOut"+producto.id).on("click",function (){
                        if(confirm("¿Estás seguro de eliminar el producto del carrito?"))quitarProducto(producto);
                        
                    });
                    $("a.prodmod").on("click",function(){
                       datosModal(producto);
                    });
                    $("#listaCarrito").append(plantillaProducto);
                });
                $("#productocarro").remove();
                calcularSubotal(productos);
                calcularTotal(productos);
            }
        });
        $("#continuarComprando").on("click",function(){
            cargarPaginaProductos()
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
function calcularSubotal(productos) {
    var subtotal=0;
    productos.forEach(producto=>{

        subtotal=subtotal + $("#precioProducto"+producto.id).text().split("€")[0]*1;
    });
    $("#subtotal").text(subtotal+" €");
}
function vaciarCarrito() {
    $("#prodEnCarro").text("(0)");
    carrito={};
    $.ajax({
        "url":"/pedido/guardarCarrito",
            "type":"post",
            "data": {"carrito":carrito},
            "success": function(data){
                if(data){
                    localStorage.setItem("carrito",JSON.stringify(data));
                    $("#listaCarrito").empty();
                    $("#subtotal").text("0 €");
                    $("#total").text("0 €");
                }
            }
    });
    
}
function quitarProducto(producto,callback=null){
    var carrito=JSON.parse(localStorage.getItem("carrito"));
        delete carrito["producto"+producto.id];
    $.ajax({
        "url":"/pedido/guardarCarrito",
            "type":"post",
            "data": {"carrito":carrito},
            "success": function(data){
                if(data){
                    localStorage.setItem("carrito",JSON.stringify(data));
                    if(callback!=null) callback();
                    else{
                        
                        $("#productocarro"+producto.id).remove();
                        modificarCarritoHeader(false);
                        calcularSubotal(Object.values(data));
                        calcularTotal(Object.values(data));
                    }

                }
            }
    });
}

mostrarCarrito(Object.values(JSON.parse(localStorage.getItem("carrito"))));

$("#vaciar").on("click",function(){
    vaciarCarrito();
});

$("#comprar").on("click",function(){
    $("#pagina").load("comprar.html");
});