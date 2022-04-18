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
                      <li><a class="dropdown-item" href="index.php">Cerrar sesión</a></li>
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
                        <h1 class="mt-4">Evaluación Tutor</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Folio: 1234</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                Marco Aurelio Nuño Maganda
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive table-striped">
                                    <thead>
                                        <tr style="color:White;background-color:Purple;font-weight:bold;">
                                            <th>No.</th>
                                            <th>Pregunta</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>El tutor indicó el plan de trabajo para la tutoría a realizar en el cuatrimestre</td>
                                            <td><div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                  Nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  Casi nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                  A veces
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" >
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                  Casi siempre
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" >
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                  Siempre
                                                </label>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>El tutor indicó el cronograma de sesiones para la tutoía para el cuatrimestre</td>
                                            <td><div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault11">
                                                <label class="form-check-label" for="flexRadioDefault11">
                                                  Nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault21" >
                                                <label class="form-check-label" for="flexRadioDefault21">
                                                  Casi nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault31">
                                                <label class="form-check-label" for="flexRadioDefault31">
                                                  A veces
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault41" >
                                                <label class="form-check-label" for="flexRadioDefault41">
                                                  Casi siempre
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault51" >
                                                <label class="form-check-label" for="flexRadioDefault51">
                                                  Siempre
                                                </label>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <td>El tutor indió cuál es el reglamento de la UPV</td>
                                            <td><div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault13">
                                                <label class="form-check-label" for="flexRadioDefault13">
                                                  Nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault23" >
                                                <label class="form-check-label" for="flexRadioDefault23">
                                                  Casi nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault33">
                                                <label class="form-check-label" for="flexRadioDefault33">
                                                  A veces
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault43" >
                                                <label class="form-check-label" for="flexRadioDefault43">
                                                  Casi siempre
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault53" >
                                                <label class="form-check-label" for="flexRadioDefault53">
                                                  Siempre
                                                </label>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>4</th>
                                            <td>El tutor informó sobre los servicios estudiantiles que hay en la UPV</td>
                                            <td><div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault14">
                                                <label class="form-check-label" for="flexRadioDefault14">
                                                  Nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault24" >
                                                <label class="form-check-label" for="flexRadioDefault24">
                                                  Casi nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault34">
                                                <label class="form-check-label" for="flexRadioDefault34">
                                                  A veces
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault44" >
                                                <label class="form-check-label" for="flexRadioDefault44">
                                                  Casi siempre
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="flexRadioDefault54" >
                                                <label class="form-check-label" for="flexRadioDefault54">
                                                  Siempre
                                                </label>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>5</th>
                                            <td>El tutor cumplió con la programación de las sesiones para la tutoría</td>
                                            <td><div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault15">
                                                <label class="form-check-label" for="flexRadioDefault15">
                                                  Nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault25" >
                                                <label class="form-check-label" for="flexRadioDefault25">
                                                  Casi nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault35">
                                                <label class="form-check-label" for="flexRadioDefault35">
                                                  A veces
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault45" >
                                                <label class="form-check-label" for="flexRadioDefault45">
                                                  Casi siempre
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="flexRadioDefault55" >
                                                <label class="form-check-label" for="flexRadioDefault55">
                                                  Siempre
                                                </label>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>6</th>
                                            <td>El tutor asistió puntualmente a las sesiones de tutoría</td>
                                            <td><div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault16">
                                                <label class="form-check-label" for="flexRadioDefault16">
                                                  Nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault26" >
                                                <label class="form-check-label" for="flexRadioDefault26">
                                                  Casi nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault36">
                                                <label class="form-check-label" for="flexRadioDefault36">
                                                  A veces
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault46" >
                                                <label class="form-check-label" for="flexRadioDefault46">
                                                  Casi siempre
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefault56" >
                                                <label class="form-check-label" for="flexRadioDefault56">
                                                  Siempre
                                                </label>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>7</th>
                                            <td>El tutor te orientó cuando solicitaste algún tipo de apoyo</td>
                                            <td><div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault17">
                                                <label class="form-check-label" for="flexRadioDefault17">
                                                  Nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault27" >
                                                <label class="form-check-label" for="flexRadioDefault27">
                                                  Casi nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault37">
                                                <label class="form-check-label" for="flexRadioDefault37">
                                                  A veces
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault47" >
                                                <label class="form-check-label" for="flexRadioDefault47">
                                                  Casi siempre
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefault57" >
                                                <label class="form-check-label" for="flexRadioDefault57">
                                                  Siempre
                                                </label>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>8</th>
                                            <td>El tutor mostró dispiosición para atenderte aún fuera de su sesión de tutoría programada</td>
                                            <td><div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault18">
                                                <label class="form-check-label" for="flexRadioDefault18">
                                                  Nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault28" >
                                                <label class="form-check-label" for="flexRadioDefault28">
                                                  Casi nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault38">
                                                <label class="form-check-label" for="flexRadioDefault38">
                                                  A veces
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault48" >
                                                <label class="form-check-label" for="flexRadioDefault48">
                                                  Casi siempre
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefault58" >
                                                <label class="form-check-label" for="flexRadioDefault58">
                                                  Siempre
                                                </label>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>9</th>
                                            <td>El tutor es fácil de localizar</td>
                                            <td><div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault19">
                                                <label class="form-check-label" for="flexRadioDefault19">
                                                  Nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault29" >
                                                <label class="form-check-label" for="flexRadioDefault29">
                                                  Casi nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault39">
                                                <label class="form-check-label" for="flexRadioDefault39">
                                                  A veces
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault49" >
                                                <label class="form-check-label" for="flexRadioDefault49">
                                                  Casi siempre
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefault59" >
                                                <label class="form-check-label" for="flexRadioDefault59">
                                                  Siempre
                                                </label>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>10</th>
                                            <td>El tutor tuvo una actitud de respeto durante todo el cuatrimestre</td>
                                            <td><div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault110">
                                                <label class="form-check-label" for="flexRadioDefault110">
                                                  Nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault210" >
                                                <label class="form-check-label" for="flexRadioDefault210">
                                                  Casi nunca
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault310">
                                                <label class="form-check-label" for="flexRadioDefault310">
                                                  A veces
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault410" >
                                                <label class="form-check-label" for="flexRadioDefault410">
                                                  Casi siempre
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault510" >
                                                <label class="form-check-label" for="flexRadioDefault510">
                                                  Siempre
                                                </label>
                                              </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div align="right">
                                    <button type="button" class="btn btn-secondary btn-lg" align="center"><a href="respuestas.php" style="text-decoration: none; color: white;">Enviar</a></button>
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
