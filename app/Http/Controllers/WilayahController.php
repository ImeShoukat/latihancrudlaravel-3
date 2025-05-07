<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function index()
    {
        $data = Wilayah::all();
        return view('wilayah.index', compact('data'));
    }

    public function create()
    {
        return view('wilayah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wilayah' => 'required',
            'kode_pos' => 'required',
        ]);

        Wilayah::create($request->all());

        return redirect()->route('wilayah.index')->with('success', 'Wilayah berhasil ditambahkan.');
    }

    public function edit(Wilayah $wilayah)
    {
        return view('wilayah.edit', compact('wilayah'));
    }

    public function update(Request $request, Wilayah $wilayah)
    {
        $request->validate([
            'nama_wilayah' => 'required',
            'kode_pos' => 'required',
        ]);

        $wilayah->update($request->all());

        return redirect()->route('wilayah.index')->with('success', 'Wilayah berhasil diperbarui.');
    }

    public function destroy(Wilayah $wilayah)
    {
        $wilayah->delete();

        return redirect()->route('wilayah.index')->with('success', 'Wilayah berhasil dihapus.');
    }
}
