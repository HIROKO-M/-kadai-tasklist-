<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{

    public function index()
    {
        $data =[];
        if(\Auth::check()){
            $user = \Auth::user();
            $tasklists = $user->tasklists()->orderBy('created_at', 'desc');
            
            $data = [
              'user' => $user,
              'tasklists' => $tasklists,
            ];
        }
        return view('welcome', $data);
    }
}
