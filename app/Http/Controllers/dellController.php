<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dell;


class dellController extends Controller
{
    public function index()
    {
        $data = Dell::all();
        return response()->json(['message' => 'Success','Dell' => $data]);
    }
}
