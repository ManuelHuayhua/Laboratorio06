<!DOCTYPE html>

<?php 
include('funciones/fuciones.php');
session_start();
$xc =conectar();
$sql = "SELECT * FROM header WHERE idheader=1";
$res = mysqli_query($xc,$sql);

$sql_bajo = "SELECT * FROM header WHERE idheader=2";
$res_bajo = mysqli_query($xc,$sql_bajo);

$sql_enlace="SELECT * FROM enlaces";
$res_enlace=mysqli_query($xc,$sql_enlace);

$sql_titulo="SELECT * FROM titulos Where idtitulos=1";
$res_titulo=mysqli_query($xc,$sql_titulo);

$sql_titulo2="SELECT * FROM titulos Where idtitulos=2";
$res_titulo2=mysqli_query($xc,$sql_titulo2);

$sql_titulo3="SELECT * FROM titulos Where idtitulos=3";
$res_titulo3=mysqli_query($xc,$sql_titulo3);

$sql_titulo4="SELECT * FROM titulos Where idtitulos=4";
$res_titulo4=mysqli_query($xc,$sql_titulo4);

$sql_chefs1="SELECT * FROM chefs Where idchefs=1";
$res_chefs1=mysqli_query($xc,$sql_chefs1);

$sql_chefs2="SELECT * FROM chefs Where idchefs=2";
$res_chefs2=mysqli_query($xc,$sql_chefs2);

$sql_platos1="SELECT * FROM platos Where idplatos=1";
$res_platos1=mysqli_query($xc,$sql_platos1);

$sql_platos2="SELECT * FROM platos Where idplatos=2";
$res_platos2=mysqli_query($xc,$sql_platos2);

$sql_platos3="SELECT * FROM platos Where idplatos=3";
$res_platos3=mysqli_query($xc,$sql_platos3);

$sql_platos4="SELECT * FROM platos Where idplatos=4";
$res_platos4=mysqli_query($xc,$sql_platos4);

$sql_platos5="SELECT * FROM platos Where idplatos=5";
$res_platos5=mysqli_query($xc,$sql_platos5);

$sql_platos6="SELECT * FROM platos Where idplatos=6";
$res_platos6=mysqli_query($xc,$sql_platos6);

$sql_platos7="SELECT * FROM platos Where idplatos=7";
$res_platos7=mysqli_query($xc,$sql_platos7);

$sql_platos8="SELECT * FROM platos Where idplatos=8";
$res_platos8=mysqli_query($xc,$sql_platos8);


$sql_duda="SELECT * FROM curiosidades Where idcuriosidades=1";
$res_duda=mysqli_query($xc,$sql_duda);

$sql_duda1="SELECT * FROM curiosidades Where idcuriosidades=2";
$res_duda1=mysqli_query($xc,$sql_duda1);

$sql_duda2="SELECT * FROM curiosidades Where idcuriosidades=3";
$res_duda2=mysqli_query($xc,$sql_duda2);


$sql_encabezado="SELECT * FROM encabezado Where idencabezado=1";
$res_encabezado=mysqli_query($xc,$sql_encabezado);

$sql_celular="SELECT encabezado FROM encabezado Where encabezado= 'celular'";
$res_celular=mysqli_query($xc,$sql_celular);

$sql_numero="SELECT datos FROM encabezado Where idencabezado= 2";
$res_numero=mysqli_query($xc,$sql_numero);


$sql_email="SELECT encabezado FROM encabezado Where encabezado= 'email'";
$res_email=mysqli_query($xc,$sql_email);

$sql_email1="SELECT datos FROM encabezado Where idencabezado= 3";
$res_email1=mysqli_query($xc,$sql_email1);

$sql_ubicacion="SELECT encabezado FROM encabezado Where encabezado= 'ubicacion'";
$res_ubicacion=mysqli_query($xc,$sql_ubicacion);

$sql_ubi="SELECT datos FROM encabezado Where idencabezado= 4";
$res_ubi=mysqli_query($xc,$sql_ubi);

$sql_img="SELECT imagenes FROM imagenes Where idimagenes= 1";
$res_img=mysqli_query($xc,$sql_img);


$sql_img16="SELECT imagenes FROM imagenes Where idimagenes= 2";
$res_img16=mysqli_query($xc,$sql_img16);

$sql_img14="SELECT imagenes FROM imagenes Where idimagenes= 3";
$res_img14=mysqli_query($xc,$sql_img14);

$sql_img_per1="SELECT imagenes FROM imagenes Where idimagenes= 4";
$res_img_per1=mysqli_query($xc,$sql_img_per1);

$sql_img_per2="SELECT imagenes FROM imagenes Where idimagenes= 5";
$res_img_per2=mysqli_query($xc,$sql_img_per2);

$sql_imgq="SELECT imagenes FROM imagenes Where idimagenes= 6";
$res_imgq=mysqli_query($xc,$sql_imgq);

$sql_img10="SELECT imagenes FROM imagenes Where idimagenes= 7";
$res_img10=mysqli_query($xc,$sql_img10);

$sql_img4="SELECT imagenes FROM imagenes Where idimagenes= 8";
$res_img4=mysqli_query($xc,$sql_img4);

$sql_img9="SELECT imagenes FROM imagenes Where idimagenes= 9";
$res_img9=mysqli_query($xc,$sql_img9);

$sql_img4j="SELECT imagenes FROM imagenes Where idimagenes= 10";
$res_img4j=mysqli_query($xc,$sql_img4j);

$sql_img5="SELECT imagenes FROM imagenes Where idimagenes= 11";
$res_img5=mysqli_query($xc,$sql_img5);

$sql_img8="SELECT imagenes FROM imagenes Where idimagenes= 12";
$res_img8=mysqli_query($xc,$sql_img8);

$sql_img11="SELECT imagenes FROM imagenes Where idimagenes= 13";
$res_img11=mysqli_query($xc,$sql_img11);


$sql_img12="SELECT imagenes FROM imagenes Where idimagenes= 14";
$res_img12=mysqli_query($xc,$sql_img12);
?>

<head lang="es">

<head>
<link rel="shortcut icon" href="../Imagenes/10.jpg" type="image/x-icon">
<link rel="stylesheet" href="css/estil.css">

<head>
    <meta charset="UTF-8">
    <title> Gastronomía Arequipeña</title>
</head>

<body>
    <header>
        <nav>
            <?php 
            while($filas_enlace= mysqli_fetch_array($res_enlace)){
                echo '<a href="#" >' . $filas_enlace['enlaces'].'</a>';
            }
             ?>
        </nav>
        <div class="texto1">
        <section>
            <h1><?php 
            while($filas = mysqli_fetch_array($res)){

                echo $filas['contenido'];
            }
                 ?></h1>
            <h2><?php 
            while($filas_bajo=mysqli_fetch_array($res_bajo)){
                echo $filas_bajo ['contenido'];
            }
            ?></h2>
        </section>
        </div>
        <div class="hola" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: white;"></path></svg></div>
        
    </header>
    <main>
        <section class="nosotros">
        <div class="contenedor">
            <h2 class="titulo"><?php
            while($filas_titulo=mysqli_fetch_array($res_titulo)){
                echo $filas_titulo['titulos'];
            }
             ?> </h2>
            <div class="contenedor-nosotros">
                <img src=<?php /*sabor arequipeño img*/
            while($filas_imgq=mysqli_fetch_array($res_imgq)){
                echo $filas_imgq['imagenes'];
            }

             ?>  alt=""  class="primeraimg">
                <div class="contenido">
                    <h3><span>1</span>Cocina Arequipeña</h3>
                    <p>La cocina arequipeña ha alcanzado fama por ser una de las más variadas y sabrosas del Perú. 
                        Posee la mayor diversidad respecto a otras localidades del Perú gracias a la amplia despensa 
                        que posee en su campiña, investigaciones han registrado 194 variedades de platos típicos.
                        Sobresale gracias al uso de condimentos y formas de preparación tanto andinas como 
                        introducidas por los europeo</p>
                    <h3><span>2</span>Costumbres respecto a la gastronomía</h3>
                    <p>Una de las Costumbres respecto a la gastronomía de la ciudad blanca, 
                        tiende a relacionarse con los días de la semana, siendo así que la gran mayoría de 
                        restaurantes y picanterías acostumbran preparar un plato por cada día de la semana.</p>

                </div>
            </div>
        
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo"><?php
            while($filas_titulo2=mysqli_fetch_array($res_titulo2)){
                echo $filas_titulo2['titulos'];
            }?></h2>
                <div class="galeria-por">
                    <div class="imagenes5">
                        <img src=<?php /*rocoto relleno*/
            while($filas_img10=mysqli_fetch_array($res_img10)){
                echo $filas_img10['imagenes'];
            }

             ?>   alt="">
                        <div class="galeria">
                            <img src="Imagenes/10.jpg" alt="">
                            <h3><?php
            while($filas_platos1=mysqli_fetch_array($res_platos1)){
                echo $filas_platos1['platos'];
            }?></h3>
                            <br>
                            <p>Se trata de un plato que es servido tanto como entrante y como segundo, en el que el rocoto se rellena con carne molida (que puede ser de vacuno, de cerdo o una combinación de ambas) , aceitunas, guisantes, queso fresco, todo ello aderezado con comino y perejil picado, acompañado generalmente con Papa horneada.</p>
                        </div>
                    </div>
                    <div class="imagenes5">
                        <img src=<?php /*ocopa*/
            while($filas_img4=mysqli_fetch_array($res_img4)){
                echo $filas_img4['imagenes'];
            }

             ?>  alt="">
                        <div class="galeria">
                            <img src="Imagenes/4j.jpg" alt="">
                            <h3><?php
            while($filas_platos2=mysqli_fetch_array($res_platos2)){
                echo $filas_platos2['platos'];
            }?></h3>
                            <br>
                            <p>La Ocopa arequipeña es el plato más reconocido de Arequipa, en el Perú y en el extranjero.

                                Se prepara a base de una rama de huacatay, ají mirasol, ají amarillo, maní, galletas de vainilla o pan, leche evaporada, queso fresco, ajo y condimentos.</p>
                        </div>
                    </div>
                    <div class="imagenes5">
                        <img src="Imagenes/9.jpg" alt="">
                        <div class="galeria">
                            <img src= <?php /*Soltero de queso*/
            while($filas_img9=mysqli_fetch_array($res_img9)){
                echo $filas_img9['imagenes'];
            }

             ?> alt="">
                            <h3><?php
            while($filas_platos3=mysqli_fetch_array($res_platos3)){
                echo $filas_platos3['platos'];
            }?></h3>
                            <br>
                            <p>Es un plato colorido y delicioso. Se prepara a base de habas, choclos, cebolla picada, rocoto picado, queso fresco, aceitunas picadas, tomate a cuadritos, se añade los otros ingredientes y todo se mezcla con vinagre, una cuchara de perejil picado, sal y pimienta al gusto.</p>
                        </div>
                    </div>
                    <div class="imagenes5">
                        <img src=<?php /*Chupe de camarones*/
            while($filas_img4j=mysqli_fetch_array($res_img4j)){
                echo $filas_img4j['imagenes'];
            }

             ?>  alt="">
                        <div class="galeria">
                            <img src="Imagenes/4.jpg" alt="">
                            <h3><?php
            while($filas_platos4=mysqli_fetch_array($res_platos4)){
                echo $filas_platos4['platos'];
            }?></h3>
                            <br>
                            <p>Es una sopa criolla originaria de Arequipa. Un plato muy nutritivo, potente, sustancioso y delicioso.Está preparado con camarones de río de la costa del sur del Perú, Se sirve acompañado de una salsa de rocoto o con pedazos de pan frito.</p>
                        </div>
                    </div>
                    <div class="imagenes5">
                        <img src=<?php /*Cuy chactao*/
            while($filas_img5=mysqli_fetch_array($res_img5)){
                echo $filas_img5['imagenes'];
            }

             ?> alt="">
                        <div class="galeria">
                            <img src="Imagenes/5.jpg" alt="">
                            <h3><?php
            while($filas_platos5=mysqli_fetch_array($res_platos5)){
                echo $filas_platos5['platos'];
            }?></h3>
                            <br>
                            <p>Es un plato tradicional del sur peruano. Se prepara en las regiones de Arequipa, Ayacucho, Huancavelica, Cusco y Puno.</p>
                        </div>
                    </div>
                    <div class="imagenes5">
                        <img src=<?php /*Chairo*/
            while($filas_img8=mysqli_fetch_array($res_img8)){
                echo $filas_img8['imagenes'];
            }

             ?>  alt="">
                        <div class="galeria">
                            <img src="Imagenes/8.jpg" alt="">
                            <h3><?php
            while($filas_platos6=mysqli_fetch_array($res_platos6)){
                echo $filas_platos6['platos'];
            }?></h3>
                            <br>
                            <p>Es una sopa que se prepara en Arequipa, Puno y Cusco. Cada región tiene sus propias características culinarias y algunos ingredientes varían según el lugar.</p>

                        </div>
                    </div>
                    <div class="imagenes5">
                        <img src= <?php /*Adobo arequipeño*/
            while($filas_img11=mysqli_fetch_array($res_img11)){
                echo $filas_img11['imagenes'];
            }

             ?>alt="">
                        <div class="galeria">
                            <img src="Imagenes/11.jpg" alt="">
                            <h3><?php
            while($filas_platos7=mysqli_fetch_array($res_platos7)){
                echo $filas_platos7['platos'];
            }?></h3>
                            <br>
                            <p>Se prepara habitualmente en olla de barro para sentir su potente sabor, y se sirve acompañado de camote o papa.</p>
                        </div>
                    </div>
                    <div class="imagenes5">
                        <img src= <?php /*El cauchi*/
            while($filas_img12=mysqli_fetch_array($res_img12)){
                echo $filas_img12['imagenes'];
            }

             ?>alt="">
                        <div class="galeria">
                            <img src="Imagenes/12.jpeg" alt="">
                            <h3><?php
            while($filas_platos8=mysqli_fetch_array($res_platos8)){
                echo $filas_platos8['platos'];
            }?></h3>
                            <br>
                            <p>El cauchi es propia de la gastronomía de la región; casi siempre se acompaña de papas hervidas peladas en rodajas.</p>
                        </div>
                    </div>
                    

                </div>
            </div>
            

           

        <section class="cliente-contenedor">
        <div class="contenedor">
            <h2 class="titulo"><?php
            while($filas_titulo3=mysqli_fetch_array($res_titulo3)){
                echo $filas_titulo3['titulos'];
            }?></h2>
            <div class="cards">
                <div class="card">
                <img src=<?php /*Eduardo Sernaque Loo*/
            while($filas_img_per1=mysqli_fetch_array($res_img_per1)){
                echo $filas_img_per1['imagenes'];
            }

             ?>  alt="">
                <div class="contenido-card">
                    <h4><?php
            while($filas_chefs1=mysqli_fetch_array($res_chefs1)){
                echo $filas_chefs1['chefs'];
            }?></h4>
                    <br>
                    <p>Licenciado en la Escuela Culinaria de Le Cordon Bleu en Perú. Quince años de experiencia en empresas líderes en el sector gastronómico, hotelero y educativo como Marriott International y LATAM’s 50 Best Restaurants..</p>
                </div>
            </div>
        
            
                <div class="card">
                <img src=<?php /*Monica Huerta*/
            while($filas_img_per2=mysqli_fetch_array($res_img_per2)){
                echo $filas_img_per2['imagenes'];
            }

             ?> alt="">
                <div class="contenido-card">
                    <h4><?php
            while($filas_chefs2=mysqli_fetch_array($res_chefs2)){
                echo $filas_chefs2['chefs'];
            }?></h4>
                    <br>
                    <p>Mónica demuestra su herencia arequipeña manteniendo las ancestrales técnicas de cocina dentro de su preparación..</p>
                </div>
            </div>
        </div>
        </section>
        <section class="servicios">
            <div class="contenedor">
                <h2 class="titulo"> <?php
            while($filas_titulo4=mysqli_fetch_array($res_titulo4)){
                echo $filas_titulo4['titulos'];
            }?></h2>
                <div class="servicio1">
                    <div class="servicioindi">
                        <img src=<?php /*sabias que.. 1r imgaen */
            while($filas_img14=mysqli_fetch_array($res_img14)){
                echo $filas_img14['imagenes'];
            }

             ?> alt="">
                        <h3><?php
            while($filas_duda=mysqli_fetch_array($res_duda)){
                echo $filas_duda['respuestas'];
            }
             ?></h3>
                        <p>Muchos platos arequipeños fueron creados para satisfacer los gustos de españoles, comerciantes, militares y sacerdotes, en las épocas pasadas que se establecieron en Arequipa.</p>
                    </div>

                    <div class="servicioindi">
                        <img src=<?php /*sabias que.. 2r imgaen */
            while($filas_img16=mysqli_fetch_array($res_img16)){
                echo $filas_img16['imagenes'];
            }

             ?>alt=""> 
                     <h3><?php
            while($filas_duda1=mysqli_fetch_array($res_duda1)){
                echo $filas_duda1['respuestas'];
            }
             ?></h3>
                        <p>La diversidad gastronómica peruana ha sido un motor a impulsar las tradiciones, costumbres y la cultura ancestral hacia los recónditos lugares de todo el mundo.</p>
                    </div>


                    <div class="servicioindi">
                        <img src= <?php /*sabias que.. 3r imgaen */
            while($filas_img=mysqli_fetch_array($res_img)){
                echo $filas_img['imagenes'];
            }
             ?>alt="">
                        <h3><?php
            while($filas_duda2=mysqli_fetch_array($res_duda2)){
                echo $filas_duda2['respuestas'];
            }
             ?></h3>
                        <p>El queso helado, o helado de tarro, es un dulce lácteo helado que, a pesar de denominarse de tal manera, no lleva queso entre sus ingredientes principales. Su textura es cremosa y generalmente se prepara de forma artesanal, combinándolo con diversos sabores.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="contenedor-footer">
            <div class="contenedor-foo">
                <h4><?php
            while($filas_celular=mysqli_fetch_array($res_celular)){
                echo $filas_celular['encabezado'];
            }
             ?> </h4>
                <p><?php
            while($filas_numero=mysqli_fetch_array($res_numero)){
                echo $filas_numero['datos'];
            }
             ?></p>
            </div>
            <div class="contenedor-foo">
                <h4><?php
            while($filas_email=mysqli_fetch_array($res_email)){
                echo $filas_email['encabezado'];
            }
             ?></h4>
                <p><?php
            while($filas_email1=mysqli_fetch_array($res_email1)){
                echo $filas_email1['datos'];
            }
             ?></p>
            </div>
            <div class="contenedor-foo">
                <h4><?php
            while($filas_ubicacion=mysqli_fetch_array($res_ubicacion)){
                echo $filas_ubicacion['encabezado'];
            }
             ?></h4>
                <p><p><?php
            while($filas_ubi=mysqli_fetch_array($res_ubi)){
                echo $filas_ubi['datos'];
            }
             ?></p>
            </div>
        </div>
        <h2 class="final-titu"> &copy; <?php
            while($filas_encabezado=mysqli_fetch_array($res_encabezado)){
                echo $filas_encabezado['encabezado'];
            }
             ?></h2>
    </footer>

</body>

</html>