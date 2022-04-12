<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Historial Academico</title>
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
                            <a class="nav-link" href="dashboard.php">
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
                                            <a class="nav-link" href="login.php">Login</a>
                                            <a class="nav-link" href="register.php">Register</a>
                                            <a class="nav-link" href="password.php">Forgot Password</a>
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
                        <h1 class="mt-4">Historial Academico</h1>
                        <ol class="breadcrumb mb-8">
                            <a class="btn btn-primary" href="#" role="button">IMPRIMIR</a>
                        </ol>
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                2019-2022
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive table-striped">
                                    <thead>
                                        <tr style="color:White;background-color:Purple;font-weight:bold;">
                                            <th class="text-center">Materia</th>
                                            <th class="text-center">Calificación</th>
                                            <th class="text-center">Curso</th>
                                            <th class="text-center">Cuatrimestre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>QUÍMICA BÁSICA</td>
                                            <td align="center">96</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2019</td>
                                        </tr>
                                        <tr>
                                            <td>ÁLGEBRA LINEAL</td>
                                            <td align="center">79</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2019</td>
                                        </tr>
                                        <tr>
                                            <td>HERRAMIENTAS OFIMÁTICAS</td>
                                            <td align="center">96</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2019</td>
                                        </tr>
                                        <tr>
                                            <td>EXPRESIÓN ORAL Y ESCRITA I</td>
                                            <td align="center">83</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2019</td>
                                        </tr>
                                        <tr>
                                            <td>INGLÉS I</td>
                                            <td align="center">83</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2019</td>
                                        </tr>
                                        <tr>
                                            <td>INTRODUCCION A LA PROGRAMACION</td>
                                            <td align="center">70</td>
                                            <td align="center">R</td>
                                            <td>ENERO-ABRIL 2020</td>
                                        </tr>
                                        <tr>
                                            <td>FUNCIONES MATEMÁTICAS</td>
                                            <td align="center">70</td>
                                            <td align="center">O</td>
                                            <td>ENERO-ABRIL 2020</td>
                                        </tr>
                                        <tr>
                                            <td>FÍSICA</td>
                                            <td align="center">82</td>
                                            <td align="center">O</td>
                                            <td>ENERO-ABRIL 2020</td>
                                        </tr>
                                        <tr>
                                            <td>ELECTRICIDAD Y MAGNETISMO</td>
                                            <td align="center">83</td>
                                            <td align="center">O</td>
                                            <td>ENERO-ABRIL 2020</td>
                                        </tr>
                                        <tr>
                                            <td>ARQUITECTURA DE COMPUTADORAS</td>
                                            <td align="center">91</td>
                                            <td align="center">O</td>
                                            <td>ENERO-ABRIL 2020</td>
                                        </tr>
                                        <tr>
                                            <td>INGLÉS II</td>
                                            <td align="center">77</td>
                                            <td align="center">O</td>
                                            <td>ENERO-ABRIL 2020</td>
                                        </tr>
                                        <tr>
                                            <td>INTRODUCCION A LAS TECNOLOGIAS DE INFORMACION</td>
                                            <td align="center">87</td>
                                            <td align="center">R</td>
                                            <td>ENERO-ABRIL 2020</td>
                                        </tr>
                                        <tr>
                                            <td>MATEMATICAS BASICAS PARA COMPUTACION</td>
                                            <td align="center">99</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2020</td>
                                        </tr>
                                        <tr>
                                            <td>DESARROLLO HUMANO Y VALORES</td>
                                            <td align="center">82</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2020</td>
                                        </tr>
                                        <tr>
                                            <td>INGLÉS III</td>
                                            <td align="center">96</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2020</td>
                                        </tr>
                                        <tr>
                                            <td>CÁLCULO DIFERENCIAL</td>
                                            <td align="center">76</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2020</td>
                                        </tr>
                                        <tr>
                                            <td>PROBABILIDAD Y ESTADÍSTICA</td>
                                            <td align="center">70</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2020</td>
                                        </tr>
                                        <tr>
                                            <td>INTRODUCCION A LAS REDES</td>
                                            <td align="center">93</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2020</td>
                                        </tr>
                                        <tr>
                                            <td>MANTENIMIENTO A EQUIPO DE COMPUTO</td>
                                            <td align="center">91</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2020</td>
                                        </tr>
                                        <tr >
                                            <td>INTELIGENCIA EMOCIONAL Y MANEJO DE CONFLICTOS</td>
                                            <td align="center">93</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2020</td>
                                        </tr>
                                        <tr>
                                            <td>PROGRAMACION</td>
                                            <td align="center">96</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2020</td>
                                        </tr>
                                        <tr>
                                            <td>INGLÉS IV</td>
                                            <td align="center">94</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2020</td>
                                        </tr>
                                        <tr>
                                            <td>CÁLCULO INTEGRAL</td>
                                            <td align="center">86</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2020</td>
                                        </tr>
                                        <tr>
                                            <td>INGENIERÍA DE SOFTWARE</td>
                                            <td align="center">93</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2020</td>
                                        </tr>
                                        <tr>
                                            <td>RUTEO Y CONMUTACION</td>
                                            <td align="center">91</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2020</td>
                                        </tr>
                                        <tr>
                                            <td>BASE DE DATOS</td>
                                            <td align="center">84</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2020</td>
                                        </tr>
                                        <tr>
                                            <td>HABILIDADES COGNITIVAS Y CREATIVIDAD</td>
                                            <td align="center">93</td>
                                            <td align="center">O</td>
                                            <td>ENERO ABRIL 2021</td>
                                        </tr>
                                        <tr>
                                            <td>ESTRUCTURA DE DATOS</td>
                                            <td align="center">92</td>
                                            <td align="center">O</td>
                                            <td>ENERO ABRIL 2021</td>
                                        </tr>
                                        <tr>
                                            <td>ESTANCIA I</td>
                                            <td align="center">95</td>
                                            <td align="center">O</td>
                                            <td>ENERO ABRIL 2021</td>
                                        </tr>
                                        <tr>
                                            <td>INGLÉS V</td>
                                            <td align="center">88</td>
                                            <td align="center">O</td>
                                            <td>ENERO ABRIL 2021</td>
                                        </tr>
                                        <tr>
                                            <td>ÉTICA PROFESIONAL</td>
                                            <td align="center">89</td>
                                            <td align="center">O</td>
                                            <td>ENERO ABRIL 2021</td>
                                        </tr>
                                        <tr>
                                            <td>MATEMÁTICAS PARA INGENIERÍA I</td>
                                            <td align="center">96</td>
                                            <td align="center">O</td>
                                            <td>ENERO ABRIL 2021</td>
                                        </tr>
                                        <tr>
                                            <td>FÍSICA PARA INGENIERÍA</td>
                                            <td align="center">97</td>
                                            <td align="center">O</td>
                                            <td>ENERO ABRIL 2021</td>
                                        </tr>
                                        <tr>
                                            <td>ESCALAMIENTO DE REDES</td>
                                            <td align="center">85</td>
                                            <td align="center">O</td>
                                            <td>ENERO ABRIL 2021</td>
                                        </tr>
                                        <tr>
                                            <td>FUNDAMENTOS DE PROGRAMACION ORIENTADA A OBJETOS</td>
                                            <td align="center">72</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2021</td>
                                        </tr>
                                        <tr>
                                            <td>INGLÉS VI</td>
                                            <td align="center">78</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2021</td>
                                        </tr>
                                        <tr>
                                            <td>HABILIDADES GERENCIALES</td>
                                            <td align="center">85</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2021</td>
                                        </tr>
                                        <tr>
                                            <td>MATEMÁTICAS PARA INGENIERÍA II</td>
                                            <td align="center">82</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2021</td>
                                        </tr>
                                        <tr>
                                            <td>SISTEMAS OPERATIVOS</td>
                                            <td align="center">91</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2021</td>
                                        </tr>
                                        <tr>
                                            <td>PROGRAMACIÓN ORIENTADA A OBJETOS</td>
                                            <td align="center">60</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2021</td>
                                        </tr>
                                        <tr>
                                            <td>INTERCONEXION DE REDES</td>
                                            <td align="center">89</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2021</td>
                                        </tr>
                                        <tr>
                                            <td>ADMINISTRACION DE BASE DE DATOS</td>
                                            <td align="center">86</td>
                                            <td align="center">O</td>
                                            <td>MAYO-AGOSTO 2021</td>
                                        </tr>
                                        <tr>
                                            <td>PROGRAMACIÓN ORIENTADA A OBJETOS</td>
                                            <td align="center">70</td>
                                            <td align="center">R</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2021</td>
                                        </tr>
                                        <tr >
                                            <td>LIDERAZGO DE EQUIPOS DE ALTO DESEMPEÑO</td>
                                            <td align="center">100</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2021</td>
                                        </tr>
                                        <tr>
                                            <td>FORMULACION DE PROYECTOS DE TECNOLOGIAS DE LA INFORMACION</td>
                                            <td align="center">88</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2021</td>
                                        </tr>
                                        <tr>
                                            <td>LENGUAJES Y AUTOMATAS</td>
                                            <td align="center">85</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2021</td>
                                        </tr>
                                        <tr>
                                            <td>INGENIERIA DE REQUISITOS</td>
                                            <td align="center">87</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2021</td>
                                        </tr>
                                        <tr>
                                            <td>ESTANCIA II</td>
                                            <td align="center">100</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2021</td>
                                        </tr>
                                        <tr>
                                            <td>INGLÉS VII</td>
                                            <td align="center">87</td>
                                            <td align="center">O</td>
                                            <td>SEPTIEMBRE-DICIEMBRE 2021</td>
                                        </tr>
    
                                    </tbody>
                                </table>
                            </div>
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
