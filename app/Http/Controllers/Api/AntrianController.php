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
                    'response' => true,
                    'status' => 200,
                    'data' => $data
                ]);
        } catch (\Throwable $th) {
            return response()
                    ->json([
                        'status' => 500
                    ]);
        }
        
    }
}
