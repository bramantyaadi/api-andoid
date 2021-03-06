<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\antrian;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index(Request $request)
    {
        try {
            $data =  antrian::all();
            return response()
                ->json([
                    'response' => "complete",
                    'message' => "Getting Items Success",
                    'code' => 200,
                    'items' => $data
                ]);
        } catch (\Throwable $th) {
            return response()
                ->json([
                    'code' => 500
                ]);
        }
    }
    public function store(Request $request)
    {
        try {
            $data_max = antrian::max('idx') + 1;
            if ($data_max >= 100) {
                $nomor_antrian = "A" . $data_max;
            } else if ($data_max >= 10) {
                $nomor_antrian = "A0" . $data_max;
            } else if ($data_max < 10) {
                $nomor_antrian = "A00" . $data_max;
            }
            try {
                $antrian = new antrian;
                $antrian->idx = $data_max;
                $antrian->nomor_antrian = $nomor_antrian;
                $antrian->save();

                return response()->json([
                    "status" => 200,
                    "response" => true,
                    "data_max" => $data_max,
                    "nomor_antrian" => $nomor_antrian,
                    "time" => date("H:i:s")
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    "response" => $th,
                    "status" => 500
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                "response" => $th,
                'status' => 500
            ]);
        }
    }
    public function update(Request $request)
    {
        try {
            $data = antrian::whereRaw('jam_dipanggil is null')->first();
            $data->jam_dipanggil = date("H:i:s");
            $data->save();
            return response()->json([
                "response" => "complete",
                "status" => 200,
                "nomor_antrian" => $data['nomor_antrian'],
                "jam_dipanggil" => $data['jam_dibuat']
            ]);
        } catch (\Throwable $th) {
            return $th;
            return response()->json([
                "response" => "fail",
                "status" => 500
            ]);
        }
    }
    public function show(Request $request, $id)
    {
        try {
            $data = antrian::findOrFail($id);
            return response()->json([
                "status" => 200,
                "response" => "complete",
                "data" => $data
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "status" => 500,
                "response" => "fail",
                "catch" => $th
            ]);
        }
    }
    public function last(Request $request)
    {
        try {
            $data = antrian::whereRaw('jam_dipanggil is null')->first();
            $data_last = $data->idx - 1;
            $data_query_last = antrian::findOrFail($data_last);
            return response()->json([
                "response" => "complete",
                "status" => 200,
                "nomor_antrian" => $data_query_last['nomor_antrian'],
                "jam_dibuat" => $data_query_last['jam_dibuat'],
                "jam_dipanggil" => $data_query_last['jam_dipanggil'],
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "response" => "fail",
                "status" => 500
            ]);
        }
    }
}
