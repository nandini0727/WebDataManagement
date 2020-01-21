<?php

namespace App\Http\Controllers;

use App\Portfolio;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all()->toArray();

        return view('portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $portfolios = new Portfolio();

        $portfolios->PType = $request->get('ptype');

       

    
        if ($request->hasFile('pimage')) {
            $image = $request->file('pimage');
            $imageName = $request->file('pimage')->getClientOriginalName();
            $name = $imageName;
            $destinationPath = public_path('/assets');
            $image->move($destinationPath, $name);
            $portfolios->PImage = $name;
            
        }



       

        

        $portfolios->save();
        return redirect('portfolios')->with('success', 'Portfolio has been added');

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
        $portfolios = Portfolio::find($id);

        return view('portfolios.edit',compact('portfolios','id'));
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
        $portfolios = new Portfolio();

       

        $portfolios = Portfolio::find($id);
        $portfolios->PType = $request->get('ptype');

    
    
        if ($request->hasFile('pimage')) {
            $image = $request->file('pimage');
            $imageName = $request->file('pimage')->getClientOriginalName();
            $name = $imageName;
            $destinationPath = public_path('/assets');
            $image->move($destinationPath, $name);
            $portfolios->PImage = $name;
        }
        


        $portfolios->save();

        return redirect('portfolios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Portfolio::find($id)->delete();

        return redirect('portfolios')->with('success', 'Portfolio has been

deleted');
    }
}
