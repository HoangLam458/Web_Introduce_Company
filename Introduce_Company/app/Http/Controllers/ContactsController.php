<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Http\Requests\StoreContactsRequest;
use App\Http\Requests\UpdateContactsRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin_index()
    {
        $products1 = DB::table("contacts")->get();
        return view('pages.admin.contacts.contact', ['pr1' => $products1]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactsRequest $request)
    {
        Contacts::create([
            'name' => $request['ht'],
            'title' => $request['td'],
            'description' => $request['nd'],
            'email' => $request['em'],
            'status' => 0
        ]);
        Session::put('contact', $request->all());
        return redirect()->route('sendcontact');
    }

    /**
     * Display the specified resource.
     */
    public function admin_show($id)
    {
        $products1 = DB::table("contacts")->where("id", "=", $id)->get();
        return view('pages.admin.contacts.show', ['pr1' => $products1]);
    }
    public function delete($id)
    {
        $user = Contacts::find($id);
        $user->delete();
        return redirect()->route('admin.contact')->with('status', 'Xóa thư liên hệ thành công!');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacts $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactsRequest $request, Contacts $contacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacts $contacts)
    {
        //
    }
}
