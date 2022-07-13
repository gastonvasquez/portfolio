<nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($pg == "inicio")? "active": "";?> px-4" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($pg == "sobre mi")? "active": "";?> px-4" href="sobre-mi.html">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($pg == "proyectos")? "active": "";?> px-4" href="proyectos.html">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($pg == "contacto")? "active": "";?> px-4" href="contacto.html">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-inline">
                        <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </nav>