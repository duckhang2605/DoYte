<!-- load file template -->
@extends('frontend.layout')
@section('do-du-lieu-vao-template')

 <div class="special-collection">
          <div class="tabs-container">
            <div class="clearfix">
              <h2>Sản phẩm Hot</h2>
            </div>
          </div>
          <div class="tabs-content row">
            <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
              <div class="clearfix"> 
                
                <!-- box product -->
                 <ul class="list-unstyled">
                      <?php
                      $product = DB::table("tbl_product")->where("c_hot","=",'1')->orderby("pk_product_id","desc")->get();
                       ?>
                       @foreach($product as $rows)
                      <li  class="list-unstyled">
                <div class="col-xs-6 col-md-3 col-sm-6 ">
                  <div class="product-grid" id="product-1168979">
                   
                        <div class="image"> <a href="{{ url('product/detail/'.$rows->pk_product_id) }}"><img src="{{ $rows->c_img }}" title="" alt="" class="img-responsive"></a> </div>
                        <div class="info">
                          <h3 class="name"><a href="{{ url('product/detail/'.$rows->pk_product_id) }}">{{ $rows->c_name }}</a></h3>
                          <p class="price-box"> <span class="special-price"> <span class="price product-price"> {{ $rows->c_price }}</span> </span> </p>
                          <div class="action-btn">
                            <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                              <a href="{{ url('muahang/'.$rows->pk_product_id) }}" class="button">Chọn sản phẩm</a>
                            </form>
                          </div>
                        </div>
                     
                  </div>
                </div>
                 </li>
                      @endforeach
                    </ul>
                <!-- end box product --> 
              
                
                
                
              </div>
            </div>
          </div>
        </div>
        <div class="wrapper-tab-collections" style="margin-top:0px;">
          <div class="tabs-container">
            <ul class="list-unstyled">
              <li><a href="#content-taba1" class="head-tabs head-tab1" data-src=".head-tab1">
                <h2>Sản phẩm nổi bật</h2>
                </a></li>
            </ul>
          </div>
          <div class="tabs-content row">
            <div id="content-taba4" class="content-tab content-tab-proindex"> 
              <!-- box product -->
              <ul class="list-unstyled">
                  <?php 
                $productNB = DB::table("tbl_product")->orderby("pk_product_id","desc")->get();
                  ?>
                  @foreach($productNB as $rows)
                <li class="" style="list-style: none; display: inline;">
              <!-- box product -->
              <div class="col-xs-6 col-sm-4 col-md-3 ">
                <div class="product-grid product-loop" id="product-1142070">
                  <div class="image"> <a href="{{ url('product/detail/'.$rows->pk_product_id) }}"><img src="{{ $rows->c_img }}" title="" alt="" class="img-responsive"></a> </div>
                  <div class="info">
                    <h3 class="name"><a href="{{ url('product/category/'.$rows->pk_product_id) }}">{{ $rows->c_name }}</a></h3>
                    <p class="price-box"> <span class="special-price"> <span class="price product-price">{{ $rows->c_price}}</span> </span> </p>
                    <div class="action-btn">
                      <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1142070">
                        <input type="hidden" name="variantId" value="1777249" />
                        <button class="button add-cart">mua hàng</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end box product --> 
           </li>
           @endforeach
         </ul>
              
            </div>
          </div>
        </div>

@endsection