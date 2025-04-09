<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;


class ProductController extends Controller
{
    public function getAllProduct(Request $request){
        // return $request->id;

        $applicationDetails = news::All();
        return response()->json(['http_status' => 'success','message'=>'Get All Application Details','data'=>$applicationDetails],200);
    }

    
}
