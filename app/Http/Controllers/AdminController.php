<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Admin;
class AdminController extends Controller
{
    public function login(Request $request){
     
        if($request->isMethod('post')){
            $data = $request->input();
            $username = $data['username'];
            $password = $data['password'];
            $login_check=Admin::where(['username'=>$username])->first();
            // dd($login_check->password);
            // $adminCount = Admin::where(['username'=>$data['username'],'password'=>md5($data['password']),'status'=>1])->count();
            if($login_check){ 
                if(Hash::check($password,$login_check->password)){
                    $session=Session ::put('adminSession',$data['username']);
                    
                    return redirect('admin/dashboard');
                        
                        
                }else{
                    return redirect()->route('admin-login')->withErrors('Password is not correct.');
                }
        }else{
            return redirect()->route('admin-login')->withErrors('Email/Password is not correct.');
        }
             
        }
        return view('admin.admin_login');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function logout(){
        Session::forget('adminSession');
        Session::forget('session_id');
        return redirect('/admin/login')->with('flash_message_success','loged out Successfully!');
    }
}
