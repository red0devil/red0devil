<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    private $units;
    private $unit;

    public function index()
    {
        return view('admin.unit.add');
    }
    public function create(Request $request)
    {
        Unit::newUnit($request);
        return redirect()->back()->with('message', 'Unit info create successfully');
    }
    public function manage()
    {
        $this->units = Unit::orderby('id', 'desc')->get();
        return view('admin.unit.manage', ['units' =>$this->units]);
    }
    public function edit($id)
    {
        $brand = Unit::find($id);
        return view('admin.unit.edit', compact('unit'));
    }
    public function update(Request $request, $id)
    {
        Unit::updateUnit($request, $id);
        return redirect('/manage-unit')->with('message', 'Update Unit info Successfully');
    }
    public function delete($id)
    {
        $this->unit = Unit::find($id);
        if (file_exists($this->unit->image))
        {
            unlink($this->unit->image);
        }
        $this->unit->delete();
        return redirect('/manage-unit')->with('message', 'Unit Info Delete Successfully');
    }

}
