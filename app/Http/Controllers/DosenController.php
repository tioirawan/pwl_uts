<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dsn =dosen::all();

        return view('dosen.index', compact('dsn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create')
            ->with('url_form', url('/dosen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|string|max:10|unique:dosen,nik',
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15',
        ]);

        dosen::create($request->except(['_token']));

        return redirect()->route('dosen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(dosen $dosen)
    {
        // TODO: Implement show() method.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(dosen $dosen)
    {
        $dsn = $dosen;
        return view('dosen.create', compact('dsn'))
            ->with('url_form', url('/dosen/' . $dsn->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dosen $dosen)
    {
        $request->validate([
            'nik' => 'required|unique:dosen,nik,' . $dosen->id,
            'nama' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
        ]);

        $dosen->update($request->except(['_token', '_method']));

        return redirect()->route('dosen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosen.index');
    }
}


