<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;

class OrdersController extends Controller
{
    //show
    public function show(){
        return Orders::all();
    }

    // detail
    public function detail($id){
        if(Orders::where('id', $id)->exists()){
            $data_orders=Orders::where('Orders.id', $id)->get();
            return Response()->json(['status' => 1, $data_orders, 'message' => 'id found']);
        }
        else {
            return Response()->json(['status' => 0, 'message' => 'Not found']);
        }
    }

    // store
    public function store(Request $request){
        $validator=validator::make($request->all(),
        [
            'nama_pelanggan' => 'required',
            'nomor_meja' => 'required',
            'total' => 'required',
        ]);

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $store = Orders::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'nomor_meja' => $request->nomor_meja,
            'total' => $request->total,
        ]);
        
        if ($store)
        {
            return Response()->json(['status' => 1, 'message' => 'add successfull']);
        }
        else
        {
            return Response()->json(['status' => 0, 'message' => 'add failed']);
        }
    }

     // update
    public function update($id, Request $request){
        $validator=Validator::make($request->all(),
        [
            'nama_pelanggan' => 'required',
            'nomor_meja' => 'required',
            'total' => 'required',
            
        ]);
 
        if($validator->fails()) 
        {
            return Response()->json($validator->errors());
        }
        
        $update = Orders::where('id', $id)->update
        ([
            'nama_pelanggan' => $request->nama_pelanggan,
            'nomor_meja' => $request->nomor_meja,
            'total' => $request->total,
            

        ]);
        if($update) 
        {
            return Response()->json(['status' => 1, 'message' => 'update successful !']);
        }else {
            return Response()->json(['status' => 0, 'message' => 'update failed !']);
        }
    }

    // delete
    public function destroy($id) {

        $delete = Orders::where('id', $id)->delete();
        
        if($delete) 
        {
            return Response()->json(['status' => 1, 'message' => 'delete successful !']);
        }
        else 
        {
            return Response()->json(['status' => 0, 'message' => 'delete failed !']);
        }
    }
}
