@extends('admin.admin_master')

@section('admin')


<div class="content">      
          
                     <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 fw-semibold m-0">FAQ</h4>
                            </div>
                        </div>
  <div class="container-xxl">


<div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Browser Defaults</h5>
                                    </div><!-- end card header -->
        
                                    <div class="card-body">
                                        <form class="row g-3" action="{{ route('faq.edit.store' , $faq->id ) }}" method="post" enctype = "multipart/form-data" >
                                            @csrf
                                            <div class="col-md-12">
                                                <label for="validationDefault01" class="form-label">Question</label>
                                                <input type="text" name="question" value="{{ $faq->question }}" class="form-control" id="validationDefault01"  required="">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="validationDefault02" class="form-label">Answer</label>
                                                <input type="text" name="answer" value="{{ $faq->answer }}" class="form-control" id="validationDefault02"  required="">
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