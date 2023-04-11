@extends('frontend.layout')
@section('title',"Oda Detay")
@section('content')
<div ng-controller="RoomController" >
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Oda Detayı</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('index')}}">Anasayfa</a></li>

                <li class="active">Oda Detay </li>
                <li>@{{room.name}}</li>

            </ol>
        </div>
    </div>
</section>

<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <h2 class="title title_color">@{{room.name}}</h2>
                    <p>@{{room.info}}</p>
                    <div class="form-group float-left">
                        <label>Başlangıç Tarihi</label>
                        <input id="startDate" class="form-control" type="date">
                    </div>
                    <div class="form-group float-left">
                        <label>Bitiş Tarihi</label>
                        <input id="endDate" class="form-control" type="date">
                    </div>
                    <a href="#" class="button_hover theme_btn_two col-md-12">Odayı kirala</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{url('/')}}/frontend/image/@{{room.image}}" alt="img">
            </div>
        </div>
    </div>
</section>
</div>
@endsection
@section('css') @endsection
@section('top-js')
    <script>
        const today = new Date();
        const day = String(today.getDate()).padStart(2,'0');
        const month = String(today.getMonth() + 1).padStart(2,'0');
        const year = today.getFullYear();
        const todayFormatted = `${day}-${month}-${year}`;
        document.getElementById('startDate').value = todayFormatted;
    </script>
    <script>var roomId={{$id}}</script>
    <script src="{{asset('frontend')}}/http-services/roomController.js"></script>
@endsection
