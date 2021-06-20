<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 9</title>
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
         <h1 class="title">Ejercicio 9</h1>
         <span>Crear un algoritmo que lea su edad en años y el sistema calcule su edad en meses aproximados de vida. <br />Si el promedio de vida de un humano es de 80 años el sistema nos debe informar cuanto tiempo nos queda de vida física.</span>
         <!-- Ejercicio 9 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label>Edad</label>
               <input type="text" name="edad_año" placeholder="0" required />
               <!-- Código PHP -->
               <?php
                  //Variables
                  $edad_año   = $_POST['edad_año'];
                  $prom_edad  = 80;
                  $edad_mes   = $edad_año*12;
                  $vida_rest  = $prom_edad - $edad_año;

                  if (isset($_POST['resultado'])){
                     echo '<h4 class="result">Resultado</h4>
                     <div class="respuesta">
                           <ul class="resultado">
                              <li>Edad en meses: ' . $edad_mes . ' meses</li>
                              <li>Años de vida restante: ' . $vida_rest . ' años</li>
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

