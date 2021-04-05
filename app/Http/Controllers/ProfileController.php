<?php

namespace App\Http\Controllers;

use App\Actions\Profile\GenerateProfile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = GenerateProfile::mark();

        return view('profile', ['profile' => $profile]);
    }
}
