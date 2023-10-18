<?php

namespace App\Http\Controllers;

use App\Models\Objects;
use Illuminate\Http\Request;
class ObjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $object=Objects::latest('id_object')->get();
        return view('admin.object.index')->with(compact('object'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.object.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $object=$request->all();
        Objects::create($object);
        toastr()->success('Thêm môn học thành công');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $object=Objects::find($id);
        return view('admin.object.edit')->with(compact('object'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $object=Objects::find($id);
        $object->update($request->all());
        return redirect('admin/object');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $object=Objects::find($id);
        $object->delete();
        toastr()->success('Xóa môn học thành công');
        return back();
    }
}
