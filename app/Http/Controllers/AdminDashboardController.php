<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $buyers = Buyer::orderBy('created_at', 'desc')->get();

        return view('admin.dashboard', compact('buyers'));
    }
}
