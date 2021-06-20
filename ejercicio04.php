<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 4</title>
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
         <h1 class="title">Ejercicio 4</h1>
         <span>Crear un algoritmo que lea una cantidad de dinero en Dólares USD y el sistema los calcule a pesos colombianos COP</span>
         <!-- Ejercicio 4 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label>USD</label>
               <input type="text" name="vusd" placeholder="0" required />
               <!-- Código PHP -->
               <?php
                  //Variables
                  $vusd = $_POST['vusd'];
                  $tasa = 3739;
                  $vcop = $vusd*$tasa;
                  $fusd = number_format($vusd, 2, ',', '.');
                  $fcop = number_format($vcop, 2, ',', '.');

                  if (isset($_POST['resultado'])){
                     echo '<h4 class="result">Resultado</h4>
                     <div class="respuesta">
                           <ul class="resultado">
                              <li>Dólar (USD): US$' . $fusd . '</li>
                              <li>Pesos (COP): $' . $fcop . '</li>
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

