<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 17</title>
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
         <h1 class="title">Ejercicio 17</h1>
         <span>Crea un algoritmo que lea la edad de una persona, si la edad es mayor a 70 se le notificara que (puede ser vacunado en centros de salud) en caso contrario se notificará que debe esperar la etapa de vacunación para su rango de edad.</span>
             <!-- Ejercicio 17 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label>Edad</label>
               <input type="text" name="edad" placeholder="0" id="edad" required />

               <!-- Código PHP -->
               <?php
                  //Variables
                  $edad = $_POST['edad'];
              
                  if (isset($_POST['resultado'])){
                     if ($edad >= 70) {
                        $salario_total = number_format($salario, 2, ',', '.');
                        echo '<h4 class="result">Resultado</h4>
                        <div class="respuesta">
                              <ul class="resultado">
                                 <li>Edad: ' . $edad . '</li>
                                 <li>Observación: Puede ser vacunado en centros de salud</li>
                              </ul>   
                        </div>';
                     } else {
                        $salario_total = number_format((($salario*$subt) + $salario), 2, ',', '.');
                        echo '<h4 class="result">Resultado</h4>
                        <div class="respuesta">
                              <ul class="resultado">
                                 <li>Edad: ' . $edad . '</li>
                                 <li>Observación: Debe esperar la etapa de vacunación para su rango de edad</li>
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

