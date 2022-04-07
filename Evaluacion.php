<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="evaluacion/dise-o-main/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">ITI-2018</a>
            <!-- Sidebar Toggle-->
            
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!--<input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />-->
                    <!--<button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>-->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login.html">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Apartados</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="far fa-id-card"></i></i></div>
                                Calificaciones
                            </a>
                            <a class="nav-link" href="HistorialAcademico.html">
                                <div class="sb-nav-link-icon"><i class="far fa-calendar-alt"></i></i></div>
                                Historial Academico
                            </a>
                            <a class="nav-link" href="horario.html">
                                <div class="sb-nav-link-icon"><i class="far fa-clock"></i></i></div>
                                Horario
                            </a>
                            <a class="nav-link" href="transporte.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-bus"></i></i></div>
                                Transporte
                            </a>
                            <a class="nav-link" href="estancias.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></i></div>
                                Estancia/Estadía
                            </a>
                            <a class="nav-link" href="Evaluacion.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-check"></i></i></div>
                                Evaluación Docente
                            </a>
                            
                            
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                      <h1 class="mt-4">Evaluación docente</h1>
                      <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Califica el desempeño de los docentes y tutores.</li>
                      </ol>
<div class="card mb-4"> </div>
</div>
                </main>
				 <div class="container-fluid Pcontenedor" style="margin-top: 30px; margin-right: 30px;">
            <h4>Estimado alumno:</h4>
            <p style="text-indent: 2em; text-align: justify;" class=" FormatoInstrucciones">
                El propósito del presente cuestionario es obtener información que permita 
            mejorar la calidad de la función docente y la función de los tutores, para obtener mejores resultados en tu 
            rendimiento académico.
            </p>
            <p class="FormatoInstrucciones" style="text-align: justify; margin-bottom: 20px;">
                <b>Recuerda: todas las respuestas y opiniones emitidas en la encuesta son 
            completamente anónimas.</b>
            </p>
            <h4>Instrucciones:</h4>
            <p class="FormatoInstrucciones" style="text-align: justify; margin-bottom: 20px;">
                El cuestionario consta de breves preguntas. En cada una deberás seleccionar una 
            calificación con la siguiente escala:<br />
            </p>
            <div style="margin-left:2%;">
                <p class="FormatoInstrucciones" style="text-align: justify">
                    <img id="MainContent_Image1" src="evaluacion/dise-o-main/images/4.jpg" style="height:50px;" />
                    &nbsp;<b>Nunca</b> (Con un valor numérico de 6)
                </p>

                <p class="FormatoInstrucciones" style="text-align: justify">
                    <img id="MainContent_Image5" src="evaluacion/dise-o-main/images/3.jpg" style="height:50px;" />
                    &nbsp;<b>Casi nunca</b> (Con un valor numérico de 7)
                </p>

                <p class="FormatoInstrucciones" style="text-align: justify">
                    <img id="MainContent_Image2" src="evaluacion/dise-o-main/images/2.jpg" style="height:50px;" />
                    &nbsp;<b>A veces</b> (Con un valor numérico de 8)
                </p>
                <p class="FormatoInstrucciones" style="text-align: justify">
                    <img id="MainContent_Image3" src="evaluacion/dise-o-main/images/1.jpg" style="height:50px;" />
                    &nbsp;<b>Casi siempre</b> (Con un valor numérico de 9)
                </p>
                <p class="FormatoInstrucciones" style="text-align: justify">
                    <img id="MainContent_Image4" src="evaluacion/dise-o-main/images/0.jpg" style="height:50px;" />
                    &nbsp;<b>Siempre</b> (Con un valor numérico de 10)
                </p>
            </div>
            <p class="FormatoInstrucciones" style="text-align: justify">
                Lee detenidamente cada enunciado y selecciona adecuadamente tú respuesta.
            </p>
            <hr>
            <div class="form-group" align="center" style="margin: 2px;">
                <div>
                  <a class="col btn btn-primary" href="profes_evaluacion.html" role="button">PROFESORES</a>
                  <a class="col btn btn-primary" href="tutor_evaluación.html" role="button">TUTORES</a>
                </div>
            </div>
            <br><br>

        </div>
    
</div>

            </div>


        </div>
                    <!-- /.navbar-collapse -->
                </div>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SIIUPV 2022</div>
                            <div>
                                <a href="#">Politicas de privacidad</a>
                                &middot;
                                <a href="#">Terminos &amp; Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
