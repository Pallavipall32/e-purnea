<?php

namespace App\Http\Controllers;
use App\Models\Business;
use Illuminate\Http\Request;
use Auth;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            
            'title' => 'required',
            'primary_contact' => 'required',
            'secondary_contact' => 'required',
            'description' => 'required',
            'email' => 'required',
            'proprietor'=>'required',
            'website' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            // 'status' => 'required',
           'image' => 'required|image',
            'pincode' => 'required',
            'category_id' => 'required',

        ]);
        $filename=$request->image->getClientOriginalName();
        $request->image->move(public_path("asset"),$filename);
        $data['image']=$filename;
        $data['user_id'] = Auth::id();
       Business::create($data);
       return redirect()->route("homepage");
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
