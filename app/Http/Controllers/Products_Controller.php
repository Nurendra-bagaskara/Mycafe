<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class Products_Controller extends Controller
{
    // read
    public function show()
    {
        $data_products= Products::all();
        // return Products::all();
        // Menambahkan URL gambar ke setiap item
        foreach ($data_products as &$items) {
            $items['image'] = asset('images/' . $items['image']);
        }
        return view('home', ['data_products' => $data_products]);
    }

    // read detail 
    public function detail($id){
        if(Products::where('id', $id)->exists()){
            $data_products = Products::where('products.id', $id)->get();
            return Response()->json(['status' => 1, $data_products, 'message' => 'id found']);
        }else
        {
            return Response()->json(['status' => 0,'Message' => 'Not Found']);
        }
    }

    // store
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),
        [
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]
        );
        
        if($validator->fails()) {
            return Response()->json($validator->errors());
        }

        $store = Products::create([
            
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,

        ]);
        if($store)
        {
            return Response()->json(['status' => 1, 'message' => 'add successful']);
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
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            
        ]);
 
            if($validator->fails()) 
            {
                return Response()->json($validator->errors());
            }
            
            $update = Products::where('id', $id)->update
            ([
                'nama_produk' => $request->nama_produk,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                
    
            ]);
            if($update) 
            {
                return Response()->json(['status' => 1, 'message' => 'update successful !']);
            }
            else 
            {
                return Response()->json(['status' => 0, 'message' => 'update failed !']);
            }
    }

    // delete
    public function destroy($id) {

        $delete = Products::where('id', $id)->delete();
        
        if($delete) 
        {
            return Response()->json(['status' => 1, 'message' => 'delete successful !']);
        }
        else 
        {
            return Response()->json(['status' => 0, 'message' => 'delete failed !']);
        }
    }

    // image
    public function upload_image($id, Request $req){
        $validator=Validator::make($req->all(),
        [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5120'
        ]);

        if($validator->fails()){
            return Response() -> json($validator->errors());
        }

        $imageName = time().".".$req->image->extension();
        $req->image->move(public_path('images'), $imageName);

        $update=DB::table('products')->where('id', $id)->update(['image' => $imageName]);

        $data = DB::table('products')->where('id', $id)->get();
        
        if($update){
            return Response()->json([
                'status' => 1,
                'message' => 'Success upload Photo Products!',
                'data' => $data
            ]);
        }else{
            return Response()->json([
                'status' => 0,
                'message' => 'Failed upload Photo Products',
            ]);
        }
    }
}
