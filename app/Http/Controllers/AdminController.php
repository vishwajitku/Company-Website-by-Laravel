<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use  App\Mail\VerificationCodeMail;
use App\Models\User;

class AdminController extends Controller
{
    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }


    public function AdminLogin(Request $request){
        
         $credentials  = $request->only('email', 'password');

            if(Auth::attempt($credentials)){
                
                          
                $user = Auth::user();

                $verificationCode = random_int(100000,999999); 
           
                
                Mail::to($user->email)->send(new VerificationCodeMail($verificationCode) );
                Auth::logout(); 
                
                session([
                    'verification_code' => $verificationCode,
                    'user_id' => $user->id,
                     'otp_verified' => false
                    ]);  

                return redirect()->route('custom.verification.form')->with(
                    'status', ' Verification code sent'
                );
                
            }




         return redirect()->back()->withErrors([
            'email' => 'Invalid Credentials'
         ]);
    }


public function ShowVerification(){
     return view('auth.verify');

}



public function VerificationVerify(Request $request){
             
        $request->validate(['code' => 'required|numeric']);

        if($request->code == session('verification_code')){
               Auth::loginUsingId(session('user_id'));

              session(['otp_verified' => true]);
            

               session()->forget(['verification_code','user_id' , 'otp_verified']);
               return redirect()->intended('/dashboard');
        }


        return  back()->withErrors(['code' => 'Invalid code']);
     
}


// <------ profile 
public function AdminProfile(){

    $id  = Auth::user()->id;

    $profileData = User::find($id);

    return view('admin.admin_profile' , compact('profileData'));
}


public function ProfileStore(Request $request){
    $id = Auth::user()->id;

    $data = User::find($id);

    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->address = $request->address;

     $oldimage = $data->photo;

    if($request->hasFile('photo')){

        $file = $request->file('photo');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('upload/user_images'), $filename);
        $data->photo = $filename;


        if($oldimage && $oldimage !== $filename ){
            $this->deleteOldImage($oldimage);
        }

     
    }

       $data->save();
       

       $notification  = [
        'message' =>'Profile updated successfully',
        'alert-type' => 'success'
       ];

     return redirect()->back()->with($notification);

 }



private function deleteOldImage(string $oldimage): void{
     $fullpath = public_path('upload/user_images/'.$oldimage);
     if(file_exists($fullpath)){
        unlink($fullpath);
     }
}



public function PasswordUpdate(Request $request){
           
    $user =  Auth::user();

    
      $request->validate([
         'old_password' => 'required',
         'new_password' => 'required|confirmed'
      ]);

      

      if(Hash::check($request->old_password , $user->password)){
            
         User::findOrFail($user->id)->update([
            'password' => Hash::make($request->new_password)
         ]);

          $notification = array(
             'message' => 'Password is updated',
             'alert-type' => 'success',
           );

          return redirect()->back()->with($notification);

      }else{
           $notification = array(
             'message' => 'Password is Incorrect',
             'alert-type' => 'error',
           );

           return redirect()->back()->with($notification);
      }


}





}



