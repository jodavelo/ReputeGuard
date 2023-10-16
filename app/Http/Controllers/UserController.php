<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function getCredentials(){
        $credentials = Storage::get('user_credentials.json');
        return response()->json(json_decode($credentials));
    }
}
