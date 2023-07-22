<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Staff;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Feedback;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $totalBlogs = Blog::count();
        $blogs = Blog::limit(1)->get();
        $totalStaffs = Staff::count();
        $totalPublications = Publication::count();
        $totalClients=Client::count();
        $feedbacks = Feedback::limit(2)->get();
        return view('admin.index',[
           'totalBlogs'=>$totalBlogs,
           'totalStaffs'=>$totalStaffs,
           'totalPublications'=>$totalPublications,
           'totalClients'=>$totalClients,
           'blogs'=>$blogs,
           'feedbacks'=>$feedbacks
        ]);
    }

  
   

   


}
