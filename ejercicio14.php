<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 14</title>
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
         <h1 class="title">Ejercicio 14</h1>
         <span>Crear un algoritmo que lea el salario de un empleado, si el salario del empleado es mayor a 2 millones se le sacará por ahorro navideño el 9% en caso contrario se le sacara el 5%</span>
         <!-- Ejercicio 14 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label>Salario</label>
               <input type="text" name="salario" placeholder="0" required />

               <!-- Código PHP -->
               <?php
                  //Variables
                  $salario = $_POST['salario'];
                  $tope = 2000000;
              
                  if (isset($_POST['resultado'])){
                     if ($salario >= $tope) {
                        $salario_total = number_format((($salario * 0.09) + $salario), 2, ',', '.');
                        echo '<h4 class="result">Resultado</h4>
                        <div class="respuesta">
                              <ul class="resultado">
                              <li>Salario: $' . $salario . '</li>
                              <li>Beneficio: Aplica para para ahorro navideño del 9%</li>
                              <li>Salario final: $' . $salario_total . '</li>
                              </ul>   
                        </div>';
                     } else {
                        $salario_total = number_format((($salario * 0.05) + $salario), 2, ',', '.');
                        echo '<h4 class="result">Resultado</h4>
                        <div class="respuesta">
                              <ul class="resultado">
                              <li>Salario: $' . $salario . '</li>
                              <li>Beneficio: Aplica para para ahorro navideño del 5%</li>
                              <li>Salario final: $' . $salario_total . '</li>
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

