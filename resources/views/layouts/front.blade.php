
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Mobile Template</title>

    <!-- Google font file. If you want you can change. -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900" rel="stylesheet">

    <!-- Fontawesome font file css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/font-awesome.min.css')}}">

    <!--turbo slider plugin css file -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/turbo-slider/turbo.css')}}">

    <!-- Template global css file. Requared all pages -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/global.style.css')}}">
</head>

<body>

<div class="wrapper">
    <div class="nav-menu">
        <nav class="menu">
            <!-- Template logo start -->
            <div class="nav-header">
                <a href="index.html">
                    <img class="image-round" alt="" src="img/avatar.png">
                    <span>john doe</span>
                    <span>johndoe@example.com</span>
                </a>
            </div>
            <!-- Template logo end -->
            <!-- Menu navigation start -->
            <div class="nav-container">
                <ul class="main-menu">
                    <li class="">
                        <a href="index.html"><img src="img/icons/i1.png" alt=""> Home</a>
                    </li>
                    <li>
                        <a href="about.html"><img src="img/icons/i1.png" alt=""> About Virus</a>
                    </li>
                    <li>
                        <a href="symptoms.html"><img src="img/icons/i1.png" alt=""> Symptoms</a>
                    </li>
                    <li>
                        <a href="prevention.html"><img src="img/icons/i1.png" alt=""> Prevention</a>
                    </li>
                    <li>
                        <a href="#"><img src="img/icons/i1.png" alt=""> Shop <span class="fa fa-angle-down"></span></a>
                        <ul>
                            <li><a href="product-list.html" data-loader="show">Product List</a></li>
                            <li><a href="product-detail.html" data-loader="show">Product Detail</a></li>
                            <li><a href="product-basket.html" data-loader="show">Basket</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="img/icons/i1.png" alt=""> Login/Register <span class="fa fa-angle-down"></span></a>
                        <ul>
                            <li><a href="login.html" data-loader="show">Login</a></li>
                            <li><a href="signup.html" data-loader="show">Register</a></li>
                            <li><a href="forgot-password.html" data-loader="show">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><img src="img/icons/i1.png" alt=""> Blog <span class="fa fa-angle-down"></span></a>
                        <ul>
                            <li><a href="post-list-1.html" data-loader="show">List 1</a></li>
                            <li><a href="post-list-2.html" data-loader="show">List 2</a></li>
                            <li><a href="post-detail.html" data-loader="show">Detail</a></li>
                            <li><a href="post-author.html" data-loader="show">Author</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="img/icons/i1.png" alt=""> Wizards <span class="fa fa-angle-down"></span></a>
                        <ul>
                            <li><a href="wizard-default.html" data-loader="show">Wizard Default</a></li>
                            <li><a href="wizard-fullscreen.html" data-loader="show">Wizard Fullscreen</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="forms.html" data-loader="show"><img src="img/icons/i1.png" alt=""> Form Elements</a>
                    </li>
                    <li>
                        <a href="#"><img src="img/icons/i1.png" alt=""> Components <span class="fa fa-angle-down"></span></a>
                        <ul>
                            <li><a href="tab-bottom.html" data-loader="show">Tab (Bottom)</a></li>
                            <li><a href="tab-top.html" data-loader="show">Tab (Top)</a></li>
                            <li><a href="accordion.html" data-loader="show">Accordion</a></li>
                            <li><a href="popup.html" data-loader="show">Popup Modal</a></li>
                            <li><a href="checkbox-list.html" data-loader="show">Check List</a></li>
                            <li><a href="link-list.html" data-loader="show">Link List</a></li>
                            <li><a href="link-list-two-column.html" data-loader="show">Two Column Links</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><img src="img/icons/i1.png" alt=""> Pages <span class="fa fa-angle-down"></span></a>
                        <ul>
                            <li><a href="profile.html" data-loader="show">User Profile</a></li>
                            <li><a href="search-popup.html" data-loader="show">Search Popup</a></li>
                            <li><a href="search-result.html" data-loader="show">Search Results</a></li>
                            <li><a href="contact.html" data-loader="show">Contact</a></li>
                            <li><a href="blank.html" data-loader="show">Blank Page</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Menu navigation end -->
        </nav>
    </div>
    <div class="wrapper-inline">

        <!-- Page content start -->
        @yield('content')
        <!-- Page content end -->
    </div>
</div>


<!--Page loader DOM Elements. Requared all pages-->
<div class="sweet-loader">
    <div class="box">
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
    </div>
</div>

<!-- JQuery library file. requared all pages -->
<script src="{{asset('assets/front/js/jquery-3.2.1.min.js')}}"></script>

<!-- Turbo slider plugin file. requared only wizard pages -->
<script src="{{asset('assets/front/js/turbo-slider/turbo.min.js')}}"></script>
<script src="{{asset('assets/front/js/turbo-ini.js')}}"></script>

<!-- Template global script file. requared all pages -->
<script src="{{asset('assets/front/js/global.script.js')}}"></script>

</body>

</html>
