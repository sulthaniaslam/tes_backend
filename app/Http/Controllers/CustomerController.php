<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    function getCustomer(){
        $data = Customer::all();
        return response()->json($data, 200);
    }

    function insertCustomer(Request $request){
        // return response()->json($request->all(), 201);
        $data = new Customer();
        $data->nama = $request->nama;
        $data->contact = $request->contact;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->diskon = $request->diskon;
        $data->tipe_diskon = $request->tipe_diskon;
        $data->ktp = $request->ktp;
        $data->save();

        return response()->json([
            'message' => 'Berhasil tambah customer'
        ], 201);
    }
}
