<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class ProductController extends Controller
{
    public function list($id)
    {
       $product = DB::table("products")->where("product_type_id", $id)->get();
       $type = DB::table("product_types")->where("id", $id)->first("type");
        $type2 = DB::table("product_types")->where("id", $id)->get();
       return view('pages.products.list_product',['pr1'=>$product,'type'=>$type,'type2'=>$type2]);
    }
    public function show($id)
    {
        $product = DB::table('products')->where('id',$id)->get();
        return view('pages.products.show_product',['pr1'=>$product,]);
    }
    public function adminShowList($id)
    {
       $product = DB::table("products")->where("product_type_id", $id)->get();
       $type = DB::table("product_types")->where("id", $id)->first("type");
        $type2 = DB::table("product_types")->where("id", $id)->get();
       return view('pages.admin.products.show',['pr1'=>$product,'type'=>$type,'type2'=>$type2]);
    }
    public function details($id)
    {
        $product = DB::table('products')->where('id',$id)->get();
        return view('pages.admin.products.detail',['pr1'=>$product,]);
    }
    public function update(UpdateProductRequest $request, $id)
    {

        $sanpham = Product::find($id);
        $sanpham->name = $request->get('name');
        $sanpham->description = $request->get('description');
        $sanpham->price = $request->get('price');
        // if ($request->hasFile('image')) {
        //     $destination = 'images/' . $sanpham->hinhanh;
        //     if (file_exists($destination)) {
        //         File::delete($destination);
        //     }
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('images/', $filename);
        //     $sanpham->hinhanh = $filename;
        // }
        // $sanpham->inanh = $request->get('inanh');
        $sanpham->save();
        return redirect()->back()->with('status', 'Cập nhật thành công');


    }

    public function edit($id)
    {

        if ($id) {
            $pr1 = Product::find($id);
            if ($pr1) {
                return view('pages.admin.products.detail', [
                    'pr1' => $pr1
                ]);
            }
            return redirect()->back();
        }
        return redirect()->back();
    }
    public function delete($id)
    {
        {
            $user = Product::find($id);
            $type = ProductType::where('id',$user->product_type_id)->first();
            $user->delete();
            return redirect()->route('admin.product.list',$type->id);
        }
    }
}
