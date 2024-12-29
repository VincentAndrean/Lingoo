<?php

namespace App\Http\Controllers;

use App\Models\usermurid;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function create(){
        return view('createuser');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'Nama' => 'required|string|max:255',
            'Umur' => 'required|integer|min:0',
            'Alamat' => 'required|string|max:255',
            'Telepon' => 'required|string|max:15',
            'Foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        //Nama dari model => nama dari form
        if ($request->hasFile('Foto')) {
            $fotoPath = $request->file('Foto')->store('foto', 'public');
            $validatedData['Foto'] = $fotoPath;
        }

        usermurid::create($validatedData);

        return redirect('/kelasAft')->with('success', 'Data berhasil disimpan!');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Nama' => 'required|string|max:255',
            'Umur' => 'required|integer|min:0',
            'Alamat' => 'required|string|max:255',
            'Telepon' => 'required|string|max:15',
            'Foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = usermurid::findOrFail($id);

        if ($request->hasFile('Foto')) {
            // Hapus foto lama jika ada
            if ($user->Foto && \Storage::exists('public/' . $user->Foto)) {
                \Storage::delete('public/' . $user->Foto);
            }
            // Simpan foto baru
            $fotoPath = $request->file('Foto')->store('foto', 'public');
            $validatedData['Foto'] = $fotoPath;
        }
        

        $user->update($validatedData);

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }


    public function index(){
        $users = usermurid::all(); // Mengambil semua data user
        return view("beranda", compact('users'));
    }

    public function showProfile()
    {
        $users = usermurid::all(); // Ambil semua data pengguna
        return view('ubahProfile', compact('users')); // Kirim variabel $users ke view
    }

    public function edit($id)
    {
        $user = usermurid::findOrFail($id); // Ambil data user berdasarkan ID
        return view('ubahProfile', compact('users')); // Kirim data user ke view
    }


}