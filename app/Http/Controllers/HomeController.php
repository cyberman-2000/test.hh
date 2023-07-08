<?php

namespace App\Http\Controllers;

use App\Models\Acsessuares;
use App\Models\Border;
use App\Models\Door;
use App\Models\Handle;
use App\Models\Height;
use App\Models\Orders;
use App\Models\Width;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnValue;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



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
                'total_price'=>$request->total_price,
                'visualization'=>$request->vizual
            ]);
        return back()->with('success', 'Дверь успешно заказан');
    }
    public function getpdf(Request $request){
             $data = Orders::all();
             if ($request->has('export')) {
                 if ($request->get('export') == 'pdf') {
                    $pdf = PDF::loadView('customerspdf', compact('data'));
//                    dd($pdf);
                     $file=$pdf->store('materials/'.'myorder'.'');
                    return $pdf->download('orders-list.pdf');
                    }
                }
        return view('customers', compact('data'));
    }
    public function orders(){
        $data = Orders::all();
        return view('customerspdf',compact('data'));
    }
    public function sendpdf(){

    }



}
