function volcarProducto(producto,container) {
    
  
    
}
function cargaProductos(productos, productosContainer) {
    
    productosContainer.load("/prodIndex.html",function (data) {
        this.append(JSON.parse(data));
        let numP=productos.length;
        for (let i = 0; i < numP; i++){
            let producto=productos[i];
            let container= productosContainer.last().clone();
            volcarProducto(producto,productosContainer.last());
            productosContainer.append(container);
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
