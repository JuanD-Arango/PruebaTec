<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro Personas Millenium</title>

        <script src="E:/Xampp/htdocs/xampp/PruebaMillenium/JS/Funcion.js"></script>

        <script src="E:/Xampp/htdocs/xampp/PruebaMillenium/Librerias/materialize/jquery-3.6.0.min.js"></script>
        <script src="E:/Xampp/htdocs/xampp/PruebaMillenium/Librerias/materialize/js/materialize.min.js"></script>
        <link rel="stylesheet" href="E:/Xampp/htdocs/xampp/PruebaMillenium/Librerias/materialize/css/materialize.min.css">
    </head>

    <body>


        <div class="row">
            <div class="col l4">
                <h5 class="blue-text">Registro de Persona</h5>
                <br></br>
                <form id= "frm_registrar" method="post">

                    <div class="input-field">
                        <input type="text" name="Nombres" value="" id="Nombres" placeholder="">
                        <label for="Nombre">Nombres</label>
                    </div>

                    <div class="input-field">
                        <input type="text" name="Apellidos" value="" id="Apellidos" placeholder="">
                        <label for="Apellidos">Apellidos</label>
                    </div>

                    <div class="input-field">
                        <button type ="submit" name="btn_guardar" id="btn_guardar" class="btn-small blue">Guardar</button>
                        <label for=""></label>
                    </div>
                
                </form>
            
            </div>
        </div>




        <script type="text/javascript">

            $(document).ready(funtion()
            {
                $("#btn_guardar").on('click', function(e)
                {
                    e.prevenDefault();
                    guardar_datos(); 
                });
            });

        </script>

        <script>
            $(document).ready(function() 
            {
                M.AutoInit();
            });
        </script>

    </body>
</html>