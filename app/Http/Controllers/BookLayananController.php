<?php

namespace App\Http\Controllers;

use App\Models\BookLayanan; // Pastikan model sudah dibuat
use Illuminate\Http\Request;

class BookLayananController extends Controller
{
    public function index(){  
        return response()->json(BookLayanan::all(), 200);  
      }  
      //function utk menyimpan data produk baru    
      public function store(Request $request){  
        $validasiData = $request->validate([  
          'nama'             => 'required|max:255',  
          'noTelp'           => 'required',  
          'Alamat'           => 'required|numeric',
          'AlamatTujuan'     => 'required|max:255',
          'Jarak'            => 'required|numeric',
          'DaftarBarang'     => 'required|string',
          'BeratBarang'      => 'required|numeric',
          'Tanggal'          => 'required|date',
          'JenisLayanan'     => 'required|enum',
          'KisaranHarga'     => 'required|numeric',
        ]);  
        $hsl = BookLayanan::create($validasiData);  
        return response()->json($hsl, 201);  
      }  
      //function utk menampilkan data produk sesuai id    
      public function show(string $id){  
        $booklayanan = BookLayanan::find($id);  
        if($booklayanan) {  
          return response()->json($booklayanan, 200);  
        }else{  
          return response()->json(['pesan' => 'Data tidak ditemukan'], 404);  
        }  
      }  
      //function utk menyimpan data hasil edit    
        public function update(Request $request, string $id){  
            $validasiData = $request->validate([  
            'nama'             => 'required|max:255',  
            'noTelp'           => 'required',  
            'Alamat'           => 'required|numeric',
            'AlamatTujuan'     => 'max:255',
            'Jarak'            => 'numeric',
            'DaftarBarang'     => 'string',
            'BeratBarang'      => 'numeric',  
            ]);  
            $booklayanan = BookLayanan::find($id);  
            $booklayanan->update($validasiData);  
            if($booklayanan) {  
            return response()->json($booklayanan, 200);  
            }else{  
            return response()->json(['pesan' => 'Data tidak ditemukan'], 404);  
            }  
        }  
        //function utk menghapus data produk sesuai id    
        public function destroy(string $id){  
            $booklayanan = BookLayanan::find($id);  
            $booklayanan->delete();  
            if($booklayanan) {  
            return response()->json(null, 204);  
            }else{  
            return response()->json(['pesan' => 'Data tidak ditemukan'], 404);  
            }  
    }  
    
}
