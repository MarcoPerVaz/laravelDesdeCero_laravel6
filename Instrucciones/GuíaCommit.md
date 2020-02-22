
<h1 align="center">Proyecto Curso Laravel Desde Cero con Laravel 6</h1>
<h3><b>Commit -</b> <strong>Instalar Bootstrap en Laravel 6</strong></h3>
<hr>
<ol>
  <li>
    <p>Link para la documentación oficial de Laravel 6</p>
    <pre>
      <a href="https://laravel.com/docs/6.x/frontend">Documentación - Javascript</a>
    </pre>
  </li>
  <!-- Instrucciones del commit -->
  <li>
    Instalación del paquete laravel/ui (Para poder instalar Bootstrap, Vue y React desde Artisan) desde composer
    <pre>composer require laravel/ui --dev</pre>
  </li>
  <li>
    Instalación de Vue
    <pre>php artisan ui vue</pre>
  </li>
  <li>
    Instalación de las librerías o dependencias de Javascript
    <em>*Para usar los comandos de NPM se debe tener NodeJs instalado</em>
    <pre>npm install</pre>
    <pre>npm run dev</pre>
    <pre>npm install && npm run dev</pre> *Para instalar dependencias y compilar en el mismo comando
  </li>
  <li>Edición de la vista resources/views/dashboard/post/create.blade.php</li>
</ol>

<!-- Notas -->
<h3><b>Notas:</b></h3>
<ul>
 <li>
   Tuve que usar la versión 7.1.0 de sass-loader porque npm run dev marcaba error
   <br>
   Desinstalar la versión incorrecta de sass-loader
   <pre>npm uninstall --save-dev sass-loader</pre>
    Instalar la versión 7.1.0
    <pre>npm install --save-dev sass-loader@7.1.0</pre>
 </li>
</ul>

<br>

<em>
  *Inspeccionando el elemento con el navegador, en la pestaña consola muestra un error 
   referente a Vue, ya que Vue para funcionar pide un elemento html con el id App(#app)
</em>



