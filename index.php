<?php

 $pg = "inicio";

?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>    
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="inicio" class="d-flex flex-column h-100">
    <header class="container" >
    <?php include_once "menu.php";?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center cohete">               
              <a href="proyectos.html"><img src="images/cohete.svg" alt=""></a>
            </div>
            <div class="col-12 col-sm-6 offset-sm-3 text-center">
                <p class="px-5 py-2"> Bienvenid@s a mi sitio web sobre desarrollo de sistemas.</p>
            </div>
            <div class="col-12 text-center pt-2">
                <a href="proyectos.html" class="btn my shadow">Conoce mis proyectos</a>
            </div>
        </div>
    </main>   
    <footer class="container mt-auto pb-4 py-5">
        <div class="row">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://api.whatsapp.com/send?phone=541162423341" target="_blank" title="envianos un mensaje por whassap"></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                <a href="mailto:info@nelsontarche.com.ar">info@nelsontarche.com.ar</a>
            </div>
        </div>
    </footer>    

    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541162423341" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>

    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>


    </footer>    
</body>
</html>