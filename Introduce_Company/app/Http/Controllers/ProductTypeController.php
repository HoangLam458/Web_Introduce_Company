<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductTypeRequest;
use App\Models\Product_Type;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductTypeController extends Controller
{
    public function index()
    {
        $products1 = DB::table("product_types")->where("type",1)->get();
        $products2 = DB::table("product_types")->where("type",2)->get();
        return view('pages.products.product',['pr1'=>$products1,'pr2'=>$products2,]);
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
        return redirect()->route('admin.product')->with('status','Thêm loại bánh thành công');
    }
}
