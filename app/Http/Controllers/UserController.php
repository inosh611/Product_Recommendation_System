<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function add(Request $request){
        $password = $request->password;
        $compassword = $request->comfirmpassword;
        $input = $request->all();


        if($password == $compassword){
            User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password'])
            ]);
            return view('user.user_home');
        }else{
            $data = "Pasword Does not match!";
            $request->session()->flash('data',$data);
            return redirect()->back();
        }



    }

    public function login(Request $request){
            $email = $request->input('email');
            $password = $request->password;
            $user = User::where('email', $email)->first();
        if($user){
            $dbpassword = $user->password;
            $email = $user->email;
            if (Hash::check($password, $dbpassword)) {

                // Data to be passed to the middleware
                    $data = [
                        'position' => $user->position,
                        'user_ID'  => $user->id,
                        'user_name' => $user->name
                    ];

                // Redirect to a route and flash data to the session
                  return redirect()->route('panel')->with('data', $data);

            } else {
                $data = "incorrect password!";
                $request->session()->flash('data',$data);
                return redirect()->back();
            }
        }else{
            $data = "incorrect email!";
            $request->session()->flash('data',$data);
            return redirect()->back();
        }
    }

}
