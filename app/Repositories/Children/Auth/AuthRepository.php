<?php
namespace App\Repositories\Children\Auth;

use Illuminate\Support\Facades\Auth;

class AuthRepository
{
    // login
    public function login($credinatioals, $remmber, $gaurd)
    {
        //return Auth::guard($gaurd)->attempt($credinatioals, $remmber);
        return Auth::guard($gaurd)->attempt(['personal_id' => $credinatioals['personal_id'], 'password' => $credinatioals['password']], $remmber);
    }

    public function logout($gaurd)
    {
        return Auth::guard($gaurd)->logout();
    }
}
