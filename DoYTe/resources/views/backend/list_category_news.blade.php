<!-- load du lieu template -->
@extends('backend.layout')
<!-- do du lieu vao template -->
@section('controller')
<div class="col-md-6 col-xs-offset-3">
	<div style="margin-bottom:5px;">
		<a href="{{ url('admin/category/add') }}" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">Category news</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th>Tên danh mục</th>
					<th style="width:100px;">Quản lý</th>
				</tr>
				@foreach($arr as $rows)
				<tr>
					<td>{{ $rows->c_name }}</td>
					<td style="text-align:center">
						<a href="{{ url('admin/category/edit/'.$rows->pk_category_product_id) }}">Edit</a>&nbsp;|&nbsp;
						<a href="{{ url('admin/category/delete/'.$rows->pk_category_product_id) }}" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
				@endforeach
			</table>
			<style type="text/css">
				.pagination{padding: 0px; margin: 0px;}
			</style>
			{{ $arr->render() }}
		</div>
	</div>
</div>
@endsection