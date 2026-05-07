<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Features;
use App\Models\Clarifies;
use App\Models\Financial;
use App\Models\Usability;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Answer;
use App\Models\AboutUs;
use App\Models\Ourapp;
use App\Models\BlogPost;
use App\Models\Team;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HomeController extends Controller
{
    public function FeaturesAll(){

        $features = Features::latest()->get();
        return view('admin.backend.features.all_features' , compact('features'));  
    }


    public function FeaturesAdd(){
       
         return view('admin.backend.features.add_features');  
    }


    public function StoreFeatures(Request $request){
          Features::create([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon
          ]);          

          $notification = [
            'message' => 'Feature created succesfully',
            'alert-type' => 'success'
          ];

          return redirect()->route('features.all')->with($notification);
    }


    public function EditFeatures($id){
          $feature = Features::findOrFail($id);
         return view('admin.backend.features.edit_features' , compact('feature'));         
    }

    public function EditStoreFeatures(Request $request , $id){
              $feature = Features::findOrFail($id);
              $feature->title =  $request->title;
              $feature->icon =    $request->icon;
              $feature->description = $request->description;

              $feature->save();

         $notification = [
            'message' => 'Feature Updated succesfully',
            'alert-type' => 'success'
          ];

          return redirect()->route('features.all')->with($notification);
    }


    public function DeleteFeature($id){
         $feature = Features::findOrFail($id);
         $feature->delete();

         $notification = [
            'message' => 'Feature Deleted succesfully',
            'alert-type' => 'success'
          ];

          return redirect()->route('features.all')->with($notification);

    }



// <----------------------------------------- clarifies ---------------------------------- 
    public function ClarifiesAdd(){
         $clarifie  =  Clarifies::findOrFail(1);
         return view('admin.backend.clarifie.clarifie_view', compact('clarifie'));
    }


   public function StoreClarifie(Request $request){
            $clarifie  =  Clarifies::findOrFail(1);
            $clarifie->title = $request->title;
            $clarifie->description = $request->description;


                   if($request->hasFile('image')){
                          $image = $request->file('image');
                          $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                          $manager = new ImageManager( new Driver());
                          $manager->read($image)->resize(302,618)->save(public_path('upload/clarifie/'.$filename));
                          $save_url = 'upload/clarifie/'.$filename;


                       // unlinking old image     
                         if(file_exists(public_path($clarifie->image))){
                           unlink($clarifie->image);
                          }
                            
                  // <---   update 
                            $clarifie->title = $request->title;
                            $clarifie->description = $request->description;
                            $clarifie->image = $save_url;
                            $clarifie->save();
                      }else{

                           $clarifie->title = $request->title;
                            $clarifie->description = $request->description;
                            $clarifie->save();
                      }
                  
                    $notification = array(
                        'message' => 'Clarifie Updated',
                        'alert-type' => 'success'
                    );
                    
                    
                      return redirect()->back()->with($notification);
   }



// <--------------------------------- financials ------------------------------------------- 

public function FinancialAdd(){
    $financial  =  Financial::findOrFail(1);
         return view('admin.backend.financial.financial_view', compact('financial'));       
}

public function StoreFinancial(Request $request){
 
            $financial  =  Financial::findOrFail(1);
            $financial->title = $request->title;
            $financial->description = $request->description;


                   if($request->hasFile('image')){
                          $image = $request->file('image');
                          $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                          $manager = new ImageManager( new Driver());
                          $manager->read($image)->resize(302,618)->save(public_path('upload/financial/'.$filename));
                          $save_url = 'upload/financial/'.$filename;


                       // unlinking old image     
                         if(file_exists(public_path($financial->image))){
                           unlink($financial->image);
                          }
                            
                  // <---   update 
                            $financial->title = $request->title;
                            $financial->description = $request->description;
                            $financial->tap_one = $request->tap_one;
                            $financial->content_one = $request->content_one;
                            $financial->tap_two = $request->tap_two;
                            $financial->content_two = $request->content_two;
                            $financial->image = $save_url;
                            $financial->save();
                      }else{

                            $financial->title = $request->title;
                            $financial->description = $request->description;
                            $financial->tap_one = $request->tap_one;
                            $financial->content_one = $request->content_one;
                            $financial->tap_two = $request->tap_two;
                            $financial->content_two = $request->content_two;
                            $financial->save();
                      }
                  
                    $notification = array(
                        'message' => 'Clarifie Updated',
                        'alert-type' => 'success'
                    );
                    
                    
                      return redirect()->back()->with($notification);
  

}



// <------------------------------------- usabilty------------------------------------------  

public function UsabilityView(){
    $usability = Usability::findOrFail(1);
             return view('admin.backend.usability.usability_view', compact('usability'));       
    
}


public function StoreUsability(Request $request){
 
            $usability  =  Usability::findOrFail(1);
            $usability->title = $request->title;
            $usability->description = $request->description;


                   if($request->hasFile('image')){
                          $image = $request->file('image');
                          $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                          $manager = new ImageManager( new Driver());
                          $manager->read($image)->resize(560,400)->save(public_path('upload/usability/'.$filename));
                          $save_url = 'upload/usability/'.$filename;


                       // unlinking old image     
                         if(file_exists(public_path($usability->image))){
                           unlink($usability->image);
                          }
                            
                  // <---   update 
                            $usability->title = $request->title;
                            $usability->description = $request->description;
                            $usability->link = $request->link;
                            $usability->youtube = $request->youtube;
                            $usability->subtitle_one = $request->subtitle_one;
                            $usability->subdiscription_one = $request->subdiscription_one;
                            $usability->subtitle_two = $request->subtitle_two;
                            $usability->subdiscription_two = $request->subdiscription_two;
                            $usability->subtitle_three = $request->subtitle_three;
                            $usability->subdiscription_three = $request->subdiscription_three;
                            $usability->image = $save_url;
                            $usability->save();
                      }else{

                             $usability->title = $request->title;
                            $usability->description = $request->description;
                            $usability->link = $request->link;
                            $usability->youtube = $request->youtube;
                            $usability->subtitle_one = $request->subtitle_one;
                            $usability->subdiscription_one = $request->subdiscription_one;
                            $usability->subtitle_two = $request->subtitle_two;
                            $usability->subdiscription_two = $request->subdiscription_two;
                            $usability->subtitle_three = $request->subtitle_three;
                            $usability->subdiscription_three = $request->subdiscription_three;
                            $usability->save();
                      }
                  
                    $notification = array(
                        'message' => 'Usability Updated',
                        'alert-type' => 'success'
                    );
                    
                    
                      return redirect()->back()->with($notification);
  

}


// <------------------------------------- FAQ ------------------------------------------------------- 

public function FaqView(){
    $faqs  =  Answer::latest()->get();
         return view('admin.backend.faq.faq_view', compact('faqs'));       
}

public function FaqAdd(){
         return view('admin.backend.faq.faq_add');       
}

public function FaqStore(Request $request ){
        
       Answer::insert([
            'question' => $request->question,
            'answer' => $request->answer
       ]);

        $notification = array(
              'message' => 'Faq is Created',
              'alert-type' => 'success'
          );
        return redirect()->route('faq.view')->with($notification);
}



public function FaqEdit($id){
   
    $faq = Answer::findOrFail($id);
         return view('admin.backend.faq.faq_edit', compact('faq'));       
}


public function FaqEditStore(Request $request , $id){
       Answer::findOrFail($id)->update([
            'question' => $request->question,
            'answer' => $request->answer
       ]);

        $notification = array(
              'message' => 'Faq is Edited',
              'alert-type' => 'success'
          );
        return redirect()->route('faq.view')->with($notification);   

}



public function FaqDelete(Request $request , $id){
       Answer::findOrFail($id)->delete();

        $notification = array(
              'message' => 'Faq is Deleted',
              'alert-type' => 'success'
          );
        return redirect()->route('faq.view')->with($notification);   

}



// <------------------------------------- our app-------------------------------------------------- 


public function OurappView(){
    $ourapp = Ourapp::findOrFail(1);
    return view('admin.backend.ourapp.ourapp_view', compact('ourapp'));       
    
}


public function OurappViewStore(Request $request){
 
            $ourapp  =  Ourapp::findOrFail(1);
            $ourapp->title = $request->title;
            $ourapp->description = $request->description;


                   if($request->hasFile('image')){
                          $image = $request->file('image');
                          $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                          $manager = new ImageManager( new Driver());
                          $manager->read($image)->resize(306,481)->save(public_path('upload/ourapp/'.$filename));
                          $save_url = 'upload/ourapp/'.$filename;


                       // unlinking old image     
                         if(file_exists(public_path($ourapp->image))){
                           unlink($ourapp->image);
                          }
                            
                  // <---   update 
                            $ourapp->title = $request->title;
                            $ourapp->description = $request->description;
                            $ourapp->playstore_link = $request->playstore_link;
                            $ourapp->applestore_link = $request->applestore_link;
                            $ourapp->image = $save_url;
                            $ourapp->save();
                      }else{

                            $ourapp->title = $request->title;
                            $ourapp->description = $request->description;
                            $ourapp->playstore_link = $request->playstore_link;
                            $ourapp->applestore_link = $request->applestore_link;                            
                            $ourapp->save();
                      }
                  
                    $notification = array(
                        'message' => 'Ourapp section Updated',
                        'alert-type' => 'success'
                    );
                    
                    
                      return redirect()->back()->with($notification);
  

}


// <---------------------------- teams ---------------------------------- 

public function MembersView(){
    $team = Team::latest()->get();
    return view('admin.backend.team.team_view', compact('team'));            
}

public function MembersAdd(){
         return view('admin.backend.team.team_add');       
}


public function MemberStore(Request $request){

      
    if($request->hasFile('image')){
        $file  = $request->file('image');    
        $filename = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
        $manager->read($file)->resize(306,306)->save(public_path('upload/teams/'.$filename));

         $save_url = 'upload/teams/'.$filename;

         Team::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $save_url
        ]);
                
    }
    
    $notification = array(
        'message' => 'Member is created',
        'alert-type' => 'success',
    );

         return redirect()->route('members.view')->with($notification);
  
  }


  public function MemberEdit($id){
         $member = Team::findOrFail($id);
            return view('admin.backend.team.team_edit' , compact('member'));        
  }


public function MemberEditStore(Request $request , $id){
 
            $member  =  Team::findOrFail($id);
          

                   if($request->hasFile('image')){
                          $image = $request->file('image');
                          $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                          $manager = new ImageManager( new Driver());
                          $manager->read($image)->resize(306,350)->save(public_path('upload/teams/'.$filename));
                          $save_url = 'upload/teams/'.$filename;


                       // unlinking old image     
                         if(file_exists(public_path($member->image))){
                           unlink($member->image);
                          }
                            
                  // <---   update 
                            $member->name = $request->name;
                            $member->position = $request->position;
                            $member->image = $save_url;
                            $member->save();
                      }else{

                             $member->name = $request->name;
                            $member->position = $request->position;
                            $member->save();
                      }
                  
                    $notification = array(
                        'message' => 'Member is Updated',
                        'alert-type' => 'success'
                    );
                    
                    
         return redirect()->route('members.view')->with($notification);
  

}

public function MemberDelete($id){
     Team::findOrFail($id)->delete();

     $notification = array(
                        'message' => 'Member is Deleted',
                        'alert-type' => 'success'
                    );
                    
                    
         return redirect()->route('members.view')->with($notification);
  
}


// <--------------------------------------- AboutUs---------------------------------- 

public function AboutusView(){
       $aboutus = AboutUs::findOrFail(1);
       return view('admin.backend.aboutus.aboutus_view', compact('aboutus'));   
}


public function AboutusViewStore(Request $request ){
   $aboutus = AboutUs::findOrFail(1);
    
   $aboutus->title_one = $request->title_one;
   $aboutus->description_one = $request->description_one;
   $aboutus->title_two = $request->title_two;
   $aboutus->description_two = $request->description_two;
   $aboutus->title_card_main = $request->title_card_main;
   $aboutus->title_card_one = $request->title_card_one;
   $aboutus->description_card_one = $request->description_card_one;
   $aboutus->title_card_two = $request->title_card_two;
   $aboutus->description_card_two = $request->description_card_two;
   $aboutus->title_card_three  = $request->title_card_three;
   $aboutus->description_card_three  = $request->description_card_three;
   if($request->hasFile('image_one')){
                         $image = $request->file('image_one');
                          $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                          $manager = new ImageManager( new Driver());
                          $manager->read($image)->resize(526,550)->save(public_path('upload/aboutus/'.$filename));
                          $save_url = 'upload/aboutus/'.$filename;

      $aboutus->image_one  = $save_url;
   }
   if($request->hasFile('image_two')){
                         $image = $request->file('image_two');
                          $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                          $manager = new ImageManager( new Driver());
                          $manager->read($image)->resize(526,550)->save(public_path('upload/aboutus/'.$filename));
                          $save_url = 'upload/aboutus/'.$filename;

      $aboutus->image_two  = $save_url;
   }

   $aboutus->update();

        $notification = array(
                        'message' => 'About us is updated',
                        'alert-type' => 'success'
                    );
                    
                    
         return redirect()->back()->with($notification);
  



                  }


// <------------------------------------------- BLOG ------------------------------------------------------------

// CATEGORY 

public function CategoryView(){
      $categories = Category::latest()->get();
      return view('admin.backend.blog.category.category_view' , compact('categories'));   
}


public function CategoryAddStore(Request $request){
       Category::insert([
        'category_name' => $request->category_name,
        'category_slug' =>   strtolower(str_replace(' ' , '-' ,$request->category_name ))
       ]);

        $notification = array(
                        'message' => 'Category is created',
                        'alert-type' => 'success'
                    );
                                      
         return redirect()->back()->with($notification);
  
}



public function CategoryEdit($id){
    $category = Category::findOrFail($id);
    return response()->json($category);
}


public function CategoryEditSotre(Request $request){
        $id  = $request->cat_id;
       Category::findOrFail($id)->update([
        'category_name' => $request->category_name,
        'category_slug' =>   strtolower(str_replace(' ' , '-' ,$request->category_name ))
       ]);

        $notification = array(
                        'message' => 'Category is updated',
                        'alert-type' => 'success'
                    );
                                      
         return redirect()->back()->with($notification);
  

}


public function CategoryDelete($id){
     Category::findOrFail($id)->delete();

           $notification = array(
                        'message' => 'Category is deleted',
                        'alert-type' => 'success'
                    );
                                      
         return redirect()->back()->with($notification);
}

// <-----------------post 
public function PostView(){
         $posts = BlogPost::latest()->get();
      return view('admin.backend.blog.post.post_view' , compact('posts'));   
}

public function PostAdd(){
      $categories = Category::latest()->get();   
      return view('admin.backend.blog.post.post_add' ,  compact('categories'));   
}


public function PostAddStore(Request $request){

      
    if($request->hasFile('image')){
        $file  = $request->file('image');    
        $filename = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
        $manager->read($file)->resize(576,350)->save(public_path('upload/posts/'.$filename));

         $save_url = 'upload/posts/'.$filename;

         BlogPost::create([
            'category_id' => $request->category_id,
            'post_title' => $request->post_title,
            'post_slug' => strtolower(str_replace(' ' , '-' ,$request->post_title)),
            'description' => $request->description,
            'image' => $save_url
        ]);
                
    }else{
                BlogPost::create([
            'category_id' => $request->category_id,
            'post_title' => $request->post_title,
            'post_slug' => strtolower(str_replace(' ' , '-' ,$request->post_title)),
            'description' => $request->description,
        ]);

        
    }
    
       
    $notification = array(
        'message' => 'Member is created',
        'alert-type' => 'success',
    );

         return redirect()->route('post.view')->with($notification);
  
  }



  public function PostEdit($id){
       $post = BlogPost::findOrFail($id);
      $categories = Category::latest()->get();   

      return view('admin.backend.blog.post.post_edit' ,  compact('post' , 'categories'));   
  }



public function PostEditStore(Request $request , $id ){
   $post = BlogPost::findOrFail($id);
    
   $post->category_id = $request->category_id;
   $post->post_title = $request->post_title;
   $post->post_slug = strtolower(str_replace(' ' , '-' ,$request->post_title));
   $post->description = $request->description;

   if($request->hasFile('image')){
                         $image = $request->file('image');
                          $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                          $manager = new ImageManager( new Driver());
                          $manager->read($image)->resize(576,350)->save(public_path('upload/posts/'.$filename));
                          $save_url = 'upload/posts/'.$filename;

          // unlinking old image     
                         if(file_exists(public_path($post->image))){
                           unlink($post->image);
                          }

      $post->image  = $save_url;

      
   }

   $post->update();
   $notification = array(
                  'message' => 'Post is updated',
                  'alert-type' => 'success'
              );
                               
    return redirect()->route('post.view')->with($notification);
  

  }


public function PostDelete($id){
    $post = BlogPost::findOrFail($id);
    $post->delete();

              // unlinking old image     
                         if(file_exists(public_path($post->image))){
                           unlink($post->image);
                          }

       $notification = array(
                  'message' => 'Post is Deleted',
                  'alert-type' => 'success'
              );
                               
    return redirect()->back()->with($notification);
}



public function MessageView(){

  $contacts = Contact::latest()->get();
    return view('admin.backend.contact.message_view', compact('contacts'));
}

public function MessageDelete($id){
  Contact::findOrFail($id)->delete();

  
       $notification = array(
                  'message' => 'message is Deleted',
                  'alert-type' => 'success'
              );
                               
    return redirect()->back()->with($notification);

}

}


