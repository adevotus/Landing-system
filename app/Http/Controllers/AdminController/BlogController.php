<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function blog()
    {
        $blogs = Blog::get();
        return view('admin.pages.blog', [
            'blogs' => $blogs,

        ]);
    }
    public function create_blog()
    {
        return view('admin.pages.components.create_blog');
    }

    public function IndividualBlog($id){

        $latest = Blog::latest('id')->get();
        $blog = Blog::find($id);
        $blogs = Blog::get();
        return view('admin.pages.components.IndividualBlog',[
            'blog'=>$blog,
            'latest'=>$latest,
            'blogs'=>$blogs
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
        $validatedData = new Blog();
        $validatedData->blogTitle = $request->input('blogTitle');
        $validatedData->publDate = $request->input('publDate');
        $validatedData->initalDescr = $request->input('initalDescr');
        $validatedData->moreDescr = $request->input('moreDescr');
        if ($request->hasFile('blogImage')) {
            $blogImage = $request->file('blogImage');
            $blogImageName = time() . '.' . $blogImage->getClientOriginalExtension();
            $blogImage->move(public_path('public/images'), $blogImageName);
            $validatedData->blogImage = $blogImageName;
            // Delete the old profile image
            if (file_exists(public_path('images/' . $validatedData->blogImage))) {
                unlink(public_path('images/' . $validatedData->blogImage));
            }
        }


        if ($validatedData->save()) {
            $blogs = Blog::get();
            return view('admin.pages.blog', [
                'blogs' => $blogs,

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

        $blogs = Blog::get();
        return view('admin.pages.blog', compact('blogs'));
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
        // $id = Crypt::decryptString($encryptedId);
        $validatedData = Blog::find($id);
       // dd($validatedData);
        $validatedData->blogTitle = $request->input('blogTitle');
        $validatedData->publDate = $request->input('publDate');
        $validatedData->initalDescr = $request->input('initalDescr');
        $validatedData->moreDescr = $request->input('moreDescr');
        if ($request->hasFile('blogImage')) {
            $blogImage = $request->file('blogImage');
            $blogImageName = time() . '.' . $blogImage->getClientOriginalExtension();
            $blogImage->move(public_path('public/images'), $blogImageName);
            $validatedData->blogImage = $blogImageName;
            // Delete the old profile image
            if (file_exists(public_path('images/' . $validatedData->blogImage))) {
                unlink(public_path('images/' . $validatedData->blogImage));
            }
        }


        if ($validatedData->save()) {
            $blogs = Blog::get();
            return view('admin.pages.blog', [
                'blogs' => $blogs,

            ]);
        }

        return back()->with('error', 'Failed to update staff record.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return back()->with('error', 'blog record not found.');
            // return redirect()->route('/hr/staff')->with('error', 'Staff record not found.');
        }

        $blog->delete();
        $blogs = Blog::get();
        return view('admin.pages.blog', [
            'blogs' => $blogs,
        ])->with('success', 'blog record deleted successfully.');
    }
}
