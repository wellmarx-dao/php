<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 10</title>
      <link rel="stylesheet" href="styles.css">
   </head>
   <body>
      <header>
         <section class="header">
            <nav>
               <ul>
                  <li class="nav_title"><a href="./">Ejercicios PHP</a></li>
               </ul>
            </nav>
         </section>
      </header>
      <section class="contenido">
         <h1 class="title">Ejercicio 10</h1>
         <span>Crear un algoritmo que lea una cantidad de dinero pago mensual para ahorro en una cooperativa, el sistema debe calcular su ahorro anual con una tasa de interés del 29%</span>
         <!-- Ejercicio 10 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label>Cuota mensual</label>
               <input type="text" name="ahorro_mes" placeholder="0" required />
               <!-- Código PHP -->
               <?php
                  //Variables
                  $ahorro_mes    = $_POST['ahorro_mes']; 
                  $interes       = 0.29;
                  $pinteres      = $interes*100;
                  $ahorro_año    = (( $ahorro_mes * $interes) + $ahorro_mes ) * 12;
                  $fahorro_mes   = number_format($ahorro_mes, 2, ',', '.');
                  $fahorro_año   = number_format($ahorro_año, 2, ',', '.');

                  if (isset($_POST['resultado'])){
                     echo '<h4 class="result">Resultado</h4>
                     <div class="respuesta">
                           <ul class="resultado">
                              <li>Cuota mensual: $' . $fahorro_mes . '</li>
                              <li>Beneficio: ' . $pinteres . '% de intereses</li>
                              <li>Ahorro Anual: $' . $fahorro_año . '</li>
                           </ul>   
                     </div>';
                  }
                  ?>
               <input class="button" type="submit" name="resultado" value="calcular">
            </form>
         </div>
         <div class="returns">«<a href="./">Regresar</a></div>
      </section>
      <footer class="footer">
      <div class="autor">estudiante</div>
      </footer>
   </body>
</html>

