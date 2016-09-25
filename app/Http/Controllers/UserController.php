<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Login;
use Validator;
use Session;
use Redirect;
use View;
class UserController extends Controller
{
    //
    public function add(Request $request){

    	 $v = Validator::make($request->all(), [
        'name'=>'required',
        'email'=>'required|unique:users',
        'password' => 'required',
        'repassword'=>'required',
        'usertype'=>'required'
        ]);
       if($request->password!=$request->repassword){
                      $v->errors()->add('field', 'Passwords are not the same');
                      return redirect()->back()->withErrors($v->errors()->all());

       }
       if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors()->all());
        }
       
   	$newuser = new Login;
   	$newuser->name= $request->name;
   	$newuser->email= $request->email;//$request->email;
   	$newuser->password=md5($request->password);
   	$newuser->usertype=$request->usertype;
   	$newuser->save();
   	//return ("login successful");
   	$new=Login::where('email',$request->email)->get();
   	$a= $new[0]['id'];
   	if($request->usertype==1){
   		Session::put('regid',$a );
		return Redirect::to('artist');
   	}
   	else if($request->usertype==0){
   		return Redirect::to('customer');
   		//return Redirect::to('login');
   	}
    }


    public function check(Request $request){
    	//return $request;
    		$pass=md5($request->password);
            $v = Validator::make($request->all(), [
        'email'=>'required|max:255',
        'password' => 'required',
        ]);
        
        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors()->all());
        }
            //$results= new Login;
            $results = Login::where('email', $request->email)->where('password',$pass)->get();
            //$check=$results[0]['id'];
               //return $results;
    		//$results = $results->toArray();
                
//    		print_r($results[0]['name']);exit;
        
            if(count($results)<=0){
                        //return $results;
    			        $v->errors()->add('field', 'Password or username is incorrect');
                        return redirect()->back()->withErrors($v->errors()->all());
    		}
    		else{
    			Session::put('name',$results[0]['name'] );
                        Session::put('id',$results[0]['id']);
                        //return $results[0]['id'];
    			return Redirect::to('artistprofile');
                        
    		}

    	
    }
};
