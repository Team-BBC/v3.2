
<!DOCTYPE html>

<html> 
<head>
    <meta charset = "utf-8"/>
    <!--Importacion de CSS (stylesheet.css)-->
    <link rel= "stylesheet"  type="text/css"  href="stylesheet.css"/>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> Añadir PDF a MySQL</title>
</head>
<body style="background: url(bg.png);">



    <div id="content">
        <!--Barra de Navegacion-->
        <?php
            include 'navbar.php';
        ?>


        <!--Formulario de subida-->
        <div class="container-lg d-flex justify-content-center shadow bg-white rounded">
            
            <form>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword">
                </div>
              </div>
              
            </form>
        </div>





    </div>


    <!--Pie de pagina-->
    <?php
    include 'footerNav.php';
    ?>

</body>
</html>