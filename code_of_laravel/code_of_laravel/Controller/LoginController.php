<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Request;
use Session;
class LoginController extends Controller {

   
	//
	
	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct()
    {
       
         
    }
	
	public function index(){
		
		
		    /* $user=Session::get('user');
			 if(is_array($user) && count($user)>0)
			    return redirect('users');*/
			/*if (Auth::viaRemember())
			{
			  echo "sdasdasd";exit;
			}	*/
			
			
		    if(Auth::check())	
			    return redirect('home');	
		     return view('home.login');
		
		}
		
	public function login(){
		     
			
			$input=Request::all();
			
			
			$where=array('email'=>$input['email'],'password'=>$input['password']);
			$remenber=isset($input['remember'])? TRUE:FALSE;
			$user=User::where($where)->first();

			/*$user->password = \Hash::make($input['password']);
			$user->save();exit;
			//echo Auth::attempt($where);exit; */
			if (Auth::attempt($where,$remenber))  
			{  
				
				return redirect('home');
			} 
			else
			{
				return redirect('/')->with('message', 'Wrong Email or Password');
			}
		    /*if(empty($user))
			{
				//Session::flash('message', 'Wrong Email or Password'); 
				return redirect('/')->with('message', 'Wrong Email or Password');
			}
			else
			{
				
				//Session::put('user',$user->toArray());
				$user->last_login=date('Y-m-d H:i:s',strtotime('now'));
				$user->password = \Hash::make($input['password']);
				$user->save();
				Auth::login($user);
				//User::update(array("last_login"=>carbon/carbon::NOW()));
				return redirect('users');
			}*/
			 
		
		}	
		
		public function logout()
		 {
			 
			 Auth::logout();
			 Session::put('group_id','');
			 Session::forget('group_id');
			 
			 return redirect('/');
		 }
		
	

}
