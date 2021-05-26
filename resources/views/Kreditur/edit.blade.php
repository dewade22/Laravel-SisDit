@extends('Layout.layout')

@section('title')
Edit Kreditur
@endsection

@section('content')
<div class="block-header">
    <h2>
        Halaman Edit Kreditrur
        <small>Halaman Edit Kreditur digunakan untuk melakukan perubahan data kreditur</small>
    </h2>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Edit {{$kreditur->Nama_Kreditur}}</h2>
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
                <form id="form_edit" action="{{route('Krediturs.update', $kreditur->Id_Kreditur)}}" method="POST">
                    {{csrf_field()}}
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="hidden" id="Id_Kreditur" name="Id_Kreditur" value="{{$kreditur->Id_Kreditur}}">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="Nama_Kreditur" minlength="2" maxlength="50" name="Nama_Kreditur" value="{{$kreditur->Nama_Kreditur}}" required>
                                    <label class="form-label">Nama Kreditur</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="Tempat_Lahir" maxlength="50" name="Tempat_Lahir" value="{{$kreditur->Tempat_Lahir}}" required>
                                    <label class="form-label">Tempat Lahir</label>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Text Input</h2>
                            <div class="form-group">
                                <div class="form-line" id="bs_datepicker_container">
                                    <input type="text" id="Tanggal_Lahir" name="Tanggal_Lahir" class="form-control" value="{{$kreditur->Tanggal_Lahir}}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <h2 class="card-inside-title">Jenis Kelamin</h2>
                                <div class="demo-radio-button">
                                    <input name="Jenis_Kelamin" type="radio" id="laki" class="with-gap radio-col-red" value="L" {{$kreditur->Jenis_Kelamin == "L" ? "checked" : ""}}/>
                                    <label for="laki">Laki-Laki</label>
                                    <input name="Jenis_Kelamin" type="radio" id="perempuan" class="with-gap radio-col-red" value="P" {{$kreditur->Jenis_Kelamin == "P" ? "checked" : ""}}/>
                                    <label for="perempuan">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="Pekerjaan" minlength="2" maxlength="50" name="Pekerjaan" value="{{$kreditur->Pekerjaan}}" required>
                                    <label class="form-label">Pekerjaan</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" id="Telepon" minlength="4" maxlength="15" name="Telepon" value="{{$kreditur->Telepon}}" required>
                                    <label class="form-label">Telepon</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea style="height:150px" class="form-control" id="Alamat" maxlength="255" name="Alamat" required>{{$kreditur->Alamat}}</textarea>
                                    <label class="form-label">Alamat</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" id="No_KTP" minlength="10" maxlength="15" name="No_KTP" value="{{$kreditur->No_KTP}}" required>
                                    <label class="form-label">Nomor KTP</label>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="col-md-2 col-md-offset-5"><input type="submit" class="btn btn-primary form-control" value="Edit"></div>
                    </div>

                    {!! method_field('PUT') !!}
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css_section')
<link rel="stylesheet" href="{{asset('adminasset/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" />
<link rel="stylesheet" href="{{asset('adminasset/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" />
@endsection

@section('js_section')
<script type="text/javascript" src="{{asset('adminasset/plugins/momentjs/moment.js')}}" ></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}" ></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}" ></script>
<!--Validation Engine-->
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-validation/jquery.validationEngine-en.js')}}"></script>
<script type="text/javascript" src="{{asset('adminasset/plugins/jquery-validation/jquery.validate.js')}}"></script>


<script type="text/javascript" src="{{asset('Backend/Kreditur/edit.js')}}"></script>
@endsection
