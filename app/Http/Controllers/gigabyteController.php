<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gigabyte;


class gigabyteController extends Controller
{
    public function index()
    {
        $data = Gigabyte::all();
        return response()->json(['message' => 'Success','Gigabyte' => $data]);
    }//
}
