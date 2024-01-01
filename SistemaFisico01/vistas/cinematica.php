<?php
//inicio
error_reporting(0);
//entrada
//  variable de entrada
$velocidad=0;
$altura=0;
$tiempo=0;
//  variable de salida
$distancia=0;
//proceso
if(isset($_POST['btnCalcular'])){
	$velocidad = $_POST['txtVelocidad'];
	$altura = $_POST['txtAltura'];
	$tiempo = $_POST['txtTiempo'];
	$distancia = $velocidad*$tiempo+1/2*$altura*$tiempo^2;
}
//salida: en el html
//fin
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINEMATICA</title>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../estilos/cinematica.css">
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
                    <a id="linkedin" href="#">
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
        <h1 class="animate__bounce  cinematica">CINEMATICA</h1>
        <section class="contenido" >
            <div>
                <h2>Definición</h2>
                <p>Elementos básicos de la cinemática</p>
                <hr>
                <p>Fundamento de la cinemática clásica</p>
                <div class="li" >
                    <li>Si la aceleración es constante con dirección perpendicular a la velocidad, da lugar al movimiento circular uniforme.</li>
                    <li>Si la aceleración es constante con igual dirección que la velocidad, da lugar al movimiento rectilíneo uniformemente acelerado.</li>
                    <li>En un movimiento general tridimensional, el movimiento queda determinado si se conoce el movimiento de 4 puntos del sólido.</li>
                </div>

                <p>
                Los primeros en descubrir el movimiento fueron los astrónomos y los filósofos griegos.
                Hacia el año 1605, Galileo Galilei hizo sus famosos estudios del movimiento de caída libre
                y de esferas en planos inclinados a fin de comprender aspectos del movimiento relevantes a
                su tiempo, como el movimiento de los planetas y de las balas de cañón. Posteriormente,
                el estudio de la cicloide realizado por Evangelista Torricelli fue configurando lo que
                se conocería como geometría del movimiento.
                </p>

                <p>
                Luego, las aportaciones de Nicolás Copérnico, Tycho Brahe y Johannes Kepler expandieron los
                horizontes en la descripción del movimiento durante el siglo xvi. En 1687, con la publicación
                de los Principia, Isaac Newton hizo la mayor aportación conocida al estudio sistemático del 
                movimiento. Entre otros numerosos aportes, estableció las tres leyes del movimiento que llevan
                su nombre, con lo que contribuyó al campo de la dinámica, además de postular la ley de gravitación universal.
                </p>
                
                <img class="mru" src="../imagenes/cinematica.png" alt="">

            </div>
            <hr>
        </section>

        <section class="cinematicaTabla" >
            <form method="post" action="cinematica.php">
                <table border="0" >
                    <thead>
                        <tr class="th" >
                            <th>variables</th>
                            <th>ingreso de valres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label>Ingrese la Velocidad</label></td>
                            <td><input class="caja" type="text" name="txtVelocidad" value="<?=$velocidad?>"></td>
                        </tr>
                        <tr>
							<td><label>Ingrese la Altura</label></td>
							<td><input class="caja" type="text" name="txtAltura" value="<?=$altura?>"></td>
						</tr>
                        <tr>
                            <td><label>Ingrese el Tiempo</label></td>
                            <td><input class="caja" type="text" name="txtTiempo" value="<?=$tiempo?>"></td>
						<tr>
							<td><label>La Distancia es:</label></td>
							<td><input class="caja" type="text" name="txtDistancia" readonly value="<?=$distancia?>" readonly></td>
						</tr>
						<tr>
							<td></td>
							<td class="td" ><input class="calcular" type="submit" name="btnCalcular" value="Calcular" ></td>
						</tr>
                    </tbody>
                </table>
            </form>
            <!--<img id="gif" src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Casting_obliquely.gif" alt="">-->
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