@extends('admin.admin_master')
@section('admin')

<div class="content">
  
    <div class="container-xxl">
        <!-- Datatables  -->
                                 <div class="d-flex flex-wrap gap-2 mb-3 mt-3">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                Add Category
                                            </button>
                                        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">blog category</h5>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <table
                            id="datatable"
                            class="table table-bordered dt-responsive table-responsive nowrap"
                        >
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Category</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->category_name }}</td>
                                    <td>{{ $item->category_slug }}</td>
                                   
                                    <td>
                                        <a
                                          data-bs-toggle="modal" data-bs-target="#editmodel"
                                            class="btn btn-primary editcats"   data-id="{{ $item->id }}"
                                        >
                                            Edit
                                        </a>
                                        <a
                                          id="delete"
                                            href="{{ route('delete.category', $item->id) }}"
                                            class="btn btn-danger"
                                        >
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                          <div class="card-body">
                                        <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                
                                                    <div class="modal-body">
                                                        <form action="{{ route('category.add.store') }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row g-3">
                                                                <div class="">
                                                                    <div>
                                                                        <label for="category" class="form-label">Category</label>
                                                                        <input required type="text" name="category_name" class="form-control" id="category" placeholder="Enter category">
                                                                    </div>
                                                                </div><!--end col-->
                                                  
                                                                <!--end col-->
                                                                <!--end col-->
                                                                <div class="col-lg-12">
                                                                    <div class="hstack gap-2 justify-content-end">
                                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                                    </div>
                                                                </div><!-- end col -->
                                                            </div><!-- end row -->
                                                        </form> <!-- end form -->
                                                    </div> <!-- end modal body -->
                                                </div> <!-- end modal content -->
                                            </div>
                                        </div>
                         </div>
                          <div class="card-body">
                                        <div class="modal fade" id="editmodel" tabindex="-1" aria-labelledby="editmodel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                
                                                    <div class="modal-body">
                                                        <form action="{{ route('category.edit.store') }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row g-3">
                                                                <div class="">
                                                                    <div>
                                                                        <label for="category" class="form-label">Category</label>
                                                                        <input required type="text" name="category_name" class="form-control" id="category_edt_name" placeholder="Enter category">
                                                                        <input  type="hidden" id="category_edt_id" name="cat_id">
                                                                    </div>
                                                                </div><!--end col-->
                                                  
                                                                <!--end col-->
                                                                <!--end col-->
                                                                <div class="col-lg-12">
                                                                    <div class="hstack gap-2 justify-content-end">
                                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                                    </div>
                                                                </div><!-- end col -->
                                                            </div><!-- end row -->
                                                        </form> <!-- end form -->
                                                    </div> <!-- end modal body -->
                                                </div> <!-- end modal content -->
                                            </div>
                                        </div>
                         </div>

<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
    
   document.addEventListener('click' , function(e){
         if(e.target.classList.contains('editcats')){
            let id = e.target.getAttribute('data-id');

            fetch( `/category/edit/${id}`, {
               method: "GET",
               headers:{
                   "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                   "Content-Type" : "application/json"
               }
    
            })
            .then(res => res.json())
            .then( data => {
               document.getElementById('category_edt_name').value = data.category_name;
               document.getElementById('category_edt_id').value = data.id;
            }

            )
         }
   });
</script>

@endsection