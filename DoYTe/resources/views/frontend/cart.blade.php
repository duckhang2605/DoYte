 @extends('frontend.layout')
@section('do-du-lieu-vao-template')
 <div class="template-cart">
          <form action="index.php?controller=cart&act=update" method="post">
            <div class="table-responsive">
              <table class="table table-cart">
                <thead>
                  <tr>
                    <th class="image">Ảnh sản phẩm</th>
                    <th class="name">Tên sản phẩm</th>
                    <th class="price">Giá bán lẻ</th>
                    <th class="quantity">Số lượng</th>
                    <th class="price">Thành tiền</th>
                  <!--   <th>Xóa</th> -->
                  </tr>
                </thead>
                <?php 
                echo "<pre>"; ?>

                <!-- @foreach((array)$content as $rows) -->
                @foreach($content as $rows)
                  <!--  <?php 
                $rows=(array)$rows; ?> -->
                <tbody>

                  <tr>
                    <td><img src="{!! asset('/'.$rows['options']['img']) !!}" class="img-responsive" /></td>
                    <td><a href="#">{{ $rows['name'] }}</a></td>
                    <td> {{ number_format($rows['price']) }}</td>
                    <td><input type="number" id="qty" min="1" class="input-control" value="{{ $rows['qty'] }}" name="product_5" required="Không thể để trống"></td>
                    <td><p><b>{{ number_format($rows['price']*$rows['qty']) }}</b></p></td>
                    <td><a href="{!! url('xoa',['id'=>$rows['rowId']]) !!}" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                  </tr>
                </tbody>
             <!--  @endforeach -->
               @endforeach
                <tfoot>
                  <tr>
                    <td colspan="6"><a href="index.php?controller=cart&act=destroy" class="button pull-left">Xóa toàn bộ</a> <a href="index.php" class="button pull-right black">Tiếp tục mua hàng</a>
                      <input type="submit" class="button pull-right" value="Cập nhật"></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </form>
          <div class="total-cart"> Tổng tiền thanh toán: 
             {{ $total }}<br>
            <a href="index.php?controller=checkout" class="button black">Thanh toán</a> </div>
        </div>
        <!-- end main --> 
        @endsection