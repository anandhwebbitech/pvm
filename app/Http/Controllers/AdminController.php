<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function Login(){
        return view('admin.layouts.login');
    }
    public function loginCheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->remember)) {

            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }
    public function Dashboard()
    {
        $product_count = Product::count();
        $category_count = Category::where('status',1)->get();
        return view('admin.pages.dashboard',compact('product_count','category_count'));
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
