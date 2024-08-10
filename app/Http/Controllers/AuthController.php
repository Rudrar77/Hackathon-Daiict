<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Equipment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function handleForm(Request $request)
    {
        // Check if the request is for registration or login
        if ($request->isMethod('post')) {
            if ($request->has('name')) {
                return $this->register($request);

            } else {
                // This is a login request
                
                return $this->login($request);
                
            }
        }

        return back();
    }

    public function register(Request $request)
    {
        // Validation for registration
        

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile' => $request->mobile,
            'city' => $request->city,
            'address' => $request->address,
        ]);

        // Log the user in
        Session::put('user_email', $request->email);

        return redirect('home');
    }

    private function login(Request $request)
    {
        // Validate the form data
       

        // Attempt to log the user in
        $user = User::where('email', $request->email)->first();


        // return $user;
        // exit();

            Session::put('user', $user);
            return redirect('home');
        
    
        // If unsuccessful, redirect back with an error
        return "no";
        exit();
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function buy_get()
    {
        $buydata = Equipment::orderBy('id', 'desc')->paginate(50);
        return view('buyer.product', ['buydata' => $buydata]);
    }
}

