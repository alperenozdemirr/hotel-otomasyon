@extends('frontend.layout')
@section('title',"Tüm odalar")
@section('content')
    <section ng-controller="IndexController" class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Oda Rezervasyon</h2>
                <p>Hepimiz kalbi gençliğe ait bir çağda yaşıyoruz. Son derece hızlı hale gelen hayat</p>
            </div>
            <div  class="row mb_30">
                <div ng-repeat="item in rooms" class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="{{asset('frontend')}}/image/%item.image%" alt="">
                            <a href="#" class="btn theme_btn button_hover">Odayı İncele</a>
                        </div>
                        <a href="#"><h4 class="sec_h4">%item.name%</h4></a>
                        <h5>%item.price%TL<small>/gecelik</small></h5>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center flex-nowrap mt-4">
            <div>
                <a href="#" style="width: 400px" class="btn theme_btn button_hover">Tüm Odaları Görüntüle</a>
            </div>
        </div>
    </section>
@endsection
@section('css') @endsection
@section('js') @endsection
