<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Testimon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class TestimonController extends Controller
{
  
    public function testimon()
    {
        $testimons = Testimon::get();
        return view('admin.pages.client', [
            'testimons' => $testimons,
        ]);
    }
  
    public function store(Request $request)
    {
             //dd($request->all());
             $validatedData = new Testimon();
             $validatedData->title = $request->input('title');
             $validatedData->date = $request->input('date');
             $validatedData->name = $request->input('name');
             $validatedData->initalDescr = $request->input('initalDescr');
             $validatedData->slug = Str::slug($validatedData->title);
             if ($request->hasFile('Covermage')) {
                 $Covermage = $request->file('Covermage');
                 $CovermageName = time() . '.' . $Covermage->getClientOriginalExtension();
                 $Covermage->move(public_path('public/images'), $CovermageName);
                 $validatedData->Covermage = $CovermageName;
                 if (file_exists(public_path('images/' . $validatedData->Covermage))) {
                     unlink(public_path('images/' . $validatedData->Covermage));
                 }
             }
     
     
             if ($validatedData->save()) {
                $testimons = Testimon::get();
                 return view('admin.pages.client', [
                    'testimons' => $testimons,
     
                 ]);
             }
     
             return back()->with('error', 'Failed to save  client.');
    }

 
    public function edit($id)
    {
        $encryptedId = Crypt::encryptString($id);

        $testimons = Testimon::get();
        return view('admin.pages.client', compact('testimons'));
    }

 
    public function update(Request $request, $id,$encryptedId)
    {
        $id = Crypt::decryptString($encryptedId);
        $validatedData = Testimon::find($id);
        $validatedData->title = $request->input('title');
        $validatedData->date = $request->input('date');
        $validatedData->name = $request->input('name');
        $validatedData->initalDescr = $request->input('initalDescr');
        $validatedData->slug = Str::slug($validatedData->title);
        if ($request->hasFile('Covermage')) {
            $Covermage = $request->file('Covermage');
            $CovermageName = time() . '.' . $clientLogo->getClientOriginalExtension();
            $clientLogo->move(public_path('public/images'), $CovermageName);
            $validatedData->Covermage = $CovermageName;
            // Delete the old profile image
            if (file_exists(public_path('images/' . $validatedData->Covermage))) {
                unlink(public_path('images/' . $validatedData->Covermage));
            }
        }

        
        if ($validatedData->save()) {
            $testimons = Testimon::get();
            return view('admin.pages.client', [
                'testimons' => $testimons,

            ]);
        }
        return back()->with('error', 'Failed to update client record.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimons = Testimon::find($id);
        if (!$testimons) {
            return back()->with('error', 'blog record not found.');
        }

        $testimons->delete();
        $testimons = Testimon::get();
        return view('admin.pages.client', [
            'testimons' => $testimons,
        ])->with('success', ' record deleted successfully.');
    }
    }

