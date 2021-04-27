<?php

namespace App\Http\Controllers\Back;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Toastr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login(){
      return view('back.auth.login');
    }
    public function loginPost(Request $request){
      if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
        toastr()->success('Tekrar hoşgeldiniz!   ' .Auth:: user()->name);
        return redirect()->route('admin.dashboard');
      }
      return redirect()->route('admin.login')->withErrors('Email adresi veya şifre hatalı!');
}

public function logout(){
  Auth::logout();
  return redirect()->route('admin.login');
}
public function registerForm(){
  return view('back.auth.register');
}
public function registerSave(Request $request){
  DB::table('admins')->insert([
    'name'=>$request->get('name'),
    'email'=>$request->get('email'),
  
//'required|string|min:8|confirmed|regex:/^(?=.?[A-Z])(?=.?[a-z])(?=.?[0-9])(?=.?[#?!@$%^.&*-]).{8,}$/'
    'password' => Hash::make($request->get('password'))

  ]);
  $to_name = 'El Emekleri';
  $to_email = $request['email'];
  $user_name=$request['name'];
  $body = [];
  $mail_data = array(['body'=>$body], 'username'=>$user_name,'email'=>$to_email);
  Mail::send('back.register-email', $mail_data, function ($message) use($to_name, $to_email){
      $message->to($to_email, $to_name)->subject('Hoşgeldin!');
      $message->from(env('MAIL_USERNAME'), 'elemekleri.com');
  });
 return redirect()->route('back.registersave')->with('message','Kullanıcı Başarıyla Kaydedildi.');


}
    public function chart(){
     return view('back.charts');
    }
    public function table(){
       return view('back.tables');
      }
}
