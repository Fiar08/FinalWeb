<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MsiType;

class MsiTypeController extends Controller
{
    public function index()
    {
        $data = MsiType::all();
        return response()->json(['message' => 'Success','MSI' => $data]);
    }//
}
