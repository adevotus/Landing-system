<?php

namespace App\Http\Controllers\SiteController;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Feedback;
use App\Models\Publication;
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

        $totalBlog = Blog::count();
        $totalClient = Client::count();
        $totalPublications = Publication::count();
        $totalFeedback = Feedback::count();
        $blogs = Blog::limit(3)->get();

        return view('sites.home', [
            'blogs' => $blogs,
            'totalBlog' => $totalBlog,
            'totalClient' => $totalClient,
            'totalPublications' => $totalPublications,
            'totalFeedback' => $totalFeedback


        ]);
    }
    public function about()
    {
        return view('sites.pages.about');
    }



    public function blogSite()
    {

        $blogs = Blog::get();
        return view('sites.pages.blog', [
            'blogs' => $blogs
        ]);
    }
    public function singleBlog($slug)
    {
        $latest = Blog::latest('slug')->get();
        $blog = Blog::find($slug);
        $blogs = Blog::get();


        return view('sites.component.singleBlog', [
            'blog' => $blog,
            'latest' => $latest,
            'blogs' => $blogs

        ]);
    }

    public function contact()
    {
        $feedbacks = Feedback::get();

        return view('sites.pages.contact', [
            'feedbacks' => $feedbacks,

        ]);
    }

    public function publiSite()
    {
        $sitePublications = Publication::get();
        return view('sites.pages.publication', [
            'sitePublications' => $sitePublications
        ]);
    }

    public function service()
    {
        return view('sites.pages.service');
    }
    public function siteManagement()
    {
        return view('layouts.include.management');
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



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
