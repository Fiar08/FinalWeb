<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asus;


class asusController extends Controller
{
    public function index()
    {
        $data = Asus::all();
        return response()->json(['message' => 'Success','Asus' => $data]);
    }////
}
