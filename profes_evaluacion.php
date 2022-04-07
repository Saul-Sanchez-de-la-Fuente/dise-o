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
                  <h1 class="mt-4">Evaluación Profesor</h1>
                  <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Folio: 1234</li>
                  </ol>

                  <div class="card mb-4">
                    <div class="card-header">
                      <b>Pregunta 1. </b>El profesor asiste con normalidad y puntualidad.
                      </div>
                      <div class="card-body">
                        <table class="table table-responsive table-striped">
                          <thead>
                            <tr style="color:White;background-color:Purple;font-weight:bold;">
                              <th>Folio</th>
                              <th>Clave</th>
                              <th>Materia</th>
                              <th>Docente</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>234275</th>
                              <td>ITI-27804</td>
                              <td>SISTEMAS INTELIGENTES</td>
                              <td>MARCO AURELIO NUÑO MAGANDA</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234276</th>
                              <td>ITI-27801</td>
                              <td>ADMINISTRACION DE PROYECTOS DE TECNOLOGIAS DE LA INFORMACION</td>
                              <td>SHEYLA MALENY SILVA GONZALEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234277</th>
                              <td>ITI-27805</td>
                              <td>GESTION DE DESARROLLO DE SOFTWARE</td>
                              <td>SERGIO YORICK ALVAREZ MONTALVO</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                              <th>234279</th>
                              <td>ITI-27808</td>
                              <td>INGLÉS VIII</td>
                              <td>JESÚS HERNÁNDEZ LÓPEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234280</th>
                              <td>ITI-27790</td>
                              <td>PROGRAMACIÓN WEB</td>
                              <td>MANUEL RUÍZ MÉNDEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234281</th>
                              <td>ITI-27803</td>
                              <td>DISEÑO DE INTERFACES</td>
                              <td>JOSÉ FIDENCIO LÓPEZ LUNA</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div align="right">
                      
                  </div>

                  <div class="card mb-4">
                    <div class="card-header">
                      <b>Pregunta 2. </b>Inicia y aprovecha el tiempo de clase y concluye las sesiones puntualmente.
                      </div>
                      <div class="card-body">
                        <table class="table table-responsive table-striped">
                          <thead>
                            <tr style="color:White;background-color:Purple;font-weight:bold;">
                              <th>Folio</th>
                              <th>Clave</th>
                              <th>Materia</th>
                              <th>Docente</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>234275</th>
                              <td>ITI-27804</td>
                              <td>SISTEMAS INTELIGENTES</td>
                              <td>MARCO AURELIO NUÑO MAGANDA</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234276</th>
                              <td>ITI-27801</td>
                              <td>ADMINISTRACION DE PROYECTOS DE TECNOLOGIAS DE LA INFORMACION</td>
                              <td>SHEYLA MALENY SILVA GONZALEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234277</th>
                              <td>ITI-27805</td>
                              <td>GESTION DE DESARROLLO DE SOFTWARE</td>
                              <td>SERGIO YORICK ALVAREZ MONTALVO</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                              <th>234279</th>
                              <td>ITI-27808</td>
                              <td>INGLÉS VIII</td>
                              <td>JESÚS HERNÁNDEZ LÓPEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234280</th>
                              <td>ITI-27790</td>
                              <td>PROGRAMACIÓN WEB</td>
                              <td>MANUEL RUÍZ MÉNDEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234281</th>
                              <td>ITI-27803</td>
                              <td>DISEÑO DE INTERFACES</td>
                              <td>JOSÉ FIDENCIO LÓPEZ LUNA</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div align="right">
                  </div>

                  <div class="card mb-4">
                    <div class="card-header">
                      <b>PPregunta 3. </b>El tiempo dedicado al desarrollo de los temas y actividades académicas fue el adecuado.
                      </div>
                      <div class="card-body">
                        <table class="table table-responsive table-striped">
                          <thead>
                            <tr style="color:White;background-color:Purple;font-weight:bold;">
                              <th>Folio</th>
                              <th>Clave</th>
                              <th>Materia</th>
                              <th>Docente</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>234275</th>
                              <td>ITI-27804</td>
                              <td>SISTEMAS INTELIGENTES</td>
                              <td>MARCO AURELIO NUÑO MAGANDA</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234276</th>
                              <td>ITI-27801</td>
                              <td>ADMINISTRACION DE PROYECTOS DE TECNOLOGIAS DE LA INFORMACION</td>
                              <td>SHEYLA MALENY SILVA GONZALEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234277</th>
                              <td>ITI-27805</td>
                              <td>GESTION DE DESARROLLO DE SOFTWARE</td>
                              <td>SERGIO YORICK ALVAREZ MONTALVO</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                              <th>234279</th>
                              <td>ITI-27808</td>
                              <td>INGLÉS VIII</td>
                              <td>JESÚS HERNÁNDEZ LÓPEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234280</th>
                              <td>ITI-27790</td>
                              <td>PROGRAMACIÓN WEB</td>
                              <td>MANUEL RUÍZ MÉNDEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234281</th>
                              <td>ITI-27803</td>
                              <td>DISEÑO DE INTERFACES</td>
                              <td>JOSÉ FIDENCIO LÓPEZ LUNA</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div align="right">
                  </div>

                  <div class="card mb-4">
                    <div class="card-header">
                      <b>Pregunta 4. </b>Explica de manera clara los temas, ejercicios y aplicaciones indicados en el programa de la asignatura.
                      </div>
                      <div class="card-body">
                        <table class="table table-responsive table-striped">
                          <thead>
                            <tr style="color:White;background-color:Purple;font-weight:bold;">
                              <th>Folio</th>
                              <th>Clave</th>
                              <th>Materia</th>
                              <th>Docente</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>234275</th>
                              <td>ITI-27804</td>
                              <td>SISTEMAS INTELIGENTES</td>
                              <td>MARCO AURELIO NUÑO MAGANDA</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234276</th>
                              <td>ITI-27801</td>
                              <td>ADMINISTRACION DE PROYECTOS DE TECNOLOGIAS DE LA INFORMACION</td>
                              <td>SHEYLA MALENY SILVA GONZALEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234277</th>
                              <td>ITI-27805</td>
                              <td>GESTION DE DESARROLLO DE SOFTWARE</td>
                              <td>SERGIO YORICK ALVAREZ MONTALVO</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                              <th>234279</th>
                              <td>ITI-27808</td>
                              <td>INGLÉS VIII</td>
                              <td>JESÚS HERNÁNDEZ LÓPEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234280</th>
                              <td>ITI-27790</td>
                              <td>PROGRAMACIÓN WEB</td>
                              <td>MANUEL RUÍZ MÉNDEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234281</th>
                              <td>ITI-27803</td>
                              <td>DISEÑO DE INTERFACES</td>
                              <td>JOSÉ FIDENCIO LÓPEZ LUNA</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div align="right">
                  </div>

                  <div class="card mb-4">
                    <div class="card-header">
                      <b>Pregunta 5. </b>Atiende apropiadamente las dudad y propuestas indicadas por los alumnos respecto al tema de desarrollado.
                      </div>
                      <div class="card-body">
                        <table class="table table-responsive table-striped">
                          <thead>
                            <tr style="color:White;background-color:Purple;font-weight:bold;">
                              <th>Folio</th>
                              <th>Clave</th>
                              <th>Materia</th>
                              <th>Docente</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>234275</th>
                              <td>ITI-27804</td>
                              <td>SISTEMAS INTELIGENTES</td>
                              <td>MARCO AURELIO NUÑO MAGANDA</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234276</th>
                              <td>ITI-27801</td>
                              <td>ADMINISTRACION DE PROYECTOS DE TECNOLOGIAS DE LA INFORMACION</td>
                              <td>SHEYLA MALENY SILVA GONZALEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234277</th>
                              <td>ITI-27805</td>
                              <td>GESTION DE DESARROLLO DE SOFTWARE</td>
                              <td>SERGIO YORICK ALVAREZ MONTALVO</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                              <th>234279</th>
                              <td>ITI-27808</td>
                              <td>INGLÉS VIII</td>
                              <td>JESÚS HERNÁNDEZ LÓPEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234280</th>
                              <td>ITI-27790</td>
                              <td>PROGRAMACIÓN WEB</td>
                              <td>MANUEL RUÍZ MÉNDEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234281</th>
                              <td>ITI-27803</td>
                              <td>DISEÑO DE INTERFACES</td>
                              <td>JOSÉ FIDENCIO LÓPEZ LUNA</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div align="right">
                  </div>

                  <div class="card mb-4">
                    <div class="card-header">
                      <b>Pregunta 6. </b>Utiliza estrategias, medios y materiales didácticos apropiados para la comprensión de los temas revisados.
                      </div>
                      <div class="card-body">
                        <table class="table table-responsive table-striped">
                          <thead>
                            <tr style="color:White;background-color:Purple;font-weight:bold;">
                              <th>Folio</th>
                              <th>Clave</th>
                              <th>Materia</th>
                              <th>Docente</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>234275</th>
                              <td>ITI-27804</td>
                              <td>SISTEMAS INTELIGENTES</td>
                              <td>MARCO AURELIO NUÑO MAGANDA</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234276</th>
                              <td>ITI-27801</td>
                              <td>ADMINISTRACION DE PROYECTOS DE TECNOLOGIAS DE LA INFORMACION</td>
                              <td>SHEYLA MALENY SILVA GONZALEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234277</th>
                              <td>ITI-27805</td>
                              <td>GESTION DE DESARROLLO DE SOFTWARE</td>
                              <td>SERGIO YORICK ALVAREZ MONTALVO</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                              <th>234279</th>
                              <td>ITI-27808</td>
                              <td>INGLÉS VIII</td>
                              <td>JESÚS HERNÁNDEZ LÓPEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234280</th>
                              <td>ITI-27790</td>
                              <td>PROGRAMACIÓN WEB</td>
                              <td>MANUEL RUÍZ MÉNDEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234281</th>
                              <td>ITI-27803</td>
                              <td>DISEÑO DE INTERFACES</td>
                              <td>JOSÉ FIDENCIO LÓPEZ LUNA</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div align="right">
                  </div>

                  <div class="card mb-4">
                    <div class="card-header">
                      <b>Pregunta 7.</b>Inicia y aprovecha el tiempo de clase y concluye las sesiones puntualmente.
                      </div>
                      <div class="card-body">
                        <table class="table table-responsive table-striped">
                          <thead>
                            <tr style="color:White;background-color:Purple;font-weight:bold;">
                              <th>Folio</th>
                              <th>Clave</th>
                              <th>Materia</th>
                              <th>Docente</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>234275</th>
                              <td>ITI-27804</td>
                              <td>SISTEMAS INTELIGENTES</td>
                              <td>MARCO AURELIO NUÑO MAGANDA</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234276</th>
                              <td>ITI-27801</td>
                              <td>ADMINISTRACION DE PROYECTOS DE TECNOLOGIAS DE LA INFORMACION</td>
                              <td>SHEYLA MALENY SILVA GONZALEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234277</th>
                              <td>ITI-27805</td>
                              <td>GESTION DE DESARROLLO DE SOFTWARE</td>
                              <td>SERGIO YORICK ALVAREZ MONTALVO</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                              <th>234279</th>
                              <td>ITI-27808</td>
                              <td>INGLÉS VIII</td>
                              <td>JESÚS HERNÁNDEZ LÓPEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234280</th>
                              <td>ITI-27790</td>
                              <td>PROGRAMACIÓN WEB</td>
                              <td>MANUEL RUÍZ MÉNDEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234281</th>
                              <td>ITI-27803</td>
                              <td>DISEÑO DE INTERFACES</td>
                              <td>JOSÉ FIDENCIO LÓPEZ LUNA</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div align="right">
                  </div>

                  <div class="card mb-4">
                    <div class="card-header">
                      <b>Pregunta 8. </b>Propone ejemplos o ejercicios que relacionan la asignatura con el perfil de egreso de tu carrera.
                      </div>
                      <div class="card-body">
                        <table class="table table-responsive table-striped">
                          <thead>
                            <tr style="color:White;background-color:Purple;font-weight:bold;">
                              <th>Folio</th>
                              <th>Clave</th>
                              <th>Materia</th>
                              <th>Docente</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>234275</th>
                              <td>ITI-27804</td>
                              <td>SISTEMAS INTELIGENTES</td>
                              <td>MARCO AURELIO NUÑO MAGANDA</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234276</th>
                              <td>ITI-27801</td>
                              <td>ADMINISTRACION DE PROYECTOS DE TECNOLOGIAS DE LA INFORMACION</td>
                              <td>SHEYLA MALENY SILVA GONZALEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234277</th>
                              <td>ITI-27805</td>
                              <td>GESTION DE DESARROLLO DE SOFTWARE</td>
                              <td>SERGIO YORICK ALVAREZ MONTALVO</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                              <th>234279</th>
                              <td>ITI-27808</td>
                              <td>INGLÉS VIII</td>
                              <td>JESÚS HERNÁNDEZ LÓPEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234280</th>
                              <td>ITI-27790</td>
                              <td>PROGRAMACIÓN WEB</td>
                              <td>MANUEL RUÍZ MÉNDEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234281</th>
                              <td>ITI-27803</td>
                              <td>DISEÑO DE INTERFACES</td>
                              <td>JOSÉ FIDENCIO LÓPEZ LUNA</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div align="right">
                  </div>

                  <div class="card mb-4">
                    <div class="card-header">
                      <b>Pregunta 9. </b>Brindó apoyo o asesorías cuando se le solicitó.
                      </div>
                      <div class="card-body">
                        <table class="table table-responsive table-striped">
                          <thead>
                            <tr style="color:White;background-color:Purple;font-weight:bold;">
                              <th>Folio</th>
                              <th>Clave</th>
                              <th>Materia</th>
                              <th>Docente</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>234275</th>
                              <td>ITI-27804</td>
                              <td>SISTEMAS INTELIGENTES</td>
                              <td>MARCO AURELIO NUÑO MAGANDA</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234276</th>
                              <td>ITI-27801</td>
                              <td>ADMINISTRACION DE PROYECTOS DE TECNOLOGIAS DE LA INFORMACION</td>
                              <td>SHEYLA MALENY SILVA GONZALEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234277</th>
                              <td>ITI-27805</td>
                              <td>GESTION DE DESARROLLO DE SOFTWARE</td>
                              <td>SERGIO YORICK ALVAREZ MONTALVO</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                              <th>234279</th>
                              <td>ITI-27808</td>
                              <td>INGLÉS VIII</td>
                              <td>JESÚS HERNÁNDEZ LÓPEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234280</th>
                              <td>ITI-27790</td>
                              <td>PROGRAMACIÓN WEB</td>
                              <td>MANUEL RUÍZ MÉNDEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234281</th>
                              <td>ITI-27803</td>
                              <td>DISEÑO DE INTERFACES</td>
                              <td>JOSÉ FIDENCIO LÓPEZ LUNA</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div align="right">
                  </div>

                  <div class="card mb-4">
                    <div class="card-header">
                      <b>Pregunta 10. </b>Se dirige a los alumno de manera cordial y respetuosa.
                      </div>
                      <div class="card-body">
                        <table class="table table-responsive table-striped">
                          <thead>
                            <tr style="color:White;background-color:Purple;font-weight:bold;">
                              <th>Folio</th>
                              <th>Clave</th>
                              <th>Materia</th>
                              <th>Docente</th>
                              <th>Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>234275</th>
                              <td>ITI-27804</td>
                              <td>SISTEMAS INTELIGENTES</td>
                              <td>MARCO AURELIO NUÑO MAGANDA</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234276</th>
                              <td>ITI-27801</td>
                              <td>ADMINISTRACION DE PROYECTOS DE TECNOLOGIAS DE LA INFORMACION</td>
                              <td>SHEYLA MALENY SILVA GONZALEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234277</th>
                              <td>ITI-27805</td>
                              <td>GESTION DE DESARROLLO DE SOFTWARE</td>
                              <td>SERGIO YORICK ALVAREZ MONTALVO</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                              <th>234279</th>
                              <td>ITI-27808</td>
                              <td>INGLÉS VIII</td>
                              <td>JESÚS HERNÁNDEZ LÓPEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234280</th>
                              <td>ITI-27790</td>
                              <td>PROGRAMACIÓN WEB</td>
                              <td>MANUEL RUÍZ MÉNDEZ</td>
                              <td>
                                <div class="form-check form-check-inline">
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
                              <th>234281</th>
                              <td>ITI-27803</td>
                              <td>DISEÑO DE INTERFACES</td>
                              <td>JOSÉ FIDENCIO LÓPEZ LUNA</td>
                              <td> 
                                <div class="form-check form-check-inline">
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
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div align="right">
                      <button type="button" class="btn btn-secondary btn-lg" align="center"><a href="respuestas.html" style="text-decoration: none; color: white;">Enviar</a></button>
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
