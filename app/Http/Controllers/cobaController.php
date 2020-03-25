<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class cobaController extends Controller
{
    public function index(){
		return view('index');
    }

    //menampilkan data tamu
    public function view(){
    	$query = Tamu::all();

    	return view('tamu/view', compact('query'));
    }

    //tampilan form tambah data
    public function show(){ 

    	return view('tamu/create');
    }

    //tombol insert data
    public function create(Request $request){
    	Tamu::create([
    		'nama' 		=> $request->nama,
    		'keperluan' => $request->keperluan
    	]);

    	return redirect('tamu/view');
    }

    //tampilan form update data
    public function edit($id){
    	$query = Tamu::find($id);

    	return view('tamu/update', compact('query'));
    }

    //tombol update data
    public function update(Request $request,$id){
    	Tamu::find($id)->update([
    		'nama' 		=> $request->nama,
    		'keperluan' => $request->keperluan
    	]);

    	return redirect('tamu/view');
    }

    //hapus data
      public function delete($id){
		tamu::find($id)->delete();

		return redirect('tamu/view');
	}
}