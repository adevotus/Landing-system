<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gudian;
use Illuminate\Support\Facades\Crypt;

class   ParentController extends Controller
{
   

    public function parent()
    {
        $parents = Gudian::get();
        return view('admin.pages.staff', [
            'parents' => $parents,

        ]);
    }

    public function create_parent()
    {
        return view('admin.pages.components.create_staff');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //dd($request->all());
        $validatedData = new Gudian();
         $validatedData->name = $request->input('name');
         $validatedData->region = $request->input('region');
         $validatedData->contact = $request->input('contact');
         $validatedData->email = $request->input('email');


        if ($validatedData->save()) {
            $parents = Gudian::get();
            return view('admin.pages.staff', [
                'parents' => $parents,

            ]);
        }

        return back()->with('error', 'Failed to save  staff.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parent = Gudian::find($id);
        $parents = Gudian::get();
        
        return view('admin.pages.components.create_staff',[
            'parent'=>$parent
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encryptedId = Crypt::encryptString($id);
        $parents = Gudian::get();
        return view('admin.pages.staff', compact('parents'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id )
    {
        // $id = Crypt::decryptString($encryptedId);
        $validatedData = Gudian::find($id);
        $validatedData->name = $request->input('name');
        $validatedData->region = $request->input('region');
        $validatedData->contact = $request->input('contact');
        $validatedData->email = $request->input('email');

        if ($validatedData->save()) {
             $parents = Gudian::get();
            return view('admin.pages.staff', [
                'parents' => $parents,

            ]);
        }

        return back()->with('error', 'Failed to update  record.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parent = Gudian::find($id);
        if (!$parent) {
            return back()->with('error', ' record not found.');
        }

        $parent->delete();
        $parents = Gudian::get();
        return view('admin.pages.staff', [
            'parents' => $parents,
        ])->with('success', 'record deleted successfully.');
    }
}
