<?php

namespace App\Http\Controllers;

use App\Models\Acsessuares;
use App\Models\Border;
use App\Models\Door;
use App\Models\Handle;
use App\Models\Height;
use App\Models\Width;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $border=Border::all();
        $door=Door::all();
        $handle=Handle::all();
        $height=Height::all();
        $width=Width::all();
        $acsessuares=Acsessuares::all();
        return view('home',compact(['border','acsessuares','height','width','door','handle']));
    }
}
