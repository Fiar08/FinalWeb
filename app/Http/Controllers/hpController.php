<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hp;

class hpController extends Controller
{
    public function index()
    {
        $data = Hp::all();
        return response()->json(['message' => 'Success','Hp' => $data]);
    }//
}
