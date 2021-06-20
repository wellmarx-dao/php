<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 13</title>
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
         <h1 class="title">Ejercicio 13</h1>
         <span>Crear un algoritmo que lea la edad de una persona, si la edad es mayor a 18, se notificará que es mayor de edad, en caso contrario menor de edad.</span>
         <!-- Ejercicio 13 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label>Edad</label>
               <input type="text" name="edad" placeholder="0" required />

               <!-- Código PHP -->
               <?php
                  //Variables
                  $edad = $_POST['edad'];
              
                  if (isset($_POST['resultado'])){
                     if ($edad >= 18) {
                        
                        echo '<h4 class="result">Resultado</h4>
                        <div class="respuesta">
                              <ul class="resultado">
                                 <li>Edad: ' . $edad . '</li>
                                 <li>Observación: Usted es mayor de edad</li>
                              </ul>   
                        </div>';
                     } else {
  
                        echo '<h4 class="result">Resultado</h4>
                        <div class="respuesta">
                              <ul class="resultado">
                                 <li>Edad: ' . $edad . '</li>
                                 <li>Observación: Usted es menor de edad</li>
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

