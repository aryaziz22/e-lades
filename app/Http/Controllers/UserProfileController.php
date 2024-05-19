<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller {
    
    public function show() {
        
        $userData = [
            'name' => 'felix',
            'email' => 'felix@example.com',
        ];

        return 'User Profile - Name:' . $userData['name'] . ', Email: ' . $userData['email'];
    }

    public function showProfile($id)
    {
        return view('profile', ['id' => $id]);
    }
}


