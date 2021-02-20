
function datosProvincias() {
    $.ajax({
        "url":"/provincia/datos",
            "type":"get",
            "dataType":"json",
            "success": function(data){
                data.forEach(provincia => {
                    $("#provincia").append($('<option id="provincia'+provincia.id+'"  value='+provincia.nombre.toUpperCase()+'>'+provincia.nombre.toUpperCase() +'</option>'));
                    
                });
                $("#provincia").on("change",function(){
                    $("#localidad").empty();
                    
                    datosLocalidades($("option[id^=provincia]:checked").attr("id").split("provincia")[1]*1);
                });
                debugger;
                datosLocalidades($("option[id^=provincia]:checked").attr("id").split("provincia")[1]*1)
            }
    })
}
function datosFecha(){
    var mes=$("#mes");
    var ano=$("#ano");
    var anoActual=new Date().getFullYear().toString().split('');
    anoActual=(anoActual[2]+anoActual[3])*1;
    for (let i = 1; i < 13; i++) {
        mesOption=(i<10)?'0'+i:i;
        mes.append($('<option value="'+mesOption+'">'+mesOption+'</option>'));
    }
    for (let i = anoActual; i < anoActual+6; i++){
       ano.append($('<option value="'+i+'">'+i+'</option>'));
    }

}
function pedidoProductos(productos){
    var liProducto=$("#liProducto").clone();
    productos.forEach(producto=>{
        $("#liProducto").attr("id","liProducto"+producto.id).children().first().text(producto.nombre+" x "+producto.cantidad);
        $("#precioCompraProducto").text((producto.precio*producto.cantidad)).attr("id","precioCompraProducto"+producto.id);
        var precio=$("#precioCompraTotal").text().split("€")[0]*1;
        $("#precioCompraTotal").text(precio=precio*1+producto.precio*producto.cantidad);
        if(productos.indexOf(producto)<productos.length-1) $("#liProducto"+producto.id).after(liProducto);
    });
    $("#precioCompraTotal").text($("#precioCompraTotal").text()+"€")
}
function datosLocalidades(provinciaId){
    $.ajax({
        "url":"/localidad/datos",
            "type":"post",
            "dataType":"json",
            "data":{"provincia":provinciaId},
            "success": function(data){
                data.forEach(localidad => {
                    $("#localidad").append($('<option  id="localidad'+localidad.id+'" value="'+localidad.nombre.toUpperCase()+'">'+localidad.nombre.toUpperCase() +'</option>'));
                });
            }
    })
}

function comprar(productos,importe) {
    $.ajax({
        "url":"pedido/compra",
        "data":{"productos":productos, 
                "importe":importe, 
                "direccion":$("#direccion").val()+" , "+$("#localidad").val()+" , "+$("#provincia").val(),
                "tarjeta": $("#tarjeta").val(),
                "fecha":$("#mes").val()+"/"+$("#ano").val()
        },
        "type":"post",
        "success":function(data){

        }
    });
}
$(document).ready(function () {
    
    $("#carritoVolver").on("click",function(){
        cargarPaginaCarrito();
    });

    //Cargo las provincias y localidades
    datosProvincias();

    //Cargo el select de la fecha de vencimiento de la tarjeta de credito
    datosFecha();

    //Cargo los productos del carrito para la compra
    pedidoProductos(Object.values(JSON.parse(localStorage.getItem("carrito"))));

    //COMPRA
    $("#botonComprar").on("click",function(ev){
        ev.preventDefault();
        comprar(Object.values(JSON.parse(localStorage.getItem("carrito"))),$("#precioCompraTotal").text().split("€")[0]*1);
    })
});
