@extends('frontend.layout')
@section('do-du-lieu-vao-template')

 <div class="tabs-content row">
            <div id="content-taba4" class="content-tab content-tab-proindex"> 
                <div class="col-md-9 col-sm-9 col-lg-9">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                    <p></p>
                  </div>
                  </div>
                </div>
              </div>
              <!-- box product -->
              <ul class="list-unstyled">
                <?php
                $key = Request::get('key');
                $product = DB::table('tbl_product')->where('c_name','like',"%$key%")->paginate(8);
                 ?>
                 @foreach($product as $rows )
          
                <li class="" style="list-style: none; display: inline;">
              <!-- box product -->
              <div class="col-xs-6 col-sm-4 col-md-3 ">
                <div class="product-grid product-loop" id="product-1142070">
                  <div class="image"> <a href="{{ url('product') }}"><img src="{{ $rows->c_img }}" title="" alt="" class="img-responsive"></a> </div>
                  <div class="info">
                    <h3 class="name"><a href="{{ url('product') }}">{{ $rows->c_name }}</a></h3>
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
@endsection