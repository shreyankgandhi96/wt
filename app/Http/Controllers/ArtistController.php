<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Redirect;
use App\Arde;
class ArtistController extends Controller
{
    //
   	public function add(Request $request){
   		$a=Session::get('regid');
   		Session::forget('regid');
   		$newart=new Arde();
   		$newart->type=$request->type;
   		$newart->area=$request->area;
   		$newart->about=$request->about;
   		$newart->user_id=$a;
   		$newart->save();
   		return Redirect::to('login');	
   	}
   	public function check(){
   		return view('artist');
   	}
}
