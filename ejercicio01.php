<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 1</title>
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
         <h1 class="title">Ejercicio 1</h1>
         <span>Crear un algoritmo que lea el costo de un artículo y la cantidad a comprar, el sistema debe calcular el total a pagar.</span>
         <!-- Ejercicio 1 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label>Costo</label>
               <input type="text" name="costo" placeholder="0" required />
               <label>Cantidad</label>
               <input type="text" name="cantidad" placeholder="0" required />
               <!-- Código PHP -->
               <?php
                  //Variables
                  $costo    = filter_input(INPUT_POST,'costo'); 
                  $cantidad = filter_input(INPUT_POST,'cantidad'); 
                  $total    = $costo*$cantidad;
                  $fcosto   = number_format($costo, 2, ',', '.');
                  $ftotal   = number_format($total, 2, ',', '.');
                  
                  if (isset($_POST['resultado'])){
                     echo '<h4 class="result">Resultado</h4>
                     <div class="respuesta">
                           <ul class="resultado">
                              <li>Costo: $' . $fcosto . '</li>
                              <li>Cantidad: ' . $cantidad . '</li>
                              <li>Valor a pagar: $' . $ftotal . '</li>
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