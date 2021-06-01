@extends('Layout.layout')

@section('title')
{{$bunga->pageTitle}}
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
            @if ($bunga->pageType == 'create')
                <h2>Add New Bunga</h2>

            @else
                <h2>Edit Bunga</h2>

            @endif
            </div>
            <div class="body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if ($bunga->pageType == 'create')
                <form id="form-bunga" action="{{route($bunga->route)}}" method="POST">
                @else
                <form id="form-bunga" action="{{route($bunga->route, $bunga->Id_Bunga)}}" method="POST">
                @endif
                {{csrf_field()}}
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input type="hidden" id="Id_Bunga" name="Id_Bunga" value="{{$bunga->Id_Bunga}}">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="Bunga_Kredit" name="Bunga_Kredit" value="{{$bunga->Bunga_Kredit}}" required>
                                    <label class="form-label">Bunga Kredit (%) <span class="text-danger"> *</span></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Bunga<span class="text-danger">*</span></label>
                                <select class="form-control show-tick" id="Jenis_Bunga" name="Jenis_Bunga" required>
                                    <option value="">Pilih Jenis Bunga</option>
                                    <option value="Menetap"{{$bunga->Jenis_Bunga == 'Menetap' ? 'selected' : ''}}>Menetap</option>
                                    <option value="Menurun"{{$bunga->Jenis_Bunga == 'Menurun' ? 'selected' : ''}}>Menurun</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-12 col-xs-12"><input type="submit" class="btn btn-primary form-control" value="Save"></div>
                    </div>
                @if ($bunga->pageType == 'update')
                {!! method_field('PUT') !!}
                @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css_section')
<link rel="stylesheet" href="{{asset('adminasset/plugins/bootstrap-select/css/bootstrap-select.css')}}"
@endsection

@section('js_section')

@endsection
