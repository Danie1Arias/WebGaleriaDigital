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
     
            <div class = "tablaprecios">
            <h1>Precios por categoría:</h1>
            <br>
                <table>
                    <tr>¡<th colspan="4">Tabla de precios</th>¡</tr>
                    <tr><th>Categorías</th><th>Ethereum</th><th>Dollars ($)</th><th>Euros (€)</th></tr>
                    <tr><td>Christmas</td><td>0.061</td><td>250</td><td>219,87</td></tr>
                    <tr><td>Naruto</td><td>0.11</td><td>450</td><td>395,77</td></tr>
                    <tr><td>Vikings</td><td>0.074</td><td>300</td><td>263,85</td></tr>
                    <tr><td>Halloween</td><td>0.35</td><td>1000</td><td>879,49</td></tr>
                    <tr><td>Premium</td><td>0.53</td><td>1500</td><td>1203,8</td></tr>
                    <caption>Tabla de precios estándar</caption>
                </table>
            </div>
            <br><hr><br>
            <div class = "Christmas">
            <h2>Christmas</h2>
                <table class = "galeria">
                    <tr>
                        <td><figure><img src="xgift.png" alt="NFT Habbo" width=180px ></figure></td>
                        <td><figure><img src="xmas.gif" alt="NFT Habbo" width=180px ></figure></td>
                        <td><figure><img src="xsanta.gif" alt="NFT Habbo" width=100px ></figure></td>
                        <td><figure><img src="xtree.gif" alt="NFT Habbo" width=180px ></figure></td>
                    </tr>
                </table>
            </div>
            <br><hr><br>
            <div class = "Naruto">
                <h2>Naruto</h2>
                    <table class = "galeria">
                        <tr>
                            <td><figure><img src="naruto.png" alt="NFT Habbo" width=180px ></figure></td>
                            <td><figure><img src="naruto2.png" alt="NFT Habbo" width=180px ></figure></td>
                            <td><figure><img src="naruto3.png" alt="NFT Habbo" width=250px ></figure></td>
                            <td><figure><img src="naruto4.png" alt="NFT Habbo" width=200px ></figure></td>
                        </tr>
                    </table>
            </div>
            <br><hr><br>
            <div class = "Vikings">
                <h2>Vikings</h2>
                    <table class = "galeria">
                        <tr>
                            <td><figure><img src="vikings1.png" alt="NFT Habbo" width=230px ></figure></td>
                            <td><figure><img src="vikings2.png" alt="NFT Habbo" width=180px ></figure></td>
                            <td><figure><img src="vikings3.png" alt="NFT Habbo" width=100px ></figure></td>
                            <td><figure><img src="vikings4.png" alt="NFT Habbo" width=120px ></figure></td>
                            <td><figure><img src="vikings5.png" alt="NFT Habbo" width=120px ></figure></td>
                        </tr>
                    </table>
            </div>
            <br><hr><br>
            <div class = "Halloween">
                <h2>Halloween</h2>
                    <table class = "galeria">
                        <tr>
                            <td><figure><img src="terror1.gif" alt="NFT Habbo" width=240px ></figure></td>
                            <td><figure><img src="terror2.png" alt="NFT Habbo" width=180px ></figure></td>
                            <td><figure><img src="terror3.png" alt="NFT Habbo" width=150px ></figure></td>
                            <td><figure><img src="terror4.png" alt="NFT Habbo" width=120px ></figure></td>
                            <td><figure><img src="terror5.png" alt="NFT Habbo" width=180px ></figure></td>
                        </tr>
                    </table>
            </div>
            <br><hr><br>      

            <h1>NTF Premium</h1>
            <div class="galeria2">
                <input type="radio" name="navegacion" id="_1" checked>
                <input type="radio" name="navegacion" id="_2">
                <input type="radio" name="navegacion" id="_3">
                <input type="radio" name="navegacion" id="_4"> 
                <img src="hi1.gif" width="200" height="300" alt="Galeria CSS 1" />
                <img src="hi2.gif" width="200" height="300" alt="Galeria CSS 2"  />
                <img src="hi3.gif" width="200" height="300" alt="Galeria CSS 3" />
                <img src="hi4.gif" width="200" height="300" alt="Galeria CSS 4" />
            </div>

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