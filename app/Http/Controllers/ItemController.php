<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    function getItem(){
        $data = Item::all();
        return response()->json($data, 200);
    }

    function insertItem(Request $request){
        $data =  new Item();
        $data->nama_item = $request->nama_item;
        $data->unit = $request->unit;
        $data->stok = $request->stok;
        $data->harga_satuan = $request->harga_satuan;
        $data->barang = $request->barang;
        $data->save();

        return response()->json([
            'message'   => 'Berhasil insert Item'
        ], 201);
    }
}
