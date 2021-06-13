<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smartphone;

class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smartphone = SMARTPHONE::all()->toArray();
        return view('smartphone.index', compact('smartphone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('smartphone.create');
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
            'smartphone_name' => 'required',
            'smartphone_brand' => 'required',
            'smartphone_inv_level' => 'required',
            'smartphone_remarks' => 'required',
            'smartphone_price' => 'required',
            'staff_id' => 'required'
        ]);

        $smartphone = new Smartphone([
            'smartphone_name' => $request->get('smartphone_name'),
            'smartphone_brand' => $request->get('smartphone_brand'),
            'smartphone_inv_level' => $request->get('smartphone_inv_level'),
            'smartphone_remarks' => $request->get('smartphone_remarks'),
            'smartphone_price' => $request->get('smartphone_price'),
            'staff_id' => $request->get('staff_id')
        ]);

        $smartphone->save();

        return redirect()->route('smartphone.index')->with('success', 'Data Added');
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
        $smartphone = Smartphone::find($id);
        return view('smartphone.edit', compact('smartphone', 'id'));
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
            'smartphone_name' => 'required',
            'smartphone_brand' => 'required',
            'smartphone_inv_level' => 'required',
            'smartphone_remarks' => 'required',
            'smartphone_price' => 'required',
            'staff_id' => 'required'
        ]);

        $smartphone = Smartphone::find($id);
        $smartphone->smartphone_name = $request->get('smartphone_name');
        $smartphone->smartphone_brand = $request->get('smartphone_brand');
        $smartphone->smartphone_inv_level = $request->get('smartphone_inv_level');
        $smartphone->smartphone_remarks = $request->get('smartphone_remarks');
        $smartphone->smartphone_price = $request->get('smartphone_price');
        $smartphone->staff_id = $request->get('staff_id');
        $smartphone->save();
        return redirect()->route('smartphone.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $smartphone = Smartphone::find($id);
        $smartphone->delete();
        return redirect()->route('smartphone.index')->with('success', 'Data Deleted');
    }
}
