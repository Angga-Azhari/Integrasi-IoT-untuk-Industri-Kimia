<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\config_data;
use App\Models\record_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{

    public function index()
    {
        try {
            $data = config_data::find(1);
            if (!$data) {
                return response()->json([
                    'status' => false,
                    'message' => 'Configuration data not found',
                ], 404);
            }

            return response()->json([
                'status' => true,
                'message' => 'Kontrol aktuator terbaru',
                'data' => [
                    'relay' => intval($data->Relay),
                    'alarm' => intval($data->alarm),
                    'solenoid' => intval($data->solenoid),
                    'buzzer' => intval($data->buzzer),
                    'pump' => intval($data->pump),
                ],
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Internal Server Error',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'mq135' => 'required|numeric',
                'temperature' => 'required|numeric',
                'turbidity' => 'required|numeric',
                'TDS' => 'required|numeric',
                'pH' => 'required|numeric',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validasi error',
                    'errors' => $validator->errors(),
                ], 422);
            }

            $data = new record_data();
            $data->mq135 = $request->input('mq135');
            $data->temperature = $request->input('temperature');
            $data->turbidity = $request->input('turbidity');
            $data->TDS = $request->input('TDS');
            $data->pH = $request->input('pH');
            $data->save();

            return response()->json([
                'status' => true,
                'message' => 'Data berhasil masuk',
                'data' => $data,
            ], 201);

        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Kesalahan pada database',
                'error' => $e->getMessage(),
            ], 500);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
