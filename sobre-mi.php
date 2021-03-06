<?php

 $pg = "sobre-mi";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre-mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
 <body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once "menu.php";?>
    </header>
    <main>
        <section class="container" id="descripcion">
            <div class="row">
                <div class="col-12 col-sm-7">
                    <h1 class="pb-3 pt-5">Sobre mi</h1>
                    <p>Soy estudiante de programacion. y estoy iniciandome en el desarrollo de
                        sistemas.</p>
                    <div class="my-5">
                        <a href="contacto.html" class="btn-rojo">Enviar mensaje</a>
                    </div>
                </div>
                <div class="col-12 col-sm-5 mx-auto text-center">
                    <img src="images/gaston-vasquez.png.jpg" alt="Gaston Vasquez" class="foto-perfil">
                </div>
            </div>
        </section>
        <section id="stack-tecnologico">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            Stack tecnológico
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Javascript</h3>
                            <img src="images/javascript.jpeg" alt="javascript">
                        </div>
                    </div>

                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>PHP</h3>
                            <img src="images/php.jpg" alt="php">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>HTML5</h3>
                            <img src="images/html5.png" alt="html5">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>React.js</h3>
                            <img src="images/react.js" alt="react">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>jQuery</h3>
                            <img src="images/jquery.jpg" alt="jquery">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Bootstrap</h3>
                            <img src="images/bootstrap.png" alt="bootstrap">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Laravel</h3>
                            <img src="images/laravel.png" alt="laravel">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>MySQL</h3>
                            <img src="images/mysql.png" alt="mysql">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>CSS</h3>
                            <img src="images/css.png" alt="css">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Git</h3>
                            <img src="images/git.png" alt="git">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Apache</h3>
                            <img src="images/apache.png" alt="apache">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Mercadopago</h3>
                            <img src="images/mercadopago.jpg" alt="mercadopago">
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i> Experiencia laboral
                    </h2>
                </div>
            </div>
            <div class="container shadow">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/logo-la-pompeya.jpg" class="img-fluid baw" title="la-pompeya">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Operario</h3>
                            <h4>Alimentaria la Pompoya</h4>
                            <h5>2005-2007</h5>
                            <p>Operario en produccion, control de stock, de fecha de vencimiento y lote.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/logo-mercedes-benz.jpg" class="img-fluid baw" title="Mercedes">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Operario</h3>
                            <h4>Mercedes Benz </h4>
                            <h5>2007-2008</h5>
                            <p>Linea de montage en puesto 9,montage de airbags laterales, balvulas de aire
                                acondicionado.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" class="img-fluid baw" title="logo">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>tecnico</h3>
                            <h4>Empresa de Transporte tte. Gral Roca S.A.</h4>
                            <h5>2009-2021</h5>
                            <p>Tecnico operario</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Formación acádémica</h2>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Bachiller</h3>
                            <h4>Escuela Secundaria N° 13</h4>
                            <h5> Finalizado 2001</h5>
                            <p>Email: mm07113@abc.gov.ar</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Futbol</li>
                                    <li>Fitnes</li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </main>
     <footer class="container mt-auto pb-4 py-5">
        <div class="row">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://api.whatsapp.com/send?phone=541162423341" target="_blank"
                    title="envianos un mensaje por whassap"></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                <a href="mailto:info@nelsontarche.com.ar">info@nelsontarche.com.ar</a>
            </div>
       </div>
       <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541162423341" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
       <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
     </footer>
 </body>
</html>
