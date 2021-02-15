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
    container[0].producto=producto;
    container.find("a").eq(2).on("click",function(){
        var modal=$("#productView");
        modal.find("a").first().attr("href",container[0].producto.imagenes[0]).css("background-image",'url("'+container[0].producto.imagenes[0]+'")');
        var carrusel=modal.find("a").first().parent();
        var numImg=producto.imagenes.length;
        for (let i = 1; i < numImg; i++) {
            let imagen=container[0].producto.imagenes[i];
            carrusel.append('<a class="d-none" href="'+imagen+'" title="'+container[0].producto.nombre+'" data-lightbox="productview"></a>');
        }
        modal.find("h2").first().text(container[0].producto.nombre).next().text(container[0].producto.precio+"€").next().text(container[0].producto.descripcion);;

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
                if($("header").find($("#login"))[0]) $(".sesion").hide();
                else $("#prodcarro").attr("id", $("#prodcarro").attr("id")+'_'+producto.id);
                volcarProducto(producto,$("#producto"));
                (i==productos.length-1)?'':productosContainer.append(container);
            }
        }
    })
    
}
function mostrarPaginaProductos() {
    $("#pagina").load("shop.html");
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
    $("#pagProductos").on("click",function(){
        mostrarPaginaProductos();
        $("#principal").append($('<script src="/js/productos.js"></script>'))
    });
});
