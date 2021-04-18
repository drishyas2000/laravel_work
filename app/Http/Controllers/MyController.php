<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class MyController extends Controller
{
 
    
    function register(Request $req)
    {
        $data = new Work; 
      $data->name=$req->name;
      $data->email=$req->email;
      $data->password=$req->password;
      $data->save();
    }
}
