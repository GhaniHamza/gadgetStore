<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accessories;

class AccessoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessories = Accessories::all()->toArray();
        return view('accessories.index', compact('accessories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accessories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'accessories_name' => 'required',
            'accessories_type' => 'required',
            'accessories_brand' => 'required',
            'accessories_remarks' => 'required',
            'accessories_price' => 'required',
            'staff_id' => 'required'
        ]);

        $accessories = new Accessories([
            'accessories_name' => $request->get('accessories_name'),
            'accessories_type' => $request->get('accessories_type'),
            'accessories_brand' => $request->get('accessories_brand'),
            'accessories_remarks' => $request->get('accessories_remarks'),
            'accessories_price' => $request->get('accessories_price'),
            'staff_id' => $request->get('staff_id')
        ]);

        $accessories->save();

        return redirect()->route('accessories.index')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accessories = Accessories::find($id);
        return view('accessories.edit', compact('accessories', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'accessories_name' => 'required',
            'accessories_type' => 'required',
            'accessories_brand' => 'required',
            'accessories_remarks' => 'required',
            'accessories_price' => 'required',
            'staff_id' => 'required'
        ]);

        $accessories = Accessories::find($id);
        $accessories->accessories_name = $request->get('accessories_name');
        $accessories->accessories_type = $request->get('accessories_type');
        $accessories->accessories_brand = $request->get('accessories_brand');
        $accessories->accessories_remarks = $request->get('accessories_remarks');
        $accessories->accessories_price = $request->get('accessories_price');
        $accessories->staff_id = $request->get('staff_id');
        $accessories->save();
        return redirect()->route('accessories.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accessories = Accessories::find($id);
        $accessories->delete();
        return redirect()->route('accessories.index')->with('success', 'Data Deleted');
    }
}
