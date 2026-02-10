<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /**
     * Registration is disabled (single-user site). Redirect to login.
     */
    public function showRegistrationForm()
    {
        return redirect()->route('login');
    }

    /**
     * Registration is disabled. Redirect to login.
     */
    public function register(Request $request)
    {
        return redirect()->route('login');
    }
}
