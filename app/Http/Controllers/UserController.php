<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Mail\UserRegistered;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller


{

    



    public function dashbord()
    {
        
        return view('login.dashbord'); // This will render resources/views/login/dashboard.blade.php

    }



    public function ViewRegister()
    {
        return view('front.auth.Register');
    }

    public function ViewLogin()
    {

            // return redirect()->route('');
            

        return view('front.auth.Login');
    }

    public function Viewdata()
    {  
        // if (!auth::guard('web')->check()) {
        //     return redirect()->route('UserViewLogin'); // Redirect to login if not authenticated
        // }
        $users = User::all();
        return view('front.auth.data', compact('users'));
    }
    

    // Create user
    public function CreateRegister(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|max:20',
                'email' => 'required|string|email|unique:users,email',
                'password' => 'required|string|confirmed',
            ]);
    
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);
            Mail::send(
                'emails.admin.created', // Email template
                [
                    'data'     => $data,   // Data array jo template mein use hoga
                    'password' => $user->password, // Password jo email mein send karna hai
                ],
                function ($message) use ($data) {
                    $email = $data['email']; // Recipient ka email
            
                    // Message configuration
                    $message->to($email, $email);
                    $message->replyTo(config('mail.from.address'), config('mail.from.name'));
                    $subject = "Account created."; // Email ka subject
                    $message->subject($subject); // Setting the subject
                }
            );
            

    
            return redirect()->route('UserViewLogin')->with('success', 'Registration successful!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            \Log::error('Registration error: ', ['message' => $e->getMessage()]); // Log the error message
            return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()])->withInput();
        }
    }
    
    
    

    public function LoginMatch(Request $request)
    {
        try {
            $logindata = $request->validate([
                'email' => 'required|string|email|max:255',
                'password' => 'required|string',
            ]);
    
            if (Auth::guard('web')->attempt($logindata)) {
                return redirect()->route('index')->with('success', 'Login successful!');
            } else {
                \Log::info('Login failed for email: ' . $logindata['email']);
                return redirect()->route('UserViewRegister')->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ]);
            }
    
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            \Log::error('Unexpected error: ', ['message' => $e->getMessage()]);
            return redirect()->back()->withErrors(['error' => 'An unexpected error occurred: ' . $e->getMessage()])->withInput();
        }
    }
    
    

    public function logout()
    {
        

        auth()->guard('web')->logout();
        return redirect()->route('UserViewLogin');
    }

}






  

