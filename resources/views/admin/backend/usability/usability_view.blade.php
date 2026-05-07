@extends('admin.admin_master')

@section('admin')


<div class="content">      
          
                     <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 fw-semibold m-0">Usability </h4>
                            </div>
                        </div>
  <div class="container-xxl">


<div class="col-xl-1-">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Browser Defaults</h5>
                                    </div><!-- end card header -->
        
                                    <div class="card-body">
                                        <form class="row g-3" action="{{ route('store.usability') }}" method="post" enctype = "multipart/form-data" >
                                            @csrf
                                            <div class="col-md-6">
                                                <label for="validationDefault01" class="form-label">Title</label>
                                                <input type="text" name="title" value="{{ $usability->title }}" class="form-control" id="validationDefault01"  required="">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationDefault02" class="form-label">Link</label>
                                                <input type="text" name="link" value="{{ $usability->link }}" class="form-control" id="validationDefault02"  required="">
                                            </div>
                                             <div class="col-md-6">
                                                <label for="validationTextarea" class="form-label">Description</label>
                                                <textarea class="form-control" name="description"  id="validationTextarea" placeholder="Required example textarea" required="">{{ $usability->description }}</textarea>
                                                <div class="invalid-feedback">
                                                    Please enter a message in the textarea.
                                                </div>
                                            </div>
                                          <div class="col-md-6">
                                                <label for="validationDefault02" class="form-label">Youtube</label>
                                                <input type="text" name="youtube" value="{{ $usability->youtube }}" class="form-control" id="validationDefault02"  required="">
                                            </div>
                                                         <div class="form-group mt-3 row">
                                                <label class="form-label">Image</label>
                                                <div class="col-md-6">
                                                    <input id="image" class="form-control" type="file" name="image">
                                                </div>

          <img id="showImage" src="{{ !empty($usability->image) ? url( $usability->image)
                                                : url('upload/man.png')  }}" class="float-start mt-2" style="width:60px;height:40px; border-radius:5%; object-fit:cover;"
                                                 alt="image profile">

                                            </div>              
                    
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card text-bg-secondary">
                                                   <div class="card-header">
                                                          <div class="">
                                                            <label for="validationDefault01" class="form-label">Subtitle 01</label>
                                                            <input type="text" name="subtitle_one" value="{{ $usability->subtitle_one }}" class="form-control" id="validationDefault01"  required="">
                                                        </div>
                                                         <div class="mt-3">
                                                            <!-- <label for="validationTextarea" class="form-label">description</label> -->
                                                            <textarea class="form-control" name="subdiscription_one"  id="validationTextarea" placeholder="Required example textarea" required="">{{ $usability->subdiscription_two }}</textarea>
                                                            <div class="invalid-feedback">
                                                                Please enter a message in the textarea.
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card text-bg-secondary">
                                                   <div class="card-header">
                                                          <div class="">
                                                            <label for="validationDefault01" class="form-label">Subtitle 02</label>
                                                            <input type="text" name="subtitle_two" value="{{ $usability->subtitle_two }}" class="form-control" id="validationDefault01"  required="">
                                                        </div>
                                                         <div class="mt-3">
                                                            <!-- <label for="validationTextarea" class="form-label">description</label> -->
                                                            <textarea class="form-control"  name="subdiscription_two" id="validationTextarea" placeholder="Required example textarea" required="">{{ $usability->subdiscription_two }}</textarea>
                                                            <div class="invalid-feedback">
                                                                Please enter a message in the textarea.
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card text-bg-secondary">
                                                   <div class="card-header">
                                                          <div class="">
                                                            <label for="validationDefault01" class="form-label">Subtitle 03</label>
                                                            <input type="text" name="subtitle_three" value="{{ $usability->subtitle_three }}" class="form-control" id="validationDefault01"  required="">
                                                        </div>
                                                         <div class="mt-3">
                                                            <!-- <label for="validationTextarea" class="form-label">description</label> -->
                                                            <textarea class="form-control" name="subdiscription_three" id="validationTextarea" placeholder="Required example textarea" required="">{{ $usability->subdiscription_three }}</textarea>
                                                            <div class="invalid-feedback">
                                                                Please enter a message in the textarea.
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            
                              
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div>


  </div>
</div>


@endsection