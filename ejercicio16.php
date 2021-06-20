<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/png" href="favicon.png"/>
      <title>Ejercicio 16</title>
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
         <h1 class="title">Ejercicio 16</h1>
         <span>Crear un algoritmo que lea el costo de un artículo y la cantidad a comprar, el sistema debe calcular el total a pagar, si el total a pagar es mayor a $60000 tendrá un descuento del 3% en caso contrario no tendrá descuento.</span>
         <!-- Ejercicio 16 -->
         <div class="ejercicio">
            <form class="int" method="post" action="">
               <label>Costo del artículo</label>
               <input type="text" name="costo" placeholder="0" required />

               <label>Cantidad</label>
               <input type="text" name="cantidad" placeholder="0" required />

               <!-- Código PHP -->
               <?php
                  //Variables
                  $costo      = $_POST['costo'];
                  $cantidad   = $_POST['cantidad']; 
                  $subtotal   = $costo*$cantidad;
                  $fcosto     = number_format($costo, 2, ',', '.');
                  $fsubtotal  = number_format($subtotal, 2, ',', '.');
    
                  if (isset($_POST['resultado'])){
                     if ( $subtotal >= 60000){
                        $total = $subtotal - ($subtotal * 0.03);
                        $ftotal = number_format($total, 2, ',', '.');
                        $ahorro = number_format(($subtotal - $total), 2, ',', '.');
                        echo '<h4 class="result">Resultado</h4>
                        <div class="respuesta">
                              <ul class="resultado">
                                 <li>Costo: $' . $fcosto . '</li>
                                 <li>Cantidad: ' . $cantidad . '</li>
                                 <li>Subtotal: $' . $fsubtotal . '</li>
                                 <li>Descuento: 3%</li>
                                 <li>Total: $' . $ftotal . '</li>
                                 <li>Ahorro: $' . $ahorro . '</li>
                              </ul>   
                        </div>';
                    } else {
                        $total = number_format($subtotal, 2, ',', '.');
                        echo '<h4 class="result">Resultado</h4>
                        <div class="respuesta">
                              <ul class="resultado">
                                 <li>Costo: $' . $fcosto . '</li>
                                 <li>Cantidad: ' . $cantidad . '</li>
                                 <li>Subtotal: $' . $fsubtotal . '</li>
                                 <li>Descuento: No aplica</li>
                                 <li>Total: $' . $total . '</li>
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
   </body>
</html>

