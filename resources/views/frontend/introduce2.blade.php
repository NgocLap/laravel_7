{{-- <!DOCTYPE html>
<html lang="en"> --}}
@extends('frontend.master2')
@section('title','Trang Chủ')
@section('main')
  {{-- <head> --}}
    {{-- <title>LOVE BOOK - Giới Thiệu</title> --}}
    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/FrontendIntroduce/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('public/FrontendIntroduce/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/FrontendIntroduce/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public/FrontendIntroduce/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('public/FrontendIntroduce/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/FrontendIntroduce/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/FrontendIntroduce/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('public/FrontendIntroduce/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('public/FrontendIntroduce/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('public/FrontendIntroduce/css/style.css')}}">
    
  {{-- </head> --}}
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
      
    {{-- <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
            
            <div class="site-logo">
              <a href="index.html" class="text-black"><span class="text-primary">Inves</a>
            </div>
            
              <nav class="site-navigation text-center ml-auto" role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="#home-section" class="nav-link">Home</a></li>
                  <li><a href="#investors-section" class="nav-link">Investors</a></li>
                  <li><a href="#about-section" class="nav-link">About</a></li>
                  <li><a href="#services-section" class="nav-link">Services</a></li>
                  <li><a href="#press-section" class="nav-link">Press</a></li>
                  
                  
                  <li><a href="#blog-section" class="nav-link">Blog</a></li>
                  <li><a href="#contact-section" class="nav-link">Contact</a></li>
                </ul>
              </nav>
          
            

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header> --}}
    
    <div class="owl-carousel slide-one-item">
      

      

      <div class="site-section-cover overlay img-bg-section" style="background-image: url({{asset('public/FrontendIntroduce/images/GT1.jpg')}}); " >
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-lg-7 text-center">
              <h1>Sự Thành Công Đến Từ 1 Phần Của Sách</h1>  
              <p>Một sự đầu tư cho thông minh đó là đầu tư cho kiến thức của chúng ta, cụ thể đó là những cuốn sách ở chúng tôi.</p>
              <p><a class="btn btn-white-outline border-w-2 btn-md">Liên lạc</a></p>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section-cover overlay img-bg-section" style="background-image: url({{asset('public/FrontendIntroduce/images/GT2.jpg')}}); " >
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-lg-7 text-center">
              <h1>Tư Vấn Những Quyển Sách Hay</h1>      
              <p>Với đội ngũ tư vấn nhiệt tình, chúng tôi chắc chắn bạn sẽ tìm được những cuốn sách cho riêng bạn.</p>    
              <p><a  class="btn btn-white-outline border-w-2 btn-md">Liên lạc</a></p>
            </div>
          </div>
        </div>

      </div>
      

    </div>
    
    
    <div class="pb-5" style="position: relative; z-index: 8;">
      <div class="container">
        <div class="row" style="margin-top: -50px;">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <img src="{{asset('public/FrontendIntroduce/images/TN.jpg')}}" alt="Image" class="img-fluid mb-3">
            <h3 class="text-primary h4 mb-2">Tầm Nhìn Phát Triển </h3>
            <p>Từ 2013 đến nay, LOVE BOOK đã nhất quán và thực hiện thành công chiến lược xuyên suốt là xây dựng,...</p>
            <p><a href="{{asset('introduce/introduceView')}}" style="font-weight: bold">Đọc thêm</a></p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <img src="{{asset('public/FrontendIntroduce/images/SM.jpg')}}" alt="Image" class="img-fluid mb-3">
            <h3 class="text-primary h4 mb-2">Sứ Mệnh Hướng Tới  </h3>
            <p>LOVE BOOK là thương hiệu hàng đầu trong ngành Phát hành sách Việt Nam, ngay từ thời bao cấp cho... </p>
            <p><a href="{{asset('introduce/introduceMission')}}  " style="font-weight: bold">Đọc thêm</a></p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <img src="{{asset('public/FrontendIntroduce/images/LS.jpg')}}" alt="Image" class="img-fluid mb-3">
            <h3 class="text-primary h4 mb-2">Lịch Sử Hình Thành </h3>
            <p>Là đơn vị có gần 40 năm kinh doanh và phục vụ xã hội, nên LOVE BOOK đã tích lũy được nhiều kinh nghiệm...</p>
            <p><a href="{{asset('introduce/introduceHistory')}}" style="font-weight: bold">Đọc thêm</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="pt-5" id="investors-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="block-heading-1">
              <h2>Nhà Đầu Tư Chúng Tôi</h2>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-3">
            <img src="{{asset('public/FrontendIntroduce/images/ac-nc-67336.svg')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="{{asset('public/FrontendIntroduce/images/creyf-s.svg')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="{{asset('public/FrontendIntroduce/images/showa-3.svg')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-3">
            <img src="{{asset('public/FrontendIntroduce/images/trimble-2.svg')}}" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 mb-4">
            <figure class="block-img-video-1" data-aos="fade">
              <a href="https://vimeo.com/45830194" class="popup-vimeo">
                <span class="icon"><span class="icon-play"></span></span>
                <img src="{{asset('public/FrontendIntroduce/images/welcom.jpg')}}" alt="Image" class="img-fluid">
              </a>
            </figure>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="text-primary mb-4">Chào mừng bạn đến với Love Book</h2>
            <p>Nơi hội tụ những yếu tố độc giả cần về đa nhiệm màu sắc về cuộc sống, những cảm xúc khó phai, những trang sách in đậm khoảnh khắc</p>
            <p>Đến với chúng tôi, bạn được khám phá ra những điều bạn chưa biết hết, những kiến thức bổ ích xung quanh chúng ra.</p>
            <p>Với sự phục vụ tận tình, cũng như tiện lợi chúng tôi mong muốn mang đến cho các bạn những tác phẩm tuyệt vời nhất.</p>
            <p><a href="#">Đọc thêm</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number"><span data-number="7">0</span></span>
              <span class="caption">Năm Kinh Nghiệm</span>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number"><span data-number="3049">0</span></span>
              <span class="caption">Số Lượng Sách</span>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number"><span data-number="9093">0</span></span>
              <span class="caption">Số Lượt Yêu Thích</span>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
            <div class="block-counter-1">
              <span class="number"><span data-number="7049">0</span></span>
              <span class="caption">Số Lượt Bình Luận</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="block-heading-1">
              <h2>Các Dịch Vụ</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">
            <span class="icon-signal d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Tư vấn, Chăm Sóc Khách Hàng </h3>
            <p>Accusantium dignissimos voluptas rem consequatur ratione illo sit quasi.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <span class="icon-anchor d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Chính sách bảo mật</h3>
            <p>Praesentium magnam pariatur quae necessitatibus eligendi voluptate ducimus.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <span class="icon-magnet d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Điều Khoản Sử Dụng</h3>
            <p>Accusantium dignissimos voluptas rem consequatur ratione illo sit quasi.</p>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <span class="icon-briefcase d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Phương thức giao hàng và chi phí giao hàng</h3>
            <p>Accusantium dignissimos voluptas rem consequatur ratione illo sit quasi.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <span class="icon-money d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Chuyển Phát Nhanh</h3>
            <p>Praesentium magnam pariatur quae necessitatibus eligendi voluptate ducimus.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <span class="icon-umbrella d-block mb-3 display-3 text-secondary"></span>
            <h3 class="text-primary h4 mb-2">Trao Đổi Mua Bán Sách Cũ</h3>
            <p>Accusantium dignissimos voluptas rem consequatur ratione illo sit quasi.</p>
          </div>

        </div>
      </div>
    </div>



    <div class="site-section" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="block-heading-1">
              <h2>Nhân Viên LOVE BOOK</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="{{asset('public/FrontendIntroduce/images/person_1.jpg')}}" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-white">Jean Smith</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Mining Expert</span>
              <p class="px-3 mb-3">Love Book đã mang lại cho tôi những điều mà tôi chưa từng được biết đến, những tác phẩm hấp dẫn, chất lượng, cuốn hút người đọc và sáng tạo...</p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="{{asset('public/FrontendIntroduce/images/person_2.jpg')}}" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-white">Bob Carry</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project Manager</span>
              <p class="px-3 mb-3">Trước đó tôi chưa hề biết gì về kinh doanh, nhưng mà những cuốn sách mà Love Book cung cấp đã cho tôi kiến thức cũng như sự hiểu rõ khi bước vào kinh doanh...</p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="{{asset('public/FrontendIntroduce/images/person_3.jpg')}}" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-white">Ricky Fisher</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Engineer</span>
              <p class="px-3 mb-3">Bản thân tôi là một người không đam mê sách, kể từ khi biết về Love Book bản thân tôi thấy rất thích thú và sách là sở thích cá nhân của bản thân tôi... </p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="site-section" id="press-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="block-heading-1">
              <h2>Press Releases</h2>
            </div>
          </div>
          <div class="col-lg-8">
            <ul class="list-unstyled">
              <li class="mb-4 d-block d-md-flex">
                <div class="mr-5 mb-4">
                  <img src="{{asset('public/FrontendIntroduce/images/hero_2.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div>
                  <h2 class="h4"><a href="press-single.html" class="text-black">How To Invest In Investing Company</a></h2>
                  <span class="d-block text-secondary mb-4">Apr 19, 2019</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis, perferendis molestias commodi adipisci.</p>
                </div>
              </li>

              <li class="mb-4 d-block d-md-flex">
                <div class="mr-5 mb-4">
                  <img src="{{asset('public/FrontendIntroduce/images/img_2.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div>
                  <h2 class="h4"><a href="press-single.html" class="text-black">How To Invest In Investing Company</a></h2>
                  <span class="d-block text-secondary mb-4">Apr 19, 2019</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis, perferendis molestias commodi adipisci.</p>
                </div>
              </li>

              <li class="mb-4 d-block d-md-flex">
                <div class="mr-5 mb-4">
                  <img src="{{asset('public/FrontendIntroduce/images/img_3.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div>
                  <h2 class="h4"><a href="press-single.html" class="text-black">How To Invest In Investing Company</a></h2>
                  <span class="d-block text-secondary mb-4">Apr 19, 2019</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis, perferendis molestias commodi adipisci.</p>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="site-section block-13 overlay bg-image" id="testimonials-section" data-aos="fade" style="background-image: url('public/FrontendIntroduce/images/hero_1.jpg');">
      <div class="container">
        
        <div class="text-center mb-5">
          <div class="block-heading-1">
            <h2 class="text-white">Độc Giả</h2>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13">
          <div>
            <div class="block-testimony-1 text-center">
              
              <blockquote class="mb-4">
                <p>Love Book đã mang lại cho tôi những điều mà tôi chưa từng được biết đến, những tác phẩm hấp dẫn, chất lượng, cuốn hút người đọc, giúp cho tôi cảm thấy sự phát triển của bản thân đến đâu, mỗi quyển sách như một người bạn trong cuộc sống của tôi vậy...</p>
              </blockquote>

              <figure>
                <img src="{{asset('public/FrontendIntroduce/images/person_4.jpg')}}" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-white">Ricky Fisher</h3>
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">
              <blockquote class="mb-4">
                <p>Love Book đã mang lại cho tôi những điều mà tôi chưa từng được biết đến, những tác phẩm hấp dẫn, chất lượng, cuốn hút người đọc, giúp cho tôi cảm thấy sự phát triển của bản thân đến đâu, mỗi quyển sách như một người bạn trong cuộc sống của tôi vậy...</p>
              </blockquote>

              <figure>
                <img src="{{asset('public/FrontendIntroduce/images/person_2.jpg')}}" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-white">Ken Davis</h3>
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">
              <blockquote class="mb-4">
                <p>Love Book đã mang lại cho tôi những điều mà tôi chưa từng được biết đến, những tác phẩm hấp dẫn, chất lượng, cuốn hút người đọc, giúp cho tôi cảm thấy sự phát triển của bản thân đến đâu, mỗi quyển sách như một người bạn trong cuộc sống của tôi vậy...</p>
              </blockquote>

              <figure>
                <img src="{{asset('public/FrontendIntroduce/images/person_1.jpg')}}" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-white">Mellisa Griffin</h3>
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">
              <blockquote class="mb-4">
                <p>Love Book đã mang lại cho tôi những điều mà tôi chưa từng được biết đến, những tác phẩm hấp dẫn, chất lượng, cuốn hút người đọc, giúp cho tôi cảm thấy sự phát triển của bản thân đến đâu, mỗi quyển sách như một người bạn trong cuộc sống của tôi vậy...</p>
              </blockquote>

              <figure>
                <img src="{{asset('public/FrontendIntroduce/images/person_3.jpg')}}" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-white">Robert Steward</h3>
            </div>
          </div>


        </div>

      </div>
    </div>

    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="block-heading-1">
              <span>Bài Viết Bolog mới nhất</span>
              <h2>Blog Chúng Tôi</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div> 

          
        
              
              <a href="single.html" class="mb-4 d-block"><img src="{{asset('public/FrontendIntroduce/images/img_1.jpg')}}" alt="Image" class="img-fluid rounded"></a>
              <h2><a href="single.html">Sách như là một người thầy của bạn suốt chặng đường</a></h2>
              <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 18, 2019</span> By <a href="single.html" class="by">James Cooper</a></p>
              <p>Với tối học chưa bao giờ là đủ với bản thân, kiến thức của thế giới rất rộng chúng ta không thể mà học hết được tất cả, đôi khi không có sự hiểu biết sẽ dẫn đến sự thất bại và đó là lúc bạn nên đầu tư cho bản thân những cuốn sách ở Love Book để có thể thấy được thất bại chưa phải là sự kết thúc của 1 chặng đường.admonition.</p>
              <p><a href="single.html">Đọc Thêm</a></p>
            </div>
          </div>
          <div class="col-lg-6">
            <div>
              <a href="single.html" class="mb-4 d-block"><img src="{{asset('public/FrontendIntroduce/images/img_2.jpg')}}" alt="Image" class="img-fluid rounded"></a>
              <h2><a href="single.html">Tôi cảm thấy sách như là một kiến thức mà mỗi người nên có  </a></h2>
              <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 18, 2019</span> By <a href="single.html" class="by">James Cooper</a></p>
              <p>Giá trị mỗi con người mỗi khác, con người chúng ta trường thành và phát triển mỗi ngày, cũng như vậy mà phẩm chất bản thân chúng ta được tôi luyện qua những lời nói, hành động, suy nghĩ... cho nên sự ảnh hưởng đến nó không chỉ những thứ xung quanh mà có thể gói gọn trong 1 tác phẩm nào đó. </p>
              <p><a href="single.html">Đọc Thêm</a></p>
            </div>
          </div>

        </div>
      </div>
    </div>


    {{-- <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="block-heading-1">
              <span>Get In Touch</span>
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5">
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <h2 class="text-black">Need to know more on details? Call Us <a href="tel://13923929482">+1 392 3929 482</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, distinctio! Harum quibusdam nisi, illum nulla aspernatur <a href="#">voluptas nam praesentium</a> aut quidem aperiam, quae non tempora recusandae voluptatibus fugit impedit.</p>
          </div>
        </div>
      </div>
    </div> --}}


    {{-- <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Press Releases</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <div class="mb-5">
              <div class="mb-5">
                <h2 class="footer-heading mb-4">Some Paragraph</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat nostrum libero iusto dolorum vero atque aliquid.</p>
              </div>
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
              </div>


              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer> --}}

  </div>

  <script src="{{asset('public/FrontendIntroduce/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('public/FrontendIntroduce/js/jquery-ui.js')}}"></script>
  <script src="{{asset('public/FrontendIntroduce/js/popper.min.js')}}"></script>
  <script src="{{asset('public/FrontendIntroduce/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/FrontendIntroduce/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('public/FrontendIntroduce/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('public/FrontendIntroduce/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('public/FrontendIntroduce/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('public/FrontendIntroduce/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('public/FrontendIntroduce/js/aos.js')}}"></script>
  <script src="{{asset('public/FrontendIntroduce/js/main.js')}}"></script>
    
  </body>
  @stop
{{-- </html> --}}
