@extends('Layout.layout')

@section('title')
Dashboard
@endsection

@section('content')
<div class="block-header">
    <h2>DASHBOARD</h2>
</div>
<div class="row clear-fix">
    <!--Widget Kreditur-->
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-blue hover-expand-effect">
            <div class="icon">
                <i class="material-icons">person</i>
            </div>
            <div class="content">
                <div class="text">KREDITUR</div>
                <div class="number count-to" data-from="0" data-to="{{$Kreditur}}" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <!--Widget Pengajuan Kredit-->
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-orange hover-expand-effect">
            <div class="icon">
                <i class="material-icons">thumb_up</i>
            </div>
            <div class="content">
                <div class="text">Pengajuan Disetujui</div>
                <div class="number count-to" data-from="0" data-to="{{$Pengajuan}}" data-speed="1000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <!--Widget Total Kredit-->
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-red hover-expand-effect">
            <div class="icon">
                <i class="material-icons">attach_money</i>
            </div>
            <div class="content">
                <div class="text">Total Kredit</div>
                <div class="number count-to" data-from="0" data-to="{{$Kredit}}" data-speed="3000" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
    <!--Widget Total Angsuran-->
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-green hover-expand-effect">
            <div class="icon">
                <i class="material-icons">monetization_on</i>
            </div>
            <div class="content">
                <div class="text">Total Angsuran</div>
                <div class="number count-to" data-from="0" data-to="{{$Angsuran}}" data-speed="2500" data-fresh-interval="20"></div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js_section')
<script src="{{asset('Backend/Dashboard/index.js')}}"></script>
@endsection
