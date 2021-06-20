<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 7</title>
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
         <h1 class="title">Ejercicio 7</h1>
         <span>Crear un algoritmo que lea 3 notas diferentes de un estudiante y el sistema calcule su promedio.</span>
         <!-- Ejercicio 7 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label>Nota1</label>
               <input type="text" name="nota1" placeholder="0" required />

               <label>Nota2</label>
               <input type="text" name="nota2" placeholder="0" required />

               <label>Nota3</label>
               <input type="text" name="nota3" placeholder="0" required />
               <!-- Código PHP -->
               <?php
                  //Variables
                  $nota1 = $_POST['nota1']; 
                  $nota2 = $_POST['nota2']; 
                  $nota3 = $_POST['nota3'];
                  $promedio = round((($nota1+$nota2+$nota3)/3),2);

                  if (isset($_POST['resultado'])){
                     echo '<h4 class="result">Resultado</h4>
                     <div class="respuesta">
                           <ul class="resultado">
                              <li>Nota1: (' . $nota1 . ')</li>
                              <li>Nota2: (' . $nota2 . ')</li>
                              <li>Nota3: (' . $nota3 . ')</li>
                              <li>Promedio: (' . $promedio . ')</li>
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

