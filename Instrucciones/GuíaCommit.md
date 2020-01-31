
<h1 align="center">Proyecto Curso Laravel Desde Cero con Laravel 6</h1>
<h3><b>Commit -</b> <strong>Estructuras de control en Blade</strong></h3>
<hr>
<ol>
  <li>
    <p>Link para la documentación oficial de Laravel 6</p>
    <pre>
      <a href="https://laravel.com/docs/6.x/blade#if-statements">Documentación - Estructuras de control</a>
    </pre>
  </li>
  <!-- Instrucciones del commit -->
  <li>Edición del directorio routes/web.php</li>
  <li>Creación y edición de la vista resources/views/home.blade.php</li>
</ol>

<!-- Notas -->
<h3><b>Notas:</b></h3>
<ul>
  <li>Más información en el directorio routes/web.php</li>
  <li>
    Las vistas sin compilar se encuentran en el directorio storage/framework/views
    <ul>
      <li>Las vistas con sintaxis de Blade son compiladas a lenguaje PHP puro</li>
      <li>Laravel guarda en caché las vistas para poder acceder de forma rápida</li>
      <li>
        La sintaxis de Blade ( {{  }} ) protege contra ataques XSS
        <pre><a href="https://laravel.com/docs/6.x/blade#displaying-data">Definición de XSS</a></pre>
      </li>
      <li>
        La sintaxis de Blade para que acepte HTML( {!! !!} ) - Tener cuidado con esta sintaxis
      </li>
    </ul>
  </li>
</ul>


