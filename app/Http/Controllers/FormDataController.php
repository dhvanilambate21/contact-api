<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class FormDataController extends Controller
{
    function index(Request $request){
        $formData = new FormData;
        $formData->website = $request->input('website');
        $formData->data =json_encode($request ->data);
        $formData->save();

        return response()->json($formData);
    }
}
