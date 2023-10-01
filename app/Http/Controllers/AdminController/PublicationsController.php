<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class PublicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function publications()
    {
        $publications = Publication::get();
        return view('admin.pages.publication', [
            'publications' => $publications,

        ]);
    }

    public function index()
    {
        //
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
        $validatedData = new Publication();
        $validatedData->title = $request->input('title');
        $validatedData->publication_date = $request->input('publication_date');
        $validatedData->description = $request->input('description');

        if ($request->hasFile('coverImage')) {
            $file = $request->file('coverImage');
            $filename = $file->getClientOriginalName();
            $filePath = $file->storeAs('public/documents', $filename);
            $validatedData->coverImage = $filePath;
        }

        if ($validatedData->save()) {
            $publications = Publication::get();
            return view('admin.pages.publication', [
                'publications' => $publications,

            ]);
        }

        return back()->with('error', 'Failed to save  publications.');
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
        $encryptedId = Crypt::encryptString($id);

        $publications = Publication::get();
        return view('admin.pages.publication', compact('publications'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$encryptedId)
    {
        $id = Crypt::decryptString($encryptedId);
        $validatedData = Publication::find($id);
        $validatedData->blogTitle = $request->input('title');
        $validatedData->publDate = $request->input('publication_date');
        $validatedData->initalDescr = $request->input('initalDescr');

        if ($request->hasFile('coverImage')) {
            $file = $request->file('coverImage');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('public/documents', $filename);
            $validatedData->staff_contract = $filePath;
        }

        if ($validatedData->save()) {
            $publications = Publication::get();
            return view('admin.pages.publication', [
                'publications' => $publications,

            ]);
        }

        return back()->with('error', 'Failed to update publications record.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publications = Publication::find($id);
        if (!$publications) {
            return back()->with('error', 'blog record not found.');
            // return redirect()->route('/hr/staff')->with('error', 'Staff record not found.');
        }

        $publications->delete();
        $publications = Publication::get();
        return view('admin.pages.blog', [
            'publications' => $publications,
        ])->with('success', 'blog record deleted successfully.');
    }
}
