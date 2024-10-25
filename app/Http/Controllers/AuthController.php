<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Members;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function dashboard()
    {
        return View('dashboard');
    }

    public function manage()
    {
        return View('manage',['members'=> Members::all()]);
    }

    public function update($id)
    { // Add this line to check if the route is being hit and if the $id is being received
        // Fetch the row from the database
        $row = Members::find($id);

        // Pass the row data to the view
        return view('update', compact('row'));
    }

    public function edit(Request $request, $id)
    {


        $member = Members::find($id);
        $member->january = $request->january;
        $member->february = $request->february;
        $member->march = $request->march;
        $member->april = $request->april;
        $member->may = $request->may;
        $member->june = $request->june;
        $member->july = $request->july;
        $member->august = $request->august;
        $member->september = $request->september;
        $member->october = $request->october;
        $member->november = $request->november;
        $member->december = $request->december;
        $member->save();


        // Set success message in session
        return redirect('manage')->withSuccess('Edit Successful');
    }


    public function showSignupForm()
    {
        return view('auth.signup');
    }

    public function signup(Request $request)
    {

        $user = Members::create([
            'username' => $request->input('username'),
            'cnic_gtba' => $request->input('cnic_gtba'),
            'p_number' => $request->input('p_number'),
            'emailaddress' => $request->input('emailaddress'),
            'password' => bcrypt($request->input('password'))
        ]);

        Auth::login($user);

        return redirect('login')->withSuccess('Registered Successfully , Now Login'); // Redirect to your desired location after signup
    }

    public function showsignForm()
    {
        return view('auth.sign');
    }
    public function sign(Request $request)
    {

        $user = Members::create([
            'username' => $request->input('username'),
            'cnic_gtba' => $request->input('cnic_gtba'),
            'p_number' => $request->input('p_number'),
            'emailaddress' => $request->input('emailaddress'),
            'password' => bcrypt($request->input('password'))
        ]);

        Auth::login($user);

        return redirect('login')->withSuccess('Registered Successfully , Now Login'); // Redirect to your desired location after signup
    }

    public function showpaydetailForm()
    {
        return view('auth.paydetail');
    }

    public function paydetail(Request $request)
    {
        $credentials = $request->only('emailaddress', 'password');

        if ($credentials['emailaddress'] === 'manage@gmail.com' && $credentials['password'] === 'Manage1234!') {
            return redirect('/manage')->with('success', 'Redirected to Manage page');
        }

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $userId = $user->id;
            $username = $user->username;
            return redirect('/dashboard')->with('success', 'See Your Payment Details');
        }

        return redirect()->route('paydetail')->with('error', 'Invalid credentials');
    }


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {


        $credentials = $request->only('emailaddress', 'password');


        if (Auth::attempt($credentials)) {
            $user = Auth::user(); // Get the authenticated user
            $userId = $user->id;  // Get the ID of the authenticated user
            $username = $user->username;  // Get the ID of the authenticated user

            return redirect('/welcome')->withSuccess('Login Successfully !!');
        }

        // if (Auth::attempt($credentials)) {
        //     return redirect('/welcome')->withSuccess('Login Successfully !!'); // Redirect to your desired location after login
        // }

        return redirect()->route('login')->withSuccess('Invalid credentials');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->withSuccess('Logout Successfully !!'); // Redirect to your desired location after logout
    }
}
