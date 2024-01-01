<?php
//inicio 
error_reporting(0);
//entrada
//var de entradad e inicio
$number=0;
$base=0;
//var de salidad e inicio
$respuesta=0; 
//proceso
if (isset($_POST['btnCalcular'])) {
	$base=$_POST['txtbase'];
	$number=$_POST['txtnumber'];
	$respuesta=log($number)/log($base);
}
//salidad
//Fin
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGARITMOS</title>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../estilos/logaritmos.css">
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
                    <a id="tiktok" href="#">
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
        <h1 class="animate__bounce  logaritmos" >LOGARITMOS</h1>
        <section class="contenido" >
            <div>
                <h2>Definición</h2>
                <p>Función logarítmica</p>
                <hr>
                <p>Propiedades de los logaritmos</p>
                <div class="li" >
                    <li>El logaritmo de un producto es igual a la suma de los logaritmos de los factores.</li>
                    <li>El logaritmo de una raíz es igual al producto entre la inversa del índice y el logaritmo del radicando.</li>
                    <li>El logaritmo de una potencia es igual al producto entre el exponente y el logaritmo de la base de la potencia.</li>
                </div>

                <p>
                Los logaritmos, que hacen posible transformar una multiplicación en una suma, una división en
                una resta, una potencia en un producto y una raíz en una división, tuvieron gran importancia
                porque simplificaban los cálculos numéricos; hoy en día, con las calculadoras y los ordenadores, 
                las operaciones con logaritmos han cambiado sustancialmente. Sin embargo, los logaritmos siguen
                siendo útiles en muchos campos de las matemáticas y de las ciencias, como la física, la química, 
                </p>

                <p>
                Los números negativos no tienen logaritmo en el cuerpo de los reales R, ya que cualquiera que sea
                el exponente n, se tendrá siempre que bn será mayor que cero, bn > 0; en consecuencia, no hay
                ningún valor real de n que pueda satisfacer bn = x cuando x sea menor que 0. Sin embargo, este
                obstáculo se puede salvar, ampliando el dominio de definición al cuerpo de los números complejos
                C, pudiendo calcular logaritmos de números negativos usando el logaritmo complejo o recurriendo
                a la fórmula de Euler.
                </p>
                
                <img class="mru" src="../imagenes/logaritmos.png" alt="">

            </div>
            <hr>
        </section>

        <section class="logaritmosTabla" >
            <form method="post" action="logaritmos.php">
                <table border="0" >
                    <thead>
                        <tr class="th" >
                            <th>variables</th>
                            <th>ingreso de valres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label>Logaritmo de Base 10</label></td>
                            <td><input class="caja" type="text" name="txtbase" value="<?=$base?>"></td>
                        </tr>
                        <tr>
                            <td><label>Ponga un Numero</label></td>
                            <td><input class="caja" type="text" name="txtnumber" value="<?=$number?>"></td>
						<tr>
							<td><label>La Respuesta es:</label></td>
							<td><input class="caja" type="text" name="txtrespuesta" readonly value="<?=$respuesta?>" readonly></td>
						</tr>
						<tr>
							<td></td>
							<td class="td" ><input class="calcular" type="submit" name="btnCalcular" value="Calcular" ></td>
						</tr>
                    </tbody>
                </table>
            </form>
            <!--<img id="giff" src="https://www.varsitytutors.com/assets/vt-hotmath-legacy/hotmath_help/spanish/topics/graphing-logarithmic-functions/f-gr-log-fn_1_6_1.gif" alt="">-->
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