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
    
    }).text(producto.nombre);
    $("#precio").attr("id",$("#precio").attr("id")+producto.id).text(producto.precio);
    container.find("a").eq(2).on("click",function(){
        datosModal(producto);
    });
    

}
function datosModal(producto){
    var modal=$("#productView");
    var linkCarrusel=modal.find("a").first().clone();
    modal.find("a").first().attr("href",producto.imagenes[0]).css("background-image",'url("'+producto.imagenes[0]+'")');
    var carrusel=modal.find("a").first().parent();
    var numImg=producto.imagenes.length;
    for (let i = 1; i < numImg; i++) {
        let imagen=producto.imagenes[i];
        carrusel.append('<a class="d-none " href="'+imagen+'" title="'+producto.nombre+'" data-lightbox="productview"></a>');
    }
    modal.find("h2").first().text(producto.nombre).next().text(producto.precio+"€").next().text(producto.descripcion);
    $("#carritoModal").on("click",function(){
        añadiraCarrito(producto);
    });
    modal.find("button.close").on("click",function(){
        carrusel.empty();
        carrusel.append(linkCarrusel);
    })

    if(!$("header").find($("#login"))[0]) $("#carritoModal").addClass("d-flex");
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
                if($("header").find($("#login"))[0]){
                    $(".sesion").hide();
                    
                } 
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
function añadiraCarrito(producto,cantidad,iscallback=false){
    var carrito= JSON.parse(localStorage.getItem("carrito"));
    
    if(cantidad==undefined) cantidad=1;
    if(carrito["producto"+producto.id]!=undefined) alert("El producto ya está en el carrito, vaya al carrito para añadir más unidades")
    else{
        producto.cantidad=cantidad;
        carrito["producto"+producto.id]= producto;
        $.ajax({
            "url":"/pedido/guardarCarrito",
            "type":"post",
            "data": {"carrito":carrito},
            "success":function(data){
                localStorage.setItem("carrito",JSON.stringify(data));
                if(iscallback){

                }
                else if(data!=null) {
                    
                    cargarPaginaCarrito();
                    modificarCarritoHeader(true);
                }
            }
        });
    }

}

//si es añadir true se suma en uno la cantidad de productos, si es false se resta
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

//Comprueba si hay archivos ya guardados en el carrito
function getCarrito() {
    $.ajax({
        "url":"/pedido/getcarrito",
        "type":"get",
        "dataType":"json",
        "success": function(data){
            if(data){
                localStorage.setItem("carrito",JSON.stringify(data));
                $("#prodEnCarro").text('('+Object.keys(data).length+')');
            }
        }
    });
}

$(document).ready(function(){
    //variable que a lo el contenedor donde se añadirá la vista de los productos
    var productosContainer= $("#productosIndex")

    //quita el subrayado a los links
    $("a").on("click",function(){
        $(this).css("text-decoration","none");
    });

    //Traigo el carrito al iniciar sesion
    getCarrito();
    //Cargo los productos de la pantalla de inicio
    $.ajax({
        "url":"/producto/prodindex",
        "dataType": "json",
        "type": "GET",
        "success":  function (data) {
            
            productos=data;
            novedades=[];
            for (let i = 0; i < 11; i++) {
                novedades.push(productos[i])
                if(i==productos.length-1) break;
            }
            cargaProductos(novedades,productosContainer);
        }
    })

    //carga la página productos
    $("#pagProductos").on("click",function(){
        cargarPaginaProductos();
        
    });

    //carga la página del carrito
    $("#carro").on("click",function(){
        cargarPaginaCarrito();
    });

    //abre un modal para modificar datos básicos del usuario
    $("#misdatos").on("click",function(){
        $("#contenidodatosModal").load("misdatos.html")
        $("#misdatosModal").slideDown();
    });

});
