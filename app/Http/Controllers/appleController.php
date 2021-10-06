<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apple;


class appleController extends Controller
{
    public function index()
    {
        $data = Apple::all();
        return response()->json(['message' => 'Success','Apple' => $data]);
    }//
}
