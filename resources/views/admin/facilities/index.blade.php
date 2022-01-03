@extends('layouts.admin')
@push('header')
    <link rel="stylesheet" href="{{asset('backend/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush
@section('content')
    <div id="right-panel" class="right-panel">

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        @if ($errors->any())

                            @foreach ($errors->all() as $error)
                                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-danger">Erorr</span> {{$error}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            @endforeach

                        @endif

                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Facility Table</strong>
                                <button type="button" class="btn btn-primary mb-1" data-toggle="modal"
                                        data-target="#createModal">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Message</th>
                                        <th>Created_At</th>
                                        <th>Updated_At</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($facilities as $key => $facility)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$facility->title}}</td>
                                            <td>{{$facility->message}}</td>
                                            <td>{{$facility->created_at}}</td>
                                            <td>{{$facility->updated_at}}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary mb-1" data-toggle="modal"
                                                        data-target="#viewModal-{{$facility->id}}">
                                                    <i class="fa fa-eye"></i>
                                                </button>

                                                <button type="button" class="btn btn-secondary mb-1" data-toggle="modal"
                                                        data-target="#editModal-{{$facility->id}}">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger mb-1" data-toggle="modal"
                                                        data-target="#deleteModal-{{$facility->id}}">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
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
            <!-- .animated -->
            <div class="animated">
                <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
                     data-backdrop="static" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Create Service</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('admin.facilities.store')}}" method="post" id="createCategory" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="name" name="title" placeholder="Text" class="form-control">
                                            <small class="form-text text-muted">This is a help text</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Message</label></div>
                                        <div class="col-12 col-md-9"><textarea name="message" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Facility Image</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="file-input" name="image" class="form-control-file">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-md" onclick="event.preventDefault();
                                    document.getElementById('createCategory').submit();">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($facilities as $facility)
                    <div class="modal fade" id="viewModal-{{$facility->id}}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
                         data-backdrop="static" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mediumModalLabel">View</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">{{$facility->title}}</p>
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Created At</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">{{$facility->created_at}}</p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Updated At</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">{{$facility->updated_at}}</p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label class=" form-control-label">Message</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">{{$facility->message}}</p>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="editModal-{{$facility->id}}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
                         data-backdrop="static" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mediumModalLabel">Edit User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('admin.facilities.update', $facility->id)}}" method="post" id="editcategory-{{$facility->id}}" enctype="multipart/form-data" class="form-horizontal">
                                        @csrf
                                        @method('PUT')
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="name" name="title" placeholder="Text" class="form-control" value="{{$facility->title}}">
                                                <small class="form-text text-muted">This is a help text</small>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Message</label></div>
                                            <div class="col-12 col-md-9"><textarea name="message" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{$facility->message}}</textarea></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Facility Image</label></div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="file-input" name="image" class="form-control-file">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-md" onclick="event.preventDefault();
                                            document.getElementById('editcategory-{{$facility->id}}').submit();">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="deleteModal-{{$facility->id}}" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel"
                         data-backdrop="static" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticModalLabel">Delete About</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        The about will be deleted !!
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                                        document.getElementById('deletecategory-{{$facility->id}}').submit();">Confirm</button>
                                    <form action="{{route('admin.facilities.destroy', $facility->id)}}" style="display: none" id="deletecategory-{{$facility->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach


            <!-- .content -->
            </div>


            <!-- .content -->
            @endsection

            @push('footer')

                <script src="{{asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
                <script src="{{asset('backend/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
                <script src="{{asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
                <script src="{{asset('backend/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
                <script src="{{asset('backend/vendors/jszip/dist/jszip.min.js')}}"></script>
                <script src="{{asset('backend/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
                <script src="{{asset('backend/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
                <script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
                <script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
                <script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
                <script src="{{asset('backend/assets/js/init-scripts/data-table/datatables-init.js')}}"></script>
                <script>
                    $(document).ready(function () {

                        (function ($) {

                            $('#filter').keyup(function () {

                                var rex = new RegExp($(this).val(), 'i');
                                $('.searchable tr').hide();
                                $('.searchable tr').filter(function () {
                                    return rex.test($(this).text());
                                }).show();

                            })

                        }(jQuery));

                    });
                </script>
                <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
                <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
                {{--        {!! Toastr::message() !!}--}}
            @endpush
        </div>
    </div>

