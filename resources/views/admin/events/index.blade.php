<!DOCTYPE html>
@extends('template/admin/body')
@section('title', 'Admin - Events')
@section('ext-css')
<!-- DataTables -->
<link rel="stylesheet" href="/assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="/assets/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
@endsection
@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Event List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Document</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button data-target="#modal-add" data-toggle="modal" class="btn btn-dark">Add Event</button>
                    </div>
                    <div class="card-body">
                        <table id="usertable" class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Event Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">QR Code</th>
                                    <th scope="col">Short URL</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($events as $event)
                                <tr>
                                    <td>{{ $event->id }}</td>
                                    <td>{{ $event->name }}</td>
                                    <td><textarea cols="70" rows="5" disabled class="textinput">  </textarea></td>
                                    <td>
                                        <img src="data:image/png;base64, 
                                        {!! base64_encode(QrCode::format('png')->size(200)
                                        ->mergeString(Storage::get('public/logo/favicon2.png'), .1, true)
                                        ->margin(1)
                                        ->generate($event->qrcode)) !!} ">
                                    </td>
                                    <td>{{ $event->url }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                        <form class="d-inline" action="#" method="post">@method('delete') @csrf<button type="submit" class="btn-userdel btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- card body --}}
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Add --}}
    <div class="modal fade" aria-modal="true" id="modal-add" aria-hidden="false" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form id="fdata" action="{{ route('event.storeEvent') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h1>Add Event</h1>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Event Name</label>
                            <input type="text" name="name" id="name" class="form-control" value=" ">
                        </div>
                        <div class="form-group">
                            <label for="url">Short URL</label>
                            <input type="text" name="url" id="url" class="form-control" value=" ">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" id="save-user" class="btn btn-dark">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection
@section('ext-script')
<!-- DataTables  & Plugins -->
<script src="/assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/assets/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="/assets/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/assets/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- SweetAlert2 -->
<script src="/assets/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>

{{-- Custom Scripts --}}
<script>
    $(document).ready(function() {
        $('#usertable').DataTable({
            "paging": true
            , "lengthChange": false
            , "searching": false
            , "ordering": true
            , "info": true
            , "autoWidth": false
            , "responsive": true
        , });
        
    });

</script>
@if (session('success'))
<script>
    $(document).ready(function(e) {
        e.preventDefault;
        
        Swal.fire({
            icon: 'success'
            , title: 'Done'
            , text: "{{session('success')}}"
            , timer: 1700
        });
    })

</script>
@endif
@if (session('failed'))
<script>
    $(document).ready(function(e) {
        e.preventDefault;
        Swal.fire({
            icon: 'error'
            , title: 'Failed'
            , text: "{{session('failed')}}"
            , timer: 1700
        });
    })

</script>

<script>
    $(".lihat").on('click',function (e) { 
            e.preventDefault();
            Swal.fire({
                imageUrl: 'https://placeholder.pics/svg/300x1500',
                imageHeight: 500,
                imageAlt: 'QR Code',
                html: "<a href='#' class='btn btn-dark'>Download</a>",
                showConfirmButton:false,
                showCancelButton: true,
                cancelButtonColor: '#d33'
            });
        });
</script>
@endif
@endsection
