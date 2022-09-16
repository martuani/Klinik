<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.graygrids.com/themes/edugrids/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 10:07:42 GMT -->
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>Login</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />


<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset ('edugrids/assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset ('edugrids/assets/css/LineIcons.2.0.css')}}" />
<link rel="stylesheet" href="{{asset ('edugrids/assets/css/animate.css')}}" />
<link rel="stylesheet" href="{{asset ('edugrids/assets/css/tiny-slider.css')}}" />
<link rel="stylesheet" href="{{asset ('edugrids/assets/css/glightbox.min.css')}}" />
<link rel="stylesheet" href="{{asset ('edugrids/assets/css/main.css')}}" />
</head>
<body>
<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

<div class="preloader">
<div class="preloader-inner">
<div class="preloader-icon">
<span></span>
<span></span>
</div>
</div>
</div>


<header class="header style2 navbar-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12">
<div class="nav-inner">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" href="index-2.html">
<img src="assets/images/logo/logo.svg" alt="Logo">
</a>
<button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
<ul id="nav" class="navbar-nav ms-auto">
<li class="nav-item">
<a class="page-scroll dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Home</a>
<ul class="sub-menu collapse" id="submenu-1-1">
<li class="nav-item"><a href="index-2.html">University</a></li>
<li class="nav-item"><a href="index2.html">Online Course</a></li>
<li class="nav-item"><a href="index3.html">Training Institute</a></li>
</ul>
</li>
<li class="nav-item"><a href="contact.html">Tentang</a></li>
<li class="nav-item"><a href="contact.html">Contact</a></li>
 </ul>
<form class="d-flex search-form">
<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success" type="submit"><i class="lni lni-search-alt"></i></button>
</form>
</div> 
</nav> 
</div>
</div>
</div> 
</div> 
</header>


<section class="login section">
<div class="container">
<div class="row">
<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
<div class="form-head">
<h4 class="title">Silahkan Login</h4>
<form action="#!" method="post">
<div class="form-group">
<label>Username/Email</label>
<input class="margin-5px-bottom" type="email" id="username" placeholder="Masukkan Username/Email">
</div>
<div class="form-group">
<label>Password</label>
<input class="margin-5px-bottom" type="password" id="password" placeholder="Masukkan Password">
</div>
<div class="check-and-pass">
<div class="row align-items-center">
<div class="col-lg-6 col-12">
<div class="form-check">
<input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
<label class="form-check-label">Ingat Saya</label>
</div>
</div>
<div class="col-lg-6 col-12">
<a href="javascript:void(0)" class="lost-pass">Ingat Saya?</a>
</div>
</div>
</div>
<div class="button">
<button type="submit" class="btn">Log In</button>
</div>
<p class="outer-link">Belum punya akun? <a href="{{ route('auth.register') }}">Register here</a>
</p>
</form>
</div>
</div>
</div>
</div>
</section>





<a href="#" class="scroll-top btn-hover">
<i class="lni lni-chevron-up"></i>
</a>

<script src="{{asset ('edugrids/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset ('edugrids/assets/js/count-up.min.js')}}"></script>
<script src="{{asset ('edugrids/assets/js/wow.min.js')}}"></script>
<script src="{{asset ('edugrids/assets/js/tiny-slider.js')}}"></script>
<script src="{{asset ('edugrids/assets/js/glightbox.min.js')}}"></script>
<script src="{{asset ('edugrids/assets/js/main.js')}}"></script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/edugrids/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 10:07:42 GMT -->
</html>