@extends("user.layout")
@section("main_content")
    <section class="loan-deatils-area bg_disable pt-140 pb-120"style="margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="stepper-widget mt-sm-5 px-3 px-sm-0">
                        <ul>
                            <li class=" complete  mt-0"><a href="{{url("/loan")}}">
                                    <div class="number"><i class="icon_check"></i> <span>1</span></div>Chi tiết khoản vay
                                </a>
                            </li>
                            <li class="complete"><a href="{{url("/personal")}}">
                                    <div class="number"><i class="icon_check"></i> <span>2</span></div>
                                    Thông tin cá nhân
                                </a>
                            </li>
                            <li class=" active"><a href="{{url("/documantUp")}}}">
                                    <div class="number"><i class="icon_check"></i> <span>3</span></div>
                                    Tải lên tài liệu
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="loan-details-widget bg_white">
                        <form action="#">
                            <div class="row gy-4">
                                <div class="col-12">
                                    <div class="doc-info">
                                        <span>1.</span>
                                        <p>Ảnh Tự Sướng. Ảnh cá nhân của bạn. Các bức ảnh phải được thực hiện bởi chính mình. Bức ảnh phải cho thấy khuôn mặt và cả hai vai của bạn. (Xin đính kèm tập tin)</p>
                                    </div>
                                    <div class="doc-info mt-3">
                                        <span>2.</span>
                                        <p>Chứng minh nhân dân. Thẻ ID Chính phủ hợp lệ. Mặt trước và mặt sau. CMND gốc. Ảnh đầy đủ. Tất cả các phần của thẻ ID phải được hiển thị. Bốn góc của chứng minh thư phải hiển thị trên ảnh. ID phải là bản gốc và hợp lệ. CMND phải thật rõ ràng. (Xin đính kèm tệp) **</p>
                                    </div>
                                </div>
                                <div class="col-12">

                                    <div id="dropzone" class="dropzone">
                                        <form action="upload.php" method="post" enctype="multipart/form-data">
                                            Select image to upload:
                                            <input type="file" name="image">
                                        </form>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="agreeBox">
                                        <label class="form-check-label" for="agreeBox">Tôi đồng ý rằng thông tin được cung cấp là đúng sự thật, chính xác và đầy đủ kể từ ngày nộp đơn này. **</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="nav-btn d-flex flex-wrap justify-content-between">
                                        <a href="{{url("/personal")}}"
                                           class="prev-btn theme-btn-primary_alt theme-btn"><i
                                                class="arrow_left"></i>Quay lại
                                        </a>
                                        <button type="submit"
                                                class="theme-btn-primary_alt theme-btn">Nộp</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
