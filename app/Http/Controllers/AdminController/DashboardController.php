<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimon;
use App\Models\School;
use App\Models\Gudian;
use App\Models\Client;
use App\Models\Video;
use App\Models\Book;
use App\Models\Feedback;


class DashboardController extends Controller
{
    public function dashboard()
    {

        $totalParent = Gudian::count();
        $totalSchool = School::count();
        $totalTestimon = Testimon::count();
        $totalVideo = Video::count();
        $totalBooks = Book::count();
        $feedbacks = Feedback::get();
        return view('admin.index',[
           'totalParent'=>$totalParent,
           'totalSchool'=>$totalSchool,
           'totalTestimon'=>$totalTestimon,
           'totalVideo'=>$totalVideo,
           'totalBooks'=>$totalBooks,
           'feedbacks' => $feedbacks
          
        ]);
    }

  
   

   


}
