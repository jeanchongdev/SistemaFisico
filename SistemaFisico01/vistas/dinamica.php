<?php
//inicio
//entada
error_reporting(0);
//  variable de entrada
$masa=0;
$aceleracion=0;
//  variable de salida
$fuerza=0;
//proceso
if (isset($_POST['btnCalcular'])) {
	$masa = $_POST['txtMasa'];
	$aceleracion = $_POST['txtAceleracion'];
	$fuerza = $masa*$aceleracion;
}
//salida: en el html
//fin
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DINAMICA</title>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../estilos/dinamica.css">
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
                    <a id="facebook" href="#">
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
        <h1 class="animate__bounce  dinamica">DINAMICA</h1>
        <section class="contenido" >
            <div>
                <h2>Definición</h2>
                <p>Dinámica - Las Leyes de Newton</p>
                <hr>
                <p>En dinámica existen tres Leyes de Newton</p>
                <div class="li" >
                    <li> Primera Ley de Newton - Ley de Inercia</li>
                    <li>Segunda Ley de Newton - Principio fundamental de la dinámica</li>
                    <li>Tercera Ley de Newton - Ley de acción y reacción</li>
                </div>

                <p>
                La primera ley de Newton describe lo que sucede con los cuerpos que están en equilibrio.
                La segunda ley explica lo que sucede cuando no existe equilibrio y la tercera ley muestra
                como es el comportamiento de las fuerzas cuando tenemos dos cuerpos interactuando entre si.
                Para comprender mejor estas leyes, es preciso conocer algunos conceptos físicos muy importantes
                como la fuerza de equilibrio.
                </p>

                <p>
                Si por ejemplo nos detenemos a observarnos nosotros mismos, seguramente en este momento estamos
                sentados en una silla, leyendo este texto. Justamente ahora, sobre nosotros están actuando fuerzas,
                pero aún con estas fuerzas trabajando, nosotros aun continuamos en nuestro lugar. Esto sucede
                porque ellas están cancelándose mutuamente. Podemos decir entonces que cada uno de nosotros
                está en equilibrio.
                </p>
                
                <img class="mru" src="../imagenes/dinamica.png" alt="">

            </div>
            <hr>
        </section>

        <section class="dinamicaTabla" >
            <form method="post" action="dinamica.php">
                <table border="0" >
                    <thead>
                        <tr class="th" >
                            <th>variables</th>
                            <th>ingreso de valres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label>Ingrese Masa</label></td>
                            <td><input class="caja" type="text" name="txtMasa" value="<?=$masa?>"></td>
                        </tr>
                        <tr>
							<td><label>Ingrese Aceleración</label></td>
							<td><input class="caja" type="text" name="txtAceleracion" value="<?=$aceleracion?>"></td>
						</tr>
						<tr>
							<td><label>Fuerza es:</label></td>
							<td><input class="caja" type="text" name="txtFuerza" readonly value="<?=$fuerza?>" readonly></td>
						</tr>
						<tr>
							<td></td>
							<td class="td" ><input class="calcular" type="submit" name="btnCalcular" value="Calcular" ></td>
						</tr>
                    </tbody>
                </table>
            </form>
            <!--<img id="gif" src="https://static.wixstatic.com/media/f2d9f3_23b89127286b4f9d9548aa2b2486e610.gif" alt="">-->
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