<?php

namespace App\Http\Controllers;

use App\References;

use Illuminate\Http\Request;

class ReferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $references = references::all()->toArray();

        return view('references.index', compact('references'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('references.create');
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

            'rname' => 'required',

            'rrole' => 'required',
           
            'rcontent' => 'required',
        ]);

        $references = new References();

        $references->RName = $request->get('rname');

        $references->RRole = $request->get('rrole');

        $references->RContent = $request->get('rcontent');

    
        if ($request->hasFile('rimage')) {
            $image = $request->file('rimage');
            $imageName = $request->file('rimage')->getClientOriginalName();
            $name = $imageName;
            $destinationPath = public_path('/assets');
            $image->move($destinationPath, $name);
            $references->RImage = $name;
            // $this->save();
    
            // return back()->with('success','Image Upload successfully');
        }



        $references->save();
        return redirect('references')->with('success', 'References has been added');
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
        $references = References::find($id);

return view('references.edit',compact('references','id'));
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
        $request->validate([

            'rname' => 'required',

            'rrole' => 'required',
           
            'rcontent' => 'required',
        ]);

        $references = new References();

        $references = References::find($id);

        $references->RName = $request->get('rname');

        $references->RRole = $request->get('rrole');

        $references->RContent = $request->get('rcontent');

    
        if ($request->hasFile('rimage')) {
            $image = $request->file('rimage');
            $imageName = $request->file('rimage')->getClientOriginalName();
            $name = $imageName;
            $destinationPath = public_path('/assets');
            $image->move($destinationPath, $name);
            $references->RImage = $name;
            // $this->save();
    
            // return back()->with('success','Image Upload successfully');
        }

        $references->save();
        return redirect('references');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        References::find($id)->delete();

        return redirect('references')->with('success', 'References has been

deleted');
    }
}
