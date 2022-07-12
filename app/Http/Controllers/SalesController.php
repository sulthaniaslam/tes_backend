<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    //
    function getSales(){
        $data = new Sales();
        return response()->json($data, 200);
    }

    function insertSales(Request $request){
        // return response()->json($request->all());
        $data = new Sales();
        $data->code_transaksi = 'T'. rand(1,999);
        $data->tanggal_transaksi = now();
        $data->customer = $request->customer;
        $data->item = $request->itemSelected;
        $data->qty = $request->qty;
        $data->total_diskon = $request->total_diskon;
        $data->total_harga = $request->total_harga;
        $data->total_bayar = $request->total_bayar;
        $data->save();
    }

    function cekStok($id, $qty){
        $data = Item::find($id);
        // return response()->json($data->stok);
        if ($qty > $data->stok) {
            return response()->json([
                'success'   => false,
                'message'   => 'Stok tidak cukup'
            ], 200);
        }else{
            return response()->json([
                'success'   => true,
                'stok'  => $data->stok,
                'data'  => $data
            ], 200);
        }
    }
}
