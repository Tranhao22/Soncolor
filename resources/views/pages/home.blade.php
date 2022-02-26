@extends('layouts.master')

@section('content')
    @include('includes.header')
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/banner/kova.png') }}" class="d-block w-100 img-fluid" alt="Sơn Kova">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/banner/kova1.png') }}" class="d-block w-100 img-fluid" alt="Sơn Kova">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/banner/kova2.png') }}" class="d-block w-100 img-fluid" alt="Sơn Kova">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="collect-product-first">
        <div class="collect-product">
            <h1>SẢN PHẨM KOVA</h1>
            <div class="product">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/product/kova/sp1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HYDROPROOF CT-04</h5>
                        <p class="card-text">Chuyên gia chống thấm và che lấp vết nứt.</p>
                        <a href="/product" class="btn">Khám phá thêm</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/product/kova/sp2.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HYDROPROOF CT-04</h5>
                        <p class="card-text">Chuyên gia chống thấm và che lấp vết nứt.</p>
                        <a href="/product" class="btn">Khám phá thêm</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/product/kova/sp3.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HYDROPROOF CT-04</h5>
                        <p class="card-text">Chuyên gia chống thấm và che lấp vết nứt.</p>
                        <a href="/product" class="btn">Khám phá thêm</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/product/kova/sp4.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HYDROPROOF CT-04</h5>
                        <p class="card-text">Chuyên gia chống thấm và che lấp vết nứt.</p>
                        <a href="/product" class="btn">Khám phá thêm</a>
                    </div>
                </div>

            </div>
            <button type="button" class="btn btn-outline-danger btn-xt">Xem thêm các sản phẩm khác</button>
            <h1>SẢN PHẨM DULUX</h1>
            <div class="product">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/product/dulux/sp1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HYDROPROOF CT-04</h5>
                        <p class="card-text">Chuyên gia chống thấm và che lấp vết nứt.</p>
                        <a href="/product" class="btn">Khám phá thêm</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/product/dulux/sp2.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HYDROPROOF CT-04</h5>
                        <p class="card-text">Chuyên gia chống thấm và che lấp vết nứt.</p>
                        <a href="/product" class="btn">Khám phá thêm</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/product/dulux/sp3.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HYDROPROOF CT-04</h5>
                        <p class="card-text">Chuyên gia chống thấm và che lấp vết nứt.</p>
                        <a href="/product" class="btn">Khám phá thêm</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/product/dulux/sp4.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HYDROPROOF CT-04</h5>
                        <p class="card-text">Chuyên gia chống thấm và che lấp vết nứt.</p>
                        <a href="/product" class="btn">Khám phá thêm</a>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-outline-danger btn-xt">Xem thêm các sản phẩm khác</button>
        </div>

        <div class="solution-home">
            <div class="solution-content">
                <h2>GIẢI PHÁP</h2>
                <div class="row" style="align-items: center;">
                    <div class="col-3">
                        <h3>Sang Trong</h3>
                        <div class="card" style="">
                            <img src="{{ asset('images/solution/icon-chunha.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Đặt tiêu chí uy tín và chất lượng lên hàng đầu chúng tôi mang đến
                                    những sản phẩm chất lượng tốt ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h3>Giải pháp thi công</h3>
                        <div class="card" style="">
                            <img src="{{ asset('images/solution/icon-thicong.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">OTI cung cấp những sản phẩm chất lượng tốt nhất, đáp ứng đầy đủ
                                    các tiêu chuẩn kỹ thuật của từng ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h3>Giải pháp thẩm mỹ</h3>
                        <div class="card" style="">
                            <img src="{{ asset('images/solution/icon-thammy.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Chúng tôi cung cấp vật liệu đa dạng về mẫu mã, kích thước, mầu
                                    sắc, họa tiết hoa văn. Mang lại ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h3>Giải pháp cho chủ đầu tư</h3>
                        <div class="card" style="">
                            <img src="{{ asset('images/solution/icon-dautu.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">OTI luôn có những nguyên tắc, chuẩn mực và kế hoạch triển khai cho
                                    từng công việc trong mỗi dự án. ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="map-home">
            <div class="row" style="align-items: center;">
                <div class="col-4">
                    <h4>Trung tâm thị trấn Vĩnh Tường</h4>
                    <p>Tận hưởng cuộc sống sang trọng và không gian làm việc tiện nghi giữa lòng thành phố. Hãy ghé thăm
                        Quan COLOR, ngôi nhà của bạn ở thị trấn Vĩnh Tường.</p>
                </div>
                <div class="col-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14877.087949503082!2d105.49864047692607!3d21.22106052431057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134f6ae279b2b6b%3A0xd70e3df9f5076d09!2zdHQuIFbEqW5oIFTGsOG7nW5nLCBWxKluaCBUxrDhu51uZywgVsSpbmggUGjDumMsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1645454995313!5m2!1svi!2s"
                        width="650" height="360" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
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
    </div>
    {{-- <div class="collect-product-first">
        
    </div> --}}

    @include('includes.footer')
@endsection
