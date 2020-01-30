
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi primera vista</title>
</head>
<body>
  <h1><?php echo("Hola mundo $nombre $apellido") ?></h1>
  <h1>Hola mundo Laravel - {{ $nombre . " " . $apellido . "<script>alert('Hola mundo');</script>" }}</h1>
  <h1>Hola mundo Laravel - {!! $nombre." ".$apellido."<script>alert('Holamundo');</script>" !!}</h1>
</body>

</html>

{{-- Notas:
      *PHP puro (1er <h1></h1>)
      *Ejemplo de sintaxis para protección contra ataques XSS (2do <h1></h1>)
      *Ejemplo de sintaxis para inserción HTML en la vista (3er <h1></h1>)

--}}

