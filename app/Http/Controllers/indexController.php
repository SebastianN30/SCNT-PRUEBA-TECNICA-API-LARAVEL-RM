<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class indexController extends Controller
{
    /* Metodo para obtener los registros o un registro en especifico por me dio del id */
    public function showData(Request $request)
    {
        // Obtener el valor del parámetro de consulta "id"
        $id = $request->query('id');
        
        // Filtrar los registros por el ID si se proporcionó
        $query = DB::table('characters');
        if ($id !== null) {
            $query->where('id', $id);
        }
        $data = $query->get();
        
        return response()->json($data);
    }

    /* Metodo para la insercion de registros nuevos por medio de un cuerpo json
    En un Postman*/
    public function insertData(Request $request)
    {

        $imagen = $request->file('image');
        $nameImage = time().'-image.'.$imagen->getClientOriginalExtension();
        $location = $imagen->storeAs('public/imagenes',$nameImage);
        $url = Storage::url($location);


        // Insertar un nuevo registro en la tabla
        DB::table('characters')->insert([
            'name' => $request->name,
            'status' => $request->status,
            'species' => $request->species,
            'type' => $request->type,
            'gender' => $request->gender,
            'origin' => $request->origin,
            'location' => $request->location,
            'image' => $url,
            'episode' => $request->episode,
            'url' => $request->url,
            'created' => now(),
        ]);
        return response()->json(['message' => 'Registro insertado con exito']);
    }

    /* Metodo para eliminar un registro por medio de un id */
    public function deleteData($id)
    {
        // Eliminar un registro por su ID
        DB::table('characters')->where('id', $id)->delete();
        
        return response()->json(['message' => 'Registro eliminado con éxito']);
    }
}


