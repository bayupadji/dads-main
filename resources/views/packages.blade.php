@extends('header')
@section('content')
<section class="hotel_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Top Hotel In Semarang</h2>
                        <p>Best Hotel to give Comfort for our Client</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="{{asset('template/img/hotel1.jpg')}}" alt="">
                        <div class="hover_text">
                            <div class="hotel_social_icon">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="share_icon">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                        <div class="hotel_text_iner">
                            <h3> <a href="#"> Hotel Gets Semarang</a></h3>
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <span>(210 review)</span>
                            </div>
                            <p> Jl. MT. Haryono No.312 - 316, Sarirejo, Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50124</p>
                            <h5>From <span>Rp.650.000</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="{{asset('template/img/hotel2.jpg')}}" alt="">
                        <div class="hover_text">
                            <div class="hotel_social_icon">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="share_icon">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                        <div class="hotel_text_iner">
                            <h3> <a href="#"> Hotel Ciputra Semarang</a></h3>
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <span>(210 review)</span>
                            </div>
                            <p>Jl. Simpang Lima No.1, Pekunden, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50134</p>
                            <h5>From <span>Rp.550.000</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="{{asset('template/img/hotel3.jpg')}}" alt="">
                        <div class="hover_text">
                            <div class="hover_text">
                                <div class="hotel_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="share_icon">
                                    <i class="ti-share"></i>
                                </div>
                            </div>
                        </div>
                        <div class="hotel_text_iner">
                            <h3> <a href="#"> Hotel Horison Semarang</a></h3>
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <span>(210 review)</span>
                            </div>
                            <p>Jl. Mt. Haryono No.32-38, Purwodinatan, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50137</p>
                            <h5>From <span>Rp.500.000</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="event_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event_slider owl-carousel" >
                        <div class="single_event_slider">
                            <div class="row justify-content-end">
                                <div class="col-lg-6 col-md-6">
                                    <div class="event_slider_content">
                                        <h5>Upcoming Event</h5>
                                        <h2>Goa Kreo - Semarang</h2>
                                        <p>Berebut tumpeng makanan dan hasil bumi di Sesaji Rewanda Goa Kreo
                                        </p>
                                        <p>date: <span>17 Aug 2022</span> </p>
                                        <p>Cost: <span>Start from Rp.120.000</span> </p>
                                        <p>Organizer: <span> Sentosa Agency</span> </p>
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <div class="place_review">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn_1">Plan Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_event_slider">
                            <div class="row justify-content-end">
                                <div class="ol-lg-6 col-md-6">
                                    <div class="event_slider_content">
                                        <h5>Upcoming Event</h5>
                                        <h2>Masjid Agung - Semarang</h2>
                                        <p>Sholat Berjamaah imam Mahdi
                                        </p>
                                        <p>date: <span>12 Aug 2019</span> </p>
                                        <p>Cost: <span>FREE</span> </p>
                                        <p>Organizer: <span> MegaTama Sentosa</span> </p>
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <div class="place_review">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn_1">Plan Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_event_slider">
                            <div class="row justify-content-end">
                                <div class="ol-lg-6 col-md-6">
                                    <div class="event_slider_content">
                                        <h5>Upcoming Event</h5>
                                        <h2>Pantai Marina</h2>
                                        <p>Beach Party and Chill
                                        </p>
                                        <p>date: <span>12 Aug 2022</span> </p>
                                        <p>Cost: <span>Start from Rp.200.000</span> </p>
                                        <p>Organizer: <span> Baby Face Agency</span></p> </p>
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <div class="place_review">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn_1">Plan Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="best_services section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>We offered best services</h2>
                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="{{asset('template/img/services_1.png')}}" alt="">
                        <h3> <a href="#"> Transportation</a></h3>
                        <p>All transportation cost we bear</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="{{asset('template/img/services_2.png')}}" alt="">
                        <h3> <a href="#"> Guidence</a></h3>
                        <p>We offer the best guidence for you</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="{{asset('template/img/services_3.png')}}" alt="">
                        <h3> <a href="#"> Accomodation</a></h3>
                        <p>Luxarious and comfortable</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="{{asset('template/img/services_4.png')}}" alt="">
                        <h3> <a href="#"> Discover world</a></h3>
                        <p>Best tour plan for your next tour</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection