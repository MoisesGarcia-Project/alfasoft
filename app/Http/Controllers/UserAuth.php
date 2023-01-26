<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserAuth extends Controller
{
  public function create() {
        
        return view('auth.login');
    }

    public function store() {
        
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ]);

        } else {
            return redirect()->route('contact.contact');
        }
    }

    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }
}
