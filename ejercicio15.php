<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 15</title>
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
         <h1 class="title">Ejercicio 15</h1>
         <span>crear un algoritmo que lea un monto de dinero por concepto de préstamo y el sistema solicite el plazo en meses para amortizar, si el préstamo es inferior a 3 meses el sistema cobrará un interés del 3% sobre la suma total en caso contrario el interés ser del 9%</span>
         <!-- Ejercicio 15 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label>Importe del préstamo</label>
               <input type="text" name="monto" placeholder="0" required />

               <label>Tiempo de amortización (meses)</label>
               <input type="text" name="meses" placeholder="0" required />

               <!-- Código PHP -->
               <?php
                  //Variables
                  $monto = $_POST['monto'];
                  $meses = $_POST['meses'];
              
                  if (isset($_POST['resultado'])){
                     if ($meses == 1) {
                        $int_total = number_format((($monto * 0.03) * $meses), 2, ',', '.');
                        echo '<h4 class="result">Resultado</h4>
                        <div class="respuesta">
                              <ul class="resultado">
                              <li>Importe del prestamo: $' . $monto . '</li>
                              <li>Tiempo de amortización: ' .$meses . ' mes</li>
                              <li>Tasa de interés: 3%</li>
                              <li>Intereses del préstamo: $' . $int_total . '</li>
                              </ul>   
                        </div>';
                     } elseif ($meses <= 3) {
                        $int_total = number_format((($monto * 0.03) * $meses), 2, ',', '.');
                        echo '<h4 class="result">Resultado</h4>
                        <div class="respuesta">
                              <ul class="resultado">
                              <li>Importe del prestamo: $' . $monto . '</li>
                              <li>Tiempo de amortización: ' .$meses . ' meses</li>
                              <li>Tasa de interés: 3%</li>
                              <li>Intereses del préstamo: $' . $int_total . '</li>
                              </ul>   
                        </div>';
                     } else {
                        $int_total = number_format((($monto * 0.09) * $meses), 2, ',', '.');
                        echo '<h4 class="result">Resultado</h4>
                        <div class="respuesta">
                              <ul class="resultado">
                              <li>Importe del prestamo: $' . $monto . '</li>
                              <li>Tiempo de amortización: ' .$meses . ' meses</li>
                              <li>Tasa de interés: 9%</li>
                              <li>Intereses del préstamo: $' . $int_total . '</li>
                              </ul>   
                        </div>';
                     }
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

