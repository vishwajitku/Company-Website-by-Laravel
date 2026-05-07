@extends('admin.admin_master')

@section('admin')


<div class="content">      
          
                     <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 fw-semibold m-0">Post</h4>
                            </div>
                        </div>
  <div class="container-xxl">


<div class="">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Post</h5>
                                    </div><!-- end card header -->
        
                                    <div class="card-body">
                                        <form class="row g-3" action="{{ route('post.add.store') }}" method="post" enctype = "multipart/form-data" >
                                            @csrf
                                          
                                            <div class="col-md-9">
                                                <label for="validationDefault02" class="form-label">Tittle</label>
                                                <input type="text" name="post_title" class="form-control" id="validationDefault02"  required="">
                                            </div>

                        
                                                    <div class="col-md-3">
                                                        <label for="example-select" class="form-label">Category</label>
                                                        <select name="category_id" class="form-select" id="example-select">
                                                            <option selected >Select Category</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                        @endforeach

                                                        </select>
                                                    </div>
                       
                            <div class="col-12">
                                <div class="card">
                                    <div class="">
            <textarea name="description" id="description" style="display: none;"></textarea>
                                        <div id="quill-editor" style="height: 350px;">
                                           
                                      
                                        </div>
                                    </div>
                                </div>  
                            </div>

                    
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Image</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input id="image" class="form-control" type="file" name="image">
                                                </div>

     <img id="showImage" src="{{ !empty($profileData->photo) ? url('upload/user_images/'. $profileData->photo)
                                                : url('upload/postdemo.png')  }}" class="float-start mt-2" style="height:100px;width:200px; border-radius:1%; object-fit:cover;"
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


<script>  
    document.querySelector('form').onsubmit = function() {
        var description = document.querySelector('#description');
        description.value = quill.root.innerHTML;  
    };
</script>

@endsection