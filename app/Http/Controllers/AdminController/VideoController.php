<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class VideoController extends Controller
{
  
    public function video()
    {
        $videos = Video::get();
        $video =Video::get();
        return view('admin.pages.feedback', [
            'videos' => $videos,
            'video' => $video,

        ]);
    }
  
    public function store(Request $request)
    {
             //dd($request->all());
             $validatedData = new Video();
             $validatedData->title = $request->input('title');
             $validatedData->date = $request->input('date');
             $validatedData->link = $request->input('link');
             if ($request->hasFile('Covermage')) {
                 $Covermage = $request->file('Covermage');
                 $CovermageName = time() . '.' . $clientLogo->getClientOriginalExtension();
                 $clientLogo->move(public_path('public/images'), $CovermageName);
                 $validatedData->Covermage = $CovermageName;
                 if (file_exists(public_path('images/' . $validatedData->Covermage))) {
                     unlink(public_path('images/' . $validatedData->Covermage));
                 }
             }
     
     
             if ($validatedData->save()) {
                $videos = Video::get();
                 return view('admin.pages.feedback', [
                    'videos' => $videos,
     
                 ]);
             }
     
             return back()->with('error', 'Failed to save.');
    }

 
    public function edit($id)
    {
        $encryptedId = Crypt::encryptString($id);

        $videos = Video::get();
        return view('admin.pages.feedback', compact('videos'));
    }

 
    public function update(Request $request, $id,$encryptedId)
    {
        $id = Crypt::decryptString($encryptedId);
        $validatedData = Video::find($id);
        $validatedData->title = $request->input('title');
        $validatedData->date = $request->input('date');
        $validatedData->link = $request->input('link');
        if ($request->hasFile('Covermage')) {
            $Covermage = $request->file('Covermage');
            $CovermageName = time() . '.' . $clientLogo->getClientOriginalExtension();
            $clientLogo->move(public_path('public/images'), $CovermageName);
            $validatedData->Covermage = $CovermageName;
            if (file_exists(public_path('images/' . $validatedData->Covermage))) {
                unlink(public_path('images/' . $validatedData->Covermage));
            }
        }

        
        if ($validatedData->save()) {
            $videos = Video::get();
            return view('admin.pages.feedback', [
                'videos' => $videos,

            ]);
        }
        return back()->with('error', 'Failed to update record.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);
        if (!$video) {
            return back()->with('error', ' record not found.');
        }

        $videos->delete();
        $videos = Video::get();
        return view('admin.pages.feedback', [
            'videos' => $videos,
        ])->with('success', ' record deleted successfully.');
    }
    }

