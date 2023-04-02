@extends('frontend.layout')
@section('title',"Tüm odalar")
@section('content')
    <section ng-controller="RoomsController" class="accomodation_area section_gap">
        <div class="container mb-3">
            <div class="section_title text-center">
                <h2 class="title_color">Oda Rezervasyon</h2>
                <p>Hepimiz kalbi gençliğe ait bir çağda yaşıyoruz. Son derece hızlı hale gelen hayat</p>
            </div>
            <div  class="row mb_30">
                <div ng-repeat="room in rooms" class="col-lg-4 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="{{url('/')}}/frontend/image/@{{room.image}}" alt="">
                            <a href="{{url('/')}}/rooms/detail/@{{room.id}}" class="btn theme_btn button_hover">Odayı İncele</a>
                        </div>
                        <a href="#"><h4 class="sec_h4">@{{room.name}}</h4></a>
                        <h5>@{{room.price}}TL<small>/gecelik</small></h5>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center flex-nowrap mt-4 ">
            <ul class="pagination mt-4">
                <li class="page-item" ng-click="prevPage(paginatePrevUrl)"><a class="page-link" href="#">Geri</a></li>
                <li class="page-item" ng-repeat="i in [].constructor(paginateCount) track by $index"><a class="page-link" ng-click="goToPage($index+1)" href="">@{{$index+1}}</a></li>
                <li class="page-item" ng-click="nextPage(paginateNextUrl)"><a class="page-link" href="#">İleri</a></li>
            </ul>
        </div>
    </section>
@endsection
@section('css') @endsection
@section('top-js')
    <script src="{{asset('frontend')}}/http-services/roomController.js"></script>
@endsection
