function cargarTipos(productos,container) {
    $.ajax({
        "url":'/tipo/producto/tipos',
        "dataType": "json",
        "type": "GET",
        "success":  function (dataT) {
            dataT.forEach(tipoProducto => {
                var tipo= $("<li>").addClass("mb-2").append($('<li class="mb-2"><a class="reset-anchor" href="#" id="'+tipoProducto.tipo+'">'+tipoProducto.tipo+'</a></li>'));
                tipo.on("click",function(e){
                    e.preventDefault();
                    productos.forEach(producto=>{
                        filtroProducto(producto,producto.tipoProducto !=  tipoProducto.tipo,container);
                    });
                });
                $("#tipoProductos").append(tipo);
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
                var imagen = $("<img>").attr("src",categoria.icono).css({"width":"15px", "height":"15px"})
                if(categoria.nombre!="AMBAS")$("<option>").val(categoria.id).append(imagen).appendTo($("#categoria"));
            });
            
        }
    })
}
$(document).ready(function(){
    var productosContainer= $("#productosIndex")
    var productosFiltrados=$("#productosFiltrados");
    min= $("#range").text().split("€")[1]*1;
    max= $("#range").text().split("€")[2]*1;
    
    //Cargo el menú de  tipos de productos
    
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
    cargaSlider();
    cargarCategorias();
    
    
});