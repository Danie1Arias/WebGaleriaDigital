<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <title>Blockstream</title>
        <link rel="shortcut icon" href="blockstream.jpg" />
        <link rel="stylesheet" title="estilos" type="text/css" href="estilo_homepage.css"/>
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
                <form  action="InicioSesion.php" METHOD=POST> 
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
     
            <h1>Contacto</h1>
            <p>Puedes ponerte en contacto con un responsable a trevés de:</p>
            <ul>
                <li>Teléfono de contacto: 977 457 215</li>
                <li>Correo electrónico: info@blockstream.com</li>
            </ul>

        </section>

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