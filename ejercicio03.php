<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 3</title>
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
         <h1 class="title">Ejercicio 3</h1>
         <span>Crear un pseudocódigo que lea el salario de un empleado y calcule su salud del 9% y pensión del 12%</span>
         <!-- Ejercicio 3 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label>Salario</label>
               <input type="text" name="salario" placeholder="0" required />
               <!-- Código PHP -->
               <?php
                  //Variables
                  $salario = $_POST['salario']; 
                  $salud   = $salario*0.09;
                  $psion   = $salario*0.12;
                  $fsalario = number_format($salario, 2, ',', '.');
                  $fsalud   = number_format($salud, 2, ',', '.');
                  $fpsion   = number_format($psion, 2, ',', '.');
                  
                  if (isset($_POST['resultado'])){
                     echo '<h4 class="result">Resultado</h4>
                     <div class="respuesta">
                           <ul class="resultado">
                              <li>Salario: $' . $fsalario . '</li>
                              <li>Salud: $' . $fsalud . '</li>
                              <li>Pensión: $' . $fpsion . '</li>
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