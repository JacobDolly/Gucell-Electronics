<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <script src="https://kit.fontawesome.com/dbc2195786.js" crossorigin="anonymous"></script>
    <title>Mis citas</title>
</head>

<body style="background-color: #fbfbfe; font-family: sans-serif;">
    <center>
        <!-- Header -->
        <header class="header-home white">
            <div class="d-flex align-items-center content-header">
                <div class="col-4">
                    <a href="index.php">
                        <img style="width: 200px;" src="image/logo-clinica.svg" alt="Logo de Clinica">
                    </a>
                </div>
                <nav class="col-8 navigator">
                    <ul class="d-flex justify-content-end username-list">
                        <li class="px-3 username-list-item">
                            <span>
                                Laura Sifuentes Lozano
                                <div class="flecha">
                                    <img src="image/flecha-down.svg" alt="flecha">
                                </div>
                            </span>
                            <ul class="username-sublist">
                                <li class="username-subitem">
                                    <a href="mi-perfil.php">
                                        <div>
                                            <img src="image/perfil-dentista.svg" alt="mi perfil"> Mi perfil
                                        </div>
                                    </a>
                                </li>
                                <li class="username-subitem">
                                    <a href="mis-citas.php">
                                        <div>
                                            <img src="image/cita.svg" alt="cita"> Mis Citas
                                        </div>
                                    </a>
                                </li>
                                <li class="username-subitem">
                                    <a href="mis-tratamientos.php">
                                        <div>
                                            <img src="image/cita.svg" alt="close-sesion"> Mis Tratamientos
                                        </div>
                                    </a>
                                </li>
                                <li class="username-subitem">
                                    <a href="index.php">
                                        <div>
                                            <img src="image/cerrar-sesion.svg" alt="close-sesion"> Cerrar sesión
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="d-flex justify-content-between">
                        <li>
                            <a href="index.php"> <i class="fas fa-home"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="servicios.php"><i class="fa fa-stethoscope fa-fw"></i> Servicios</a>
                            <ul>
                                <li><a href="DiseñoSonrisa.html">Diseño de Sonrisa</a></li>
                                <li><a href="PlanDental.html">Plan Dental</a></li>
                                <li><a href="blanqueamiento.html">Blanqueamiento</a></li>
                                <li><a href="LimpiezaDental.html">Limpieza Dental</a></li>
                                <li><a href="brakects.html">Brackets</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="sedes.php"><i class="fa fa-map-marker fa-fw"></i> Sedes</a>
                        </li>
                        <li>
                            <a href="nosotros.php"><i class="fas fa-users"></i> Nosotros</a>
                        </li>
                    </ul>
                </nav>

            </div>
            <div class="fila-color skyblue"></div>
        </header>

        <main>

            <div class="content-register-treatment">
                <h1>Registrar nuevo tratamiento</h1>
                <div class="table-register-treatment">
                    <form action="">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">DNI Paciente</label>
                            <input type="text" class="form-control" id="validationCustom01" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="treatment">Tratamiento</label>
                            <select id="treatment" name="treatment" class="form-control" onchange="viewTreatment()">
                                <!-- <option selected>Selecciona...</option> -->
                                <option value="1">Ortodoncia</option>
                                <option value="2">Periodoncia</option>
                                <option value="3">Rehabilitación Oral</option>
                                <option value="4">Implantes</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="precio">Precio</label>
                            <input type="text" readonly class="form-control" id="precio" name="precio" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cuota">Cuotas</label>
                            <input type="text" readonly class="form-control" id="cuota" name="cuota" required>
                        </div>
                        <div class="d-flex col-md-6 mb-3 justify-content-around">
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Activo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                    value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Inactivo
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 btn-save-treatment">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>

            </div>



            <footer class="footer-page skyblue">
                <div class="image-bg">
                </div>
                <div class="d-flex content-footer">
                    <div class="col-4">
                        <div>
                            <h1>DENTOiMAGEN</h1>
                            <p>C. Los Olivos 62, Los Olivos 15304</p>
                            <p><span>Horario de atención</span> <br>
                                Lun a Vie. de 8am - 1pm y 3pm-8pm <br>
                                Sab y Dom. de 9am a 2pm
                            </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <h3>Contacto</h3>
                        <ul>
                            <li>
                                <strong>Telf: </strong> (01) 540 0543
                            </li>
                            <li>
                                <strong>Cel: </strong> +51 924 800 200
                            </li>
                            <li>
                                <strong>Cel: </strong> +51 924 800 500
                            </li>
                            <li>
                                <strong>Correo: </strong> dentoimagen@servicios.pe
                            </li>
                        </ul>
                        <div>
                            <img style="width: 20px; cursor: pointer;" src="image/facebook.svg" alt="">
                            <img style="width: 20px; cursor: pointer;" src="image/instagram.svg" alt="">
                        </div>
                    </div>
                    <div class="col-4 ">
                        <h3>Formas de pago</h3>
                        <div class="d-flex justify-content-between">
                            <img src="image/amex.svg" alt="">
                            <img src="image/diners.svg" alt="">
                            <img src="image/visa.svg" alt="">
                            <img src="image/mastercard.svg" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-12 pt-4 pb-2">
                    <p>Todos los derechos reservados © 2020 | DENTOiMAGEN</p>
                </div>

            </footer>
        </main>
    </center>




    <!-- jquery, popper, bootstrap     -->
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>