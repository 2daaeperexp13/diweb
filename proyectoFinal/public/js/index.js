var productos=[];

function volcarProducto(producto,container) {
    
    //ASGINO EL ID DEL PRDUCTO A CADA ELEMENTO QUE CONTENGA DATOS DEL MISMO
    container.attr("id",container.attr("id")+producto.id);
    $("#imgprod").attr({
        "id":$("#imgprod").attr("id")+producto.id,
        "src":producto.imagenes[0]
    });

    $("#nombre").attr({
        "id":$("#nombre").attr("id")+producto.id
    
    }).text(producto.nombre)
    $("#precio").attr("id",$("#precio").attr("id")+producto.id).text(producto.precio);
    container.find("a").eq(2).on("click",function(){
        var modal=$("#productView");
        modal.find("a").first().attr("href",producto.imagenes[0]).css("background-image",'url("'+producto.imagenes[0]+'")');
        var carrusel=modal.find("a").first().parent();
        var numImg=producto.imagenes.length;
        for (let i = 1; i < numImg; i++) {
            let imagen=producto.imagenes[i];
            carrusel.append('<a class="d-none" href="'+imagen+'" title="'+producto.nombre+'" data-lightbox="productview"></a>');
        }
        modal.find("h2").first().text(producto.nombre).next().text(producto.precio+"€").next().text(producto.descripcion);;
        $("#carritoModal").on("click",function(){
            añadiraCarrito(producto);
        });
    });
    

}

function cargaProductos(productos, productosContainer) {
    
    $.ajax({
        "url":"/prodIndex.html",
        "type": "GET",
        "success":  function (data) {
            $("#carga").hide();
            productosContainer.append(data);
            let numP=productos.length;
            for (let i = 0; i < numP; i++){
                let producto=productos[i];
                let container= $("#producto").clone();
                //Compruebo si el usuario a iniciado sesión para mostrar o no 
                //la opción de añadir producto al carrito
                volcarProducto(producto,$('#producto'));
                if($("header").find($("#login"))[0]) $(".sesion").hide();
                else{
                    $("#prodcarro").attr("id", $("#prodcarro").attr("id")+producto.id).on("click",function(){
                        añadiraCarrito(producto);
                    });
                    
                } 
                
                (i==productos.length-1)?'':productosContainer.append(container);
            }
        }
    })
    
}
function añadiraCarrito(producto){
    $.ajax({
        "url":"/pedido/carritoProducto",
        "type":"post",
        "data": {"producto":producto.id},
        "success":function(data){
            if(data) {
                var carrito= JSON.parse(localStorage.getItem("carrito"));
                carrito.push(producto);
                localStorage.setItem("carrito",JSON.stringify(carrito));
                cargarPaginaCarrito();
                modificarCarritoHeader(true);
            }

        }
    });
}
//si es true se suma en uno la cantidad de productos, si es false se resta
function modificarCarritoHeader(añadir) {
    var carrito=$("#prodEnCarro");
    var numActual=carrito.text()[1]*1;
    
    if(añadir){
        numActual++;
        carrito.text('('+numActual+')');
    }
    else{
        numActual--;
        carrito.text('('+numActual+')');
    }
}
function cargarPaginaProductos() {
    $("#pagina").load("shop.html");
}
function cargarPaginaCarrito() {
    $("#pagina").load("cart.html");
}
$(document).ready(function(){
    $("a").on("click",function(){
        $(this).css("text-decoration","none");
    });
    var productosContainer= $("#productosIndex")
    if(localStorage.getItem("carrito")==null) localStorage.setItem("carrito",JSON.stringify([]));
    else{
      
        $("#prodEnCarro").text('('+(JSON.parse(localStorage.getItem("carrito")).length)+')');
    }
    $.ajax({
        "url":"/producto/prodindex",
        "dataType": "json",
        "type": "GET",
        "success":  function (data) {
            cargaProductos(data,productosContainer);
            productos=data;
        }
    })

    
    $("#pagProductos").on("click",function(){
        cargarPaginaProductos();
        
    });
    $("#carro").on("click",function(){
        cargarPaginaCarrito();
    });
    
});
