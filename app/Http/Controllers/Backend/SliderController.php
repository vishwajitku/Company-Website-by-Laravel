<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class SliderController extends Controller
{
    public function SliderView(){
        $slider = Slider::findOrFail(1);
        return view('admin.backend.slider.slider_view', compact('slider'));
    }

    public function SliderViewStore(Request $request){
       $data =  Slider::findOrFail(1);

        if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $manager = new ImageManager( new Driver());
        $manager->read($image)->resize(309,618)->save(public_path('upload/slider/'.$filename));
        $save_url = 'upload/slider/'.$filename;
            

   // unlinking old image
     if(file_exists(public_path($data->image))){
         unlink($data->image);
     }
           
// <---   update 
         $data->tittle = $request->tittle;
         $data->description = $request->description;
         $data->link = $request->link;
         $data->image = $save_url;
         $data->save();

    }else{

          $data->tittle = $request->tittle;
          $data->description = $request->description;
          $data->link = $request->link;
          $data->save();
    }
 
  $notification = array(
      'message' => 'Hero Slider Updated',
      'alert-type' => 'success'
  );
  
  
    return redirect()->back()->with($notification);
       
    }



 public function UpdateSlider(Request $request , $id){
       $slider  = Slider::findOrFail($id);

       if($request->has('tittle')){
        $slider->tittle = $request->tittle;
       }

       if($request->has('description')){
          $slider->description = $request->description; 
       }

       $slider->save();

       return response()->json(['success' => true]);
 }

























}
