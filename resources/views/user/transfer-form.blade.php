<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ url("/") }}"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="user/user-page/images/logomba.png" rel="icon"/>
    <title>Money Transfer</title>
    <meta name="description" content="Modern Bank online banking">
    <!-- Web Fonts
    ============================================= -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- Stylesheet
    ============================================= -->
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/font-awesome/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/bootstrap-select/css/bootstrap-select.min.css"/>
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/currency-flags/css/currency-flags.min.css"/>
    <link rel="stylesheet" type="text/css" href="user/user-page/css/stylesheet.css"/>

</head>
<body>
@extends("layouts.layout2")


<!-- Document Wrapper
============================================= -->
<div id="main-wrapper">

    <!-- Content
    ============================================= -->
    <div id="content" class="py-4">
        <div class="container">

            <!-- Steps Progress bar -->
            <div class="row mt-4 mb-5">
                <div class="col-lg-11 mx-auto">
                    <div class="row widget-steps">
                        <div class="col-4 step active">
                            <div class="step-name">Details</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a></div>
                        <div class="col-4 step disabled">
                            <div class="step-name">Confirm</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a></div>
                        <div class="col-4 step disabled">
                            <div class="step-name">Success</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="#" class="step-dot"></a></div>
                    </div>
                </div>
            </div>
            <h2 class="fw-400 text-center mt-3">Chuy???n Kho???n Qua S??? T??i Kho???n</h2>
            <p class="lead text-center mb-4">An to??n, Nhanh ch??ng, Thu???n ti???n.</p>
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <div class="bg-white shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
                        <h3 class="text-5 fw-400 mb-3 mb-sm-4">Th??ng tin chuy???n kho???n</h3>
                        <hr class="mx-n3 mx-sm-n5 mb-4">
                        <!-- Send Money Form
                        ============================ -->
                        <form id="form-send-money" action="{{url("/transfer-confirm",["account"=>$account->id])}}"
                              method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="bankID" class="form-label">Ch???n Ng??n H??ng</label>
                                <select class="form-select" id="bank_id" aria-label="Default select example">
                                    <option selected>Vui L??ng Ch???n Ng??n H??ng</option>
                                    @foreach($bank as $b)
                                        <option name="bank_id" value="{{$b->id}}">{{$b->name}}</option>
                                    @endforeach
                                </select></div>
                            <div class="mb-3">
                                <label for="recieverID" class="form-label">S??? T??i Kho???n</label>
                                <div class="input-group">
                                    <input type="text" required class="form-control" data-bv-field="ReceiverID"
                                           id="receiverID" name="account" placeholder="S??? t??i kho???n">

                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="recieverID" class="form-label">T??n T??i Kho???n</label>
                                <input type="button" onclick="findName()" class="form-control" value="" id="userName">

                            </div>
                            <div class="mb-3">
                                <label for="recipientGets" class="form-label">S??? ti???n</label>
                                <div class="input-group">
                                    <span class="input-group-text">VN??</span>
                                    <input type="number" required class="form-control" name="money"
                                           data-bv-field="recipientGets" id="recipientGets" min="0"
                                           onkeyup="showMoney()" placeholder="">
                                    <span class="input-group-text p-0">
                    </span>
                                </div>
                            </div>
                            <div class="mb-4 mb-sm-5">
                                <label for="description" class="form-label">N???i dung chuy???n kho???n</label>
                                <textarea class="form-control" rows="4" name="description" required
                                          placeholder="Nh???p n???i dung chuy???n kho???n"></textarea>
                            </div>
                            <hr>

                            <p>Tong<span class="float-end" id="totalMoney"></span></p>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Continue</button>
                            </div>
                        </form>
                        <!-- Send Money Form end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content end -->


</div>
<!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->

<!-- Script -->
<script src="user/user-page/vendor/jquery/jquery.min.js"></script>
<script src="user/user-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="user/user-page/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="user/user-page/js/theme.js"></script>
<script>
    function findName() {
        var bank = $("#bank_id").val();
        var account = $("#receiverID").val();
        $.ajax({
            url: "/findname" + "?bank_id=" + bank + "&account=" + account,
            method: "get",
            success: function (rs) {
                $("#userName").val(rs.user)
            }
        })
    }

    function showMoney() {
        var phi = $("#phi").val()
        var money = $("#recipientGets").val()
        var total =
            $.ajax({
                url: "/showmoney",
                method: "get",
                success: function (rs) {
                    var totalmoney = $("#totalMoney").text(money)
                }
            })
    }

</script>
<script>
</script>

</body>
</html>
