<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use  App\Models\UserDomicilio;

class UserController extends Controller
{
    //
    public function getUsersWithDomicilioAndAge()
    {
        
        $users = User::with('domicilio')->get();        
        
        $usersWithAge = $users->map(function ($user) {            
            return [
                'user' => $user,     
                'fecha_nacimiento'=>$user->fecha_nacimiento,           
                'edad' => $user->edad,
            ];
        });

        return response()->json($usersWithAge);
    }
    public function getUsersFechaEdad($idUser)
    {   
        
        $users = User::with('domicilio')->where("id",$idUser)->firstOrFail();   

        return response()->json([
            'user' => $users,  
            'fecha_nacimiento'=>$users->fecha_nacimiento,     
            'edad' => $users->edad,
        ]);
    }
}
