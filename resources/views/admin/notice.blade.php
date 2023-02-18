@extends('admin.includes.layout', ['breadcrumb_title' => 'Notice'])
@section('title', 'Notice')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Add Notice</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form method="post" action="{{ route('admin.notice.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-4">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Title"
                                        required>
                                </div>
                                <div class="col-sm-2">
                                    <label>Notice Category</label>
                                    <select name="category" class="form-control" required>
                                        <option value="" selected disabled>Select Category</option>
                                        <option value="notice">Latest Notice</option>
                                        <option value="admission">Admission</option>
                                        <option value="examination">Examination</option>
                                        <option value="events">Events</option>
                                        <option value="seminars">Seminars</option>
                                        <option value="tenders">Tenders</option>
                                    </select>
                                </div>
                                <div class="form-check col-1 mt-3">
                                    <input class="form-check-input" type="radio" name="filetype" value="file"
                                        id="filetype">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        File
                                    </label>
                                </div>
                                <div class="form-check col-1 mt-3">
                                    <input class="form-check-input" type="radio" name="filetype" value="link"
                                        id="linktype">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Link
                                </div>
                                <div class="col-4" id="uploadfile">
                                    <label>Upload file</label>
                                    <input type="file" class="form-control" name="file">
                                </div>
                                <div class="col-4" id="uploadlink">
                                    <label>Upload Link</label>
                                    <input type="text" class="form-control" name="link">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 sub">
                                    <br />
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Manage Notices</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Data</th>
                                <th>Uploaded Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($notices != '')
                                @foreach($notices as $n)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$n->title}}</td>
                                    <td>{{$n->category}}</td>
                                    @if($n->type=='file')
                                    <td><a href="{{asset('upload/Notice')}}/{{$n->filename}}" target="_blank">View</a></td>
                                    @else
                                    <td><a href="{{$n->filename}}" target="_blank">View</a></td>
                                    @endif

                                    <td>{{$n->updated_at}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            @php $cryptid=Crypt::encrypt($n->id); @endphp
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('delete-form-{{ $cryptid }}').submit();">Delete</a></li>
                                            </ul>
                                            <form id="delete-form-{{ $cryptid }}" action="{{ route('admin.notice.destroy', $cryptid) }}"
                                                    method="post" style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="12" class="text-center">No Records Found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!-- Grids in modals -->
    @section('script-area')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#uploadfile").hide();
            $("#uploadlink").hide();
            $("#filetype").click(function() {
                $("#uploadfile").show();
                $("#uploadlink").hide();
            });
            $("#linktype").click(function() {
                $("#uploadlink").show();
                $("#uploadfile").hide();
            });
        });
    </script>
    @endsection

@endsection



