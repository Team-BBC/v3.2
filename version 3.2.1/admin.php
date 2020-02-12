<?php

session_start();
    if(!isset($_SESSION['userlogin'])){
        header("Location: login.php");
    }
    
?>
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title> admin page</title>
	<title></title>
</head>
<body style="background-image: url(bg.png);">
        <div id="content">
            <!--Import of our navbar-->
            <?php
            include 'adminNav.php';
            ?>

            <!--Main container-->
            <div class=" container-fluid border border-dark rounded" style="background: white;height: 98%;width: 92%">
                <!--Busqueda y resultados -->
                <form>
                    <div class="form-group" style="margin-top: 20px">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Buscar de sustancias">
                    </div> 
                </form>

            </div>

            
        </div>   <!--Termina Contenido-->



        

        <!--Pie de Pagina-->
        <?php
            include 'footerNav.php';
        ?>
</body>
</html>