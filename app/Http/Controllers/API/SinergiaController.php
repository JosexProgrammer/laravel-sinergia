<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;
use App\Models\User;
use App\Models\Proyectos;
use DB;
class SinergiaController extends Controller
{
    // public function getProfile(Request $request)
    // {
    //     Log::info("entrooo con autorización");
    //     return $request->user();
    // }

    // public function logout (Request $request){
    //     Log::info("entrooo a cerrar Sesión");
    //     DB::table('oauth_access_tokens')
    //     ->where('user_id', $request->user()->id)
    //     ->update([
    //         'revoked' => true
    //     ]);
    //     $response['success'] = true;
    //     return $response;
    // }
    public function getAllProyects()
    {
        return Proyectos::get();
    }
}
