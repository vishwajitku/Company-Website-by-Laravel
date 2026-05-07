@extends('admin.admin_master')

@section('admin')

<div class="content">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Data Tables</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Tables</a>
                </li>
                <li class="breadcrumb-item active">Data Tables</li>
            </ol>
        </div>
    </div>
    <div class="container-xxl">
        <!-- Datatables  -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">FAQ</h5>
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
                                    <th>Question</th>
                                    <th>Answers</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($faqs as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->question }}</td>
                                    <td>{{ Str::limit($item->answer , 50 , '...') }}</td>
                                    <td>
                                        <a
                                            href="{{ route('edit.faq', $item->id) }}"
                                            class="btn btn-primary"
                                        >
                                            Edit
                                        </a>
                                        <a
                                          id="delete"
                                            href="{{ route('delete.faq', $item->id) }}"
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



@endsection