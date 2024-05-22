<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductTypeRequest;
use App\Models\Product;
use App\Models\ProductType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductTypeController extends Controller
{
    public function index()
    {
        $products1 = DB::table("product_types")->where("type",1)->get();
        $products2 = DB::table("product_types")->where("type",2)->get();
        $dataDropdown1 = DB::table("product_types")->where("type",1)->get();
        $dataDropdown2 = DB::table("product_types")->where("type",2)->get();
        return view('pages.products.product',['pr1'=>$products1,'pr2'=>$products2,'data1'=> $dataDropdown1,
        'data2'=> $dataDropdown2]);
    }
    public function adminShow()
    {
        $products1 = DB::table("product_types")->where("type",1)->get();
        $products2 = DB::table("product_types")->where("type",2)->get();
        return view("pages.admin.products.products",['pr1'=>$products1,'pr2'=>$products2,]);
    }
    public function store(StoreProductTypeRequest $request)
    {

        DB::table('product_types')->insert([
            'name' => $request['name'],
            'description'=> $request['description'],
            'type' => $request['type'],
            'status' => 1
        ]);
        return redirect()->route('admin.product')->with('status','Thêm loại sản phẩm '. $request->name.' thành công!');
    }
    public function delete($id)
    {
        {
            $user = ProductType::find($id);
            $pro = Product::where('product_type_id', $id)->get();
            if ($pro->count() < 1)
            {
                $user->delete();
                return redirect()->route('admin.product')->with('status','Xóa loại sản phẩm '. $user->name.' thành công!');
            }
            return redirect()->route('admin');
        }
    }
}
