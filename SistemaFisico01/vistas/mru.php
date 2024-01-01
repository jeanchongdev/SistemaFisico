<?php
//INICIO
error_reporting(0);
//Entrada
//variables enrada e innicializacion
$tiempo=0;
$velocidad=0;
//variables salida e inicializacion
$distancia=0;
//Proceso
if (isset($_POST['btnCalcular'])) {
	$tiempo = $_POST['txtTiempo'];
	$velocidad = $_POST['txtVelocidad'];
	$distancia = $tiempo*$velocidad;
}
//Salida: en el html
//FIN
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MRU</title>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../estilos/mur.css">
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
                    <a id="github" href="#">
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
        <h1 class="animate__bounce  mruh1" >Movimiento rectilíneo uniforme</h1>
        <section class="contenido" >
            <div>
                <h2>Definición</h2>
                <p>Comportamiento del movimiento</p>
                <hr>
                <p>El MRU se caracteriza por:</p>
                <div class="li" >
                    <li>Movimiento que se realiza sobre una línea recta.</li>
                    <li>Velocidad constante; implica magnitud y dirección constantes.</li>
                    <li>La magnitud de la velocidad recibe el nombre de celeridad o rapidez sin aceleración.</li>
                </div>

                <p  >
                Para este tipo de movimiento, la distancia recorrida se calcula multiplicando la magnitud  de la 
                velocidad por el tiempo transcurrido. Esta relación también es aplicable si la trayectoria no 
                es rectilínea, con tal que la rapidez o módulo de la velocidad sea constante. Por lo tanto, 
                el movimiento puede considerarse en dos sentidos; una velocidad negativa representa un 
                movimiento en dirección contraria al sentido que convencionalmente hayamos adoptado 
                como positivo.
                </p>

                <p  >
                De acuerdo con la Primera Ley de Newton, toda partícula puntual permanece en reposo o en movimiento
                rectilíneo uniforme cuando no hay una fuerza externa que actúe sobre el cuerpo, dado que las fuerzas 
                actuales están en equilibrio, por lo cual su estado es de reposo o de movimiento rectilíneo uniforme. 
                Esta es una situación ideal, ya que siempre existen fuerzas que tienden a alterar el movimiento de las 
                partículas, por lo que en el movimiento rectilíneo uniforme (MRU) es difícil encontrar la fuerza amplificada.
                </p>
                
                <img class="mru" src="../imagenes/mru.png" alt="">

            </div>
            <hr>
        </section>

        <section class="mruTabla" >
            <form method="post" action="mru.php">
                <table border="0" >
                    <thead>
                        <tr class="th" >
                            <label><th>variables</th></label>
                            <label><th>ingreso de valres</th></label>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label>Ingrese Tiempo</label></td>
                            <td><input class="caja" type="text" name="txtTiempo" value="<?=$tiempo?>"></td>
                        </tr>
                        <tr>
							<td><label>Ingrese Velocidad</label></td>
							<td><input class="caja" type="text" name="txtVelocidad" value="<?=$velocidad?>"></td>
						</tr>
						<tr>
							<td><label>La Distancia es:</label></td>
							<td><input class="caja" type="text" name="txtDistancia" readonly value="<?=$distancia?>" readonly></td>
						</tr>
						<tr>
							<td></td>
							<td class="td" ><input  class="calcular" type="submit" name="btnCalcular" value="Calcular" ></td>
						</tr>
                    </tbody>
                </table>
            </form>
            <!--<img id="gif" src="https://www.materialesdeaprendizaje.org/archivos/mec/Movimiento_Rectilineo_Uniforme/ciclista.gif" alt="">-->
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