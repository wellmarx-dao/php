<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 6</title>
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
         <h1 class="title">Ejercicio 6</h1>
         <span>crear un algoritmo que lea un monto de dinero por concepto de préstamo y el sistema solicite el plazo en meses para amortizar, el sistema cobrará un interés del 9% sobre la suma cuota, calcular el valor de cada cuota a pagar.</span>
         <!-- Ejercicio 6 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label>Importe prestamo</label>
               <input type="text" name="monto" placeholder="0" required />

               <label>Tiempo amortización</label>
               <input type="text" name="meses" placeholder="0" required />
               <!-- Código PHP -->
               <?php
                  //Variables
                  $monto   = $_POST['monto'];
                  $meses   = $_POST['meses'];
                  $interes = 0.09;
                  $int_por = $interes*100;
                  $formula = ( $interes * $monto )/(( 1 - ( 1 + $interes ) ** ( -1 * $meses )));
                  $cuota   = round($formula);
                  $fmonto  = number_format($monto, 2, ',', '.');
                  $fcuota  = number_format($cuota, 2, ',', '.');

                  if (isset($_POST['resultado'])){
                     echo '<h4 class="result">Resultado</h4>
                     <div class="respuesta">
                           <ul class="resultado">
                              <li>Monto préstamo: $' . $fmonto . '</li>
                              <li>Interés prestamo: ' . $int_por . '%</li>
                              <li>Plazo de pago: ' . $meses . ' meses</li>
                              <li>Cuota mensual: $' . $fcuota . '</li>
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

