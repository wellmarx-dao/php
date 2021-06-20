<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 2</title>
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
         <h1 class="title">Ejercicio 2</h1>
         <span>Crear pseudocódigo para un sistema que imprima la suma, resta, multiplicacion y division de 2 números.</span>
         <!-- Ejercicio 2 -->
         <div class="ejercicio">
             <form class="int" method="post" action="">
               <label>Número1</label>
               <input type="text" name="num1" placeholder="0" required />
   
               <label>Número2</label>
               <input type="text" name="num2" placeholder="0" required />
               <!-- Código PHP -->
               <?php
                  //Variables
                  $num1 = $_POST['num1'];
                  $num2 = $_POST['num2'];
                  $suma = $num1+$num2;
                  $rest = $num1-$num2;
                  $mult = $num1*$num2;
                  $divi = $num2 != 0 ? ($num1/$num2) : 0;
                  
                  if (isset($_POST['resultado'])){
                     echo '<h4 class="result">Resultado</h4>
                     <div class="respuesta">
                           <ul class="resultado">
                              <li>Suma: (' . $suma . ')</li>
                              <li>Resta: (' . $rest . ')</li>
                              <li>Multiplicación: (' . $mult . ')</li>
                              <li>División: (' . $divi . ')</li>
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