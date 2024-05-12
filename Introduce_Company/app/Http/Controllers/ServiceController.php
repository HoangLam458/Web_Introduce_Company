<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
class ServiceController extends Controller
{
    public function index()
    {
        $products1 = DB::table("services")->get();
        return view('pages.services.services',['pr1'=>$products1]);
    }
    public function show($id)
    {
        $products1 = DB::table("services")->where("id","=",$id)->get();
        return view('pages.services.services_show',['pr1'=>$products1]);
    }
    public function adminindex()
    {
        $products1 = DB::table("services")->get();
        return view('pages.admin.services.services',['pr1'=>$products1]);
    }
    public function adminshow($id)
    {
        $products1 = DB::table("services")->where("id","=",$id)->get();
        return view('pages.admin.services.services_show',['pr1'=>$products1]);
    }
    public function create(StoreServiceRequest $request)
    {

        DB::table('services')->insert([
            'name' => $request['name'],
            'description'=> $request['description'],
            'status' => 1
        ]);
        return redirect()->route('admin.serv')->with('status','Thêm loại dịch vụ '. $request->name.' thành công!');
    }
    public function delete($id)
    {
        {
            $user = Service::find($id);
                $user->delete();
                return redirect()->route('admin.serv')->with('status','Xóa dịch vụ '. $user->name.' thành công!');
        }
    }
    public function update(UpdateServiceRequest $request, $id)
    {

        $service = Service::find($id);
        $service->name = $request->get('name');
        $service->description = $request->get('description');
        // if ($request->hasFile('image')) {
        //     $destination = 'images/' . $service->hinhanh;
        //     if (file_exists($destination)) {
        //         File::delete($destination);
        //     }
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('images/', $filename);
        //     $service->hinhanh = $filename;
        // }
        // $service->inanh = $request->get('inanh');
        $service->save();
        return redirect()->back()->with('status', 'Cập nhật dịch vụ '. $service->name.' thành công!');


    }
}
