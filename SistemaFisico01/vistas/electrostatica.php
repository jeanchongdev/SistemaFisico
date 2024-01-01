<?php
//inicio 
error_reporting(0);
//entrada
//var de entrada e inicio

$k = 9.00e9; 

// var de salidad e inicio
$respuesta=0; 
//proceso
if (isset($_POST['btnCalcular'])) {
	$q1 = $_POST['txtQ1'];
	$q2 = $_POST['txtQ2'];
	$r = $_POST['txtDistancia'];

	$fuerza = $k * ($q1 * $q2) / pow($r, 2);
	$respuesta = $fuerza;
}

// salidad
// fin
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELECTROSTATICA</title>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../estilos/electrostatica.css">
    <link rel="stylesheet" href="../frame/frame.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
</head>

<body>
    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <ion-icon id="cloud"name="reorder-three-outline"></ion-icon>
                <!--<ion-icon id="cloud" name="cloud-outline"></ion-icon>-->
                <span>Sistema Fisico</span> <!--para poner nombre al icono o pagina-->
            </div>
            <a href="../CerrarSesion.php" class="boton"><!--hbra un icono y texto-->
                <!--<ion-icon name="add-outline"></ion-icon>-->
                <ion-icon name="arrow-back-circle-outline"></ion-icon>
                <span>Cerrar Sesion</span>
            </a>
        </div>

        <nav class="navegacion">
            <ul>
                <li>
                    <a id="inbox" href="../sistema.php">
                        <ion-icon name="chevron-back-outline"></ion-icon>
                        <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a id="github" href="../vistas/mru.php">
                        <ion-icon name="skull-outline"></ion-icon>
                        <span>Cálculo de MRU</span>
                    </a>
                </li>
                <li>
                    <a id="linkedin" href="../vistas/cinematica.php">
                        <ion-icon name="walk-outline"></ion-icon>
                        <span>Cinemática</span>
                    </a>
                </li>
                <li>
                    <a id="facebook" href="../vistas/dinamica.php">
                        <ion-icon name="sparkles-outline"></ion-icon>
                        <span>Dinamica</span>
                    </a>
                </li>
                <li>
                    <a id="instagram" href="#">
                        <ion-icon name="flash-outline"></ion-icon>
                        <span>Electrostática</span>
                    </a>
                </li>
                <li>
                    <a id="twitter" href="../vistas/estatica.php">
                        <ion-icon name="body-outline"></ion-icon>
                        <span>Estática</span>
                    </a>
                </li>
                <li>
                    <a id="tiktok" href="../vistas/logaritmos.php">
                        <ion-icon name="contract-outline"></ion-icon>
                        <span>Logaritmos</span>
                    </a>
                </li>
                <li>
                    <a id="tiktok" href="../vistas/temperatura.php">
                        <ion-icon name="rainy-outline"></ion-icon>
                        <span>Temperatura</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div>
            <div class="linea"></div>

            <div class="modo-oscuro">
                <div class="info">
                    <ion-icon name="moon-outline"></ion-icon>
                    <span>Drak Mode</span>
                </div>
                <div class="switch">
                    <div class="base"><!--palanca modo oscuro-->
                        <div class="circulo">

                        </div>
                    </div>
                </div>
            </div>

            <div class="usuario">
                <img src="../imagenes/anime.jpg" alt="">
                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre">Jean Pierre Chong</span>
                        <span class="email"></span>
                    </div>
                    <a class="enlase" href="../redesSociales/redes.html" ><ion-icon name="ellipsis-vertical-outline"></ion-icon></a>
                </div>
            </div>
        </div>

    </div>


    <main>
        <h1 class="animate__bounce  electrostatica" >ELECTROSTATICA</h1>
        <section class="contenido" >
            <div>
                <h2>Definición</h2>
                <p>Desarrollo histórico</p>
                <hr>
                <p>Electrostática se caracteriza por:</p>
                <div class="li" >
                    <li>Los objetos frotados contra el ámbar se repelen.</li>
                    <li>También se repelen los objetos frotados contra una barra de vidrio.</li>
                    <li>Sin embargo, los objetos frotados con el ámbar atraen los objetos frotados con el vidrio.</li>
                </div>

                <p>
                La carga aparece en la naturaleza de dos formas, denotadas convencionalmente como carga
                positiva y carga negativa para distinguirlas. Dos partículas con cargas del mismo tipo
                (lo que se conoce como cargas del mismo signo), se ven sometidas a una fuerza de repulsión
                entre ellas; por el contrario, dos partículas con cargas de distinto signo se ven sometidas
                a una fuerza de atracción entre ellas.
                </p>

                <p>
                Durante todo el siglo posterior se sucedieron avances significativos en el estudio de la
                electricidad, como los fenómenos eléctricos dinámicos producidos por cargas en movimiento
                en el interior de un material conductor. Finalmente, en 1864 el físico escocés James Clerk
                Maxwell unificó las leyes de la electricidad y el magnetismo en un conjunto reducido de
                leyes matemáticas. En 1873, Maxwell publicó un tratado sobre electricidad y magnetismo.         
                </p>
                
                <img class="mru" src="../imagenes/electrostatica.png" alt="">

            </div>
            <hr>
        </section>

        <section class="electrostaticaTabla" >
            <form method="post" action="electrostatica.php">
                <table border="0" >
                    <thead>
                        <tr class="th" >
                            <th>variables</th>
                            <th>ingreso de valres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label>Ingrese Carga 1</label></td>
                            <td><input class="caja" type="text" name="txtQ1" value="<?=$q1?>"></td>
                        </tr>
                        <tr>
							<td><label>Ingrese Carga 2</label></td>
							<td><input class="caja" type="text" name="txtQ2" value="<?=$q2?>"></td>
						</tr>
                        <tr>
                            <td><label>Ingrese Distancia r</label></td>
                            <td><input class="caja" type="text" name="txtDistancia" value="<?=$r?>"></td>
						<tr>
							<td><label>Fuerza N:</label></td>
							<td><input class="caja" type="text" name="txtRespuesta" readonly value="<?=$respuesta?>" readonly></td>
						</tr>
						<tr>
							<td></td>
							<td class="td" ><input class="calcular" type="submit" name="btnCalcular" value="Calcular" ></td>
						</tr>
                    </tbody>
                </table>
            </form>
            <!--<img id="gif" src="https://departamentmathcoestehaw.files.wordpress.com/2018/10/atomo.gif?w=368&h=212" alt="">-->
        </section>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../main.js"></script>
    <script src="https://unpkg.com/kursor"></script>
    <script>
        new kursor({
            type: 1,
            removeDefaultCursor: true,
            color: '#000'
        })
    </script>
</body>

</html>