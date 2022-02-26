@extends('layouts.master')

@section('content')
    @include('includes.header')
    <div class="catalog">
        <div class="image-banner">
            {{-- <h1 class="text">Đây là đoạn văn bản</h1> --}}
            <img src="{{ asset('images/background/banner-web.jpg') }}" alt="">
        </div>
        <div class="collect-product-detail">
            <div class="container">
                
                <div class="product-image">
                    <h1>Sơn ART SƠN CỦA MỌI NHÀ</h1>
                    <figure class="figure">
                        <img src="{{ asset('images/product/kova/sp1.png') }}" class="figure-img img-fluid rounded"
                            alt="...">
                    </figure>
                </div>
                <div class="row">
                    {{-- <div class="col-4">
                        <div class="left-title">TÍNH NĂNG NỔI BẬT</div>
                    </div>
                    <div class="col-8">
                        <div class="advantage right-title">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="advantage_item">
                                        <img src="/upload/a1-1.jpg" alt="CHỐNG THẤM CAO CẤP">
                                        <span>CHỐNG THẤM CAO CẤP</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="advantage_item">
                                        <img src="/upload/a2-1.jpg" alt="BỀN MÀU">
                                        <span>BỀN MÀU</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="advantage_item">
                                        <img src="/upload/a3-1.jpg" alt="CHỐNG RONG RÊU,<br>NẤM MỐC">
                                        <span>CHỐNG RONG RÊU,<br>NẤM MỐC</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="advantage_item">
                                        <img src="/upload/a4-1.jpg" alt="CHE LẤP KHE NỨT">
                                        <span>CHE LẤP KHE NỨT</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="advantage_item">
                                        <img src="/upload/a5-1.jpg" alt="THÂN THIỆN<br>VỚI MÔI TRƯỜNG">
                                        <span>THÂN THIỆN<br>VỚI MÔI TRƯỜNG</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="section section_advantages section_info">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="left-title">TÍNH NĂNG NỔI BẬT</div>
                                </div>
                                <div class="col-md-8">
                                    <div class="advantage right-title">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="advantage_item">
                                                    <img src="{{ asset('images/quality/a1-1.jpg') }}" alt="CHỐNG THẤM CAO CẤP">
                                                    <span>CHỐNG THẤM CAO CẤP</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="advantage_item">
                                                    <img src="{{ asset('images/quality/a2-1.jpg') }}" alt="BỀN MÀU">
                                                    <span>BỀN MÀU</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="advantage_item">
                                                    <img src="{{ asset('images/quality/a3-1.jpg') }}" alt="CHỐNG RONG RÊU,<br>NẤM MỐC">
                                                    <span>CHỐNG RONG RÊU,<br>NẤM MỐC</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="advantage_item">
                                                    <img src="{{ asset('images/quality/a4-1.jpg') }}" alt="CHE LẤP KHE NỨT">
                                                    <span>CHE LẤP KHE NỨT</span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="advantage_item">
                                                    <img src="{{ asset('images/quality/a5-1.jpg') }}" alt="THÂN THIỆN<br>VỚI MÔI TRƯỜNG">
                                                    <span>THÂN THIỆN<br>VỚI MÔI TRƯỜNG</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container section_info">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-title">MÔ TẢ SẢN PHẨM</div>
                            </div>
                            <div class="col-md-8">
                                <div class="right-title">
                                    <p><span style="color: #ff0000;"><strong>Sơn ngoài trời cao cấp KOVA HydroProof
                                                CT-04<sup>TM</sup></strong></span> với công thức từ &nbsp;Pure Acrylic và
                                        Silicon biến tính, ngăn chặn sự thấm nước từ ngoài vào màng sơn, chống lại sự hình
                                        thành những vết nứt* trên màng sơn mới và che lấp những vết nứt* sẵn có trên màng
                                        sơn cũ.</p>
                                    <p>Lớp màng bảo vệ KOVA HydroProof CT-04<sup>TM</sup> với tính năng chống thấm cao cấp
                                        và đàn hồi cực cao giúp bảo vệ tường chống lại sự xâm nhập của nước từ bên ngoài.
                                        Đồng thời, màng sơn co giãn tuyệt hảo với độ bám dính vượt trội, hạn chế và che lấp
                                        vết nứt*, giúp bề mặt tường luôn bền chắc và mới đẹp.</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container section_info">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-title">ĐẶC TÍNH<br><strong>VƯỢT TRỘI</strong></div>
                            </div>
                            <div class="col-md-8">
                                <div class="right-title">
                                    <ul>
                                        <li>Chống thấm cao cấp hoàn hảo, chịu chùi rửa tốt.</li>
                                        <li>Độ co giãn cao, giúp che lấp vết nứt nhỏ cho tường.</li>
                                        <li>Màng sơn bền màu, cực bóng.</li>
                                        <li>Chống rong rêu, nấm mốc.</li>
                                        <li>Chịu thời tiết khắc nghiệt, chịu tia cực tím cực tốt.</li>
                                        <li>Không cháy, không độc hại, không chứa chì, thủy ngân và các chất độc hại</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container section_info">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-title">THÔNG TIN SẢN PHẨM</div>
                            </div>
                            <div class="col-md-8">
                                <div class="right-title">
                                    <p><strong>Đóng gói</strong></p>
                                    <p>Thùng 4kg; Thùng 20kg</p>
                                </div>
                                <div class="right-title">
                                    <p><strong>Bề mặt áp dụng </strong></p>
                                    <p>Các bề mặt ngoài trời của tường bê tông, vữa xi măng sau khi sử dụng hệ thống sản
                                        phẩm đề nghị của KOVA theo thứ tự: Chống Thấm CT-11A Plus Tường, bột trét/ Mastic
                                        dẻo ngoài trời KOVA và sơn lót kháng kiềm ngoài trời KOVA.</p>
                                </div>
                                <div class="right-title">
                                    <p><strong>Thời gian khô bề mặt lý thuyết</strong></p>
                                    <p>30 phút, tùy thuộc vào điều kiện thời tiết.</p>
                                </div>
                                <div class="right-title">
                                    <p><strong>Định mức lý thuyết </strong></p>
                                    <p>6.0- 6.5m<sup>2</sup>/kg/2 lớp. Tùy thuộc yêu cầu thi công, bề mặt và kỹ thuật thi
                                        công</p>
                                </div>
                                <div class="right-title">
                                    <p><strong>Thành phần cấu tạo </strong></p>
                                    <p>Pure Acrylic, Titan Oxit, các phụ gia hoạt tính và các chất bổ trợ</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="container section_info">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-title">HƯỚNG DẪN THI CÔNG</div>
                            </div>
                            <div class="col-md-8">

                                <div class="right-title">
                                    <p><strong>Chuẩn bị bề mặt </strong></p>
                                    <ul style="padding-inline-start: 16px;">
                                        <li>Tường cũ phải cạo bỏ dầu mỡ, rêu mốc, các lớp sơn, vôi cũ sau đó rửa kỹ bằng
                                            nước sạch và để khô.</li>
                                        <li>Tường mới phải để khô và ổn định kết cấu (tối thiếu 12-15 ngày). Làm sạch bụi
                                            bẩn.</li>
                                        <li>Nếu cần làm phẳng tường phải sử dụng Bột Trét/ Mastic Dẻo.</li>
                                        <li>Bề mặt hồ vữa bắt buộc phải dùng Sơn Lót Kháng Kiềm Ngoài Trời trước khi dùng
                                            sơn phủ.</li>
                                        <li>Để ngăn ngừa tường bị thấm, sản phẩm Chống Thấm CT-11A Plus Tường được khuyến
                                            khích sử dụng.</li>
                                    </ul>
                                </div>
                                <div class="right-title">
                                    <p><strong>Thi công </strong></p>
                                    <p><span style="text-decoration: underline;"><strong>Bước 1</strong></span>: Pha thêm
                                        nước sạch (tuyệt đối không chứa ximăng) cho vừa độ đặc tùy theo nhiệt độ, độ ẩm:</p>
                                    <ul style="padding-inline-start: 16px;">
                                        <li>Màu nhạt - màu trắng: pha thêm 10-15% nước.</li>
                                        <li>Màu đậm: pha 0-5% nước vì sơn màu đậm có độ lỏng cao hơn màu nhạt - màu trắng.
                                        </li>
                                        <li>Khuấy lại cho sơn đồng nhất.</li>
                                    </ul>
                                    <p><span style="text-decoration: underline;"><strong>Bước 2</strong></span>: Thi công
                                        lên bề mặt sơn lót 2 lớp sơn. Mỗi lớp cách nhau 3-4 giờ.</p>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="container section_info">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-title">LƯU Ý</div>
                            </div>
                            <div class="col-md-8">

                                <div class="right-title">
                                    <ul>
                                        <li>Sơn có độ bóng cao nên hạn chế dặm vá do có thể gây lệch màu. Lăn lại một lớp
                                            nếu cần.</li>
                                        <li>Khuấy sơn thật đều khi thi công.</li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="container section_info">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-title">THÔNG TIN VỀ AN TOÀN, SỨC KHỎE VÀ MÔI TRƯỜNG</div>
                            </div>
                            <div class="col-md-8">

                                <div class="right-title">
                                    <p>Môi trường làm việc phải thông thoáng. Mang găng tay, khẩu trang và kính bảo vệ mắt
                                        trong lúc thi công. Khi bị dính sơn vào mắt nên rửa với nhiều nước sạch và đến gặp
                                        bác sĩ ngay. Vui lòng tham khảo tài liệu kỹ thuật và tài liệu an toàn mới nhất trước
                                        khi sử dụng.</p>
                                </div>


                            </div>
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
        </div>
    </div>


    @include('includes.footer')
@endsection
