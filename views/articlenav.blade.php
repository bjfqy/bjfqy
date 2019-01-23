@include('twbs.head')
<div class="container">
  <h2>分类添加<a href="/article/create"><button type="button" class="btn btn-success">添加分类</button></a>         
  </h2>
  
    
		<form method="post"  action="/article/nav/add" enctype="multipart/form-data">
			@csrf
		    <div class="form-group">
		      <label for="art">分类名称:</label>
		      <input name="nav_name" type="text" class="form-control" id="title" placeholder="请输入文章标题">
		    </div>
			

		   	

		    <label for="name">上级目录:</label>
		    <select class="form-control" name="pid">
		    	 <option value="0">顶级目录</option>
		    	@foreach($artnav as $value)
		      <option value="{{$value->id}}">{{$value->nav_name}}</option>
		        @endforeach
		    </select>

	
			<div class="form-group">
			    <label for="name">分类介绍</label>
			    <input type="text" name="introduce" class="form-control" placeholder="文本输入 请用空格进行分割 我们会在数据库中提取 短标签 ">
			  </div>


		     
				

		    
		    <button type="submit" class="btn btn-primary">发布文章</button>
	  </form>
  
</div>
@include('twbs.foot')
