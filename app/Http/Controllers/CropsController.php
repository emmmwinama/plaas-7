<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crop;

class CropsController extends Controller
{
    //
    function index(){
        $crops = Crop::paginate(5);
//        dd(auth()->user());
        return view('crops.index', [
            'crops' => $crops
        ]);
    }

    function details($id){
        $crop = Crop::find($id);
        return view('crops.details')->with('crop', $crop);
    }
}
