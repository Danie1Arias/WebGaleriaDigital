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
            <hr><br>
            <div class = "indice">
                <h2 id="titulo_indice">➜ Accede rápidamente:</h2>
                <ul>
                    <li><a href="#uno">Non Fungible Token (NFT)</a></li>
                    <li><a href="#dos">¿Qué son los bienes fungibles?</a></li>
                    <li><a href="#tres">¿Qué son los NFT?</a></li>
                    <li><a href="#cuatro">¿Cómo funcionan los NFT?</a></li>
                </ul>
            </div>
            <br><hr><br>
            <h1 id = "uno">Non Fungible Token (NFT)</h1><br>
            <p>Vamos a explicarte <b>qué son los NFT y cómo funcionan</b>, de forma que puedas entender qué hay 
                detrás de noticias como la de esa persona que pagó 260.000 euros por el dibujo de una roca.</p>
            <p>Para hacer una explicación más sencilla, vamos a alejarnos de tecnicismos. En primer lugar, te explicaremos qué
                son los <i>bienes no fungibles</i> y también entraremos brevemente en su funcionamineto.</p>
            <p>Las siguientes imágenes muestran algunos NFTs lanzados por la empresa Habbo Hotel.</p>

            <table class = "galeria">
                <tr>
                    <td>
                        <figure>
                            <img src="habbo1.png" alt="NFT Habbo" width=180px >
                            <figcaption>Ejemplo 1 NFT Habbo Hotel</figcaption>
                        </figure>
                    </td>
                    <td>
                        <figure>
                            <img src="habbo2.png" alt="NFT Habbo" width=180px >
                            <figcaption>Ejemplo 2 NFT Habbo Hotel</figcaption>
                        </figure>
                    </td>
                    <td>
                        <figure>
                            <img src="colección_habbo.png" alt="NFT Habbo" width=250px >
                            <figcaption>Ejemplo Colección NFT Habbo Hotel</figcaption>
                        </figure>
                    </td>
                </tr>
            </table>
                
            <p><br>Si te gustaría tener un tu posesión alguno de estos NFTs puebes visitar la página oficial de Habbo Hotel
                pulsando <a id = "enlace" href="https://www.habbo.es/community/article/25604/vamos-a-lanzar-la-coleccion-habbo-nft" target= "_blank">aquí</a>. 
                Además, en el siguiente video puedes ver una explicación más detallada:
            </p>   
            
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ykVnb8huoQs" title="YouTube video player" frameborder="2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <h2 id = "dos"><br>¿Qué son los bienes fungibles?</h2>
            <p><br>Para entender el concepto de los NFT, primero tenemos que saber y entender que en nuestro sistema jurídico
                existen <b>bienes fungibles y bienes no fungibles</b>. Los bienes fungibles son los que pueden intercambiarse, 
                teniendo un valor en función de su número, medida o peso. Y los bienes no fungibles son los que no son sustituibles.
            <br><br>
                <b>Un ejemplo de bienes fungibles es el dinero.</b> Si tienes un billete de 20 euros, lo puedes intercambiar sin problema 
                por otro billete de 20 euros porque no pierde valor y es exactamente igual. Además, ese billete se consume cuando
                lo utilizas.
            <br><br>
                Por otra parte, <b>un ejemplo de bien no funjible sería una obra de arte</b>. Si tienes un cuadro en casa, este no
                se consume al utilizarse y tampoco puede ser sustituido por otro cuadro. <b>Una obra de arte no es equivalente a otra</b>,
                por lo tanto, no se pueden simplemente intercambiar como pasa con un billete de 20 euros.
            </p>

            <h2 id = "tres"><br>¿Qué son los NFT?</h2>
            <p><br>Las siglas de NFT significan Non Fungible Token, un token no fungible. Los tokens son unidades de valor que se le 
                asignan a un modelo de negocio, como por ejemplo el de las <b>criptomonedas</b>. Y es que los NFT tienen una 
                relación estrecha con las criptomenadas, por lo menos tecnológicamente, aunque son opuestos, ya que Bitcoin es 
                un bien fungible, pero en esencia, son como las dos caras de una moneda tecnológica.</p>

            <p>Para que lo entiendas bien, podemos pensar en las criptomonedas como una reserva de valor, <b>algo parecido al oro</b>
            . Puedes comprar y vender oro, y cuando en número de compradores aumenta el precio sube, para bajar cuando este número
            de compradores disminuye. Es un comportamiento igual al de las criptomonedas.</p>

            <p>Per al final el oro es oro, y puedes cambiar una pepita por otra sin problema. Sin embargo, hay otros bienes hechos
                en oro que también tienen un valor, pero son únicos, y ese hecho marca la diferencia y les da otro tipo de valor. Al
                igual que ese valor hecho con oro o una obra de arte, <b>los NFT son activos únicos que no se pueden modificar ni
                intercambiar por otro que tenga el mismo valor</b>, ya que no hay dos NFT que sean equivalentes igual que no hay dos
                cuadros que lo sean.</p>

            <p>Por lo tanto, puedes pensar en un NFT como una gran obra de arte, como la Gioconda de Da Vinci. Solo hay una y está
                en una galería de arte concreta. Si la quieres, solo puedes comprar la original en el caso de que estuviera en venta.
                También podrías hacerte con una copia, pero tendría otro valor, ya que no sería la original. Pues eso es lo que hace 
                el NFT, pero de forma digital.</p>

            <figure>
                <img src="cool.png" alt="NFT Cat" width=400px >
                <figcaption>NFT valorado en 150€</figcaption>  
            </figure>

            <h2 id = "cuatro"><br>¿Cómo funcionan los NFT?</h2>
            <p><br>Los NFT funcionan <b>a través de la tecnología blockchain</b> o de cadena de bloques. Es la primera tecnología de las
                criptomonedas, que funcionan mediante una red de ordenadores descentralizada, con bloques o nodos enlazados y asegurados
                utilizando criptografía. Cada bloque enlaza a uno previo, así como una fecha y datos de transacciones, y por diseño
                son resistentes a modificación de datos.</p>

            <p>A los NFT, se les asigna una especie de certificado digital de autenticidad, una serie de metadatos que no se van a poder
                modificar. En estos metadatos se garantiza su autenticidad, se registra el valor de partida y todas las adquisiciones
                o transacciones que se hayan hecho, y también a su autor.</p>
            
            <p>Esto quiere decir que si compras un contenido digital tokenizado con NFT, en todo momento siempre habrá constancia del primer
                valor que tenía, y de por cuánto lo has comprado.</p>

            <p>
                Por lo general, la mayoría de "tokens" o NFT suelen estar basados en los estándares de la red Etherum y de su cadena
                de bloques. Gracias a utilizar una tecnología conocida y popular, <b>es sencillo operar con ellos para comprarlos y 
                venderlos</b> utilizando determinados monederos que también trabajan con Ethereum.</p>
            <br>
                <table class = "galeria">
                    <tr>
                        <td>
                            <figure><img src="habbo.gif" alt="NFT Habbo" width=85px></figure>
                        </td>
                        <td>
                            <figure><img src="coins2.gif" alt="NFT Habbo" width=180px></figure>
                        </td>
                        <td>
                            <figure><img src="point.gif" alt="NFT Habbo" width=150px></figure>
                        </td>
                        <td>
                            <figure><img src="coins.png" alt="NFT Habbo" width=180px ></figure>
                        </td>
                    </tr>
                </table>
     
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