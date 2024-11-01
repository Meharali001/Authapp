<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function dashboard()
    {

        return view('login.dashboard'); // Correct view name for dashboard
    }

    public function viewRegister()
    {   
    //          if (auth::guard('admin')->check()) {
    //     return redirect()->route('AdminViewData'); 
    // }

        return view('Admin.Register');
    }

    public function viewLogin()
    {

        return view('Admin.Login');
    }

    public function viewData()
    {

            $admins = Admin::all();
            return view('Admin.data', compact('admins'));

    }

    public function createRegister(Request $request)
    {

        try {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:admins,email', // Correct table name
                'password' => 'required|string|confirmed',
            ]);

            $data['password'] = Hash::make($data['password']); // Use Hash::make

            $admin = Admin::create($data);

            if ($admin) {

                return redirect()->route('AdminViewLogin'); // Redirect to login page after registration
            }
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Log the exception if needed
            \Log::error('Registration error: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred.'])->withInput();
        }
    }

    public function loginMatch(Request $request)
    {
        $logindata = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt($logindata)) {
            return redirect()->route('AdminViewData');
        }

        return redirect()->route('AdminViewRegister')->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        // if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        // }
        return redirect()->route('AdminViewLogin');
    }
    
}
