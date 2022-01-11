<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class main1 extends Controller
{
    function main1()
    {
        return User::all(); 
    }
}
