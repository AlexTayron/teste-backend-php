<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PingController extends Controller
{
   public function ping()
   {
    return response()->json(['message' => 'pong! Servidor OnLine'],200);
   }
}
