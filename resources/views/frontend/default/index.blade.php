@extends('frontend.layout')
@section('title',"Anasayfa")
@section('content')
<!--================Banner Area =================-->
<div>
<section   class="banner_area">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h6>MONOTON HAYATTAN UZAK</h6>
                <h2>Zihnini rahatlat</h2>
                <a href="#" class="btn theme_btn button_hover">Hemen Üye Ol</a>
            </div>
        </div>
    </div>
    <div class="hotel_booking_area position">
        <div id="room-rented" class="container">

        </div>
    </div>
</section>
<!--================Banner Area =================-->

<!--================ Accomodation Area  =================-->
<section  class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Oda Rezervasyon</h2>
            <p>Hepimiz kalbi gençliğe ait bir çağda yaşıyoruz. Son derece hızlı hale gelen hayat</p>
        </div>
        <div id="room-card" class="row mb_30">

        </div>

    </div>
    <div class="d-flex justify-content-center flex-nowrap mt-4">
        <div>
            <a href="#" style="width: 400px" class="btn theme_btn button_hover">Tüm Odaları Görüntüle</a>
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->
</div>
<!--================ Facilities Area  =================-->
<section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
    </div>
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w">Kraliyet Tesisleri</h2>
            <p>Çevre dostu sisteme son derece aşık olanlar.</p>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restoran</h4>
                    <p>Teknolojinin ve gücün hızla ilerlemesi nedeniyle internet kullanımı daha yaygın hale gelmektedir.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Spor kulübü</h4>
                    <p>Teknolojinin ve gücün hızla ilerlemesi nedeniyle internet kullanımı daha yaygın hale gelmektedir.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Yüzme havuzu</h4>
                    <p>Teknolojinin ve gücün hızla ilerlemesi nedeniyle internet kullanımı daha yaygın hale gelmektedir.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-car"></i>Araba kiralamak</h4>
                    <p>Teknolojinin ve gücün hızla ilerlemesi nedeniyle internet kullanımı daha yaygın hale gelmektedir.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-construction"></i>spor salonu</h4>
                    <p>Teknolojinin ve gücün hızla ilerlemesi nedeniyle internet kullanımı daha yaygın hale gelmektedir.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facilities_item">
                    <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                    <p>Teknolojinin ve gücün hızla ilerlemesi nedeniyle internet kullanımı daha yaygın hale gelmektedir.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Facilities Area  =================-->
<script id="rentedData" type="text/template">
    <div class="hotel_booking_table">
        <div class="col-md-3">
            <h2>Odanızı <br>Ayırtın</h2>
        </div>
        <div class="col-md-9">
            <div class="boking_table">
                <div class="row">
                    <div class="col-md-4">
                        <div class="book_tabel_item">
                            <div class="form-group">
                                <div class="form-group">
                                    <input style="background-color: #04091e;border-color:#2b3146;color: #777777;" type='date' class="form-control" placeholder="Başlangıç Tarihi"/>
                                </div>
                            </div>
                            <div class="form-group mt-2 mb-2">
                                    <input style="background-color: #04091e;border-color:#2b3146;color: #777777;" type='date' class="form-control" placeholder="Bitiş Tarihi"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div  class="book_tabel_item">
                            <div  class="form-group">
                                <select style="background-color: #04091e;border-color:#2b3146;color: #777777;" class="form-control">
                                    <option data-display="Yetişkin">Yetişkin</option>
                                    <option ng-repeat="x in rooms" value="1">Çocuk</option>
                                    <option value="2">Aile</option>
                                    <option value="3">Evli Çift</option>
                                </select>
                            </div>
                            <div  class="form-group mt-2 mb-2">
                                <select style="background-color: #04091e;border-color:#2b3146;color: #777777;" class="form-control">
                                @{{ #rooms }}
                                    <option>@{{ people_count }}</option>
                                @{{ /rooms }}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="book_tabel_item">

                            <a class="book_now_btn button_hover" href="#">Odayı Tut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>
<script id="roomsData" type="text/template">
    @{{#banners}}
    <div class="col-lg-3 col-sm-6">
        <div class="accomodation_item text-center">
            <div class="hotel_img">
                <img src="{{url('/')}}/frontend/image/@{{image}}" alt="">
                <a href="#" class="btn theme_btn button_hover">Odayı İncele</a>
            </div>
            <a href="#"><h4 class="sec_h4">@{{ name }}</h4></a>
            <h5>@{{price}}TL<small>/gecelik</small></h5>
        </div>
    </div>
    @{{/banners}}
</script>
@endsection
@section('css') @endsection
@section('js')
    <script src="{{asset('frontend')}}/http-services/index.js"></script>
@endsection
