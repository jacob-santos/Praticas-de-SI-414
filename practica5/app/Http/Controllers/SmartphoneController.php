<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Smartphone;

class SmartphoneController extends Controller
{
    public function show()
    {
        return Smartphone::all();
    }

    public function edit(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'sistema_operativo' => 'required|string',
            'capacidad_almacenamiento' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => "Error al actualizar el registro"], 400, [], JSON_UNESCAPED_UNICODE);
        }

        $smartphone = Smartphone::find($id);

        if (!$smartphone) {
            return response()->json(["message" => "Smartphone no encontrado"], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $smartphone->marca = $request->marca;
        $smartphone->modelo = $request->modelo;
        $smartphone->sistema_operativo = $request->sistema_operativo;
        $smartphone->capacidad_almacenamiento = $request->capacidad_almacenamiento;
        $smartphone->save();

        return response()->json(["message" => "Actualización exitosa"], 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function delete($id)
    {
        $smartphone = Smartphone::find($id);

        if (!$smartphone) {
            return response()->json(["message" => "Smartphone no encontrado"], 404, [], JSON_UNESCAPED_UNICODE);
        }

        $smartphone->delete();
        return response()->json(["message" => "Eliminación exitosa"], 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'sistema_operativo' => 'required|string',
            'capacidad_almacenamiento' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => "Error al crear el registro"], 400, [], JSON_UNESCAPED_UNICODE);
        }

        try {
            $smartphone = new Smartphone;
            $smartphone->marca = $request->marca;
            $smartphone->modelo = $request->modelo;
            $smartphone->sistema_operativo = $request->sistema_operativo;
            $smartphone->capacidad_almacenamiento = $request->capacidad_almacenamiento;
            $smartphone->save();

            return response()->json(["message" => "Registro exitoso"], 201, [], JSON_UNESCAPED_UNICODE);
        } catch (\Exception $e) {
            return response()->json(["message" => "Error al crear el registro"], 500, [], JSON_UNESCAPED_UNICODE);
        }
    }
}
