<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Microsoft;


class microsoftController extends Controller
{
    public function index()
    {
        $data = Microsoft::all();
        return response()->json(['message' => 'Success','Microsoft' => $data]);
    }//
}
