<!DOCTYPE html>
@extends('template/admin/body')
@section('title', 'Admin - Guests')
@section('ext-css')
<!-- DataTable -->
<link rel="stylesheet" href="/assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="/assets/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<style>
    .dataTables_length {
        padding-top: 20px;
    }
</style>
@endsection
@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Guest List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Guest</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <!-- Table Batam -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Batam</h2>
                    </div>
                    <div class="card-body">
                        <p>Export to :</p>
                        <table id="tablebatam" class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Business/Institution Name</th>
                                    <th scope="col">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                    {{-- card body --}}
                    <div class="card-footer">

                    </div>
                </div>
            </div>

            <!-- Table Jogja -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Jogja</h2>
                    </div>
                    <div class="card-body">
                        <p>Export to :</p>
                        <table id="tablejogja" class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Business/Institution Name</th>
                                    <th scope="col">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                
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
<!-- Table Batam -->
<script>
    $(document).ready(function() {
        $('#tablebatam').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "dom":'Blfrtip',
            "buttons": ['excel','pdf'],
            "autoWidth": false,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "columns": [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            }, {
                data: "name",
                name: "name"
            }, {
                data: "email",
                name: "email"
            }, {
                data: "business",
                name: "business"
            },{
                data: "contact",
                name: "contact"
            }],
            "ajax": "/databatam"
        , });
        
    });
</script>

<!-- Tabel Jogja -->
<script>
    $(document).ready(function() {
        $('#tablejogja').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "dom":'Blfrtip',
            "buttons": ['excel','pdf'],
            "autoWidth": false,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "columns": [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            }, {
                data: "name",
                name: "name"
            }, {
                data: "email",
                name: "email"
            }, {
                data: "business",
                name: "business"
            },{
                data: "contact",
                name: "contact"
            }],
            "ajax": "/datajogja"
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
@endif
@endsection
