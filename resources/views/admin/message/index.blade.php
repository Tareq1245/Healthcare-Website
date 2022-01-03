@extends('layouts.backend.app')
@push('header')
    <link rel="stylesheet" href="{{asset('backend/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush
@section('content')
    <div id="right-panel" class="right-panel">
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Message</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li>
                                <a href="#" class="active">Message</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

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
                                <strong class="card-title">Message Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Message</th>
                                        <th>User</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Created_At</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($messages as $key => $message)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$message->message}}</td>
                                            <td>{{$message->user->name}}</td>
                                            {{--                                            <td><a href="{{route('post',$comment->post->slug)}}">{{$comment->post->title}}</a></td>--}}
                                            <td>{{$message->name}}</td>
                                            <td>{{$message->email}}</td>
                                            <td>{{$message->subject}}</td>
                                            <td>{{$message->created_at->diffForHumans()}}</td>
                                            <td>
                                                <button type="button" class="btn btn-danger mb-1" data-toggle="modal"
                                                        data-target="#deleteModal-{{$message->id}}">
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
                @foreach ($messages as $message)
                    <div class="modal fade" id="deleteModal-{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel"
                         data-backdrop="static" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticModalLabel">Delete Comment</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        The Message will be deleted !!
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                                        document.getElementById('deletecomment-{{$message->id}}').submit();">Confirm</button>
                                    <form action="{{route('admin.message.destroy', $message->id)}}" style="display: none" id="deletecomment-{{$message->id}}" method="POST">
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
