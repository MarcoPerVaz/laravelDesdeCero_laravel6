
<h1 align="center">Proyecto Curso Laravel Desde Cero con Laravel 6</h1>
<h3><b>Commit -</b> <strong>Creando un controlador de tipo resource con Artisan</strong></h3>
<hr>
<ol>
  <li>
    <p>Link para la documentación oficial de Laravel 6</p>
    <pre>
      <a href="https://laravel.com/docs/6.x/controllers#resource-controllers">Documentación - Controlador de tipo resource desde Artisan</a>
    </pre>
  </li>
  <!-- Instrucciones del commit -->
  <li>
    Eliminación del controlador PostController
  </li>
  <li>
    Creación del controlador Dashboard/PostController
    <pre>php artisan make:controller Dashboard/PostController -r</pre>
  </li>
  <li>Edición del archivo routes/web.php</li>
</ol>

<!-- Notas -->
<h3><b>Notas:</b></h3>
<ul>
  <li>Para saber que rutas existen en el Proyecto
    <pre>php artisan route:list</pre>
    <pre>php artisan r:l</pre>
  </li>
  <li>Al crear un controlador de Recurso, Laravel crea 7 rutas de forma automática</li>
</ul>


