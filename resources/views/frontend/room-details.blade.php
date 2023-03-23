@extends('frontend.layout')
@section('title',"Oda Detay")
@section('content')

<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Oda Detayı</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('index')}}">Anasayfa</a></li>

                <li class="active">Oda Detay </li>

            </ol>
        </div>
    </div>
</section>

<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <h2 class="title title_color">Oda NAme</h2>
                    <p>Oda DEtay</p>
                    <a href="#" class="button_hover theme_btn_two">Odayı kirala</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('frontend')}}/image/about_bg.jpg" alt="img">
            </div>
        </div>
    </div>
</section>

@endsection
@section('css') @endsection
@section('js') @endsection
