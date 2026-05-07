@extends('admin.admin_master')

@section('admin')


<div class="content">      
          
                     <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 fw-semibold m-0">Our App</h4>
                            </div>
                        </div>
  <div class="container-xxl">


<div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Browser Defaults</h5>
                                    </div><!-- end card header -->
        
                                    <div class="card-body">
                                        <form class="row g-3"  action="{{ route('ourapp.view.store') }}" method="post" enctype = "multipart/form-data" >
                                            @csrf
                                            <div class="">
                                                <label for="validationDefault01" class="form-label">Title</label>
                                                <input value="{{ $ourapp->title }}" type="text" name="title" class="form-control" id="validationDefault01"  required="">
                                            </div>
                                           
                                             <div class="mb-2">
                                                <label for="validationTextarea" class="form-label">Description</label>
                                                <textarea class="form-control" name="description" id="validationTextarea" placeholder="Required example textarea" required="">{{ $ourapp->description }}</textarea>
                                                <div class="invalid-feedback">
                                                    Please enter a message in the textarea.
                                                </div>
                                            </div>

                                             <div class="col-md-6">
                                                <label for="validationDefault02" class="form-label">Playstore Link</label>
                                                <input value="{{ $ourapp->playstore_link }}" type="text" name="playstore_link" class="form-control" id="validationDefault02"  required="">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationDefault02" class="form-label">Applestore Link</label>
                                                <input value="{{ $ourapp->applestore_link }}" type="text" name="applestore_link" class="form-control" id="validationDefault02"  required="">
                                            </div>
                                            <div class="form-group mb-3 mt-3 row">
                                                <label class="form-label">Image</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input id="image" class="form-control" type="file" name="image">
                                                </div>

     <img id="showImage" src="{{ !empty($ourapp->image) ? url($ourapp->image)
                                                : url('upload/man.png')  }}" class="float-start mt-2" style="width:100px;max-height:200px; border-radius:3%; object-fit:cover;"
                                                 alt="image profile">

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

