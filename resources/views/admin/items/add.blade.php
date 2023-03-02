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
                <h1>Add Item</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/book">Item</a></li>
                    <li class="breadcrumb-item active">Add Item</li>
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
                        <h3 class="card-title">Add Item</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="event_name">Event Name</label><br>
                                <p>{{ $event->name }}</p>
                            </div>
                            <div class="form-group">
                                <label for="ct-file">Event File</label>
                                <div class="input-group @error('file'){{'is-invalid'}}@enderror mb-3">
                                    <div class="custom-file">
                                        <input name="file" type="file" class="custom-file-input @error('file'){{'is-invalid'}}@enderror" value="{{old('file')}}" id="ct-file" accept=".zip">
                                        <label class="custom-file-label" for="ct-file" aria-describedby="ct-file-desc">Choose File | .zip file extension</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="ct-file-desc">Upload</span>
                                    </div>
                                </div>
                                @error('file')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                
                            </div>
                            <div class="form-group">
                                <a href="" class="form-control" id="your-file"></a>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Button Save-->
                <a href="#" type="button" class="btn btn-dark">Save</a>

            </div>
        </div>
    </div>
</section>
@endsection
@section('ext-script')
<!-- bs-custom-file-input -->
<script src="/assets/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="/assets/adminlte/plugins/select2/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/resumablejs@1.1.0/resumable.min.js" type="text/javascript"></script>

<!-- Page specific script -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#your-file').hide();
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
        bsCustomFileInput.init();

        let browseFile = $('#ct-file');
        let resumable = new Resumable({
        target: '{{ route('item.store') }}'
        , chunkSize: 10*1024*1024 // default is 1*1024*1024, this should be less than your maximum limit in php.ini
        , query: {
            _token: '{{ csrf_token() }}',
            event: '{{ $event->id }}',
        } // CSRF token
        , fileType: ['zip']
        , headers: {
            'Accept': 'application/json'
        }
        , testChunks: false
        , throttleProgressCallbacks: 1
        , });
        
        resumable.assignBrowse(browseFile);

        resumable.on('fileAdded', function(file, event) { // trigger when file picked
            showProgress();
            resumable.upload() // to actually start uploading.
        });
        
        resumable.on('fileProgress', function(file) { // trigger when file progress update
        updateProgress(Math.floor(file.progress() * 100));
        });

        resumable.on('fileSuccess', function(file, response) { // trigger when file upload complete
            response = JSON.parse(response)
            $('#your-file').attr('href', response.path);
            $('#your-file').text(response.filename);
            $('#your-file').show();
        });

        resumable.on('fileError', function(file, response) { // trigger when there is any error
            alert('file uploading error.')
        });


        let progress = $('.progress');

        function showProgress() {
            progress.find('.progress-bar').css('width', '0%');
            progress.find('.progress-bar').html('0%');
            progress.find('.progress-bar').removeClass('bg-success');
            progress.show();
        }

        function updateProgress(value) {
            progress.find('.progress-bar').css('width', `${value}%`)
            progress.find('.progress-bar').html(`${value}%`)
        }

        function hideProgress() {
            progress.hide();
        }
    });

</script>
@endsection
