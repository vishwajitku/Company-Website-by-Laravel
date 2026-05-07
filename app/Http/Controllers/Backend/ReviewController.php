<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Slider;

class ReviewController extends Controller
{
    public function AllReview(){

        $review = Review::latest()->get();
        return view('admin.backend.review.all_review' , compact('review'));

    }

    
public function AddReview(){
   return view('admin.backend.review.add_review');
    
}

  public function StoreReview(Request $request){

      
    if($request->hasFile('image')){
        $file  = $request->file('image');    
        $filename = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
        $manager->read($file)->resize(60,60)->save(public_path('upload/review/'.$filename));

         $save_url = 'upload/review/'.$filename;

         Review::create([
            'name' => $request->name,
            'postion' => $request->position,
            'message' => $request->message,
            'image' => $save_url
        ]);
                
    }
    
    $notification = array(
        'message' => 'Review is created',
        'alert-type' => 'success',
    );

         return redirect()->route('all.review')->with($notification);
    

  }


  public function EditReview($id){
      $review = Review::findOrFail($id);
      return view('admin.backend.review.edit_review' , compact('review'));      

  }


  public function EditReviewStore(Request $request , $id){
    
    if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $manager = new ImageManager( new Driver());
        $manager->read($image)->resize(60,60)->save(public_path('upload/review/'.$filename));
        $save_url = 'upload/review/'.$filename;


   // unlinking old image
    $data = Review::findOrFail($id);     
     if(file_exists(public_path($data->image))){
         unlink($data->image);

     }
           
// <---   update 
        Review::findOrFail($id)->update([
            'name' => $request->name,
            'postion' => $request->position,
            'message'  => $request->message,
            'image'  => $save_url
        ]);
 

    }else{

        Review::findOrFail($id)->update([
            'name' => $request->name,
            'postion' => $request->position,
            'message'  => $request->message,
        ]);

    }
 
  $notification = array(
      'message' => 'Review Updated',
      'alert-type' => 'success'
  );
  
  
    return redirect()->route('all.review')->with($notification);


  }




public function DeleteReview($id){
     

     $data = Review::findOrFail($id);
     
     if(file_exists(public_path($data->image))){
         unlink($data->image);
     }
    
     $data->delete();

     $notification = array( 
        'message' => 'Deleted',
        'alert-type' => 'succes'
     );

         return redirect()->route('all.review')->with($notification);
}













}
