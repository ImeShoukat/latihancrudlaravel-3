<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function index()
    {
        $wilayah = Wilayah::all();
        return view('index', compact ('wilayah'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wilayah' => 'required',
            'kode_pos' => 'required',
            'keterangan' => 'nullable|string',
        ]);

        Wilayah::create($request->all());

        return redirect()->route('index')->with('success', 'Wilayah berhasil ditambahkan.');
    }

    public function edit(Wilayah $wilayah)
    {
        return view('edit', compact('wilayah'));
    }

    public function update(Request $request, Wilayah $wilayah)
    {
        $request->validate([
            'nama_wilayah' => 'required',
            'kode_pos' => 'required',
            'keterangan' => 'nullable|string',
        ]);

        $wilayah->update($request->all());

        return redirect()->route('index')->with('success', 'Wilayah berhasil diperbarui.');
    }

    public function destroy(Wilayah $wilayah)
    {
        $wilayah->delete();

        return redirect()->route('index')->with('success', 'Wilayah berhasil dihapus.');
    }
}
