
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi primera vista</title>
</head>
<body>
  <h1>Hola mundo Laravel - {!! $nombre." ".$apellido !!}</h1>

  {{-- Ciclo foreach --}}
  <ul>
    <?php foreach ($posts as $key => $post) : ?>
      <li>{{ $post }}</li>
    <?php endforeach; ?>
  </ul>

  <ul>
    @foreach ($posts as $post)
      <li>{{ $post }}</li>
    @endforeach
  </ul>

  <ul>
    @forelse ($posts2 as $post)
      <li>{{ $post }}</li>
    @empty
        <li>No posts</li>
    @endforelse
  </ul>
</body>

</html>

{{-- Notas:
      

--}}

