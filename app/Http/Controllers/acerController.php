<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acer;

class acerController extends Controller
{
    public function index()
    {
        $data = Acer::all();
        return response()->json(['message' => 'Success','Acer' => $data]);
    }////
}
