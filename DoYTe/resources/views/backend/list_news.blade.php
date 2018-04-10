<!-- load template -->
@extends('backend.layout')
<!-- do du lieu ra man hinh -->
@section('controller')
<div class="col-md-10 col-xs-offset-1">
	<div style="margin-bottom:5px;">
		<a href="{{ url('admin/new/add') }}" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">News</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					
					<th style="width:100px;">Ảnh</th>
					<th>Tiêu đề</th>
					<th style="width:200px;">Tin Nổi Bật</th>
					<th style="width:100px;"></th>
				</tr>
				@foreach($arr as $rows)
				<tr>
					<td ><img style="width: 50px;height: 50px;" src="{{ asset($rows->c_img) }}">
					</td>
					
					<td>{{ $rows->c_name }}</td>
					<td ">
						{{ $rows->c_hotnews }} 
					</td>
					<td style="text-align:center;">
						<a href="{{ url('admin/new/edit/'.$rows->pk_news_id) }}">Edit</a>&nbsp;
						<a href="{{ url('admin/new/delete/'.$rows->pk_news_id) }}" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
				@endforeach
			</table>
			<style type="text/css">
				.pagination{padding:0px; margin:0px;}			
			</style>
			{{ $rows->render() }}
		</div>
	</div>
</div>
@endsection