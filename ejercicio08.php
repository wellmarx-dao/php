<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 8</title>
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
         <h1 class="title">Ejercicio 8</h1>
         <span>Crear un algoritmo que lea el número de horas trabajadas por un empleado a la semana y calcule su salario sabiendo que cada hora se paga a $33.000 y se le da un auxilio de transporte de $11.111</span>
         <!-- Ejercicio 8 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label>Horas trabajadas</label>
               <input type="text" name="horas" placeholder="0" required />
               <!-- Código PHP -->
               <?php
                  //Variables
                  $horas = $_POST['horas'];
                  $salarihora = 33000;
                  $transporte = 11111;
              
                  $salario = ($salarihora * $horas) + $transporte;
                  $fsalario = number_format($salario, 2, ',', '.');

                  if (isset($_POST['resultado'])){
                     echo '<h4 class="result">Resultado</h4>
                     <div class="respuesta">
                           <ul class="resultado">
                              <li>Horas trabajadas: ' . $horas . '</li>
                              <li>Salario total: $' . $fsalario . '</li>
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

