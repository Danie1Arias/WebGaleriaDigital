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
        <section class="contenido wrapper">
        <?php
            header("Cache-Control: no-cache, must-revalidate"); 
            header("Expires: Sat, 1 Jul 2000 05:00:00 GMT");
            $DNI = $_POST['DNI'];
            $passwordHash = $_POST['passwordHash'];

            if (!empty($DNI) || !empty($passwordHash)) {

                $host = 'localhost';
                $dbusername = 'root';
                $dbpassword = '';
                $dbname = 'blockstream';  
                $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
                
                if(mysqli_connect_error()){
                    die('connect_error('.mysqli_connect_error().')'.myslqi_connect_error());       
                }else{
                    $SELECT = "SELECT DNI from users where DNI = ? ";
                    $stmt = $conn->prepare($SELECT);
                    $stmt -> bind_param('s',$DNI);
                    $stmt -> execute();
                    $stmt -> bind_result($DNI);
                    $stmt-> store_result();
                    $rnum = $stmt->num_rows;

                    if ($rnum == 0) {
                        echo "El DNI no es correcto.<br>";
                        print "<a href='Principal.php'><br><br><input type='button' value=' Volver '></a>";
                    } else {
                        $query = "SELECT * from users where DNI='$DNI'";
                        $result = $conn->query($query);
                        $row = $result -> fetch_array(MYSQLI_BOTH);

                        if (password_verify($passwordHash, $row['passwordHash'])){
                            echo 'Bienvenido '. $row['nombre']. " " .$row['apellidos']. "<br>";

                        } else {
                            echo "La constraseña no es correcta.<br>";
                            print "<a href='Principal.php'><br><br><input type='button' value=' Volver '></a>";
                        }
                    }
                    $stmt->close();
                    $conn->close();
                }
            }else{
                echo "Se ha producido un error.<br>";
                print "<a href='Principal.php'><br><br><input type='button'  value=' Volver '></a>";
                die();
            }

        ?>
        </section>

        <footer>
            <div class = "derechos">
                <p>Daniel Arias Cámara</p>
                <p>Enginyeria dels Llocs Web</p>
                <p>Todos los derechos reservados &copy;</p>
            </div>           
        </footer>

    </body>
</html>