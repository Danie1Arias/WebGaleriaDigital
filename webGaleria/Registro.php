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

    <body>
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

            <div class = "cabecera">
                <h1>Galería de arte digital</h1>
                <p>🎨 Bienvenidx a la mejor galería de NFTs de Habbo Hotel 🏨</p>
            </div>

            <h1>Registro</h1>
                <form id="formulario"  action="submitForm.php" METHOD=POST> 
                    <div id="textoFormulario">
                        Nombre:<br><input type="text" name="nombre" size=40  maxlength=40 id="nombre" required/><br><br>
                        Apellidos:<br><input type="text" name="apellidos" size=40  maxlength=40 id="apellidos" required/><br><br>
                        DNI:<br><input type="text" name="DNI" size=40  maxlength=40 id="DNI" required/><br><br>
                        Contraseña:<br><input type="password" name="contrasena1" size=40 maxlength=40 id="clave" required/><br><br>
                        Repite la contraseña:<br><input type="password" name="contrasena2" size=40 maxlength=40 id="clave2" required/><br><br>
                        Fecha de nacimiento:<br><input type="date" name="fechaNacimiento"  min="1900-01-01" max="2025-12-31" id="fechaNacimiento" required/><br><br>
                        Dirección:<br><input type="text" name="direccion" size=40  maxlength=40 id="direccion" required/><br><br>
                        Número de teléfono<br><input type="text" name="telefono" size=40  maxlength=40 id="telefono" required/><br><br>
                    </div>    
                    <input type="submit" value="  REGISTRARSE  " id="botonEnviar"/><br><br>
                </form>     
        </section>

        <footer>
            <div class = "derechos">
                <p>Daniel Arias Cámara</p>
                <p>Enginyeria dels Llocs Web</p>
                <p>Todos los derechos reservados &copy;</p>
            </div>           
        </footer>

        <script>
        document.getElementById("formulario").addEventListener('submit', CHECK); 

            function CHECK(evento) {
                evento.preventDefault();
                var nombre = document.getElementById('nombre').value;
                var bol=false;
                if(nombre.length == 0) {
                bol=true;
                }
                var apellidos = document.getElementById('apellidos').value;
                if (apellidos.length == 0) {
                bol=true;
                }

                var clave = document.getElementById('clave').value;
                if (clave.length == 0) {
                bol=true;
                }

                var clave2 = document.getElementById('clave2').value;
                if (clave.length == 0) {
                bol=true;
                }


                if (!(clave == clave2)) {
                alert('Las contraseñas no coinciden');
                }

                var direccion = document.getElementById('direccion').value;
                if (direccion.length == 0) {
                bol=true;
                }

                var formatoDNI=/(^([0-9]{8,8}\-[A-Z])|^)$/;
                if (!(formatoDNI.test(formulario.DNI.value))) {
                    alert('DNI incorrecto');

                }

                var telefono = document.getElementById('telefono').value;
                if (telefono.length != 9  || Number.isInteger(telefono)){
                    alert('Teléfono incorrecto');
                }

                if (bol == true) {
                alert('Hay campos vacíos. Vuelve a rellenar el formulario de registro, por favor.');
                }

                this.submit();
            }
        </script>

    </body>
</html>