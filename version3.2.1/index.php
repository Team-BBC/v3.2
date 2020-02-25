<!DOCTYPE html>
<html>
    <head> 
        <!--Importacion de CSS de la carpeta (stylesheet.css)-->
        <link rel= "stylesheet"  type="text/css"  href="stylesheet.css"/>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Inventario almacen quimico</title>

    </head>

    <body style="background-image: url(bg.png);">
        <div id="content">
            <?php
            include 'navbar.php';
            ?>
            <!--Busqueda-->
            <div class = "text-center mt-5" style="width: 100%;">   
                <form>
                    <div class="form-group">
                        <h2>
                            <label for="formGroupExampleInput">Division de Tecnologia Quimica</label>
                        </h2>
                        <div class="text-light">
                        <h3>
                            <label for="formGroupExampleInput">Hojas de seguridad</label>
                        </h3>
                        <input class="form-control m-auto mt-1" style="width: 60%;" type="text" id="search" placeholder="Buscar Sustancia">
                    </div>
                        
                    </div>
                    <button type="submit" id="busqueda" class="btn btn-light">Buscar</button>
                </form>





               
            </div>

        <div class="col-sm-12 mt-2">
            <table class="table table-dark">
                <thead class="font-weight-bold">
                    <td>Sustancia</td>
                    <td>Descarga</td>
                    <td>Ultima actualizacion</td>
                </thead>
                <tbody>
                    <td></td>
                    <td>
                        <span class="btn btn-primary btn-sm">
                            <i class="fas fa-trash-alt">Descargar</i>
                        </span>
                    </td>
                    <td></td>
                </tbody>
            </table>
        </div>

            <script src="http://code.jquery.com/jquery-3.3.1.min.js"
                    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                    crossorigin="anonymous">
                </script>
                <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                <script>

                    $(function(){
                        //this runs a function if login button is clicked
                        $('#busqueda').click(function(e){

                        var valid = this.form.checkValidity();

                    if(valid){
                        var search = $('#search').val();
                    }
                        e.preventDefault();

                        $.ajax({
                            type: 'POST',
                            url: 'busqueda.php',
                            //send the user and password to jslogin.php
                            data:  {search:search},
                            success: function(data){    //returns 1 if the login was correct.
                                alert(data);
                                if($.trim(data) === "1"){
                                    alert('hi this went well');
                                }
                            },
                            error: function(data){
                                alert('Hubo errores iniciando sesion');
                            }
                        });
                        });
                    });
                </script>

            <!--Ultimas Consultas-->
            
            
        </div>   <!--Termina Contenido-->
        



        

        <!--Pie de Pagina-->
        <?php
            include 'footerNav.php';
        ?>
        
        
    </body>
    
</html>