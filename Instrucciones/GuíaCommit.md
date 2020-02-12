
<h1 align="center">Proyecto Curso Laravel Desde Cero con Laravel 6</h1>
<h3><b>Commit -</b> <strong>Comando Refresh para las migraciones</strong></h3>
<hr>
<ol>
  <li>
    <p>Link para la documentación oficial de Laravel 6</p>
    <pre>
      <a href="https://laravel.com/docs/6.x/migrations#rolling-back-migrations">Documentación - Migraciones | Refresh</a>
    </pre>
  </li>
  <!-- Instrucciones del commit -->
  <li>
    Se crea un registro manual en la tabla posts
  </li>
  <li>
    <pre>php artisan refresh</pre>
    <em>*Laravel hace un rollback(función down) de todas las tablas, luego vuelve a crear las migraciones(función up)</em>
    <br>
    <em>*Refresh borra los valores en las tablas</em>
  </li>
</ol>

<!-- Notas -->
<h3><b>Notas:</b></h3>
<ul>
  <li>Para ayudar a laravel con la configuración de la Base de Datos es bueno trabajar con convenciones o estándares</li>
  <li>El nombre de la migración lleva al inicio la fecha de creación de la migración (Laravel lo hace automáticamente)</li>
  <li>
    El nombre debe ser creado con la siguiente nomenclatura
    <br>
    _fecha_create_nombreTablaEnPlural_table_
    <br>
    <em>*Se usa create cuando se quiere crear una nueva tabla</em>
  </li>
</ul>

<br>

<em>
  *En VsCode para escribir rápidamente la creación de columnas de la base de datos solo es necesario comenzar a escribir
   Column y el ayudante de VsCode muestra las opciones. Es necesario instalar o tener la extensión <b>Laravel 5.6 Snippets</b>
</em>



