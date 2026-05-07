@extends('admin.admin_master')
@section('admin')
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


   <div class="content">

                    <!-- Start Content-->
                    <div class="container-xxl">

                        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 fw-semibold m-0">Dashboard</h4>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                    <div class="card-body">

                                        <div class="align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ !empty($profileData->photo) ? url('upload/user_images/'. $profileData->photo)
                                                : url('upload/man.png')  }}" class="rounded-circle avatar-xxl img-thumbnail float-start" alt="image profile">
            
                                                <div class="overflow-hidden ms-4">
                                                    <h4 class="m-0 text-dark fs-20">{{ $profileData->name }}</h4>
                                                    <p class="my-1 text-muted fs-16"> {{ $profileData->email }} </p>
                                                    <!-- <span class="fs-15"><i class="mdi mdi-message me-2 align-middle"></i>Speaks: <span>English <span class="badge bg-primary-subtle text-primary px-2 py-1 fs-13 fw-normal">native</span> , Bitish, Turkish </span></span> -->
                                                </div>
                                            </div>
                                        </div>

                    

        <div class="tab-content text-muted bg-white">


            <div class=" pt-4" id="profile_setting" role="tabpanel" aria-labelledby="setting_tab">
                <div class="row">

                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="card border mb-0">

                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title mb-0">Personal Information</h4>                      
                                        </div><!--end col-->                                                       
                                    </div>
                                </div>
                            <form  action="{{ route('profile.store' ) }}" method="post" 
                               enctype="multipart/form-data"
                            >

                            @csrf
                                <div class="card-body">
                                    <div class="form-group mb-3 row">
                                        <label class="form-label">Name</label>
                                        <div class="col-lg-12 col-xl-12">
                                            <input class="form-control" name="name" type="text" value="{{ $profileData->name}}">
                                        </div>
                                    </div>

                    

                                    <div class="form-group mb-3 row">
                                        <label class="form-label">Contact Phone</label>
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="mdi mdi-phone-outline"></i></span>
                                                <input class="form-control" type="text" name="phone" value="{{ $profileData->phone }}" placeholder="Phone" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="form-label">Email Address</label>
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="mdi mdi-lock-outline fs-16 align-middle"></i></span>
                                                <input type="text"  class="form-control" name="email" value="{{ $profileData->email }}"  placeholder="Email" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>



                                    
                                    <div class="form-group mb-3 row">
                                        <label class="form-label">Role</label>
                                        <div class="col-lg-12 col-xl-12">
                                             <div class="input-group">
                                                <span class="input-group-text"><i class="mdi mdi-lock-outline fs-16 align-middle"></i></span>
                                            <input class="form-control" type="text" name="role" value="{{ $profileData->role }}" disabled>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group mb-3 row">
                                        <label class="form-label">Address</label>
                                        <div class="col-lg-12 col-xl-12">
                                            <input class="form-control" type="text" name="address" value="{{ $profileData->address }}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-3 row">
                                        <label class="form-label">Profile</label>
                                        <div class="col-lg-12 col-xl-12">
                                            <input id="image" class="form-control" type="file" name="photo" >
                                        </div>

                                          <img id="showImage" src="{{ !empty($profileData->photo) ? url('upload/user_images/'. $profileData->photo)
                                                : url('upload/man.png')  }}" class="float-start mt-2" style="height:80px;width:100px; border-radius:100%; object-fit:cover;"
                                                 alt="image profile">

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-xl-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            
                                        </div>
                                    </div>

                              </form>    
                                </div><!--end card-body-->
                            </div>
                        </div>

                     
                        <div class="col-lg-6 col-xl-6">
                            <div class="card border mb-0">

                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title mb-0">Change Password</h4>                      
                                        </div><!--end col-->                                                       
                                    </div>
                                </div>
<form action="{{ route('admin.password.update') }}" method="post">
    @csrf
                                <div class="card-body mb-0">
                                    <div class="form-group mb-3 row">
                                        <label class="form-label">Old Password</label>
                                        <div class="col-lg-12 col-xl-12">
                                            <input class="form-control @error('old_password') is-invalid @enderror" name="old_password" type="password" placeholder="Old Password">
                                          @error('old_password')
                                                  <span class="text-danger" >{{ $message }}</span>

                                          @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="form-label">New Password</label>
                                        <div class="col-lg-12 col-xl-12">
                                            <input class="form-control @error('new_password') is-invalid @enderror" name="new_password" type="password" placeholder="New Password">
                                          @error('new_password')
                                                  <span class="text-danger" >{{ $message }}</span>
                                          @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="form-label">Confirm Password</label>
                                        <div class="col-lg-12 col-xl-12">
                                            <input class="form-control" name="new_password_confirmation" type="password" placeholder="Confirm Password">
        
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12 col-xl-12">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </div>

                                </div><!--end card-body-->
</form>    
                            </div>
                        </div>
                     

                    </div>
                </div>
            </div> <!-- end education -->

        </div> <!-- Tab panes -->
                                    </div>
                                </div>
                            </div>
                        </div>





        </div>
   </div>


<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src' , e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    })

</script>

@endsection