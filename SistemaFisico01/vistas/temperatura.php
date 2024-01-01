<?php
//inicio 
error_reporting(0);
//entrada
//var de entradad e inicio
$f=0;
$cel=0; 
// var de salidad e inicio
$respuesta=0; 
//proceso
if (isset($_POST['btnCalcular'])) {
	$f=$_POST['txtf'];
	$kelvi=$f+273.15;
	$fahrenheit=$f*1.8+32;
	
}
if (isset($_POST['btnCal'])) {
	$f=$_POST['txtfa'];
	$cel= ($f-32)*5/9;
	$kelvi=($f-32)*5/9+273.15;
 }
// salidad
// fin
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEMPERATURA</title>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../estilos/temperatura.css">
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
                    <a id="instagram" href="../vistas/electrostatica.php">
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
                    <a id="tiktok" href="#">
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
        <h1 class="animate__bounce  temperatura" >TEMPERATURA</h1>
        <section class="contenido" >
            <div>
                <h2>Definición</h2>
                <p>Temperatura en distintos medios</p>
                <hr>
                <p>Sensación térmica</p>
                <div class="li" >
                    <li>El cuerpo humano regula su temperatura para mantenerla aproximadamente constante (alrededor de 36,5 °C).</li>
                    <li>Si las condiciones del entorno hacen que las pérdidas sean iguales a la producción el cuerpo siente bienestar térmico.</li>
                    <li>Si las condiciones del entorno hacen que las pérdidas de calor superen a la producción, el cuerpo siente frío.</li>
                </div>

                <p>
                La temperatura es una magnitud física que expresa la cantidad de calor, es decir, la energía interna de un cuerpo.
                El cálculo de la energía cinética de objetos más complicados como las moléculas, es más difícIl.
                Se involucran grados de libertad adicionales los cuales deben ser considerados. La segunda ley
                de la termodinámica establece sin embargo, que dos sistemas al interactuar el uno con el otro
                adquirirán la misma energía promedio por partícula, y por lo tanto la misma temperatura.
                </p>

                <p>
                En una mezcla de partículas de varias masas distintas, las partículas más masivas se moverán más
                lentamente que las otras, pero aun así tendrán la misma energía promedio. Un átomo de Neón se
                mueve relativamente más lento que una molécula de hidrógeno que tenga la misma energía cinética.
                Una manera análoga de entender esto es notar que por ejemplo, las partículas de polvo suspendidas
                en un flujo de agua se mueven más lentamente que las partículas de agua.
                </p>
                
  

            </div>
            <hr>
        </section>

        <section class="temperaturaTabla" >
            <form method="post" action="temperatura.php">
                <table border="0" >
                    <thead>
                        <tr class="th" >
                            <th>variables</th>
                            <th>ingreso de valres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label>Ingrese Grados Celsius</label></td>
                            <td><input class="caja" type="text" name="txtf" value="<?=$f?>"></td>
                        </tr>
                        <tr>
                            <td><label>Fahrenheit es:</label></td>
                            <td><input class="caja" type="text" name="txtFa" readonly  value="<?=$fahrenheit?>"></td>
						<tr>
							<td><label>Kelvi es:</label></td>
							<td><input class="caja" type="text" name="txtKelvi" readonly value="<?=$kelvi?>"></td>
						</tr>
						<tr>
							<td></td>
							<td class="td" ><input class="calcular" type="submit" name="btnCalcular" value="Calcular" ></td>
						</tr>
                    </tbody>
                </table>
            </form>
            <!--<img id="gif" src="https://upload.wikimedia.org/wikipedia/commons/6/6d/Translational_motion.gif" alt="">-->
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