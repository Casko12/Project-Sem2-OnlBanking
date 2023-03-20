<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="user/user-page/images/logomba.png" rel="icon" />
    <meta name="description" content="Modern Bank online banking">
    <!-- Web Fonts
    ============================================= -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- Stylesheet
    ============================================= -->
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="user/user-page/vendor/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="user/user-page/css/stylesheet.css" />
    <!-- Colors Css -->
</head>
<body>
<div class="bg-white text-center shadow-sm rounded p-3 pt-sm-4 pb-sm-5 px-sm-5 mb-4">
    <div class="my-4">
        <p class="text-success text-20 lh-1"><i class="fas fa-check-circle"></i></p>
        <p class="text-success text-8 fw-500 lh-1">Success!</p>
        <p class="lead">Transactions Complete</p>
    </div>
    <p class="text-3 mb-4">You've Succesfully sent <span class="text-4 fw-500">{{$reveice["amount"]}}</span> to <span> class="fw-500">{{$user->name}}</span>, See transaction details under <a class="btn-link" href="#">Activity</a>.</p>
<script src="user/user-page/vendor/jquery/jquery.min.js"></script>
<script src="user/user-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="user/user-page/vendor/daterangepicker/moment.min.js"></script>
<script src="user/user-page/vendor/daterangepicker/daterangepicker.js"></script>
<script src="user/user-page/js/theme.js"></script>
</body>
</html>





