<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;

class QuoteController extends Controller
{
    public function postQuote(Request $request)
    {   
        // dd($request->input('content'));
    	$quote=new Quote();
        $quote->content=$request->input('content');
        $quote->save();
        $quote=Quote::all();
          return response()->json(['quote'=>$quote],200);
    }

    public function getQuote()
    {
    	$quote=Quote::all();
        $response=['quotes'=>$quote];
        return response()->json($response,200);
    }


	public function putQuote(Request $request,$id)
    {
        
        $quote=Quote::find($id);
        // dd($request->all());
        if(!$quote) 
        {
            return response()->json(['message'=>'Document Not Found!'],404);
        }
        $quote->content=$request->input('contents');
        $quote->save();
        $quote=Quote::all();
        return response()->json(['quote'=>$quote],200);
    	
    }
	public function deleteQuote($id)
    {
    	$quote=Quote::find($id);
        $quote->delete();
        $quote=Quote::all();
        return response()->json(['quotes'=>$quote,],200);
    }

}
