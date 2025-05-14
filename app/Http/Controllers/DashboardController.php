<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $meetings = Product::latest()->take(5)->get(); // ambil 5 meeting terakhir
        return view('dashboard', compact('meetings'));
    }
}
