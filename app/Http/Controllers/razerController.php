<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Razer;


class razerController extends Controller
{
    public function index()
    {
        $data = Razer::all();
        return response()->json(['message' => 'Success','Razer' => $data]);
    }//
}
