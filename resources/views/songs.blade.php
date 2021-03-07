@extends('layouts.base')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Songs</h1><hr>
        <!-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Static Navigation</li>
        </ol> -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="col-md-12 ">
                        <div class="form-group ">
                            <button class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#add-song-modal"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Song</button>
                        </div>
                    </div>
                    <table class="table table-bordered" id="dataTable" width="100%" >
                        <thead>
                            <tr>
                                <th>Song Title</th>
                                <th>Author</th>
                                <th>Created By</th>
                                <th>Date Creted</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($songs as $row)
                                <tr>
                                    <td>{{$row->title}}</td>
                                    <td>{{$row->author}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{date_format(date_create($row->created_at), 'M d, Y')}}</td>
                                    <td class="text-center"><button class="btn btn-sm btn-primary edit-song"  data-pk="<?php echo base64_encode($row->song_id) ?>"  data-title="<?php echo base64_encode($row->title) ?>"  data-author="<?php echo base64_encode($row->author) ?>"  data-lyrics="<?php echo base64_encode($row->lyrics) ?>"><i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;Edit</button></td>
                                    <td>
                                        <button class="btn btn-sm btn-danger delete-song"  data-pk="<?php echo base64_encode($row->song_id) ?>"><i class="fa fa-trash"></i>&nbsp;&nbsp;&nbsp;Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--Add song Modal -->
    <div class="modal fade" id="add-song-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"  style="background-color: #0f6d79">
                    <h3 class="text-center font-weight-light modal-title" style="color: white;">Add Song</h3>
                </div>
                 <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" id="add-song-submit">{{csrf_field()}}
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="song-title">Song Title</label>
                                            <input required class="form-control py-1" id="song-title" type="text" placeholder="Enter song title" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="author">Author Name</label>
                                            <input required class="form-control py-1" id="author" type="text" placeholder="Enter author name" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="small mb-1" for="lyrics">Song Lyrics</label>
                                            <textarea required class="form-control py-5" id="lyrics" type="text" placeholder="Add your lyrics here.." /></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer text-right">
                                    <div class="col-md-6">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;Save Song</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Edit song Modal -->
    <div class="modal fade" id="edit-song-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"  style="background-color: #0f6d79">
                    <h3 class="text-center font-weight-light modal-title" style="color: white;">Edit Song</h3>
                </div>
                 <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" id="edit-song-submit">{{csrf_field()}}
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="edit-song-title">Song Title</label>
                                            <input required class="form-control py-1" id="edit-song-title" type="text" placeholder="Enter song title" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="edit-author">Author Name</label>
                                            <input required class="form-control py-1" id="edit-author" type="text" placeholder="Enter author name" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="small mb-1" for="edit-lyrics">Song Lyrics</label>
                                            <textarea required class="form-control" id="edit-lyrics" rows="10" type="text" placeholder="Add your lyrics here.." /></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer text-right">
                                    <div class="col-md-6">
                                        <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
