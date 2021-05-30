@extends('Layout.layout')

@section('title')
BUNGA
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Tabel Daftar Bunga</h2>
            </div>
            <div class="body">
                <a class="btn bg-light-blue waves-effect" href="{{route("Bunga.create")}}"><i class="material-icons">add_box</i> Tambah Bunga</a>
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
                                <th>Bunga</th>
                                <th>Jenis Bunga</th>
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
<!--Data Table Library-->
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/jquery.dataTables.js')}}" > </script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

<!--Page Script-->
<script type="text/javascript" src="{{asset('Backend/Bunga/index.js')}}"></script>

<!--JSON untuk data di datatable-->
<script type="text/javascript">
    let table = $('.dataTable').DataTable({
        processing: true,
        serverside: true,
        lengthChange: false,
        ajax: "{{route('Bunga.index')}}",
        columns: [
            {data: 'Id_Bunga', name: 'Id_Bunga'},
            {data: 'Bunga_Kredit',
                render: function(data){
                    return `${data*100}%`
                }
            },
            {data: 'Jenis_Bunga', name: 'Jenis_bunga'},
            {data: 'Status',
            render:function(data){
                return `${data == 0 ? `Tidak Aktif` : `Aktif`}`
            }
            },
            {data: 'Id_Bunga',
             orderable: false,
             searchable: false,
             render: function(data){
                 return `<a class="btn bg-deep-orange waves-effect" href="Bunga/${data}/edit"><i class="material-icons">edit</i></a>`
                }
            }
        ]
    })
</script>
@endsection
