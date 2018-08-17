<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
// Escribir un fichero en un array. En este ejemplo iremos a través de HTTP para
// obtener el código fuente HTML de un URL.
$líneas = file('index.html');

// Recorrer nuestro array, mostrar el código fuente HTML como tal y mostrar tambíen los números de línea.
?>
<textarea name="name" rows="8" cols="80">
<?php
foreach ($líneas as $num_línea => $línea) {
    echo htmlspecialchars($línea) . "\n";
}
?>
</textarea>
  </body>
</html>
