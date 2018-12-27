<?php

namespace App\Http\Controllers;

use App\CertificationBody;

use Illuminate\Http\Request;

class CertificationBodyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificationbodys = CertificationBody::latest()->paginate(5);
  
        return view('certificationbody.index',compact('certificationbodys'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificationbody.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'accreditation' => 'required',
            'certification_body_name'  => 'required',
        ]);
  
        CertificationBody::create($request->all());
   
        return redirect()->route('certificationbody.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(certificationbody $certificationbody)
    {
        return view('certificationbody.show',compact('certificationbody'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(certificationbody $certificationbody)
    {
        return view('certificationbody.edit',compact('certificationbody'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, certificationbody $certificationbody)
    {
        $request->validate([
            'accreditation' => 'required',
            'certification_body_name'  => 'required',
        ]);
  
        $certificationbody->update($request->all());
  
        return redirect()->route('certificationbody.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(certificationbody $certificationbody)
    {
        $certificationbody->delete();
  
        return redirect()->route('certificationbody.index')
                        ->with('success','Product deleted successfully');
    }
}
