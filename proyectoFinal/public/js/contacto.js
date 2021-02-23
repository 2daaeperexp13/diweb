$("#botonContactar").on("click",function(ev){
    if($("#emailContacto").val()=="" || $("#mensaje").val()=="") {}
    else{
        $.ajax({
            "url":"mensaje/new",
            "type":"post",
            "data": {"email": $("#emailContacto").val(), "mensaje":$("#mensaje").val()},
            "success": function(data){
                if(data) {
                    alert('Mensaje enviado correctamente.')
                    
                }
            }
        });
    }
});