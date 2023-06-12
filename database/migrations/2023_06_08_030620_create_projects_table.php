<?php

use App\Model\User;
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
        Schema::create('Proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreProyecto',100);
            $table->string('FuenteFondos',100);
            $table->float('MontoPlanificado',100);
            $table->float('MontoPatrocinado',100);
            $table->float('MontoFondosPropios',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
