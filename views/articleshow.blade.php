@include('twbs.head')
<div class="container">
  <div class="row">
  	<div class="col2"></div>
  	<div class="col8">
  		<h2 class=""> {{$art->title}}</h2>
  		<span class="btn btn-info btn-sm">发布日期 </span>
  		<p class="d-inline-block">{{$art->created_at}}</p>


  		<img src="../storage/{{$art->img}}" width="80" alt="">
  		@dd($art)






  	</div>
  	<div class="col2"></div>
  </div>
	


</div>
@include('twbs.foot')
