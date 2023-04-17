<?php

namespace App\Http\Controllers;
use Auth;
use DB;

use Illuminate\Http\Request;
use App\Models\user_table;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
   public function doLogin()
   {
    return view('welcome');
   }

   public function doLogin1()
   {
    return view('login');
   }

   public function DataInsert(Request $request){
      $name= $request->input('username');
      $password=$request->input('password');

      // $bcrypted_password = Hash::make($password);
       echo $password ;
       echo "</br>";
      echo $name;



      $isInsertSuccess=user_table :: insert(['user-name'=>$name,
                                              'password'=>$password ]); 
      
      if($isInsertSuccess){ echo '<h1> Insert Success</h1>'; }
      else{  echo'<h1> Insert Fail</h1>';}
         
         

         if (Auth::attempt(['user-name' => $name, 'password' => $password])) {
            return  "Login Succees";
        }
        else{
            return "login failed";
        }
    }

}