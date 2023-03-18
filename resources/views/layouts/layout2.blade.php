<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="user/user-page/images/logomba.png" rel="icon" />
    <meta name="description" content="Modern Bank online banking">
    <title>@yield("title")</title>

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
    @yield("custom_css")
</head>
<body>
@yield("custom_css")
<!-- Preloader -->
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="round_spinner">
            <div class="spinner"></div>
            <div class="text">
                <img style="width: 160px"height="40px" src="/user/html/img/logo/mbanking-03.png" alt="" >
            </div>
        </div>
        <h2 class="head">BẠN CÓ BIẾT KHÔNG?</h2>
        <p style="color: red"></p>
    </div>
</div>
<!-- Preloader End -->

<!-- Document Wrapper
============================================= -->
<div id="main-wrapper">
    <!-- Header
         ============================================= -->
    <header id="header" class="bg-dark-2 header-text-light">
        <div class="container">
            <div class="header-row">
                <div class="header-column justify-content-start">
                    <!-- Logo
                    ============================= -->
                    <div class="logo me-3"> <a class="d-flex" href="index.html" title="Payyed - HTML Template"><img src="user/user-page/images/logo-light.png" alt="Payyed" /></a> </div>
                    <!-- Logo end -->
                    <!-- Collapse Button
                    ============================== -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"> <span></span> <span></span> <span></span> </button>
                    <!-- Collapse Button end -->

                    <!-- Primary Navigation
                    ============================== -->
                    <nav class="primary-menu navbar navbar-expand-lg">
                        <div id="header-nav" class="collapse navbar-collapse">
                            <ul class="navbar-nav me-auto">
                                <li><a href="landing-page-send.html">Send</a></li>
                                <li><a href="landing-page-receive.html">Receive</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="fees.html">Fees</a></li>
                                <li><a href="help.html">Help</a></li>
                                <li class="dropdown active"> <a class="dropdown-toggle" href="#">Features</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Headers</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="index.html">Light Version (Default)</a></li>
                                                <li><a class="dropdown-item" href="feature-header-dark.html">Dark Version</a></li>
                                                <li><a class="dropdown-item" href="feature-header-primary.html">Primary Version</a></li>
                                                <li><a class="dropdown-item" href="index-2.html">Transparent Version</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Navigation DropDown</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="index.html">Light Version (Default)</a></li>
                                                <li><a class="dropdown-item" href="feature-navigation-dropdown-dark.html">Dark Version</a></li>
                                                <li><a class="dropdown-item" href="feature-navigation-dropdown-primary.html">Primary Version</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Second Navigation</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="send-money.html">Default Version</a></li>
                                                <li><a class="dropdown-item" href="deposit-money.html">Alternate Version</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Page Headers</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="feature-page-header-left-alignment.html">Left Alignment</a></li>
                                                <li><a class="dropdown-item" href="feature-page-header-center-alignment.html">Center Alignment</a></li>
                                                <li><a class="dropdown-item" href="feature-page-header-light.html">Light Version</a></li>
                                                <li><a class="dropdown-item" href="feature-page-header-dark.html">Dark Version</a></li>
                                                <li><a class="dropdown-item" href="feature-page-header-primary.html">Primary Version</a></li>
                                                <li><a class="dropdown-item" href="feature-page-header-custom-background.html">Custom Background</a></li>
                                                <li><a class="dropdown-item" href="feature-page-header-custom-background-with-transparent-header.html">Custom Background 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Footer</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="index.html">Light Version Default</a></li>
                                                <li><a class="dropdown-item" href="index-2.html">Alternate Version</a></li>
                                                <li><a class="dropdown-item" href="feature-footer-dark.html">Dark Version</a></li>
                                                <li><a class="dropdown-item" href="feature-footer-primary.html">Primary Version</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="feature-layout-boxed.html">Layout Boxed</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-mega"> <a class="dropdown-toggle" href="#">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="dropdown-mega-content">
                                                <div class="row">
                                                    <div class="col-lg"> <span class="sub-title">Homepage</Span>
                                                        <ul class="dropdown-mega-submenu">
                                                            <li><a class="dropdown-item" href="index.html">Home Version 1</a></li>
                                                            <li><a class="dropdown-item" href="index-2.html">Home Version 2</a></li>
                                                            <li><a class="dropdown-item" href="landing-page-send.html">Landing Page - Send</a></li>
                                                            <li><a class="dropdown-item" href="landing-page-receive.html">Landing Page - Receive</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg"> <span class="sub-title">Account</Span>
                                                        <ul class="dropdown-mega-submenu">
                                                            <li><a class="dropdown-item" href="settings-profile.html">My Profile</a></li>
                                                            <li><a class="dropdown-item" href="settings-security.html">Security</a></li>
                                                            <li><a class="dropdown-item" href="settings-payment-methods.html">Payment Methods</a></li>
                                                            <li><a class="dropdown-item" href="settings-notifications.html">Notifications</a></li>
                                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Login</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="login.html">Login Page 1</a></li>
                                                                    <li><a class="dropdown-item" href="login-2.html">Login Page 2</a></li>
                                                                    <li><a class="dropdown-item" href="login-3.html">Login Page 3</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Signup</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="signup.html">Signup Page 1</a></li>
                                                                    <li><a class="dropdown-item" href="signup-2.html">Signup Page 2 </a></li>
                                                                    <li><a class="dropdown-item" href="signup-3.html">Signup Page 3 </a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg"> <span class="sub-title">Dashboard</Span>
                                                        <ul class="dropdown-mega-submenu">
                                                            <li><a class="dropdown-item" href="dashboard.html">Dashboard</a></li>
                                                            <li><a class="dropdown-item" href="transactions.html">Transactions</a></li>
                                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Send Money</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="send-money.html">Send Money</a></li>
                                                                    <li><a class="dropdown-item" href="send-money-confirm.html">Send Money Confirm</a></li>
                                                                    <li><a class="dropdown-item" href="send-money-success.html">Send Money Success </a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Request Money</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="request-money.html">Request Money</a></li>
                                                                    <li><a class="dropdown-item" href="request-money-confirm.html">Request Money Confirm</a></li>
                                                                    <li><a class="dropdown-item" href="request-money-success.html">Request Money Success </a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Deposit Money</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="deposit-money.html">Deposit Money</a></li>
                                                                    <li><a class="dropdown-item" href="deposit-money-confirm.html">Deposit Money Confirm</a></li>
                                                                    <li><a class="dropdown-item" href="deposit-money-success.html">Deposit Money Success </a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Withdraw Money</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="withdraw-money.html">Withdraw Money</a></li>
                                                                    <li><a class="dropdown-item" href="withdraw-money-confirm.html">Withdraw Money Confirm</a></li>
                                                                    <li><a class="dropdown-item" href="withdraw-money-success.html">Withdraw Money Success </a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a class="dropdown-item" href="notifications.html">Notifications</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg"> <span class="sub-title">Blog</Span>
                                                        <ul class="dropdown-mega-submenu">
                                                            <li><a class="dropdown-item" href="blog.html">Blog Standard</a></li>
                                                            <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                                                            <li><a class="dropdown-item" href="blog-list.html">Blog List</a></li>
                                                            <li><a class="dropdown-item" href="blog-single.html">Blog Single Right Sidebar</a></li>
                                                            <li><a class="dropdown-item" href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg"> <span class="sub-title">Others</Span>
                                                        <ul class="dropdown-mega-submenu">
                                                            <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                                                            <li><a class="dropdown-item" href="fees.html">Fees</a></li>
                                                            <li><a class="dropdown-item" href="help.html">Help</a></li>
                                                            <li><a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                                                            <li><a class="dropdown-item" href="404.html">404</a></li>
                                                            <li><a class="dropdown-item" href="coming-soon.html" target="_blank">Coming Soon</a></li>
                                                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Elements</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="elements.html">Elements 1</a></li>
                                                                    <li><a class="dropdown-item" href="elements-2.html">Elements 2</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Primary Navigation end -->
                </div>
                <div class="header-column justify-content-end">
                    <!-- Login & Signup Link
                    ============================== -->
                    <nav class="login-signup navbar navbar-expand">
                        <ul class="navbar-nav">
                            <li><a href="login.html">Login</a> </li>
                            <li class="align-items-center h-auto ms-sm-3"><a class="btn btn-primary" href="signup.html">Sign Up</a></li>
                        </ul>
                    </nav>
                    <!-- Login & Signup Link end -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Content
    ============================================= -->
    <div id="content" class="py-4">
        <div class="container">
            <div class="row">

                <!-- Left Panel
                ============================================= -->
                <aside class="col-lg-3">
                    <!-- Hello + edit
                    =============================== -->

                    <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                        <div class="profile-thumb mt-3 mb-4"> <img class="rounded-circle" width="100" height="100" src="{{$user->image_face}}" alt="">
                            <div class="profile-thumb-edit bg-primary text-white" data-bs-toggle="tooltip" title="Change Profile Picture"> <i class="fas fa-camera position-absolute"></i>
                                <input type="file" class="custom-file-input" id="customFile">
                            </div>
                        </div>
                        <p class="text-3 fw-500 mb-2">Xin chào<br> {{$user->name}}</p>
                        <p class="mb-2"><a href="#edit-personal-details" class="text-5 text-light" data-bs-toggle="modal" title="Edit Profile"><i class="fas fa-edit"></i></a></p>
                        {{--                        edit personal detail--}}
                        <div id="edit-personal-details" class="modal fade " role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-400">Sửa thông tin cá nhân</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <form id="personaldetails" method="post">
                                            <div class="row g-3">
                                                <div class="col-12 col-sm-6">
                                                    <label for="firstName" class="form-label">First Name</label>
                                                    <input type="button" value="Smith" class="form-control" data-bv-field="firstName" id="firstName" required placeholder="First Name">
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="lastName" class="form-label">Last Name</label>
                                                    <input type="text" value="Rhodes" class="form-control" data-bv-field="lastName" id="lastName" required placeholder="Last Name">
                                                </div>
                                                <div class="col-12">
                                                    <label for="birthDate" class="form-label">Date of Birth</label>
                                                    <div class="position-relative">
                                                        <input id="birthDate" value="12-09-1982" type="text" class="form-control" required placeholder="Date of Birth">
                                                        <span class="icon-inside"><i class="fas fa-calendar-alt"></i></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <h3 class="text-5 fw-400 mt-4">Address</h3>
                                            <hr>
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input type="text" value="4th Floor, Plot No.22, Above Public Park" class="form-control" data-bv-field="address" id="address" required placeholder="Address 1">
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="city" class="form-label">City</label>
                                                    <input id="city" value="San Ditego" type="text" class="form-control" required placeholder="City">
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="input-zone" class="form-label">State</label>
                                                    <select class="form-select" id="input-zone" name="zone_id">
                                                        <option value=""> --- Please Select --- </option>
                                                        <option value="3613">Alabama</option>
                                                        <option value="3614">Alaska</option>
                                                        <option value="3615">American Samoa</option>
                                                        <option value="3616">Arizona</option>
                                                        <option value="3617">Arkansas</option>
                                                        <option value="3618">Armed Forces Africa</option>
                                                        <option value="3619">Armed Forces Americas</option>
                                                        <option value="3620">Armed Forces Canada</option>
                                                        <option value="3621">Armed Forces Europe</option>
                                                        <option value="3622">Armed Forces Middle East</option>
                                                        <option value="3623">Armed Forces Pacific</option>
                                                        <option selected="selected" value="3624">California</option>
                                                        <option value="3625">Colorado</option>
                                                        <option value="3626">Connecticut</option>
                                                        <option value="3627">Delaware</option>
                                                        <option value="3628">District of Columbia</option>
                                                        <option value="3629">Federated States Of Micronesia</option>
                                                        <option value="3630">Florida</option>
                                                        <option value="3631">Georgia</option>
                                                        <option value="3632">Guam</option>
                                                        <option value="3633">Hawaii</option>
                                                        <option value="3634">Idaho</option>
                                                        <option value="3635">Illinois</option>
                                                        <option value="3636">Indiana</option>
                                                        <option value="3637">Iowa</option>
                                                        <option value="3638">Kansas</option>
                                                        <option value="3639">Kentucky</option>
                                                        <option value="3640">Louisiana</option>
                                                        <option value="3641">Maine</option>
                                                        <option value="3642">Marshall Islands</option>
                                                        <option value="3643">Maryland</option>
                                                        <option value="3644">Massachusetts</option>
                                                        <option value="3645">Michigan</option>
                                                        <option value="3646">Minnesota</option>
                                                        <option value="3647">Mississippi</option>
                                                        <option value="3648">Missouri</option>
                                                        <option value="3649">Montana</option>
                                                        <option value="3650">Nebraska</option>
                                                        <option value="3651">Nevada</option>
                                                        <option value="3652">New Hampshire</option>
                                                        <option value="3653">New Jersey</option>
                                                        <option value="3654">New Mexico</option>
                                                        <option value="3655">New York</option>
                                                        <option value="3656">North Carolina</option>
                                                        <option value="3657">North Dakota</option>
                                                        <option value="3658">Northern Mariana Islands</option>
                                                        <option value="3659">Ohio</option>
                                                        <option value="3660">Oklahoma</option>
                                                        <option value="3661">Oregon</option>
                                                        <option value="3662">Palau</option>
                                                        <option value="3663">Pennsylvania</option>
                                                        <option value="3664">Puerto Rico</option>
                                                        <option value="3665">Rhode Island</option>
                                                        <option value="3666">South Carolina</option>
                                                        <option value="3667">South Dakota</option>
                                                        <option value="3668">Tennessee</option>
                                                        <option value="3669">Texas</option>
                                                        <option value="3670">Utah</option>
                                                        <option value="3671">Vermont</option>
                                                        <option value="3672">Virgin Islands</option>
                                                        <option value="3673">Virginia</option>
                                                        <option value="3674">Washington</option>
                                                        <option value="3675">West Virginia</option>
                                                        <option value="3676">Wisconsin</option>
                                                        <option value="3677">Wyoming</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="zipCode" class="form-label">Zip Code</label>
                                                    <input id="zipCode" value="22434" type="text" class="form-control" required placeholder="City">
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="inputCountry" class="form-label">Country</label>
                                                    <select class="form-select" id="inputCountry" name="country_id">
                                                        <option value=""> --- Please Select --- </option>
                                                        <option value="244">Aaland Islands</option>
                                                        <option value="1">Afghanistan</option>
                                                        <option value="2">Albania</option>
                                                        <option value="3">Algeria</option>
                                                        <option value="4">American Samoa</option>
                                                        <option value="5">Andorra</option>
                                                        <option value="6">Angola</option>
                                                        <option value="7">Anguilla</option>
                                                        <option value="8">Antarctica</option>
                                                        <option value="9">Antigua and Barbuda</option>
                                                        <option value="10">Argentina</option>
                                                        <option value="11">Armenia</option>
                                                        <option value="12">Aruba</option>
                                                        <option value="252">Ascension Island (British)</option>
                                                        <option value="13">Australia</option>
                                                        <option value="14">Austria</option>
                                                        <option value="15">Azerbaijan</option>
                                                        <option value="16">Bahamas</option>
                                                        <option value="17">Bahrain</option>
                                                        <option value="18">Bangladesh</option>
                                                        <option value="19">Barbados</option>
                                                        <option value="20">Belarus</option>
                                                        <option value="21">Belgium</option>
                                                        <option value="22">Belize</option>
                                                        <option value="23">Benin</option>
                                                        <option value="24">Bermuda</option>
                                                        <option value="25">Bhutan</option>
                                                        <option value="26">Bolivia</option>
                                                        <option value="245">Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="27">Bosnia and Herzegovina</option>
                                                        <option value="28">Botswana</option>
                                                        <option value="29">Bouvet Island</option>
                                                        <option value="30">Brazil</option>
                                                        <option value="31">British Indian Ocean Territory</option>
                                                        <option value="32">Brunei Darussalam</option>
                                                        <option value="33">Bulgaria</option>
                                                        <option value="34">Burkina Faso</option>
                                                        <option value="35">Burundi</option>
                                                        <option value="36">Cambodia</option>
                                                        <option value="37">Cameroon</option>
                                                        <option value="38">Canada</option>
                                                        <option value="251">Canary Islands</option>
                                                        <option value="39">Cape Verde</option>
                                                        <option value="40">Cayman Islands</option>
                                                        <option value="41">Central African Republic</option>
                                                        <option value="42">Chad</option>
                                                        <option value="43">Chile</option>
                                                        <option value="44">China</option>
                                                        <option value="45">Christmas Island</option>
                                                        <option value="46">Cocos (Keeling) Islands</option>
                                                        <option value="47">Colombia</option>
                                                        <option value="48">Comoros</option>
                                                        <option value="49">Congo</option>
                                                        <option value="50">Cook Islands</option>
                                                        <option value="51">Costa Rica</option>
                                                        <option value="52">Cote D'Ivoire</option>
                                                        <option value="53">Croatia</option>
                                                        <option value="54">Cuba</option>
                                                        <option value="246">Curacao</option>
                                                        <option value="55">Cyprus</option>
                                                        <option value="56">Czech Republic</option>
                                                        <option value="237">Democratic Republic of Congo</option>
                                                        <option value="57">Denmark</option>
                                                        <option value="58">Djibouti</option>
                                                        <option value="59">Dominica</option>
                                                        <option value="60">Dominican Republic</option>
                                                        <option value="61">East Timor</option>
                                                        <option value="62">Ecuador</option>
                                                        <option value="63">Egypt</option>
                                                        <option value="64">El Salvador</option>
                                                        <option value="65">Equatorial Guinea</option>
                                                        <option value="66">Eritrea</option>
                                                        <option value="67">Estonia</option>
                                                        <option value="68">Ethiopia</option>
                                                        <option value="69">Falkland Islands (Malvinas)</option>
                                                        <option value="70">Faroe Islands</option>
                                                        <option value="71">Fiji</option>
                                                        <option value="72">Finland</option>
                                                        <option value="74">France, Metropolitan</option>
                                                        <option value="75">French Guiana</option>
                                                        <option value="76">French Polynesia</option>
                                                        <option value="77">French Southern Territories</option>
                                                        <option value="126">FYROM</option>
                                                        <option value="78">Gabon</option>
                                                        <option value="79">Gambia</option>
                                                        <option value="80">Georgia</option>
                                                        <option value="81">Germany</option>
                                                        <option value="82">Ghana</option>
                                                        <option value="83">Gibraltar</option>
                                                        <option value="84">Greece</option>
                                                        <option value="85">Greenland</option>
                                                        <option value="86">Grenada</option>
                                                        <option value="87">Guadeloupe</option>
                                                        <option value="88">Guam</option>
                                                        <option value="89">Guatemala</option>
                                                        <option value="256">Guernsey</option>
                                                        <option value="90">Guinea</option>
                                                        <option value="91">Guinea-Bissau</option>
                                                        <option value="92">Guyana</option>
                                                        <option value="93">Haiti</option>
                                                        <option value="94">Heard and Mc Donald Islands</option>
                                                        <option value="95">Honduras</option>
                                                        <option value="96">Hong Kong</option>
                                                        <option value="97">Hungary</option>
                                                        <option value="98">Iceland</option>
                                                        <option value="99">India</option>
                                                        <option value="100">Indonesia</option>
                                                        <option value="101">Iran (Islamic Republic of)</option>
                                                        <option value="102">Iraq</option>
                                                        <option value="103">Ireland</option>
                                                        <option value="254">Isle of Man</option>
                                                        <option value="104">Israel</option>
                                                        <option value="105">Italy</option>
                                                        <option value="106">Jamaica</option>
                                                        <option value="107">Japan</option>
                                                        <option value="257">Jersey</option>
                                                        <option value="108">Jordan</option>
                                                        <option value="109">Kazakhstan</option>
                                                        <option value="110">Kenya</option>
                                                        <option value="111">Kiribati</option>
                                                        <option value="113">Korea, Republic of</option>
                                                        <option value="253">Kosovo, Republic of</option>
                                                        <option value="114">Kuwait</option>
                                                        <option value="115">Kyrgyzstan</option>
                                                        <option value="116">Lao People's Democratic Republic</option>
                                                        <option value="117">Latvia</option>
                                                        <option value="118">Lebanon</option>
                                                        <option value="119">Lesotho</option>
                                                        <option value="120">Liberia</option>
                                                        <option value="121">Libyan Arab Jamahiriya</option>
                                                        <option value="122">Liechtenstein</option>
                                                        <option value="123">Lithuania</option>
                                                        <option value="124">Luxembourg</option>
                                                        <option value="125">Macau</option>
                                                        <option value="127">Madagascar</option>
                                                        <option value="128">Malawi</option>
                                                        <option value="129">Malaysia</option>
                                                        <option value="130">Maldives</option>
                                                        <option value="131">Mali</option>
                                                        <option value="132">Malta</option>
                                                        <option value="133">Marshall Islands</option>
                                                        <option value="134">Martinique</option>
                                                        <option value="135">Mauritania</option>
                                                        <option value="136">Mauritius</option>
                                                        <option value="137">Mayotte</option>
                                                        <option value="138">Mexico</option>
                                                        <option value="139">Micronesia, Federated States of</option>
                                                        <option value="140">Moldova, Republic of</option>
                                                        <option value="141">Monaco</option>
                                                        <option value="142">Mongolia</option>
                                                        <option value="242">Montenegro</option>
                                                        <option value="143">Montserrat</option>
                                                        <option value="144">Morocco</option>
                                                        <option value="145">Mozambique</option>
                                                        <option value="146">Myanmar</option>
                                                        <option value="147">Namibia</option>
                                                        <option value="148">Nauru</option>
                                                        <option value="149">Nepal</option>
                                                        <option value="150">Netherlands</option>
                                                        <option value="151">Netherlands Antilles</option>
                                                        <option value="152">New Caledonia</option>
                                                        <option value="153">New Zealand</option>
                                                        <option value="154">Nicaragua</option>
                                                        <option value="155">Niger</option>
                                                        <option value="156">Nigeria</option>
                                                        <option value="157">Niue</option>
                                                        <option value="158">Norfolk Island</option>
                                                        <option value="112">North Korea</option>
                                                        <option value="159">Northern Mariana Islands</option>
                                                        <option value="160">Norway</option>
                                                        <option value="161">Oman</option>
                                                        <option value="162">Pakistan</option>
                                                        <option value="163">Palau</option>
                                                        <option value="247">Palestinian Territory, Occupied</option>
                                                        <option value="164">Panama</option>
                                                        <option value="165">Papua New Guinea</option>
                                                        <option value="166">Paraguay</option>
                                                        <option value="167">Peru</option>
                                                        <option value="168">Philippines</option>
                                                        <option value="169">Pitcairn</option>
                                                        <option value="170">Poland</option>
                                                        <option value="171">Portugal</option>
                                                        <option value="172">Puerto Rico</option>
                                                        <option value="173">Qatar</option>
                                                        <option value="174">Reunion</option>
                                                        <option value="175">Romania</option>
                                                        <option value="176">Russian Federation</option>
                                                        <option value="177">Rwanda</option>
                                                        <option value="178">Saint Kitts and Nevis</option>
                                                        <option value="179">Saint Lucia</option>
                                                        <option value="180">Saint Vincent and the Grenadines</option>
                                                        <option value="181">Samoa</option>
                                                        <option value="182">San Marino</option>
                                                        <option value="183">Sao Tome and Principe</option>
                                                        <option value="184">Saudi Arabia</option>
                                                        <option value="185">Senegal</option>
                                                        <option value="243">Serbia</option>
                                                        <option value="186">Seychelles</option>
                                                        <option value="187">Sierra Leone</option>
                                                        <option value="188">Singapore</option>
                                                        <option value="189">Slovak Republic</option>
                                                        <option value="190">Slovenia</option>
                                                        <option value="191">Solomon Islands</option>
                                                        <option value="192">Somalia</option>
                                                        <option value="193">South Africa</option>
                                                        <option value="194">South Georgia &amp; South Sandwich Islands</option>
                                                        <option value="248">South Sudan</option>
                                                        <option value="195">Spain</option>
                                                        <option value="196">Sri Lanka</option>
                                                        <option value="249">St. Barthelemy</option>
                                                        <option value="197">St. Helena</option>
                                                        <option value="250">St. Martin (French part)</option>
                                                        <option value="198">St. Pierre and Miquelon</option>
                                                        <option value="199">Sudan</option>
                                                        <option value="200">Suriname</option>
                                                        <option value="201">Svalbard and Jan Mayen Islands</option>
                                                        <option value="202">Swaziland</option>
                                                        <option value="203">Sweden</option>
                                                        <option value="204">Switzerland</option>
                                                        <option value="205">Syrian Arab Republic</option>
                                                        <option value="206">Taiwan</option>
                                                        <option value="207">Tajikistan</option>
                                                        <option value="208">Tanzania, United Republic of</option>
                                                        <option value="209">Thailand</option>
                                                        <option value="210">Togo</option>
                                                        <option value="211">Tokelau</option>
                                                        <option value="212">Tonga</option>
                                                        <option value="213">Trinidad and Tobago</option>
                                                        <option value="255">Tristan da Cunha</option>
                                                        <option value="214">Tunisia</option>
                                                        <option value="215">Turkey</option>
                                                        <option value="216">Turkmenistan</option>
                                                        <option value="217">Turks and Caicos Islands</option>
                                                        <option value="218">Tuvalu</option>
                                                        <option value="219">Uganda</option>
                                                        <option value="220">Ukraine</option>
                                                        <option value="221">United Arab Emirates</option>
                                                        <option value="222">United Kingdom</option>
                                                        <option selected="selected" value="223">United States</option>
                                                        <option value="224">United States Minor Outlying Islands</option>
                                                        <option value="225">Uruguay</option>
                                                        <option value="226">Uzbekistan</option>
                                                        <option value="227">Vanuatu</option>
                                                        <option value="228">Vatican City State (Holy See)</option>
                                                        <option value="229">Venezuela</option>
                                                        <option value="230">Viet Nam</option>
                                                        <option value="231">Virgin Islands (British)</option>
                                                        <option value="232">Virgin Islands (U.S.)</option>
                                                        <option value="233">Wallis and Futuna Islands</option>
                                                        <option value="234">Western Sahara</option>
                                                        <option value="235">Yemen</option>
                                                        <option value="238">Zambia</option>
                                                        <option value="239">Zimbabwe</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 mt-4 d-grid"><button class="btn btn-primary" type="submit">Save Changes</button></div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        edit personal detail end--}}
                    </div>

                    <!-- Hello + Edit End -->

                    <!-- Profile Details
                   =============================== -->

                    <div class="bg-white shadow-sm rounded p-4 mb-4">
                        <h3 class="text-5 fw-400 d-flex align-items-center mb-4">Thông tin cá nhân</h3>
                        <hr class="mx-n4 mb-4">
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Ngày sinh:</p>
                            <p class="col-sm-9 text-3">{{$user->birthday}}</p>
                        </div>
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Số CCCD:</p>
                            <p class="col-sm-9 text-3">{{$user->national_id}}</p>
                        </div>
                        <div class="row gx-3 align-items-center">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Số Điện thoại:</p>
                            <p class="col-sm-9 text-3">{{$user->telephone}}</p>
                        </div>
                        <div class="row gx-3 align-items-baseline">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Địa chỉ:</p>
                            <p class="col-sm-9 text-3">{{$user->address}}</p>
                        </div>
                        <div class="row gx-3 align-items-baseline">
                            <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email:</p>
                            <p class="col-sm-9 text-3">{{$user->email}}</p>
                        </div>
                    </div>
                    <!-- Profile Details End -->

                </aside>
                <!-- Left Panel End -->
                <div class="col-lg-9">

                    <!-- Personal Details
                    ============================================= -->
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            @foreach($allaccount as $item)

                                <div class="carousel-item @if($loop->first)active @endif">
                                    <div class="bg-white shadow-sm rounded text-center p-3 mb-4">
                                        <h2 class="text-7 fw-400">Tài khoản số: {{$item->account_number}}</h2>
                                        <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
                                        <h3 class="text-9 fw-400">VNĐ {{number_format($item->balance)}}</h3>
                                        <p class="mb-2 text-muted opacity-8">Số dư tài khoản chính</p>
                                        <hr class="mx-n3">

                                        <div class="multi-button">
                                            <button><i class="fas fa-coins"></i> Tiết kiệm</button>
                                            <form action="{{url("/money-transfer",["account"=>$item->id])}}" method="get">
                                                <button type="submit" name="transfer_id" value="{{$item->id}}"><i class="fas fa-hand-holding-usd"></i> Chuyển khoản</button>
                                            </form>
                                            <form action="{{url("/transacion-history",["account"=>$item->id])}}" method="get">
                                                <button type="submit" name="transfer_id" value="{{$item->id}}"><i class="fas fa-file-invoice-dollar"></i></i> Lịch sử giao dịch</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button  class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" style="color: red" aria-hidden="true"><<<</span>
                            <span class="visually-hidden" >Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon"  style="color: red" aria-hidden="true">>>></span>
                            <span class="visually-hidden-focusable">Next</span>
                        </button>
                    </div>

                    <!-- Account Settings
                    ============================================= -->
                    @yield("main_content")

                </div>


            </div>
        </div>
    </div>
    <!-- Content end -->

    <!-- Footer
  ============================================= -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg d-lg-flex align-items-center">
                    <ul class="nav justify-content-center justify-content-lg-start text-3">
                        <li class="nav-item"> <a class="nav-link active" href="#">About Us</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Support</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Help</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Careers</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Affiliate</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Fees</a></li>
                    </ul>
                </div>
                <div class="col-lg d-lg-flex justify-content-lg-end mt-3 mt-lg-0">
                    <ul class="social-icons justify-content-center">
                        <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-google"><a data-bs-toggle="tooltip" href="http://www.google.com/" target="_blank" title="Google"><i class="fab fa-google"></i></a></li>
                        <li class="social-icons-youtube"><a data-bs-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-copyright pt-3 pt-lg-2 mt-2">
                <div class="row">
                    <div class="col-lg">
                        <p class="text-center text-lg-start mb-2 mb-lg-0">Copyright &copy; 2022 <a href="#">Payyed</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg d-lg-flex align-items-center justify-content-lg-end">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"> <a class="nav-link active" href="#">Security</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Terms</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->
</div>
<!-- Document Wrapper end -->
<!-- Script -->
<script src="user/user-page/vendor/jquery/jquery.min.js"></script>
<script src="user/user-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="user/user-page/vendor/daterangepicker/moment.min.js"></script>
<script src="user/user-page/vendor/daterangepicker/daterangepicker.js"></script>
<script src="user/user-page/js/theme.js"></script>

<a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>
@yield("custom_js")
</body>
</html>
