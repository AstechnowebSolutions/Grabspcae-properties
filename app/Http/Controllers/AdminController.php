<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AdminController extends Controller
{

    public function profile(){
        $id = Auth::user()->id;
        $data = User::find($id);

        return view('admin.profile.show', compact('data'));
          

    }

    public function edit(){
        $id = Auth::user()->id;
        $data = User::find($id);
        return view('admin.profile.edit', compact('data'));

    }

    public function store(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
          
        $data->name = $request->name;
        $data->username =$request->username;
        $data->email = $request->email;

        if($request->file('profile_image')){

            $file = $request->file('profile_image');

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/admin_images'),$filename);
            
            $data['profile_image'] = $filename;
            
        }
        $data->save(); 
        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.profile.show')->with($notification);

    }

    public function changePassword(){


        return view('admin.change_password'); 
    }

    public function updatePassword(Request $request){

        $validata = $request->validate([

            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password'=> 'required|same:newpassword', 

        ]);
        $hashPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword,$hashPassword)){

            $user = User::find(Auth::id());
            $user->password = bcrypt($request->newpassword);
            $user->save();

            session()->flash('message','Password Updated Successfully');
            return redirect('/dashboard');
        }
        else{

            session()->flash('message','Old Password doesnot match');
            return redirect()->back();
        }


        
    }

    public function destroy(Request $request){
       
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Succesfully',
            'alert-type'=> 'success'
          );

        return redirect('/login')->with($notification);
    }

}
