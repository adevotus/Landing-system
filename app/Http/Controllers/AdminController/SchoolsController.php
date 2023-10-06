<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class SchoolsController extends Controller
{
   

    public function school()
    {
        $schools = School::get();
        return view('admin.pages.publication', [
            'schools' => $schools,

        ]);
    }

 
    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = new School();
        $validatedData->name = $request->input('name');
        $validatedData->region = $request->input('region');
        $validatedData->phoneNumber = $request->input('phoneNumber');
        $validatedData->email = $request->input('email');

        if ($validatedData->save()) {
            $schools = school::get();
            return view('admin.pages.publication', [
                'schools' => $schools,

            ]);
        }

        return back()->with('error', 'Failed to save.');
    }

   
    public function edit($id)
    {
        $encryptedId = Crypt::encryptString($id);

        $schools = school::get();
        return view('admin.pages.publication', compact('schools'));
    }

  
    public function update(Request $request, $id,$encryptedId)
    {
        $id = Crypt::decryptString($encryptedId);
        $validatedData = School::find($id);
        $validatedData->name = $request->input('name');
        $validatedData->region = $request->input('region');
        $validatedData->phoneNumber = $request->input('phoneNumber');
        $validatedData->email = $request->input('email');


        if ($validatedData->save()) {
            $schools = school::get();
            return view('admin.pages.publication', [
                'schools' => $schools,

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
        $schools = School::find($id);
        if (!$schools) {
            return back()->with('error', ' record not found.');
        }

        $schools->delete();
        $schools = School::get();
        return view('admin.pages.blog', [
            'schools' => $schools,
        ])->with('success', ' record deleted successfully.');
    }
}
