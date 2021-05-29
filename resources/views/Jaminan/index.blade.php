@extends('Layout.layout')

@section('title')
JAMINAN
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Tabel Daftar Jaminan</h2>
            </div>
            <div class="body">
                <a class="btn bg-light-blue waves-effect" href="{{route("Jaminan.create")}}"><i class="material-icons">add_box</i> New Jaminan</a>
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
                                <th>No</th>
                                <th>Jaminan</th>
                                <th>Pinjaman Maksimum</th>
                                <th>Pinjaman Minimum</th>
                                <th>Jangka Waktu Maksimum</th>
                                <th>Jangka Waktu Minimum</th>
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
<!--Datatable Library-->
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/jquery.dataTables.js')}}" > </script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

<!--Menu-->
<script type="text/javascript" src="{{asset('Backend/Jaminan/index.js')}}"></script>
<!--Data Table Script-->
<script type="text/javascript">
    let table = $('.dataTable').DataTable({
        processing: true,
        serverside: true,
        lengthChange: false,
        ajax: "{{route('Jaminan.index')}}",
        columns: [
            {data: 'Id_Jaminan', name: 'Id_Jaminan'},
            {data: 'Jaminan', name: 'Jaminan'},
            {data: 'Besar_Pinjaman_Maksimal', name: 'Besar_Pinjaman_Maksimal', render: $.fn.dataTable.render.number(',', '.', 2, '')},
            {data: 'Besar_Pinjaman_Minimal', name: 'Besar_Pinjaman_Minimal', render: $.fn.dataTable.render.number(',', '.', 2, '')},
            {data: 'Jangka_Waktu_Maksimal', name: 'Jangka_Waktu_Maksimal'},
            {data: 'Jangka_Waktu_Minimal', name: 'Jangka_Waktu_Minimal'},
            {data: 'Id_Jaminan',
             orderable: false,
             searchable: false,
             render: function(data){
                 return `<a class="btn bg-deep-orange waves-effect" href="Jaminan/${data}/edit"><i class="material-icons">edit</i></a>`
             }
            }
        ]
    })
</script>
@endsection
