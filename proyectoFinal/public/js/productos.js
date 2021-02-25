function cargarTipos(productos,container) {
    $.ajax({
        "url":'/tipo/producto/tipos',
        "dataType": "json",
        "type": "GET",
        "success":  function (dataT) {
            dataT.forEach(tipoProducto => {
                var tipo= $('<li class="mb-2 d-flex justify-content-between"><a class="reset-anchor" href="#" id="'+tipoProducto.tipo+'">'+tipoProducto.tipo+'</a></li>');
                tipo.on("click",function(e){
                    e.preventDefault();
                    $("#productosIndex")[0].tipo=tipoProducto.tipo;
                    productos.forEach(producto=>{
                        filtroProducto(producto,producto.tipoProducto ==  tipoProducto.tipo,container);
                    });
                    
                });
                $("#tipoProductos").append(tipo);
                $("#"+tipoProducto.tipo).parent().append($('<img src="'+tipoProducto.icono+'" width="50px" height="auto" class="rounded-circle ml-5 img img-fluid"></img>'))
            });
        }
    });
}
function cargaSlider() {
    var range = document.getElementById('range');
    noUiSlider.create(range, {
        range: {
            'min': 0,
            'max': 2000
        },
        step: 5,
        start: [0, 1000],
        margin: 100,
        connect: true,
        direction: 'ltr',
        orientation: 'horizontal',
        behaviour: 'tap-drag',
        tooltips: true,
        format: {
          to: function ( value ) {
            return '€' + value;
          },
          from: function ( value ) {
            return value.replace('', '');
          }
        }
    });
}
function filtroProducto(producto,condicion,container){

    if(condicion){
        if(container.has($("#producto"+producto.id))) $("#productosIndex").append($("#producto"+producto.id));
    }
    else{
        container.append($("#producto"+producto.id));
    }

   
}
function cargarCategorias() {
    $.ajax({
        "url":"/categoria/datos",
        "dataType": "json",
        "type": "GET",
        "success":  function (data) {
            data.forEach(categoria=>{
                var divCategoria=$("#divcategoria").clone();
                var radio=$("#categoria");
                $("#divcategoria").attr("id","divcategoria"+categoria.id);
                var imagen = $("<img>").attr("src",categoria.icono).css( "width","70px").addClass("ml-5 rounded-circle");
                (categoria.nombre=="CARRETERA")? imagen.css("height","70px") : imagen.css("height","50px");
                radio.attr("id","categoria"+categoria.id).val(categoria.id);
                radio.next().attr("for",radio.attr("id")).text(categoria.nombre).append(imagen);
                if(categoria.nombre=="AMBAS"){
                    imagen.remove();
                }
                $("#divcategoria"+categoria.id).parent().append(divCategoria);
            });
            $("#divcategoria").remove();
        }
    })
}
function accionBotonFiltrar(productos){
    var min= $("#range").text().split("€")[1]*1;
    var max= $("#range").text().split("€")[2]*1;
    var condicion1=""
    var condicion2=""
    var condicion3="";
    productos.forEach(producto=>{
        
        condicion3= producto.precio>=min && producto.precio<=max;
        ($("#productosIndex")[0].tipo!="") ?  condicion1=producto.tipoProducto==$("#productosIndex")[0].tipo : condicion1=true;
        ($("input[name=categoria]:checked").val()!=null)? $("input[name=categoria]:checked").val()!=3 ?  condicion2=producto.categoria==$("input[name=categoria]:checked").val() : condicion2=true :condicion2=true;
        condicion=condicion1 && condicion2 && condicion3;
        
        filtroProducto(producto,condicion,$("#productosFiltrados"));

    });
    
}
function quitarFiltros(productosContainer,productosFiltrados) {
    productosContainer.empty();
    productosFiltrados.empty();
    productosContainer[0].tipo="";
    cargaProductos(productos,productosContainer);
}
$(document).ready(function(){
    var productosContainer= $("#productosIndex");
    productosContainer[0].tipo="";

    var productosFiltrados=$("#productosFiltrados");

    //Cargo los productos
    var productos=[];
    $.ajax({
        "url":"/producto/prodindex",
        "dataType": "json",
        "type": "GET",
        "success":  function (data) {
            cargaProductos(data,productosContainer);
            data.forEach(producto=>{
                productos.push(producto);
                
            });
            cargarTipos(productos,productosFiltrados);
        }
    })
    $("#recargar").on("click",function () {
        quitarFiltros(productosContainer,productosFiltrados);
    });
    cargaSlider();
    cargarCategorias();
    $("#filtrar").on("click",function(){
        accionBotonFiltrar(productos);
    });
    $("#nofiltrar").on("click",function(){
        quitarFiltros(productosContainer,productosFiltrados);
    });
});