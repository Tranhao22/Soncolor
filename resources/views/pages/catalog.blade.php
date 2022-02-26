@extends('layouts.master')

@section('content')
    @include('includes.header')
    <div class="catalog">
        <div class="image-banner">
            {{-- <h1 class="text">Đây là đoạn văn bản</h1> --}}
            <img src="{{ asset('images/background/banner-web.jpg') }}" alt="">
        </div>
        <div class="collect-product-first">
            <div class="container">
                <h2>SẢN PHẨM</h2>
                <div class="row">
                    <div class="col-3">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                The current link item
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                            <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                            <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1"
                                aria-disabled="true">A disabled link item</a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="product-content">
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12" data-wow-delay="0.3s">
                                <div class="product">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('images/product/kova/sp1.png') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">HYDROPROOF CT-04</h5>
                                            <p class="card-text">Chuyên gia chống thấm và che lấp vết nứt.</p>
                                            <a href="/product" class="btn">Khám phá thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12" data-wow-delay="0.3s">
                                <div class="product">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('images/product/kova/sp1.png') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">HYDROPROOF CT-04</h5>
                                            <p class="card-text">Chuyên gia chống thấm và che lấp vết nứt.</p>
                                            <a href="/product" class="btn">Khám phá thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12" data-wow-delay="0.3s">
                                <div class="product">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('images/product/kova/sp1.png') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">HYDROPROOF CT-04</h5>
                                            <p class="card-text">Chuyên gia chống thấm và che lấp vết nứt.</p>
                                            <a href="/product" class="btn">Khám phá thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12" data-wow-delay="0.3s">
                                <div class="product">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('images/product/kova/sp1.png') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">HYDROPROOF CT-04</h5>
                                            <p class="card-text">Chuyên gia chống thấm và che lấp vết nứt.</p>
                                            <a href="/product" class="btn">Khám phá thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6 col-xs-12" data-wow-delay="0.3s">
                                <div class="product">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('images/product/kova/sp1.png') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">HYDROPROOF CT-04</h5>
                                            <p class="card-text">Chuyên gia chống thấm và che lấp vết nứt.</p>
                                            <a href="/product" class="btn">Khám phá thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="logo-carousel">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{ asset('images/ourcarousel/1.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/ourcarousel/2.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/ourcarousel/3.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/ourcarousel/4.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/ourcarousel/1.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/ourcarousel/2.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/ourcarousel/3.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/ourcarousel/4.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/ourcarousel/1.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/ourcarousel/2.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/ourcarousel/3.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/ourcarousel/4.png') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- <script>
                    $(document).ready(function() {
                        $(".owl-carousel").owlCarousel({
                            loop: true,
                            margin: 10,
                            nav: true,
                            responsive: {
                                0: {
                                    items: 1,
                                },
                                600: {
                                    items: 3,
                                },
                                1000: {
                                    items: 5,
                                },
                            },
                        });
                    });
                </script> --}}
            </div>
        </div>
    </div>


    @include('includes.footer')
@endsection
