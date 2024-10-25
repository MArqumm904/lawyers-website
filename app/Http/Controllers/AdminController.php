<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Members;



use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return View('admin',['products'=> Product::get()]);
    }


   

    public function dashboard()
    {
        $user = auth()->user();
        return view('dashboard', ['member' => $user]);

    }
}
