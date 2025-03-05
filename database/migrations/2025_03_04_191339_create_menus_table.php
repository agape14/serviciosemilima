<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('icono')->nullable();
            $table->string('url');
            $table->enum('tipo', ['web', 'gestor'])->default('web'); // Diferencia entre menús de la web y del gestor
            $table->integer('orden')->default(1);
            $table->foreignId('parent_id')->nullable()->constrained('menus')->onDelete('cascade'); // Soporte para jerarquías
            $table->boolean('estado')->default(1);
            $table->timestamps();
        });

        // Insertar datos del menú principal de la web
        DB::table('menus')->insert([
            ['nombre' => 'Inicio', 'icono' => 'fas fa-home', 'url' => '/', 'tipo' => 'web', 'orden' => 1, 'parent_id' => null, 'estado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Nosotros', 'icono' => 'fas fa-users', 'url' => '/nosotros', 'tipo' => 'web', 'orden' => 2, 'parent_id' => null, 'estado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Servicios', 'icono' => 'fas fa-cogs', 'url' => '/servicios', 'tipo' => 'web', 'orden' => 3, 'parent_id' => null, 'estado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Propiedades', 'icono' => 'fas fa-building', 'url' => '/propiedades', 'tipo' => 'web', 'orden' => 4, 'parent_id' => null, 'estado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Empresas', 'icono' => 'fas fa-briefcase', 'url' => '/empresas', 'tipo' => 'web', 'orden' => 5, 'parent_id' => null, 'estado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Contáctanos', 'icono' => 'fas fa-envelope', 'url' => '/contactanos', 'tipo' => 'web', 'orden' => 6, 'parent_id' => null, 'estado' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Insertar menú del gestor con submenús
        $menuGestorId = DB::table('menus')->insertGetId([
            'nombre' => 'Panel de Control', 'icono' => 'fas fa-tools', 'url' => '/admin', 'tipo' => 'gestor', 'orden' => 1, 'parent_id' => null, 'estado' => 1, 'created_at' => now(), 'updated_at' => now()
        ]);

        // Submenús del gestor
        $usuariosId = DB::table('menus')->insertGetId([
            'nombre' => 'Usuarios', 'icono' => 'fas fa-users-cog', 'url' => '/admin/usuarios', 'tipo' => 'gestor', 'orden' => 2, 'parent_id' => $menuGestorId, 'estado' => 1, 'created_at' => now(), 'updated_at' => now()
        ]);

        DB::table('menus')->insert([
            ['nombre' => 'Lista de Usuarios', 'icono' => 'fas fa-list', 'url' => '/admin/usuarios/lista', 'tipo' => 'gestor', 'orden' => 3, 'parent_id' => $usuariosId, 'estado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Crear Usuario', 'icono' => 'fas fa-user-plus', 'url' => '/admin/usuarios/crear', 'tipo' => 'gestor', 'orden' => 4, 'parent_id' => $usuariosId, 'estado' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
