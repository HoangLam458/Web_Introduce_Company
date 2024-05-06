<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Support\Facades\File;
class ProjectController extends Controller
{
    public function index()
    {
        $products1 = DB::table("projects")->get();
        return view('pages.projects.projects',['pr1'=>$products1]);
    }
    public function show($id)
    {
        $products1 = DB::table("projects")->where("id","=",$id)->get();
        return view('pages.projects.projects_show',['pr1'=>$products1]);
    }
    public function adminindex()
    {
        $products1 = DB::table("projects")->get();
        return view('pages.admin.projects.projects',['pr1'=>$products1]);
    }
    public function adminshow($id)
    {
        $products1 = DB::table("projects")->where("id","=",$id)->get();
        return view('pages.admin.projects.projects_show',['pr1'=>$products1]);
    }
    public function create(StoreProjectRequest $request)
    {

        DB::table('projects')->insert([
            'name' => $request['name'],
            'description'=> $request['description'],
            'status' => 1
        ]);
        return redirect()->route('admin.proj')->with('status','Thêm loại dự án '. $request->name.' thành công!');
    }
    public function delete($id)
    {
        {
            $user = Project::find($id);
                $user->delete();
                return redirect()->route('admin.proj')->with('status','Xóa dự án '. $user->name.' thành công!');
        }
    }
    public function update(UpdateProjectRequest $request, $id)
    {

        $project = Project::find($id);
        $project->name = $request->get('name');
        $project->description = $request->get('description');
        if ($request->hasFile('img')) {
            $destination = 'images/' . $project->img;
            if (file_exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $project->img = $filename;
        }
        $project->save();
        return redirect()->back()->with('status', 'Cập nhật dự án '. $project->name.' thành công!');


    }
}
