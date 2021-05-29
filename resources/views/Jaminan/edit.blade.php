@extends('Layout.layout')

@section('title')
JAMINAN
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Edit {{$jaminan->Jaminan}}</h2>
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
                    {{ Form::open(array('route' => ['Jaminan.update', $jaminan->Id_Jaminan], 'method' => 'patch', 'files' => true, 'id' => 'form-edit')) }}
                    {{ Form::hidden('id', $jaminan->Id_Jaminan, array('id' => 'Id_Jaminan')) }}
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    {{ Form::text('Jaminan', $jaminan->Jaminan, array( 'id'=>'Jaminan', 'class' => 'form-control', 'required'=>'required', 'pattern'=>'^[\w-]*$', 'minlength'=>'5', 'maxlength'=>'50')) }}
                                    <label class="form-label">Jaminan</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    {{{ Form::text('Besar_Pinjaman_Maksimal', number_format($jaminan->Besar_Pinjaman_Maksimal) , array('id'=>'Besar_Pinjaman_Maksimal','class'=>'form-control', 'required'=>'required', 'number', 'minlength'=>'5')) }}}
                                    <label class="form-label">Maksimum Pinjaman</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    {{Form::text('Besar_Pinjaman_Minimal', number_format($jaminan->Besar_Pinjaman_Minimal), array('id'=>'Besar_Pinjaman_Minimal', 'class'=>'form-control', 'required'=>'required', 'number', 'minlength'=>'5'))}}
                                    <label class="form-label">Minimum Pinjaman</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    {{Form::number('Jangka_Waktu_Maksimal', $jaminan->Jangka_Waktu_Maksimal, array('class'=>'form-control', 'required'=>'required', 'number'))}}
                                    <label class="form-label">Jangka Waktu Maksimum (Bulan)</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    {{Form::number('Jangka_Waktu_Minimal', $jaminan->Jangka_Waktu_Minimal, array('class'=>'form-control', 'required'=>'required', 'number'))}}
                                    <label class="form-label">Jangka Waktu Minimum (Bulan)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-md-offset-5"><input type="submit" class="btn btn-primary form-control" value="Edit"></div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js_section')
<!--Jquery Validation-->
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-validation/jquery.validationEngine-en.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-validation/jquery.validate.js')}}"></script>

<!--Custom-->
<script type="text/javascript" src="{{asset('Backend/Jaminan/edit.js')}}"></script>
@endsection
