<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_role = ['Pelaksana', 'Kepala Seksi', 'Kepala Bidang'];

        $items = User::all();

        return view('pages.user.index', [
            "list_role" => $list_role,
            "items" => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'nip' => $request['nip'],
            'email' => $request['email'],
            'role' => $request['role'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'address' => $request['address'],
        ]);

        return redirect()->route('user.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
