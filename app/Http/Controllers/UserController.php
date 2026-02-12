<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $premiumUsers=10;
        $freeUsers=100;
        $totalUsers=$premiumUsers+$freeUsers;
        return "Total Users: ".$totalUsers. " Free users:".$freeUsers. " Premium users:".$premiumUsers;
        
    }
}
