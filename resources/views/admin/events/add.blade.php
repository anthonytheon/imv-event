<!DOCTYPE html>
@extends('template/admin/body')
@section('title', 'Admin - Menu')
@section('ext-css')
<!-- Select2 -->
<link rel="stylesheet" href="/assets/adminlte/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/assets/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection
@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Event</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/book">Event</a></li>
                    <li class="breadcrumb-item active">Add Event</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Add Event</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="/admin/book/" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="event_name">Event Name</label>
                                <input name="event_name" type="text" class="form-control @error('event_name') {{'is-invalid'}} @enderror" value="{{old('event_name')}}" id="event_name" placeholder="Event Name">
                                @error('event_name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="ct-desc">Description</label>
                                <textarea name="desc" class="form-control @error('desc') {{'is-invalid'}} @enderror" id="ct-desc" placeholder="Event Description">{{old('desc')}}</textarea>
                                @error('desc')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="ct-img">Banner</label>
                                <div class="input-group @error('img') {{'is-invalid'}} @enderror mb-3">
                                    <div class="custom-file">
                                        <input name="img" type="file" class="custom-file-input @error('img') {{'is-invalid'}} @enderror" value="{{old('img')}}" id="ct-img" accept="image/jpeg, image/png, image/gif">
                                        <label class="custom-file-label" for="ct-img" aria-describedby="ct-img-desc">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="ct-img-desc">Upload</span>
                                    </div>
                                </div>
                                @error('img')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="url">Short URL</label>
                                <input name="url" type="text" class="form-control @error('url') {{'is-invalid'}} @enderror" value="{{old('url')}}" id="url" placeholder="Short URL">
                                @error('url')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-dark">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
@section('ext-script')
<!-- bs-custom-file-input -->
<script src="/assets/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="/assets/adminlte/plugins/select2/js/select2.min.js"></script>
<!-- Page specific script -->
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
        bsCustomFileInput.init();
    });

</script>
@endsection
