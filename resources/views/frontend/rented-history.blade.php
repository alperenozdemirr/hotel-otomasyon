@extends('frontend.layout')
@section('title',"Kiraladığım odalar")
@section('content')
    <div class="col-md-12 p-5"></div>
    <div ng-controller="RentedController" class="d-flex justify-content-center">
        <div class="whole-wrap col-md-10">
        <div class="contanier">
            <div class="section-top-border">

                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">oda tipi</div>
                            <div class="visit">Oda İsmi</div>
                            <div class="visit">Tarih</div>
                            <div class="percentage">Ödeme Durumu</div>
                            <div class="visit">İşlem</div>
                        </div>
                        <div ng-repeat="rented in renteds" class="table-row">
                            <div class="serial">01</div>
                            <div class="country"> <img width="100px" src="{{url('/')}}/frontend/image/@{{ rented.rooms.image }}" alt="photo"></div>
                            <div class="visit">@{{ rented.rooms.name }}</div>
                            <div class="visit">@{{ rented.startDate }} - @{{ rented.endDate }}</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div style="color: brown" ng-if="rented.payment_status === 0">Ödenmedi</div>
                                    <div style="color: #0b2e13" ng-if="rented.payment_status === 1">Onaylandı</div>
                                </div>
                            </div>
                            <div class="visit"><button class="btn btn-info">Detay</button>
                                <button ng-if="rented.payment_status === 0" class="btn btn-dark">Ödeme Yap</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('css') @endsection
@section('top-js')
    <script src="{{asset('frontend')}}/http-services/rentedController.js"></script>
@endsection
