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
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" > <img src="css/images/logo-upv.png" style="width: 100px;" alt="logo-upv"> ITI-2018</a>
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
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="far fa-id-card"></i></i></div>
                                Calificaciones
                            </a>
                            <a class="nav-link" href="HistorialAcademico.php">
                                <div class="sb-nav-link-icon"><i class="far fa-calendar-alt"></i></i></div>
                                Historial Academico
                            </a>
                            <a class="nav-link" href="horario.php">
                                <div class="sb-nav-link-icon"><i class="far fa-clock"></i></i></div>
                                Horario
                            </a>
                            <a class="nav-link" href="transporte.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-bus"></i></i></div>
                                Transporte
                            </a>
                            <a class="nav-link" href="estancias.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></i></div>
                                Estancia/Estadía
                            </a>
                            <a class="nav-link" href="Evaluacion.php">
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
                        <h1 class="mt-4">Horario</h1>
                        <ol class="breadcrumb mb-8">
                            <a class="btn btn-primary" href="#" role="button">IMPRIMIR</a>
                        </ol>
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1 table-responsive"></i>
                                Alumno
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive table-striped">
                                    <thead>
                                        <tr style="color:White;background-color:Purple;font-weight:bold;">
                                            <th class="text-center">Hora</th>
                                            <th class="text-center">Lunes</th>
                                            <th class="text-center">Martes</th>
                                            <th class="text-center">Miércoles</th>
                                            <th class="text-center">Jueves</th>
                                            <th class="text-center">Viernes</th>
                                            <th class="text-center">Sábado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="center">7:00-7:54</td>
                                            <td align="center">TECNOLOGIAS Y APLICACIONES EN INTERNET<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">TECNOLOGIAS Y APLICACIONES EN INTERNET<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">TECNOLOGIAS Y APLICACIONES EN INTERNET<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">TECNOLOGIAS Y APLICACIONES EN INTERNET<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">TECNOLOGIAS Y APLICACIONES EN INTERNET<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td align="center">7:55-8:49</td>
                                            <td align="center">INGLÉS VIII<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">INGLÉS VIII<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">INGLÉS VIII<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">INGLÉS VIII<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">INGLÉS VIII<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td align="center">8:50-9:44</td>
                                            <td align="center">GESTION DEL DESARROLLO DE SOFTWARE<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">GESTION DEL DESARROLLO DE SOFTWARE<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center"></td>
                                            <td align="center">GESTION DEL DESARROLLO DE SOFTWARE<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">GESTION DEL DESARROLLO DE SOFTWARE<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td align="center">9:45-10:40</td>
                                            <td align="center">ADMIN DE PROYECTOS DE TI<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">ADMIN DE PROYECTOS DE TI<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center"></td>
                                            <td align="center">ADMIN DE PROYECTOS DE TI<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">ADMIN DE PROYECTOS DE TI<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td align="center">10:40-11:10</td>
                                            <td align="center" style="color: rgb(118, 0, 228);">DESCANSO</td>
                                            <td align="center" style="color: rgb(118, 0, 228);">DESCANSO</td>
                                            <td align="center" style="color: rgb(118, 0, 228);">DESCANSO</td>
                                            <td align="center" style="color: rgb(118, 0, 228);">DESCANSO</td>
                                            <td align="center" style="color: rgb(118, 0, 228);">DESCANSO</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td align="center">11:10-12:05</td>
                                            <td align="center">DISEÑO DE INTERFACES<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">DISEÑO DE INTERFACES<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">DISEÑO DE INTERFACES<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">DISEÑO DE INTERFACES<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">DISEÑO DE INTERFACES<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td align="center">12:05-12:59</td>
                                            <td align="center">SISTEMAS INTELIGENTES<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">SISTEMAS INTELIGENTES<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">SISTEMAS INTELIGENTES<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">SISTEMAS INTELIGENTES<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td align="center">SISTEMAS INTELIGENTES<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td align="center">13:00-13:54</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center">SISTEMAS INTELIGENTES<br><span style="color: grey;"><small>A211 (LITI3)</small> </span><br><span style="color: grey;"><small>EDIFICIO A (UD1)</small></span></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td align="center">14:00-14:54</td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-responsive table-striped">
                                    <thead>
                                        <tr style="color:White;background-color:Purple;font-weight:bold;">
                                            <th class="text-center">Materia</th>
                                            <th class="text-center">Profesor</th>
                                            <th class="text-center">Grupo</th>
                                            <th class="text-center">Créditos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="">PROGRAMACIÓN WEB</td>
                                            <td align="center">MANUEL RUÍZ MÉNDEZ</td>
                                            <td align="center">ITI-27790</td>
                                            <td align="center">5</td>
                                        </tr>
                                        <tr>
                                            <td align="">TECNOLOGIAS Y APLICACIONES EN INTERNET</td>
                                            <td align="center">MANUEL RUÍZ MÉNDEZ</td>
                                            <td align="center">ITI-27802</td>
                                            <td align="center">6</td>
                                        </tr>
                                        <tr>
                                            <td align="">ADMINISTRACION DE PROYECTOS DE TECNOLOGIAS DE LA INFORMACIÓN</td>
                                            <td align="center">SHEYLA MALENY SILVA GONZALEZ</td>
                                            <td align="center">ITI-27801</td>
                                            <td align="center">5</td>
                                        </tr>
                                        <tr>
                                            <td align="">DISEÑO DE INTERFACES</td>
                                            <td align="center">JOSÉ FIDENCIO LÓPEZ LUNA</td>
                                            <td align="center">ITI-27803</td>
                                            <td align="center">6</td>
                                        </tr>
                                        <tr>
                                            <td align="">SISTEMAS INTELIGENTES</td>
                                            <td align="center">MARCO AURELIO NUÑO MAGANDA</td>
                                            <td align="center">ITI-27804</td>
                                            <td align="center">6</td>
                                        </tr>
                                        <tr>
                                            <td align="">GESTION DE DESARROLLO DE SOFTWARE</td>
                                            <td align="center">SERGIO YORICK ALVAREZ MONTALVO</td>
                                            <td align="center">ITI-27805</td>
                                            <td align="center">6</td>
                                        </tr>
                                        <tr>
                                            <td align="">INGLÉS VIII</td>
                                            <td align="center">JESÚS HERNÁNDEZ LÓPEZ</td>
                                            <td align="center">ITI-27808</td>
                                            <td align="center">6</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
                        </div>
                    </div>
                </main>
               <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SIIUPV 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
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
