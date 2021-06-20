<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 5</title>
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
         <h1 class="title">Ejercicio 5</h1>
         <span>Crear un algoritmo que lea una cantidad de dinero en pesos colombianos COP y el sistema los calcule a euros €</span>
         <!-- Ejercicio 5 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label for="vcop">COP</label>
               <input type="text" name="vcop" placeholder="0" id="vcop" required />
               <!-- Código PHP -->
               <?php
                  //Variables
                  $vcop = $_POST['vcop'];
                  $tasa = 4564;
                  $veur = $tasa != 0 ? ($vcop/$tasa) : 0;
                  $fcop = number_format($vcop, 2, ',', '.');
                  $feur = number_format($veur, 2, ',', '.');

                  if (isset($_POST['resultado'])){
                     echo '<h4 class="result">Resultado</h4>
                     <div class="respuesta">
                           <ul class="resultado">
                              <li>Peso (COP): $' . $fcop . '</li>
                              <li>Euro (EUR): €' . $feur . '</li>
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

