<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <title>Blockstream</title>
        <link rel="shortcut icon" href="blockstream.jpg" />
        <link rel="stylesheet" title="estilos" type="text/css" href="estilo_homepage.css"/> 
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
    </head>

    <body onload="checkCookie()">
        <header>
            <nav>
                <ul>
                    <li><figure><img src="Blockstream2.png" alt="Logo" vspace=70 hspace=70 width="150"></figure></li>
                    <li><a href="Principal.php">Inicio</a></li>
                    <li><a href="Galeria.php">Galería</a></li>
                    <li><a href="Contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </header>

        <aside>
        <div id="new"></div>
            <div class = "reloj">
                <h2>⏰ Fin de año 🎉</h2>
                <p><span id="days"></span> días <br> <span id="hours"></span> horas <br> <span id="minutes"></span> minutos <br> <span id="seconds"></span> segundos</p>

            <script>
              document.addEventListener('DOMContentLoaded', () => { 
                const DATE_TARGET = new Date('12/31/2022 11:59 AM');
                const SPAN_DAYS = document.querySelector('span#days');
                const SPAN_HOURS = document.querySelector('span#hours');
                const SPAN_MINUTES = document.querySelector('span#minutes');
                const SPAN_SECONDS = document.querySelector('span#seconds');

                const MILLISECONDS_OF_A_SECOND = 1000;
                const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
                const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
                const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24

                function updateCountdown() {
                    const NOW = new Date()
                    const DURATION = DATE_TARGET - NOW;
                    const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
                    const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
                    const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
                    const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);

                    SPAN_DAYS.textContent = REMAINING_DAYS;
                    SPAN_HOURS.textContent = REMAINING_HOURS;
                    SPAN_MINUTES.textContent = REMAINING_MINUTES;
                    SPAN_SECONDS.textContent = REMAINING_SECONDS;
                }

                updateCountdown();
                setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
            });
            </script>
            </div>
            <br>

            <div class = "inicio_sesion">
                <h2>🔹 Inicio Sesión</h2>
                <form class="tamañoForm" action="InicioSesion.php" METHOD=POST> 
                    DNI:<br>
                    <input 	type="text" name='DNI' size="numero_caracteres"  maxlength="num_caracteres" required/>
                    Contraseña:<br>
                    <input type="password" name='passwordHash' size="num_caracteres" maxlength="num_caracteres" required/><br><br>
                    <input type="submit" value=" ACCEDER " name="login" id="botonEnviar"/><br>	
                </form> 
                <a id = "registro" href="Registro.php">➜ Regístrate</a><br><br><br>                
                <figure><img src="wiki.png" alt="NFT Habbo" width=100px ><figcaption>¿Necesitas ayuda?</figcaption></figure>   
            </div>
        </aside>

        <section class="contenido wrapper">
            <?php
                header("Cache-Control: no-cache, must-revalidate");
                header("Expires: Sat, 1 Jul 2000 05:00:00 GMT");
                
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $DNI = $_POST['DNI'];
                $pass = $_POST['contrasena1'];
                $pass2 = $_POST['contrasena2'];
                $fechaNacimiento = $_POST['fechaNacimiento'];
                $direccion = $_POST['direccion'];               
                $telefono = $_POST['telefono'];

                if ((strcmp($pass, $pass2) === 0)&&(strlen($DNI)==10)&&(strlen($telefono)==9)){
                        if(!empty($nombre) || !empty($apellidos) || !empty($pass) || !empty($fechaNacimiento) || !empty($direccion) || !empty($DNI) || !empty($telefono)){
                            $host = 'localhost';
                            $dbusername = 'root';
                            $dbpassword = '';
                            $dbname = 'blockstream';    
                            $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

                            if(mysqli_connect_error()){
                                    die('connect_error('.mysqli_connect_error().')'.myslqi_connect_error());       
                            }else{
                                    $SELECT = "SELECT DNI from users where DNI = ? limit 1";
                                    $INSERT = "INSERT INTO users (nombre, apellidos, DNI, passwordHash, fechaNacimiento, direccion, telefono) values(?,?,?,?,?,?,?)";
                                    $stmt = $conn->prepare($SELECT);
                                    $stmt -> bind_param('s',$DNI);
                                    $stmt -> execute();
                                    $stmt -> bind_result($DNI);
                                    $stmt-> store_result();
                                    $rnum = $stmt->num_rows;
                                    
                                    if($rnum == 0){
                                        $stmt->close();
                                        $stmt = $conn->prepare($INSERT);
                                        $passwordHash = password_hash($pass, PASSWORD_DEFAULT);
                                        $stmt -> bind_param('ssssssi',$nombre, $apellidos, $DNI, $passwordHash, $fechaNacimiento, $direccion, $telefono);
                                        $stmt -> execute();
                                        setcookie("username",$nombre,time()+3600*24);
                                        echo "Te has registrado correctamente!<br><br>";

                                        if($telefono%2 == 0){
                                        echo "  <div class = 'tablaprecios'><table border='1' id = 'azul'>
                                                    <tr><th>Nombre</th><th>Apellidos</th><th>DNI</th><th>Contraseña</th><th>Fecha de Nacimiento</th><th>Dirección</th><th>Telefono</th></tr>
                                                    <tr><td>$nombre</td><td>$apellidos</td><td>$DNI</td><td>$pass</td><td>$fechaNacimiento</td><td>$direccion</td><td>$telefono</td></tr>
                                                </table>
                                                </div>";   
                                        }else{
                                        echo "<div class = 'tablaprecios'><table border='1'id = 'rojo'>
                                                    <tr><th>Nombre</th><th>Apellidos</th><th>DNI</th><th>Contraseña</th><th>Fecha de Nacimiento</th><th>Dirección</th><th>Telefono</th></tr>
                                                    <tr><td>$nombre</td><td>$apellidos</td><td>$DNI</td><td>$pass</td><td>$fechaNacimiento</td><td>$direccion</td><td>$telefono</td></tr>
                                                </table>
                                                </div>";     
                                        }
                                    }else{
                                        echo "Ya te has registrado<br><br>";
                                    }
                                    $stmt->close();
                                    $conn->close();
                            }
                        }else{
                            echo "Se ha producido un error al registrarse.<br><br>";
                            echo "<a href='Registro.php'><br><br><input type='button'  value=' Volver '></a>";
                            die();
                        }
                }else{
                        echo "Se ha producido un error al registrarse.<br><br>";
                        print "<div id='boton'><a href='Registro.php'><br><br><input type='button' value=' Volver '></a></div>";
                        die();
                }
                
            ?>
            <div id="boton">
                <br>
                <a href="Principal.php"><input type="button" value="Página de Inicio"></a>	
            </div>
        </section>

        <script>document.getElementById("rojo").style.borderColor = "red";</script>
        <script>document.getElementById("azul").style.borderColor = "blue";</script>
        <footer>
            <div class = "derechos">
                <p>Daniel Arias Cámara</p>
                <p>Enginyeria dels Llocs Web</p>
                <p>Todos los derechos reservados &copy;</p>
            </div>           
        </footer>

        <script>
            function getCookie(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
                for(let i = 0; i < ca.length; i++) {
                    let c = ca[i];
                    while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                    }
                }
            return "";
            }

            function checkCookie() {
            let user = getCookie("username");
                if (user != "") {
                    var tag = document.createElement("p");
                    var text = document.createTextNode("Hola " + user + "!");
                    tag.appendChild(text);
                    var element = document.getElementById("new");
                    element.appendChild(tag);
                }
            }
        </script>
    </body>
</html>