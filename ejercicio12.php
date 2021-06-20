<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 12</title>
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
         <h1 class="title">Ejercicio 12</h1>
         <span>Crear un pseudocódigo que lea el salario de un empleado, si el salario es mayor a $2.500.000 se notificara que no tiene subsidio de transporte en caso contrario calcularle un 7%</span>
         <!-- Ejercicio 12 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label for="salario">Salario</label>
               <input type="text" name="salario" placeholder="0" id="salario" required />

               <!-- Código PHP -->
               <?php
                  //Variables
                  $salario = $_POST['salario'];
                  $tope = 2500000;
                  $subt = 0.07;
                  $subp = 0.07*100;
              
                  if (isset($_POST['resultado'])){
                     if ($salario >= $tope) {
                        $salario_total = number_format($salario, 2, ',', '.');
                        echo '<h4 class="result">Resultado</h4>
                        <div class="respuesta">
                              <ul class="resultado">
                                 <li>Salario: $' . $salario . '</li>
                                 <li>Beneficio: No tiene subsidio de transporte</li>
                                 <li>Salario final: $' . $salario . '</li>
                              </ul>   
                        </div>';
                     } else {
                        $salario_total = number_format((($salario*$subt) + $salario), 2, ',', '.');
                        echo '<h4 class="result">Resultado</h4>
                        <div class="respuesta">
                              <ul class="resultado">
                                 <li>Salario: $' . $salario . '</li>
                                 <li>Beneficio: Aplica para subsidio de transporte (' . $subp . '%)</li>
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

