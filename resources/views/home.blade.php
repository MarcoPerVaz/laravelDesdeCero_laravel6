{{-- Notas: 
      *No se recomienda usar php puro dentro de las plantillas de blade. 
--}}
<!DOCTYPE html>
<?php $nombre = "Marco" ?>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi primera vista</title>
</head>
<body>
  <h1>Hola mundo Laravel - <?php echo "Hola mundo " . $nombre ?></h1>
</body>
</html>

{{-- Notas:
      *Aunque la vista se llame home.blade.php se puede usar php puro aunque no es lo recomendable ya que 
       blade facilita las cosas.
--}}