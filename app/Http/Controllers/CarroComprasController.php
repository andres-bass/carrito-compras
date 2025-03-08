<?php

namespace App\Http\Controllers;

use App\Models\CarroCompras;
use Illuminate\Http\Request;

class CarroComprasController extends Controller
{
    /**
     * Mostrar la lista de productos en el carrito.
     */
    public function index()
    {
        // Cargar todos los productos en memoria
        $path = resource_path('json/json.json');
        $jsonContent = file_get_contents($path);
        $productos = json_decode($jsonContent, true);
    
        // Obtener todos los carros de compras
        $compras = CarroCompras::all();
    
        // Para cada carro de compras, obtener el producto asociado
        $comprasConProductos = $compras->map(function ($compra) use ($productos) {
            // Buscar el producto correspondiente
            $producto = collect($productos)->firstWhere('id', $compra->producto_id);
    
            // Construir la estructura deseada
            return [
                'id' => $compra->id,
                'producto_id' => $compra->producto_id,
              
                    'name' => $producto['name'],
                    'price' => $producto['price'],
                    'quantity' => $producto['quantity']

                
            ];
        });
    
        return response()->json([
            "message"=>"Carrito obtenido",
            'compras' => $comprasConProductos
        ]);
    }

    /**
     * Agregar un producto al carrito.
     */
    
     public function store(Request $request)
     {
         // Validar la entrada
         $request->validate([
             'product_id' => 'required|integer',
         ]);
     
         // Cargar productos desde el JSON
         $path = resource_path('json/json.json');
         $jsonContent = file_get_contents($path);
         $productos = json_decode($jsonContent, true);
     
         // Verificar si el producto existe en el JSON
         $producto = collect($productos)->firstWhere('id', $request->product_id);
     
         if (!$producto) {
             return response()->json([
                 'message' => 'El producto no existe'
             ], 404);
         }
     
         // Verificar si el producto ya está en el carrito
         $carro = CarroCompras::where('producto_id', $request->product_id)->first();
     
         if ($carro) {
             // Si el producto ya está en el carrito, aumentar la cantidad
             $carro->quantity += 1;
             $carro->save();
         } else {
             // Si no está en el carrito, agregarlo con cantidad = 1
             $carro = new CarroCompras();
             $carro->producto_id = $request->product_id;
             $carro->quantity = 1;
             $carro->save();
         }
     
         return response()->json([
             'message' => "Producto agregado al carrito",
             'product_id' => $carro->producto_id,
         ]);
     }
     

    /**
     * Mostrar un producto específico del carrito.
     */
    public function show($id)
    {
        $producto = CarroCompras::find($id);

        if (!$producto) {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }

        return response()->json($producto);
    }

    /**
     * Eliminar un producto del carrito.
     */
    public function destroy($id)
    {
        $producto = CarroCompras::find($id);

        if (!$producto) {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }

        $producto->delete();

        return response()->json(['message' => 'Producto eliminado del carrito']);
    }
}
