<!DOCTYPE html>
<html>

<head>
    <title>Cambiar Contraseña</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./estilos/HeaderFooter.css">

</head>




<body>

    <div class="wrapper">
        <div class="content">
            <nav id="custom-navbar" class="navbar navbar-expand-lg navbar-light navbar-dark-bg">
                <div class="container-fluid" id="header">
                    <a class="navbar-brand Logo" href="./index.php"><img src="./Imagenes/Logo.png" alt="Logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link rojo" id="mapa" href="./mapa.php">Mapa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link amarillo" id="calendario" href="./calendario.php">Calendario</a>
                            </li>
                            <?php
                            if (isset($_SESSION['user_id'])) {
                                echo '<li class="nav-item">
                            <a class="nav-link amarillo" id="calendario" href="./reg_establecimiento.php">registra tu establecimiento</a>
                            </li>';
                            } else {
                                echo '';
                            }
                            include('modales_usuario.php');
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                <br>
                <h2>Cambiar Contraseña</h2>
                <br>
                <p> Aqui podrás restablecer tu contraseña. Asegúrate de elegir una contraseña segura, que combine
                    letras, números y caracteres especiales. Esto protegerá tu cuenta de posibles intrusiones no
                    deseadas.</p>
                <br>
                <form method="POST" action="config/recuperacion.php">
                    <!-- Aquí debes agregar los campos para la nueva contraseña -->
                    <div class="form-group">
                        <label for="password">Nueva Contraseña:</label>
                        <input type="password" autofocus class="form-control" name="password" required
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirmar Contraseña:</label>
                        <input type="password" class="form-control" name="confirm_password" required
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}">
                    </div>
                    <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
                    <button type="submit" class="btn btn-primary">Cambiar Contraseña</button>
                </form>
            </div>
            <br><br><br><br><br><br>
            <?php
            include('modales_footer.php');
            ?>
            <footer class="footer">
                <nav>
                    <ul>
                        <li><a href="#" data-toggle="modal" data-target="#modalPoliticaPrivacidad">Política de
                                privacidad</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#modalTerminosCondiciones">Términos y
                                condiciones</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#modalContacto">Contacto</a></li>
                        <?php
                    if (isset($_SESSION['user_id'])) {
                        echo '';
                    } else {
                        echo '<li><a data-toggle="modal" data-target="#myModal" href="#">deseas registrar tu establecimiento</a></li>';
                    }
                    ?>

                </ul>

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Mensaje</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                Debes estar logeado/Registrado para utilizar este servicio.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div> <br>
                    <p>© 2023 MyBog. Todos los derechos reservados.</p>
                </nav>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            document.getElementById('logout-form').addEventListener('submit', function (event) {
                event.preventDefault();
                $('#confirmLogoutModal').modal('show');
            });

            document.getElementById('confirm-logout-btn').addEventListener('click', function (event) {
                document.getElementById('logout-form').submit();
            });
        </script>
        <style>
            .container {
                width: 800px;
            }

            .container h2 {
                text-align: center;
                color: red;
            }

            .container p {
                text-align: center;
            }

            .container button {
                display: block;
                margin: 0 auto;
                padding: 10px 20px;
                color: #f40303;
                font-size: 16px;
                text-decoration: none;
                text-transform: uppercase;
                overflow: hidden;
                transition: .5s;
                letter-spacing: 3px;
                background-color: transparent;
                border: none;
                cursor: pointer;
                margin-top: 50px;
            }

            .container button:hover {
                background: #ff0000;
                color: #ffcf11;
                border-radius: 5px;
                box-shadow: 0 0 5px #ff0000, 0 0 10px #ff0000, 0 0 15px #ff0202, 0 0 20px #ff0000;
            }

            .container input {
                border: 2px solid #cacaca;
                border-radius: 10px;
                |
            }

            .container input:hover {
                border: solid #f40303;
                border-color: red;
            }

            .container input:focus {
                border: solid #f40303;
            }
        </style>
        <script src="./Funcionamiento_por_js/editar_usuario.js"></script>
</body>

</html>