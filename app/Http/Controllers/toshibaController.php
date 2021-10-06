<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toshiba;


class toshibaController extends Controller
{
    public function index()
    {
        $data = Toshiba::all();
        return response()->json(['message' => 'Success','Toshiba' => $data]);
    }//
}
