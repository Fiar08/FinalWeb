<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lenovo;


class lenovoController extends Controller
{
    public function index()
    {
        $data = Lenovo::all();
        return response()->json(['message' => 'Success','Lenovo' => $data]);
    }//
}
