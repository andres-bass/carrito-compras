<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class JsonData extends Model
{
    // No necesitamos una tabla de base de datos, así que desactivamos la asignación masiva
    protected $guarded = [];

    /**
     * Obtener la ruta del archivo JSON.
     *
     * @return string
     */
    public static function getJsonFilePath()
    {
        return resource_path('json/json.json');
    }

    /**
     * Leer y decodificar el archivo JSON.
     *
     * @return array
     */
    public static function getJsonData()
    {
        $path = self::getJsonFilePath();

        if (!file_exists($path)) {
            return [];
        }

        $jsonContent = file_get_contents($path);
        return json_decode($jsonContent, true);
    }

    /**
     * Procesar los datos del JSON.
     *
     * @return array
     */
    public static function processJsonData()
    {
        $data = self::getJsonData();

        foreach ($data as $key => $item) {
            // Aquí puedes realizar las operaciones que necesites con cada elemento.
            // Por ejemplo, podrías agregar un log, transformar datos, etc.
            Log::info("Elemento $key", $item);
        }

        return $data;
    }
}