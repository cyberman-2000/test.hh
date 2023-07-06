<?php

namespace App\Http\Controllers;

use App\Models\Acsessuares;
use App\Models\Border;
use App\Models\Door;
use App\Models\Handle;
use App\Models\Height;
use App\Models\Orders;
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
    public function store(Request $request){
//        dd($request);
        $acsesuars='';
        foreach ($request->request as $key => $value){
            if (str_contains($key,'melochi')){
                $acsesuars=$acsesuars.$value.',';
            }
        }
//        dd($request->border);
            $create=Orders::create([
                'border_color'=>$request->border,
                'door_color'=>$request->door,
                'handle_color'=>$request->handle,
                'width'=>$request->width,
                'height'=>$request->height,
                'side'=>$request->side,
                'acsessuares'=>$acsesuars,
                'total_price'=>$request->total_price
            ]);
        return back()->with('success', 'Дверь успешно заказан');
    }

}
