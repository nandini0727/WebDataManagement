<?php

namespace App\Http\Controllers;
use App\Hireme;

use Illuminate\Http\Request;

class HiremeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hiremes = hireme::all()->toArray();

        return view('hiremes.index', compact('hiremes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hiremes.create');
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

            'hcost' => 'required|numeric',

            'hcontent' => 'required',
           

        ]);

        $hiremes = new Hireme();

        $hiremes->HCost = $request->get('hcost');

        $hiremes->HContent = $request->get('hcontent');

        #$hiremes->HImage = $request->get('himage');

    
        if ($request->hasFile('himage')) {
            $image = $request->file('himage');
            $imageName = $request->file('himage')->getClientOriginalName();
            $name = $imageName;
            $destinationPath = public_path('/assets');
            $image->move($destinationPath, $name);
            $hiremes->HImage = $name;
            // $this->save();
    
            // return back()->with('success','Image Upload successfully');
        }



       

        

        $hiremes->save();
        return redirect('hiremes')->with('success', 'Hireme has been added');

       
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
        $hiremes = HireMe::find($id);

return view('hiremes.edit',compact('hiremes','id'));
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
        $hiremes = new Hireme();

        $request->validate([

            'hcost' => 'required|numeric',

            'hcontent' => 'required',

        ]);

        $hiremes = Hireme::find($id);
        $hiremes->HCost = $request->get('hcost');

        $hiremes->HContent = $request->get('hcontent');


    
        if ($request->hasFile('himage')) {
            $image = $request->file('himage');
            $imageName = $request->file('himage')->getClientOriginalName();
            $name = $imageName;
            $destinationPath = public_path('/assets');
            $image->move($destinationPath, $name);
            $hiremes->HImage = $name;
            // $this->save();
    
            // return back()->with('success','Image Upload successfully');
        }


        $hiremes->save();

        return redirect('hiremes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HireMe::find($id)->delete();

        return redirect('hiremes')->with('success', 'HireMe has been

deleted');
    }
}
