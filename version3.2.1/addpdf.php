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
    <title> Añadir PDF a MySQL</title>
</head>
<body style="background: url(bg.png);">



    <div id="content">
        <!--Barra de Navegacion-->
        <?php
            include 'adminNav.php';
        ?>


        <!--Formulario de subida-->
        <div class="container-lg d-flex justify-content-center shadow bg-white rounded" style="height: 100%">
            <form method="post" id="datosDeSustancia" style="width: 75%">
              <div class="form-group" style="margin-top: 8px">
                <label>Nombre de la sustancia</label>
                <input type="text" class="form-control" id="nombre">
              </div>
              <div class="form-group">
                <label for="descripcion">Leve Descripcion (formula)</label>
                <textarea class="form-control" id="descripcion" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">PDF</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="archivopdf" required>
                    <label class="custom-file-label" for="archivopdf">Escojer archivo...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
              </div>
                <button type="button" class="btn btn-primary" id="botonSubir">Subir</button>
                <button type="button" class="btn btn-secondary" >Cancelar</button>
            </form>

        </div>





    </div>


    <!--Pie de pagina-->
    <?php
    include 'footerNav.php';
    ?>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>