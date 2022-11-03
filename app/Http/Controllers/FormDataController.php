<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class FormDataController extends Controller
{
    function index(Request $request){
        $this->validate(request(),[
            'website'=>'required|max:255',
            'data'=>'required',
        ]);

    
        $formData = new FormData;
        $data = $request->all(); 
        // dd($data['data']);
        $formData->website = $request->input('website');
        $formData->data =json_encode($data['data']);      
        $formData->save();
        
        return response()->json($formData);
    }
}
