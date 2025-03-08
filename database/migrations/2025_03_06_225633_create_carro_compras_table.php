<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('Carro_compras', function (Blueprint $table) {
            $table->id(); // Auto-incremental
            $table->integer('producto_id'); // Cantidad del producto en el carrito
            $table->timestamps();

            // Clave foránea referenciando la tabla productos
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Carro_compras');
    }
};
