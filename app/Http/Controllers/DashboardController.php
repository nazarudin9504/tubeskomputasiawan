<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan Model User Anda berada di namespace ini

class DashboardController extends Controller
{
    /**
     * Tampilkan Dashboard dengan beberapa statistik dasar.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mendapatkan total pengguna dari database
        $totalUsers = User::count();

        // Anda bisa menambahkan statistik lain di sini, misalnya:
        // $recentOrders = Order::orderBy('created_at', 'desc')->take(5)->get();
        // $totalRevenue = Order::sum('amount');

        // Mengirim data ke view
        return view('dashboard.index', [
            'totalUsers' => $totalUsers,
            // 'recentOrders' => $recentOrders,
        ]);
    }
}