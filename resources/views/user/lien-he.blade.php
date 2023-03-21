@extends("user.layout")
@section("title")
    Liên hệ với chúng tôi
@endsection
@section("main_content")
    <section class="pt-140 pb-140 get-touch-area bg_white" style="margin-top: 80px">
        <div class="container">
            <div class="row gy-4 gy-lg-0">
                <div class="col-lg-5">
                    <div class="section-title text-start">
                        <h2>Hãy liên lạc với chúng tôi.</h2>
                        <p>Bạn muốn giữ liên lạc với tôi không? Chúng tôi rất muốn nghe từ bạn. Đây là cách bạn có thể liên hệ với chúng tôi...</p>
                    </div>
                    <div class="row mt-55">
                        <div class="col-sm-6">
                            <div class="get-touch-box">
                                <div class="icon">

                                    <img src="/user/html/img/contact/call-outline.png" alt="call icon">
                                </div>
                                <div>
                                    <p>Gọi đường dây trợ giúp:</p>
                                    <span>0329.226.456</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="get-touch-box">
                                <div class="icon">
                                    <img src="/user/html/img/contact/mail-open-outline.png" alt="mail icon">
                                </div>
                                <div>
                                    <p>Gửi email cho chúng tôi:</p>
                                    <span>thanhtvth2203024@fpt.edu.vn</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="get-touch-box mt-30">
                                <div class="icon">
                                    <i class="icon_pin_alt "></i>
                                </div>
                                <div>
                                    <p>Vị trí</p>
                                    <span>8 Tôn Thất Thuyết, Cầu Giấy, Hà Nội</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="get-touch-box mt-30">
                                <div class="icon">

                                    <i class="icon_clock_alt "></i>
                                </div>
                                <div>
                                    <p>Giờ làm việc</p>
                                    <span>Thứ Hai - Thứ Bảy: 9:00 - 19:00 Chủ nhật: 12:00 - 18:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form-widget">
                        <form action="{{url("/create-contact")}}" role="form" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="f-name">Họ và tên</label>
                                    <input type="text" id="f-name" name="name" class="form-control"
                                           placeholder="Tên của bạn?" required>
                                </div>
                                <div class="col-md-6 mt-20 mt-md-0">
                                    <label for="email-address">Email</label>
                                    <input type="email" id='email-address' name="email" class="form-control"
                                           placeholder="thanh@example.com" required>
                                </div>
                                <div class="col-md-12 mt-20">
                                    <label for="form-sub">Chủ để</label>
                                    <input type="text" id="form-sub" name="subject" class="form-control"
                                           placeholder="chủ đề" required>
                                </div>
                                <div class="col-md-12 mt-20">
                                    <label for="form-text">Nội dung</label>
                                    <textarea cols="30" rows="5" name="description" id="form-text"
                                              class="form-control pt-15" placeholder="Hãy để lại ý kiến của bạn ở dưới đây..."
                                              required></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <p class="policy-text">
                                        Bằng cách gửi biểu mẫu này, bạn đồng ý cho phép chúng tôi thỉnh thoảng gửi email cho bạn về các sản phẩm và dịch vụ của chúng tôi. Bạn có thể hủy đăng ký nhận email bất cứ lúc nào và chúng tôi sẽ không bao giờ chuyển email của bạn cho bên thứ ba.
                                    </p>
                                </div>
                                <div class="col-12 mt-35">
                                    <button type="submit" class="theme-btn theme-btn-lg w-100">Gửi ngay</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
