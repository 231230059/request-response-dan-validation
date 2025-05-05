<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.admin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'no'   => 'required|digits_between:10,15',
            'alamat' => 'required|string|max:500',
        ]);

        // Proses bisa disimpan ke database atau dikirim via email, tapi ini hanya redirect
        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
