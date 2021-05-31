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
                {{ Form::open(array('route' => $bunga->route, 'method' => 'post', 'files' => true, 'id' => 'form-bunga')) }}
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                {{{ Form::number('Bunga_Kredit', $bunga->Bunga_Kredit, array('id'=>'Bunga_Kredit', 'class'=>'form-control', 'required'=>'required', 'number')) }}}
                                <label class="form-label">Bunga Kredit (%) <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Bunga <span class="text-danger"> *</span></label>
                            {{{ Form::select('Jenis_Bunga', ['Menurun'=>'Menurun', 'Menetap'=>'Menetap'], $bunga->Jenis_Bunga, ['placeholder' => 'Pilih Tipe Bunga...', 'id'=>'Jenis_Bunga', 'class'=>'form-control', 'style'=>'']) }}}
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection

@section('css_section')

@endsection

@section('js_section')

@endsection
