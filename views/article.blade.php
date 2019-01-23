@include('twbs.head')
<div class="container">
  <h2>文章多功能操作 <a href="/article/create">  <button type="button" class="btn btn-success">添加文章</button> 
</a>         </h2>
    <ul class="list-group">    
	    <li class="list-group-item list-group-item-light fs">
				<ul class="row list-unstyled  ">
					<li class="col-1 text-center id ">ID </li>					
					<li class="col-5 text-center">文章标题</li>				
					<li class="col-3">可选标签</li>
					<li class="col-2">时间</li>
					<li class="col-1 text-right ">操作</li>
				</ul>
		</li>
 	
		
		@foreach($artdata as $art)
		<li class="list-group-item list-group-item-light sul">		
				
				<ul class="row list-unstyled ">
					<li class="col-1 text-center sid">{{$art->id}}</li>
					<li class="col-5 text-center sti">{{$art->title}}</li>				
					<li class="col-1 stag">{{$art->tag}}</li>
					<li class="col-3 text-right scat">{{$art->created_at}}</li>
					<li class="col-2 text-right sbt "><span class="btn btn-warning" ><a class="text-light" href="/article/{{$art->id}}/edit">编辑</a></span> <span class="btn btn-info"><a class="text-light" href="/article/{{$art->id}}/del">删除 @method('DELETE')</a></span>
					</li>
				</ul>
				
	    </li>
	    @endforeach 
  </ul>
</div>
<script type="text/javascript">
$(function(){

		//$('.sul')

			//递增
			$('.list-group>.sul').find('.sid').css('color','red');

		 var asc = function(a, b) {
		        return $(a).find('.sid').text() > $(b).find('.sid').text() ? 1 : -1;
		    }
		//递减
		 var desc = function(a, b) {
		        return $(a).find('.sid').text()  > $(b).find('.sid').text() ? -1 : 1;
		    }

		 var sortByInput = function(sortBy) {
		        var sortEle = $('.sul').sort(sortBy);
		        var fs = $('.fs').clone();
		        $('.list-group').empty().append(fs).append(sortEle);
		    }
		$('.id').click(function() {
				
		        sortByInput(asc);
		     
		    
		    	
		    

		    	});    

		  
	
});
/*$('.id').click(function(){
	});*/
</script>
@include('twbs.foot')
