<?php

namespace App\Http\Controllers;

use App\Models\pricelist;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function ticket(){
        $pricelist = pricelist::all();
        return view('frontend.pricing_plan',['pricelist'=>$pricelist]);
    }

    // public function createticket(){
    //     return view('frontend.createticket');
    // }

        // Buat tiket baru
    // public function postcreateticket(Request $request){
    //     $pricelist = new pricelist();
    //     $pricelist->nama = $request->input('nama');
    //     $pricelist->price = $request->input('keterangan');
    //     $pricelist->date = $request->input('harga');

    //     $pricelist->save();
    //     // Redirect ke halaman sukses atau tampilan lainnya
    //     return redirect()->route('pricing_plan')->with('success', 'Tiket berhasil ditambahkan');
    // }




  
    

    // public function update (Request $request, $id){
    //     $this->validate($request,[
    //         'nama'   => 'required',
    //         'keterangan' => 'required',
    //         'harga' => 'required'
    //     ]);

    //     $pricelist = pricelist::find($id);
    //     $pricelist->update($request->all());
        // $mahasiswa->nama = $request->nama;
        // $mahasiswa->jenkel = $request->jenkel;
        // $mahasiswa->alamat = $request->alamat;
        // $mahasiswa->hp = $request->hp;
        // $mahasiswa->jurusan = $request->jurusan;
        // $mahasiswa->email = $request->email;

        // $mahasiswa->save();

    //     return redirect('/index');
    // }

    public function destroy($id){
        $pricelist = pricelist::find($id);
        $pricelist->delete();

        return redirect('/index');
    }

    // public function search(Request $request){
    //     if($request->has('search')){
    //         $ticket = Ticket::where('nama','LIKE','%'.$request->search.'%')->get();
    //     }
    //     else {
    //         $ticket = Ticket::all();
    //     }

        // return view('admin.mahasiswa.index',['mahasiswa' => $mahasiswa]);
    // }

    // public function dosen(){
    //     $dosen = Dosen::all();
        // return view('admin.mahasiswa.dosen',['dosen' => $dosen]);
    // }

    // public function matkul(){
    //     $mahasiswa = Mahasiswa::get();
        // return view('admin.mahasiswa.matkul',['mahasiswa' => $mahasiswa]);
    // }
   
}

