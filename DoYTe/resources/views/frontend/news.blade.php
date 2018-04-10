@extends('frontend.layout')
@section('do-du-lieu-vao-template')
<!-- hot news -->
    
          
     
      <h1>Tin tức</h1>
        <div class="wrapper-blog"> 
          <!-- list news -->
          <div class="row">
          	<?php
          		$news = DB::table('tbl_news')->orderby("pk_news_id","desc")->limit(5)->get();
          	 ?>
          	 <ul class="list-unstyled">
          	 	@foreach($news as $rows)
          	 	<li class="list-unstyled">
		            <div class="col-md-6 article"> <a href="{{ url('news/detail/'.$rows->pk_news_id) }}" class="image"> <img src="{{ asset('upload/news/'.$rows->c_img) }}" alt="" title="Đồ y tế" class="img-responsive"> </a>
		              <h3><a href="{{ url('news/detail/'.$rows->pk_news_id) }}">{{ $rows->c_name }}</a></h3>
		              <p class="date">11/01/2016</p>
		              <p class="desc"></p>
		            </div>
		              </li>
		          @endforeach
		         </ul>
		       
          <!-- end list news --> 
         
          <!-- end list news -->
        
        </div>

        <!-- end main --> 
@endsection