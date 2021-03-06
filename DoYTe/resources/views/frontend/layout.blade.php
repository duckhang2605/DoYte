<!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="content-language" content="vi" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="noodp,index,follow" />
<meta name='revisit-after' content='1 days' />
<meta name="keywords" content="">
<title>DKT Store</title>
<meta name="description" content="DKT Store">
<meta property="og:type" content="website">
<meta property="og:title" content="DKT Store">
<meta property="og:image" content="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361') }}">
<meta property="og:image:secure_url" content="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361') }}">
<meta property="og:url" content="index.html">
<meta property="og:site_name" content="DKT Store">
<link rel="canonical" href="index.html">
<link rel="shortcut icon" href="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/favicon221b.png?1481775169361')}}" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
<link href="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361')}}" rel='stylesheet' type='text/css' />
<script src="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361')}}" type='text/javascript'></script>
<script src="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361')}}" type='text/javascript'></script>
<script src="{{ asset('frontend/public/frontend/assets/themes_support/api.jquerya87f.js?4')}}" type='text/javascript'></script>
<link href="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361')}}" rel='stylesheet' type='text/css' />
</head>

</script>
<body class="index">
<div id="fb-root"></div>
<!-- header -->
<header id="header"> 
  <!-- top header -->
  <div class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> 0987241897</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span> </div>
        <div class="col-xs-12 col-sm-6 col-md-6 customer"> <a href="account"><i class="fa fa-user"></i> Đăng nhập</a> <a href="account/register"><i class="fa fa-user-plus"></i> Đăng ký</a> </div>
      </div>
    </div>
  </div>
  <!-- end top header --> 
  <!-- middle header -->
  <div class="mid-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo ">  </div>
        <div class="col-xs-12 col-sm-12 col-md-6 header-search">
          <form method="get" action="search">
          	
            <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." name="key" class="input-control" id="key">
            <button  type="submit"> <i class="fa fa-search"></i> </button>
          </form>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
          <div class="wrapper-mini-cart">  <a href="{{ url('giohang') }}"> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <span class="mini-cart-count">0</span> sản phẩm <i class="fa fa-caret-down"></i></a>
            <div class="content-mini-cart">
              <div class="has-items">
                <ul class="list-unstyled">
                </ul>
                <div class="total clearfix"> <span class="pull-left">Tổng tiền:</span> <span class="pull-right total-price">0₫</span> </div>
                <a href="checkout" class="button">Thanh toán</a> </div>
              <div class="no-item">
                <p style="text-align:left">Không có sản phẩm nào trong giỏ hàng của bạn.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end middle header --> 
  <!-- bottom header -->
  <div class="bottom-header">
    <div class="container">
      <div class="clearfix">
        <ul class="main-nav hidden-xs hidden-sm list-unstyled">
          <li class="active"><a href="index.html">Trang chủ</a></li>
          <li ><a href="gioi-thieu">Giới thiệu</a></li>
          <li ><a href="{{ url('product') }}">Sản phẩm</a></li>
          <li ><a href="{{ url('news') }}">Tin tức</a></li>
          <li ><a href="lien-he">Liên hệ</a></li>
        </ul>
        <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
        <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
          <li><a href="index.html">Trang chủ</a></li>
          <li><a href="gioi-thieu">Giới thiệu</a></li>
          <li><a href="collections/all">Sản phẩm</a>
            <ul style="display:none">
              <li><a href="san-pham-noi-bat">Sản phẩm nổi bật</a></li>
              <li><a href="san-pham-khuyen-mai">Sản phẩm khuyến mãi</a></li>
              <li><a href="dien-thoai-di-dong">Điện thoại di động</a></li>
              <li><a href="laptop">Laptop</a></li>
              <li><a href="tivi">Tivi</a></li>
              <li><a href="tai-nghe">Tai nghe</a></li>
              <li><a href="am-thanh">Âm thanh</a></li>
              <li><a href="may-van-phong">Máy văn phòng</a></li>
            </ul>
          </li>
          <li><a href="tin-tuc">Tin tức</a></li>
          <li><a href="lien-he">Liên hệ</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end bottom header --> 
</header>
<!-- end header -->
<div class="content">
  <div class="container">
    <h1 style="display:none;">DKT Store</h1>
    <!-- category product -->
    <div class="slideshow">
      <div class="row">
        <div class="col-md-3 col-xs-12 hidden-xs hidden-sm">
          <aside class="aside-category">
            <h3><i class="fa fa-bars"></i>&nbsp;&nbsp; Danh mục sản phẩm</h3>
            <ul class="list-unstyled">
                <?php
               //lay du lieu ra
                $category = DB::table("tbl_category_product")->orderby("pk_category_product_id","desc")->get();
                 ?>
                 @foreach($category as $rows)
              <li ><a href="{{ url('product/detail'.$rows->pk_category_product_id) }}">{{ $rows->c_name }}</a></li>
              @endforeach
            </ul>
          </aside>
        </div>
        <div class="col-md-9 col-xs-12 col-sm-12">
          <div class="owl-slider">
            <div class="item"> 
              <!-- ============================ -->
              <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active"> <img src="frontend/public/frontend/images/slide.jpg" alt="Los Angeles"> </div>
                  <div class="item"> <img src="{{ asset('frontend/public/frontend/images/slide2.jpg')}}" alt="Los Angeles"> </div>
                  <div class="item"> <img src="{{ asset('frontend/public/frontend/images/slide3.jpg')}}" alt="Chicago"> </div>
                  <div class="item"> <img src="{{ asset('frontend/public/frontend/images/slide4.jpg')}}" alt="New York"> </div>
                </div>
                
                <!-- Left and right controls --> 
              </div>
              <!-- ============================ --> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end category product -->
    <div class="row">
      <div class="col-xs-12 col-md-3"> 
        <!-- end support -->
        <div class="online_support block">
          <div class="new_title">
            <h2>Hỗ trợ trực tuyến</h2>
          </div>
          <div class="block-content">
            <div class="sp_1">
              <p>Tư vấn bán hàng 1</p>
              <p>Mrs. Hoang: <span>(04) 3786 8904</span></p>
            </div>
            <div class="sp_2">
              <p>Tư vấn bán hàng 2</p>
              <p>Mr. Long: <span>(04) 3786 8904</span></p>
            </div>
            <div class="sp_mail">
              <p>Email liên hệ</p>
              <p><a href="mailto:support@mail.com">support@mail.com</a></p>
            </div>
          </div>
        </div>
        <!-- end support online --> 
      
        <div class="statistics block">
          <div id="bw-statistics"></div>
        </div>
        <div class="fanpage block hidden-sm hidden-xs">  </div>
      </div>
      <div class="col-xs-12 col-md-9"> 
        <!-- main -->
      @yield('do-du-lieu-vao-template')
        <!-- end main --> 
      </div>
    </div>
    <!-- adv -->
    <div class="widebanner"> <a href="#"><img src=" {{ asset('frontend/public/frontend/thumb/large/d.jpg')}}" alt="#" class="img-responsive"></a> </div>
    <!-- end adv --> 
   
  </div>
</div>
<div class="privacy">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/ico-service-1221b.png?1481775169361')}}" alt="Giao hàng miễn phí" title="Giao hàng miễn phí" class="img-responsive"> </div>
        <div class="info">
          <h3>Giao hàng miễn phí</h3>
          <p>Miễn phí giao hàng trong nội thành Hà Nội</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/ico-service-2221b.png?1481775169361')}}" class="img-responsive" alt="Khuyến mại" title="Khuyến mại"> </div>
        <div class="info">
          <h3>Khuyến mại</h3>
          <p>Khuyến mại sản phẩm nếu đơn hàng trên 1.000.000đ</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/ico-service-3221b.png?1481775169361')}}" class="img-responsive" alt="Hoàn trả lại tiền" title="Hoàn trả lại tiền"> </div>
        <div class="info">
          <h3>Hoàn trả lại tiền</h3>
          <p>Nếu sản phẩm không đảm bảo chất lượng hoặc sản phẩm không đúng miêu tả</p>
        </div>
      </div>
    </div>
  </div>
</div>
<footer id="footer">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3">
          <h3>Về chúng tôi</h3>
          <ul class="list-unstyled">
            <li><a href="index.html">Trang chủ</a></li>
            <li><a href="gioi-thieu">Giới thiệu</a></li>
            <li><a href="tin-tuc">Tin tức</a></li>
            <li><a href="gioi-thieu">Liên hệ</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Hướng dẫn</h3>
          <ul class="list-unstyled">
            <li><a href="huo-ng-da-n-mua-ha-ng">Hướng dẫn mua hàng</a></li>
            <li><a href="huong-dan">Giao nhận và thanh toán</a></li>
            <li><a href="do-i-tra-va-ba-o-ha-nh">Đổi trả và bảo hành</a></li>
            <li><a href="account/register">Đăng ký thành viên</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Chính sách</h3>
          <ul class="list-unstyled">
            <li><a href="chinh-sach">Chính sách thanh toán</a></li>
            <li><a href="chi-nh-sa-ch-va-n-chuye-n">Chính sách vận chuyển</a></li>
            <li><a href="chi-nh-sa-ch-do-i-tra">Chính sách đổi trả</a></li>
            <li><a href="chi-nh-sa-ch-ba-o-ha-nh">Chính sách bảo hành</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Điều khoản</h3>
          <ul class="list-unstyled">
            <li><a href="dieu-khoan">Điều khoản sử dụng</a></li>
            <li><a href="die-u-khoa-n-giao-di-ch">Điều khoản giao dịch</a></li>
            <li><a href="di-ch-vu-tie-n-i-ch">Dịch vụ tiện ích</a></li>
            <li><a href="quye-n-so-hu-u-tri-tue">Quyền sở hữu trí tuệ</a></li>
          </ul>
        </div>
      </div>
      <div class="payments-method"> <img src="{{ asset('public/frontend/100/047/633/themes/517833/assets/payments-method221b.png?1481775169361')}}" alt="Phương thức thanh toán" title="Phương thức thanh toán"> </div>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-5"> </div>
        <div class="col-xs-12 col-sm-7">
          <ul class="list-unstyled">
            <li><a href="index.html">Trang chủ</a></li>
            <li><a href="gioi-thieu">Giới thiệu</a></li>
            <li><a href="collections/all">Sản phẩm</a></li>
            <li><a href="tin-tuc">Tin tức</a></li>
            <li><a href="lien-he">Liên hệ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361') }}" type='text/javascript'></script> 
<script src="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361') }}" type='text/javascript'></script> 
<script src="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361') }}" type='text/javascript'></script> 
<script src="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361') }}" type='text/javascript'></script> 
<script src="{{ asset('frontend/public/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361') }}" type='text/javascript'></script>
<div class="ajax-error-modal modal">
  <div class="modal-inner">
    <div class="ajax-error-title">Lỗi</div>
    <div class="ajax-error-message"></div>
  </div>
</div>
<div class="ajax-success-modal modal">
  <div class="overlay"></div>
  <div class="content col-xs-12">
    <div class="ajax-left"> <img class="ajax-product-image" alt="&nbsp;" src="#" style="max-width:65px; max-height:100px"/> </div>
    <div class="ajax-right">
      <p class="ajax-product-title"></p>
      <p class="success-message btn-go-to-cart"><span style="color:#789629">&#10004;</span> Đã được thêm vào giỏ hàng.</p>
      <div class="actions">
        <button class="button" onclick="window.location='cart'">Đi tới giỏ hàng</button>
        <button class="button" onclick="window.location='checkout'">Thanh toán</button>
      </div>
    </div>
    <a href="javascript:void(0)" class="close-modal"><i class="fa fa-times"></i></a> </div>
</div>
</body>
</html>