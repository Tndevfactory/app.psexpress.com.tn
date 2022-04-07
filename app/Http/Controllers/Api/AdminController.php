<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function testAdmin(){
        $data=[
            'hi'=>'admin response get route'
        ];
        return response()->json($data,200);
    }
}
