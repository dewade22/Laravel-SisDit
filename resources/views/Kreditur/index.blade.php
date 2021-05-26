@extends('Layout.layout')

@section('title')
KREDITUR
@endsection

@section('content')
<div class="block-header">
    <h2>
        Halaman Kreditrur
        <small>Halaman Kreditur menampilkan daftar nama kreditur yang ada di dalam sistem</small>
    </h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Tabel Daftar Kreditur</h2>
            </div>
            <div class="body">
                {{-- show success message --}}
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <p>{{ $message }}</p>
                </div>
                @endif
                {{-- show error message --}}
                @if ($message = Session::get('error'))
                <div class="alert alert-error">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Kreditur</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Pekerjaan</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>No KTP</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('css_section')
<link rel="stylesheet" href="{{asset('adminasset/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" />
@endsection

@section('js_section')
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/jquery.dataTables.js')}}" > </script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Backend/Kreditur/index.js')}}"></script>
<script type="text/javascript">

let table = $('.dataTable').DataTable({
        processing: true,
        serverside: true,
        lengthChange: false,
        ajax: "{{route('Krediturs.index')}}",
        columns: [
            {data: 'Id_Kreditur', name: 'Id_Kreditur'},
            {data: 'Nama_Kreditur', name: 'Nama_Kreditur'},
            {data: 'Tempat_Lahir', name: 'Tempat_Lahir'},
            {data: 'Tanggal_Lahir', name:'Tanggal_Lahir'},
            {data: 'Jenis_Kelamin', name: 'Jenis_Kelamin'},
            {data: 'Pekerjaan', name: 'Pekerjaan'},
            {data: 'Telepon', name: 'Telepon'},
            {data: 'Alamat', name: 'Alamat'},
            {data: 'No_KTP', name: 'No_KTP'},
            {data: 'Status_Kreditur', name:'Status_Kreditur'},
            {data: 'Id_Kreditur',
             orderable: false,
             searchable: false,
             render: function(data){
                 return `<a class="btn bg-deep-orange waves-effect" href="Krediturs/${data}/edit"><i class="material-icons">edit</i></a>`
             }
            }
        ]
    })
</script>
@endsection
