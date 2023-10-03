<?php

namespace App\Http\Controllers\SiteController;

use App\Http\Controllers\Controller;
use App\Models\Testimon;
use App\Models\Video;
use App\Models\Feedback;
use App\Models\Book;
use App\Models\Gudian;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $videos = Video::get();
       $books = Book::get();
       $testmon =Testimon::get();

        return view('sites.home', [
            'videos' => $videos,
            'books' => $books,
            'testmon' => $testmon,
            

        ]);
    }
  


  
 
 



    public function ParentRegistration(Request $request){
         //dd($request->all());
         $validatedData = new Gudian();
         $validatedData->name = $request->input('name');
         $validatedData->region = $request->input('region');
         $validatedData->contact = $request->input('contact');
         $validatedData->email = $request->input('email');
 
         if ($validatedData->save()) {
             $parents = Gudian::get();
             return view('sites.home', [
                 'parents' => $parents,
 
             ]);
         }
 
         return back()->with('error', 'Failed to save  staff.');
       
    }


    public function SchoolRegistration(Request $request){
        //dd($request->all());
        $validatedData = new School();
        $validatedData->name = $request->input('name');
        $validatedData->region = $request->input('region');
        $validatedData->contact = $request->input('phoneNumber');
        $validatedData->email = $request->input('email');

        if ($validatedData->save()) {
            $schools = School::get();
            return view('sites.home', [
                'schools' => $schools,

            ]);
        }

        return back()->with('error', 'Failed to save  staff.');
      
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function SendMessage(Request $request)
    {
        $validatedData = new Feedback();
        $validatedData->name = $request->input('name');
        $validatedData->email = $request->input('email');
        $validatedData->subject = $request->input('subject');
        $validatedData->message = $request->input('message');
        if ($validatedData->save()) {
            $feedbacks = Feedback::get();

            return view('sites.home', [
                'feedbacks' => $feedbacks,

            ]);
        }
        session()->flash('success', 'Message sent successfully.');

        return redirect()->back();
    }



   
   
}
