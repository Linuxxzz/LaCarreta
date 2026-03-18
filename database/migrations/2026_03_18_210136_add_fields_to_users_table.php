<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Agregar el campo de edad
            $table -> string('age')->nullable()->after('name');
            // Agregar el campo de teléfono
            $table -> string('phone')->nullable()->after('age');
            // Agregar el campo de dirección
            $table -> string('address')->nullable()->after('email');
            // Añadir campo de administrador de tipo boolean
            $table -> boolean('is_admin')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
