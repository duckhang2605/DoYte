
<!-- load template -->
@extends('backend.layout')
<!-- do du lieu vao template -->
@section('controller')
<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="{{ url('admin/product/add/') }}" class="btn btn-primary">Add</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Login</div>
				<div class="card-body">
				<!-- table -->
					<table class="table table-hover table-bordered">
						<tr>
							<th style="width: 100px;">Ảnh</th>
							<th>Tiêu đề</th>
							<th style="width: 150px;">Danh mục</th>
							<th style="width: 120px;">Tin nổi bật22</th>
							<th style="width: 150px;"></th>
						</tr>
						@foreach($arr as $rows)
						<tr>
							<td>
							<img style="width: 50px;height: 50px;" src="{{ asset($rows->c_img) }}">
							</td>
							<td>
								{{ $rows->c_name }}
							</td>
							<td>
								{{ $rows->fk_category_product_id }}
							</td>
							<td>
								
							</td>
							
							<td style="text-align: center;">
								<a href="{{ url('admin/product/edit/'.$rows->pk_product_id) }}">Edit2</a>
								&nbsp;&nbsp;
								<a href="{{ url('admin/delete/'.$rows->pk_product_id) }}" >Delete</a>
							</td>
						</tr>
					@endforeach
					</table>
				<!-- end table -->
				
				<style type="text/css">
				.pagination{padding:0px; margin:0px;}
				</style>
				{{ $arr->render() }}
			</div>
		</div>
		<!-- end card -->
	</div>
</div>
@endsection