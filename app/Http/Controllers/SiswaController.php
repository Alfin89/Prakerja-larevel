<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::all();

        return view('backend.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama'  => 'required|string|max:40',
            'nis'   =>  'required|integer',
            'tetala'  => 'required|string|max:40',
            'kelas'  => 'required|string|max:20',
            'alamat'  => 'required|string|max:40',
            'umur'   =>  'required|integer',
        ]);
        $data = new Siswa($request->only(['nama', 'nis', 'tetala', 'kelas', 'alamat', 'umur']));
        $data->save();

        return redirect()->route('siswa.index')->with('success', 'Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Siswa::find($id);

        return view('backend.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Siswa::find($id);

        return view('backend.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'nama'  => 'required|string|max:40',
            'nis'   =>  'required|integer',
            'tetala'  => 'required|string|max:40',
            'kelas'  => 'required|string|max:20',
            'alamat'  => 'required|string|max:40',
            'umur'   =>  'required|integer',
        ]);

        $siswa = Siswa::find($id);
        if (!$siswa) {
            return redirect()->route('siswa.index')->with('error', 'Data tidak ditemukan');
        }

        $siswa->update($validator);

        return redirect()->route('siswa.index')->with('success', 'Data berhasil diupdate');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);

        if ($siswa) {
            $siswa->delete();
            return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('siswa.index')->with('error', 'Data tidak ditemukan');
        }
    }
}
