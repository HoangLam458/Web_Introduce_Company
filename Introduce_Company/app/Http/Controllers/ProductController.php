<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {

        $product = DB::table("products")->get()->random(18);
        $product2 = DB::table("products")->get()->random(3);
        $type = DB::table("product_types")->where('type',1)->get();
        $type2 = DB::table("product_types")->where('type',2)->get();
        return view(
            'pages.products.product',
            [
                'pr1' => $product,
                'pr2' => $product2,
                'type1'=>$type,
                'type2'=>$type2,

            ]
        );
    }
    public function list($id)
    {
        $product = DB::table("products")->where("product_type_id", $id)->get();
        $product2 = DB::table("products")->get()->random(3);
        $type = DB::table("product_types")->where('type',1)->get();
        $type2 = DB::table("product_types")->where('type',2)->get();

        return view(
            'pages.products.product',
            [
                'pr1' => $product,
                'pr2' => $product2,
                'type1'=>$type,
                'type2'=>$type2,

            ]
        );
    }
    public function show($id)
    {
        $product = DB::table('products')->where('id', $id)->get();
        $product2 = DB::table('products')->where('id', $id)->first('product_type_id');
        $type = $product2->product_type_id;
        $similar = DB::table('products')->where('product_type_id', $type)->where('id','<>',$id)->get();
        $type = DB::table('product_types')->where('id', $type)->first('name');
        $dataDropdown1 = DB::table("product_types")->where("type", 1)->get();
        $dataDropdown2 = DB::table("product_types")->where("type", 2)->get();
        return view('pages.products.show_product', [
            'pr1' => $product,
            'data1' => $dataDropdown1,
            'data2' => $dataDropdown2,
            'type'=>$type,
            'simi'=>$similar
        ]);
    }
    public function adminShowList($id)
    {
        $product = DB::table("products")->where("product_type_id", $id)->get();
        $type = DB::table("product_types")->where("id", $id)->first("type");
        $type2 = DB::table("product_types")->where("id", $id)->get();
        return view('pages.admin.products.show', ['pr1' => $product, 'type' => $type, 'type2' => $type2, 'pTid' => $id]);
    }
    public function details($id)
    {
        $product = DB::table('products')->where('id', $id)->get();
        return view('pages.admin.products.detail', ['pr1' => $product,]);
    }
    public function update(UpdateProductRequest $request, $id)
    {

        $sanpham = Product::find($id);
        $sanpham->name = $request->get('name');
        $sanpham->description = $request->get('description');
        $sanpham->price = $request->get('price');
        if ($request->hasFile('image')) {
            $destination = 'images/products/' . $sanpham->img;
            if (file_exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/products/', $filename);
            $sanpham->img = $filename;
        }
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
        $user = Product::find($id);
        $type = ProductType::where('id', $user->product_type_id)->first();
        $user->delete();
        return redirect()->route('admin.product.list', $type->id)->with('status', 'Xóa thành công!');

    }
    public function create(StoreProductRequest $request, $id)
    {
        $sanphams = new Product;
        $sanphams->name = $request->input('name');
        $sanphams->description = $request->input('description');
        $sanphams->price = $request->input('price');
        $sanphams->product_type_id = $id;
        $sanphams->status = 1;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/products/', $filename);
            $sanphams->img = $filename;
        }
        if ($request->hasFile('image') == null) {
            $sanphams->img = 'Default.jpg';
        }
        $sanphams->save();
        return redirect()->back()->with('status', 'Thêm sản phẩm thành công');
    }
}
