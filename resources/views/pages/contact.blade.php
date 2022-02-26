@extends('layouts.master')

@section('content')
    @include('includes.header')
    <div class="catalog">
        <div class="image-banner">
            {{-- <h1 class="text">Đây là đoạn văn bản</h1> --}}
            <img src="{{ asset('images/background/03-1602.jpg') }}" alt="">
        </div>
    </div>
    <div class="container">
        
        <div class="contact" width:100>
            <h1>LIÊN HỆ VỚI CHÚNG TÔI</h1>
            <div class="row" style="align-items: center;">
                <div class="col-4">
                    <div>
                        <table width="100%">
                            <tbody>
                                <tr>
                                    <td class="td-left">Địa chỉ</td>
                                    <td class="td-right">5B Tôn Đức Thắng,<br>
                                        Quận 1, Tp. HCM<br>
                                        Việt Nam</td>
                                </tr>
                                <tr>
                                    <td class="td-left">Tiếp tân</td>
                                    <td class="td-right">(+84) 28 3822 2098</td>
                                </tr>
                                <tr>
                                    <td class="td-left">Đặt chỗ</td>
                                    <td class="td-right">(+84) 28 3822 2098</td>
                                </tr>
                                <tr>
                                    <td class="td-left">Fax</td>
                                    <td class="td-right">(+84) 28 3822 5073</td>
                                </tr>
                                <tr>
                                    <td class="td-left">Email</td>
                                    <td class="td-right">info@thelandmarkvietnam.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14877.087949503082!2d105.49864047692607!3d21.22106052431057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134f6ae279b2b6b%3A0xd70e3df9f5076d09!2zdHQuIFbEqW5oIFTGsOG7nW5nLCBWxKluaCBUxrDhu51uZywgVsSpbmggUGjDumMsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1645454995313!5m2!1svi!2s"
                        width="857" height="360" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="message">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputfull" class="form-label">Qúy Danh *</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Ông</option>
                            <option value="1">Bà</option>
                            <option value="2">Cô</option>
                            <option value="3">Chú</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputname" class="form-label">Tên *</label>
                        <input type="text" class="form-control" id="inputname">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPhone" class="form-label">Số điện thoại *</label>
                        <input type="phone" class="form-control" id="inputPhone">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="inputAddress"
                            placeholder="Khu 4 Thị trấn Vĩnh Tường">
                    </div>
                    {{-- <div class="col-12">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2"
                            placeholder="Apartment, studio, or floor">
                    </div> --}}
                    {{-- <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div> --}}

                    <div class="col-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Nội dung tin nhắn</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Vui lòng nhập nội dung</label>
                        </div>
                    </div>
                    <div class="col-12">
                        {{-- <button type="submit" class="btn btn-primary">Gửi đi</button> --}}
                        <button type="button" class="btn btn-outline-info" style="float: right;">Gửi đi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @include('includes.footer')
@endsection
