<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaa;
use DB;
use Auth;

class PertanyaaController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index']);
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pertanyaan = DB::table('pertanyaan')->get(); --> sama seperti SELECT * from PERTANYAAN
        $pertanyaan = Pertanyaa::all();
        //jika dibuka DD-nya, ternyata method model memberikan beberapa value yang belum diketik yang mana bisa berguna nantinya
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan.create');
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
            "judul" => "required|unique:pertanyaan",
            "isi" => "required"
        ]);

        // $query = DB::table('pertanyaan')->insert(
        //     [ "judul" => $request["judul"],
        //      "isi" => $request["isi"] ]
        // ); 

        // $pertanyaa = new Pertanyaa;
        // $pertanyaa -> judul = $request ["judul"];
        // $pertanyaa -> isi = $request ["isi"];
        // $pertanyaa -> save(); //sama dengan INSERT INTO PERTANYAAN (judul, isi) dalam query

        $pertanyaa = Pertanyaa::create ([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil Dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // $pertanyaa = DB::table('pertanyaan')->where('id', $id)->first();
        // dd($pertanyaa);
        $pertanyaa = Pertanyaa::find($id);

        return view('pertanyaan.show', compact('pertanyaa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $pertanyaa = DB::table('pertanyaan')->where('id', $id)->first();
        $pertanyaan = Pertanyaa::find($id);

        return view('pertanyaan.edit', compact('pertanyaa'));
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
        // $request->validate([
        //     "judul" => "required|unique:pertanyaan",
        //     "isi" => "required"
        // ]);

        // $query = DB::table('pertanyaan')
        //             -> where('id', $id)
        //             -> update ([
        //                 'judul' => $request['judul'],
        //                 'isi' => $request['isi']
        //             ]);

        $update = Pertanyaa::where('id', $id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi']
        ]);


        return redirect('/pertanyaan')->with('success', 'Berhasil Update Post!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
