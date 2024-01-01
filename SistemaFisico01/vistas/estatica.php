<?php
//inicio
//entrada
// var de entrada y salida, inicializamos
$F="";
$d="";
$M="";
//porceso
if (isset($_POST['btnCalcular'])) {
	$F=$_POST['txtN1'];
	$d=$_POST['txtN2'];
	$M=$F*$d;
}
//salida
//fin
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTATICA</title>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../estilos/estatica.css">
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
                    <a id="twitter" href="#">
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
        <h1 class="animate__bounce  estatica" >ESTATICA</h1>
        <section class="contenido" >
            <div>
                <h2>Definición</h2>
                <p>Estática (mecánica)</p>
                <hr>
                <p>Sólidos y análisis estructural</p>
                <div class="li" >
                    <li>Estable: Un péndulo, plomada o campana.(el centro de gravedad está por debajo del punto de suspensión).</li>
                    <li>Inestable: Un bastón sobre su punta.(el centro de gravedad está por encima del punto de suspensión).</li>
                    <li>Indiferente o neutro: Una rueda en su eje.(el centro de gravedad y punto de suspensión son coincidentes).</li>
                </div>

                <p>
                La estática se utiliza en el análisis de las estructuras, por ejemplo, en arquitectura e ingeniería
                estructural y la ingeniería civil. La resistencia de los materiales es un campo relacionado de la
                mecánica que depende en gran medida de la aplicación del equilibrio estático. Un concepto clave
                es el centro de gravedad de un cuerpo en reposo, que constituye un punto imaginario en el que
                reside toda la masa de un cuerpo. La posición del punto relativo a los fundamentos sobre los
                cuales se encuentra un cuerpo determina su estabilidad a los pequeños movimientos.
                </p>

                <p>
                Sin embargo, cuando existen fuerzas con puntos de aplicación diferentes es necesario determinar
                el punto de aplicación de la fuerza resultante. Para fuerzas no paralelas esto puede hacerse
                sumando las fuerzas dos a dos. Para ello se consideran dos de las fuerzas que trazan rectas
                prolongando las fuerzas en ambos sentidos y buscando su intersección. 
                </p>
                
                <img class="mru" src="../imagenes/estatica.png" alt="">

            </div>
            <hr>
        </section>

        <section class="estaticaTabla" >
            <form method="post" action="estatica.php">
                <table border="0" >
                    <thead>
                        <tr class="th" >
                            <th>variables</th>
                            <th>ingreso de valres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label>Fuerza Vertorial</label></td>
                            <td><input class="caja" type="text" name="txtN1" value="<?=$F?>"></td>
                        </tr>
                        <tr>
							<td><label>Distancia</label></td>
							<td><input class="caja" type="text" name="txtN2" value="<?=$d?>"></td>
						</tr>
						<tr>
							<td><label>La Masa es:</label></td>
							<td><input class="caja" type="text" name="txtM" readonly value="<?=$M?>" readonly></td>
						</tr>
						<tr>
							<td></td>
							<td class="td" ><input class="calcular" type="submit" name="btnCalcular" value="Calcular" ></td>
						</tr>
                    </tbody>
                </table>
            </form>
            <!--<img id="gifff" src="https://images.hive.blog/0x0/https://cdn.steemitimages.com/DQma9bHtYHUapWCpM9cAux9aGxCXdoHMwvgvZwGLV8kmiKo/giphy%20deformada.gif" alt="">-->
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