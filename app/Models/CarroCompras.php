<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarroCompras extends Model
{
    protected $table = 'Carro_compras';
    protected $guarded = [];

    /**
     * Obtener el producto asociado al carro de compras.
     *
     * @return array|null
     */
    public function getProducto()
    {
        $productos = json_decode(file_get_contents(resource_path('json/productos.json')), true);

        foreach ($productos as $producto) {
            if ($producto['id'] == $this->product_id) {
                return $producto;
            }
        }

        return null;
    }
}