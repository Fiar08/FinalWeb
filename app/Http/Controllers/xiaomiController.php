<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Xiaomi;

class xiaomiController extends Controller
{
    public function index()
    {
        $data = Xiaomi::all();
        return response()->json(['message' => 'Success','Xiaomi' => $data]);
    }//
}
