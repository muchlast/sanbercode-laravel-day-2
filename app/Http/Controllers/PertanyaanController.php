<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pertanyaa;

class PertanyaanController extends Controller
{

    public function create(){
    return view('pertanyaan.create');
    }

    public function store(Request $request) {
        // dd($request->all());
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

    public function index(){
        // $pertanyaan = DB::table('pertanyaan')->get(); --> sama seperti SELECT * from PERTANYAAN
        $pertanyaan = Pertanyaa::all();
        //jika dibuka DD-nya, ternyata method model memberikan beberapa value yang belum diketik yang mana bisa berguna nantinya
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    //perbedaan jika belakangnya ->first(); dan ->get();
    //first() sifatnya menjadi objeck satu jadi tidak bisa di-looping
    //sedangkan get() sifatnya jamak jadi bisa di-looping

    public function show($id) {
        // $pertanyaa = DB::table('pertanyaan')->where('id', $id)->first();
        // dd($pertanyaa);
        $pertanyaa = Pertanyaa::find($id);

        return view('pertanyaan.show', compact('pertanyaa'));
    }

    public function edit($id) {
        // $pertanyaa = DB::table('pertanyaan')->where('id', $id)->first();
        $pertanyaa = Pertanyaa::find($id);

        return view('pertanyaan.edit', compact('pertanyaa'));
    }

    public function update($id, Request $request) {

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

    public function destroy($id) {
        // $query = DB::table('pertanyaan')->where('id', $id)->delete();

        Pertanyaa::destroy($id);

        return redirect ('/pertanyaan')->with('success', 'Pertanyaan Berhasil Dihapus!');
    }
};