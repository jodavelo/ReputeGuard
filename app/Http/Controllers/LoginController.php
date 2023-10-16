<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\AuthResource;
use App\Models\User;

class LoginController extends Controller
{
    public function decrypt(Request $request)
    {
        $ciphertext = $request->input('ciphertext');
        $plaintext = Crypt::decryptString($ciphertext);
        return response()->json(['plaintext' => $plaintext]);
    }

    public function getAuth($userId){
        //dd($userId);
        $rowDB = DB::table('users')->where('username', $userId)->first();
        if( $rowDB == null ) return response()->json('No data');
        return new AuthResource($rowDB);
        //return response()->json($rowDB);
    }

    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        $user = User::where('username', $credentials['username'])->first();

        if (!$user) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        if (($credentials['password'] ==  $user->password)) {
            return response()->json(['message' => 'Successfully logged in!']);
        } else {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }
}
