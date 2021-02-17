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
                else $("#prodcarro").attr("id", $("#prodcarro").attr("id")+producto.id);
                
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
