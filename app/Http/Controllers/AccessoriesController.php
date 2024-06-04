<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    public function index()
    {
        $accessories = Accessory::all();
        return view('menu.accessories.view', compact('accessories'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Accessory::create($request->all());
        return redirect()->back()->with('success', 'Accessory added successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $accessory = Accessory::find($id);
        $accessory->update($request->all());
        return redirect()->back()->with('success', 'Accessory updated successfully');
    }

    public function destroy($id)
    {
        Accessory::destroy($id);
        return redirect()->back()->with('success', 'Accessory deleted successfully');
    }
}
