<!-- load template -->
@extends('backend.layout')
<!-- do du lieu voa template -->
@section('controller')

<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-primary">
			<div class="card card-header bg-primary text-white">Add edit product</div>
			<div class="card-body">
			<!-- neu muon upload duoc file, phai co thuoc tinh enctype="multipart/form-data" -->
				<form method="post" enctype="multipart/form-data" action="">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Tiêu đề</div>
							<div class="col-md-10">
<input type="text" name="c_name" value="{{ isset($arr->c_name)?$arr->c_name:"" }}" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Giá</div>
							<div class="col-md-10">
<input type="number" name="c_price" value="{{ isset($arr->c_price)?$arr->c_price:'' }}" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Danh mục sản phẩm</div>
							<div class="col-md-10">
						<select name="fk_category_product_id">
						
							@foreach($cate as $rows)
							{
						 
<option {{ isset($arr->fk_category_product_id)&&$arr->fk_category_product_id==$rows->pk_category_product_id?"selected":"" }} value="{{  $rows->pk_category_product_id }}"> {{ $rows->c_name }}</option>
						@endforeach
						</select>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Giới thiệu</div>
							<div class="col-md-10">
								<textarea name="c_description">
									{{ isset($arr->c_description)?$arr->c_description:"" }}
								</textarea>
								<script type="text/javascript">
									CKEDITOR.replace('c_description');
								</script>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Chi tiết</div>
							<div class="col-md-10">
								<textarea name="c_content">
									{{ isset($arr->c_content)?$arr->c_content:"" }}
								</textarea>
								<script type="text/javascript">
									CKEDITOR.replace('c_content');
								</script>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
	<input type="checkbox" name="c_hotproduct" {{ isset($arr->c_hotproduct)&&$arr->c_hotproduct==1?'checked':''}} > Sản phẩm nổi bật
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Ảnh</div>
							<div class="col-md-10">
							<input type="file" name="c_img">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
								<input type="submit" value="Process" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger">
							</div>
						</div>
					</div>
					<!-- end form group -->
				</form>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>
@endsection