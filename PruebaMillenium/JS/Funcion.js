function guardar_datos()
{
    var datos=$('#frm_registrar').serialize();

    $.ajax(
    {
        method:"POST",
        url:"E:/Xampp/htdocs/xampp/PruebaMillenium/Proyecto/insertar.php",
        data: datos,
        sucess: function(e)
        {
            if(e==1)
            {
                alert("Se han guardado los datos");
            }
            else
            {
                alert("Error al guardar los datos")
            }
        }
    });

    return false;
}