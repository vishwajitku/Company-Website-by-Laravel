<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\AboutUs;
use App\Models\BlogPost;
use App\Models\Contact;
use App\Models\Category;

class FrontendController extends Controller
{
    public function Teams(){
        return view('home.pages.teams' );
    }
    public function AboutUs(){
              $aboutus = AboutUs::findOrFail(1);
        return view('home.pages.about_us' , compact('aboutus'));
    }

    public function Blog(){
                 $post = BlogPost::latest()->limit(5)->get();
                 $recentpost = BlogPost::latest()->limit(3)->get();
                 $blogcat  = Category::latest()->withCount('posts')->get();
                 return view('home.pages.blog' , compact('post' , 'blogcat' , 'recentpost'));
    }


    public function BlogDetails($slug ,$id){
                 $blog = BlogPost::where('id', $id)->firstOrFail();
                 $recentpost = BlogPost::latest()->limit(3)->get();
                 $blogcat  = Category::latest()->withCount('posts')->limit(8)->get();
                 return view('home.pages.blog_details' , compact('blog' , 'blogcat' , 'recentpost'));

    }


  public function BlogCategory($id){
        $blog = BlogPost::where('category_id',$id)->get();
        $categoryname = Category::where('id',$id)->first();
        $blogcat = Category::latest()->withCount('posts')->get();
        $recentpost = BlogPost::latest()->limit(3)->get();
        return view('home.pages.blog_category',compact('blog','blogcat','recentpost','categoryname')); 
    }
    // End Method 



// <-----------contact us ------------------------------------- 

public function ContactUs(){
            return view('home.pages.contact_us'); 
}

public function ContactMessage(Request $request){
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'message'  => $request->message
        ]);


       $notification = array(
                  'message' => 'done',
                  'alert-type' => 'success'
              );
                               
    return redirect()->back()->with($notification);

}


// <--------------------------------------------------------- Privacy and Terms page----------------------------------- 
public function PrivacyTerms(){
   return view('home.pages.privacy&terms'); 
}

}
