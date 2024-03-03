<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\RepositoryInterfaces\UsersRepositoryInterface;

class UserController extends Controller
{

    private $userRepository;

    public function __construct(UsersRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function registerClient(Request $request)
    {
        // Validation rules for client registration
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:6',
            // Add more rules as needed
        ];

        // Perform validation
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Validation passed, proceed with registration
        $userData = $request->all();
        $userData['user_type'] = 'client';
        $user = $this->userRepository->createUser($userData);

        // Return a response or redirect
    }

    public function OwnerRegister(Request $request)
    {
       
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'phone' => 'required',
            'address' => 'required',
          
        ];

       
        $validator = Validator::make($request->all(), $rules);

        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $userData = $request->all();
        $userData['role'] = 'owner';
     
        $user = $this->userRepository->createUser($userData);
         dd($user);
        return redirect()->back()->with('success', 'Reservation status updated successfully');
    }


    public function login(Request $request)
    {
       
        $data = $request->validate([
            'logemail' => 'required',
            'logpassword' => 'required'
        ]);
      
      
        if (auth()->attempt(['email' => $data['logemail'], 'password' => $data['logpassword']])) {
      
            $request->session()->regenerate();
    
            $user = auth()->user();
          
        
            if ($user->role === 'admin') {
                return redirect('/admin');
            } elseif ($user->role === 'owner') {
                return redirect('/houses');
            } elseif ($user->role === 'client') {
                return redirect('/anonces');
            }

        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }

}