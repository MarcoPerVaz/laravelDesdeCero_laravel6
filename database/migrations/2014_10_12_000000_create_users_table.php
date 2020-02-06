<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

/* Notas:
    *La función up es lo que hace la migración(migration)
        *se crea la tabla users
    *La función down es lo que quita la migración(rollback)
        *Rollback es regresar un paso o todos los pasos dependiendo lo que se necesite 
         en la tabla o base de datos
          Ejemplo: dropIfExists() si la tabla users existe entonces al hacer rollback se elimina la tabla users
*/
