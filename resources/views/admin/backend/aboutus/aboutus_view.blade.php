@extends('admin.admin_master')
@section('admin')


<div class="content">      
          
                     <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 fw-semibold m-0">Our App</h4>
                            </div>
                        </div>
  <div class="container-xxl">


<div class="col-xl-10">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Browser Defaults</h5>
                                    </div><!-- end card header -->
        
                                    <div class="card-body">
                                        <form class="row g-3"  action="{{ route('aboutus.view.store') }}" method="post" enctype = "multipart/form-data"  >
                                            @csrf
                                            


                                           <div class="col-md-6">
                                               <label class="form-label">Image</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <!-- Styled Upload Button -->
                                                    <label class="custom-upload" for="image">
                                                        <img src="/upload/icon.png" alt="icon">
                                                        <span>Select Image</span>
                                                    </label>

                                                    <!-- Hidden Input (ID = image) -->
                                                    <input type="file" id="image" name="image_one">                                              
                                                </div>

                                                <img id="showImage" src="{{ !empty($aboutus->image_one) ? url($aboutus->image_one)
                                                : url('upload/demo.webp')  }}" class="float-start mt-2" style="width:100%;height:240px; border-radius:1%; object-fit:cover;"
                                                 alt="image profile">
  
                                            </div>

            

                                            <div class="col-md-6">
                                                <label for="validationDefault01" class="form-label">Title One</label>
                                                <input value="{{ $aboutus->title_one }}" type="text" name="title_one" class="form-control" id="validationDefault01"  required="">
                                          
                                                <label for="validationTextarea" class="form-label">description_one</label>
                                                <textarea style="height:70%;"   class="form-control" name="description_one" id="validationTextarea" placeholder="Required example textarea" required="">{{ $aboutus->description_one }}</textarea>
                                                <div class="invalid-feedback">
                                                    Please enter a message in the textarea.
                                                </div> 
                                    
                                            </div>


                                        
                 
                                             <div class="">
                                                <label for="validationDefault02" class="form-label">title_two</label>
                                                <input  type="text" name="title_two" value="{{ $aboutus->title_two }}" class="form-control" id="validationDefault02"  required="">

                                                    <div class="mb-3 mt-2">
                                                        <label for="example-textarea" class="form-label">description_two</label>
                                                        <textarea name="description_two" class="form-control" id="example-textarea" rows="5" spellcheck="false">{{ $aboutus->description_two}}</textarea>
                                                    </div>

                                                    
                                            </div>
                        <div class="">
                                                 <div class="card text-bg-info">
                                                    <div class="card-header">
                                                            <label for="validationDefault02" class="form-label">title_card_one</label>
                                                           <input value="{{ $aboutus->title_card_main }}" type="text" name="title_card_main" class="form-control" id="validationDefault02"  required="">
                                                    </div>
                                                </div>          
                        </div>                  
                        <div class="col-md-4">
                                                 <div class="card text-bg-info">
                                                    <div class="card-header">
                                                            <label for="validationDefault02" class="form-label">title_card_one</label>
                                                           <input value="{{ $aboutus->title_card_one}}" type="text" name="title_card_one" class="form-control" id="validationDefault02"  required="">

                                                      <div class="mb-3 mt-2">
                                                        <label  class="form-label">description_card_one</label>
                                                        <textarea name="description_card_one" class="form-control"  rows="5" spellcheck="false">{{ $aboutus->description_card_one }}</textarea>
                                                    </div>
                                                    </div>
                                                </div>          
                        </div>

                        <div class="col-md-4">
                                                 <div class="card text-bg-info">
                                                    <div class="card-header">
                                                            <label for="validationDefault02" class="form-label">title_card_two</label>
                                                           <input value="{{ $aboutus->title_card_two }}" type="text" name="title_card_two" class="form-control" id="validationDefault02"  required="">

                                                      <div class="mb-3 mt-2">
                                                        <label for="example-textarea" class="form-label">description_card_two</label>
                                                        <textarea class="form-control" name="description_card_two"  id="example-textarea" rows="5" spellcheck="false">{{ $aboutus->description_card_two }}</textarea>
                                                    </div>
                                                    </div>
                                                </div>          
                        </div>
                        <div class="col-md-4">
                                                 <div class="card text-bg-info">
                                                    <div class="card-header">
                                                            <label for="validationDefault02" class="form-label">title_card_three</label>
                                                           <input value="{{ $aboutus->title_card_three }}" type="text" name="title_card_three" class="form-control" id="validationDefault02"  required="">

                                                      <div class="mb-3 mt-2">
                                                        <label for="description_card_three" class="form-label">description_card_three</label>
                                                        <textarea name="description_card_three" class="form-control" id="description_card_three" rows="5" spellcheck="false">{{ $aboutus->description_card_three}}</textarea>
                                                    </div>
                                                    </div>
                                                </div>          
                        </div>
                                            <!-- <div class="form-group mb-3 mt-3 row">
                                                <label class="form-label">Image</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input id="image" class="form-control" type="file" name="image">
                                                </div>

     <img id="showImage" src="{{ !empty($aboutus->image_one) ? url($aboutus->image_one)
                                                : url('upload/man.png')  }}" class="float-start mt-2" style="width:100px;max-height:200px; border-radius:3%; object-fit:cover;"
                                                 alt="image profile">

                                            </div> -->
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div>


  </div>
</div>
<style>
.custom-upload {
  width:100%;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #fff;
    border: 1px solid #ced4da;
    padding: 8px 12px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.2s;
}

.custom-upload:hover {
    background: #f1f1f1;
}

.custom-upload img {
    width: 22px;
    height: 22px;
    object-fit: contain;
}

#image  {
    display: none; /* hide the real input */
}


</style>
<!-- <script>
      document
        .getElementById('imageInput')
        .addEventListener('change', function (event) {
          let reader = new FileReader();

          reader.onload = function () {
            let previewImage = document.getElementById('previewImage');
            let uploadText = document.getElementById('uploadText');

            previewImage.src = reader.result;
            previewImage.style.display = 'block';
            uploadText.style.display = 'none';
          };

          reader.readAsDataURL(event.target.files[0]);
        });
    </script> -->
@endsection

