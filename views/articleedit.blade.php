@include('twbs.head')
<div class="container">
  <h2>文章多功能操作<a href="/article/create"><button type="button" class="btn btn-success">添加文章</button></a>         
  </h2>
  
    	
		<form method="post"  action="/article/{{$art->id}}" enctype="multipart/form-data">
			@csrf
		    <div class="form-group">
		      <label for="title">文章标题:</label>
		      <input name="title" value="{{$art->title}}" type="text" class="form-control" id="title" placeholder="请输入文章标题">
		    </div>

		   	<div class="form-group">
		   	<label for="comment2">文章楔子</label>
      			<textarea class="form-control" rows="2" name="qizi" id="comment2">{{$art->qizi}}</textarea>
			</div>

		    <label for="name">文章类目:</label>
		    <select class="form-control" name="artnav" value="{{$art->artnav}}">
		      <option value="0">顶级分类</option>
		      <option>佳能</option>
		      <option>尼康</option>
		      <option>索尼</option>
		      <option>5</option>
		    </select>

	
			<div class="form-group">
			    <label for="name">标签</label>
			    <input type="text" name="tag" class="form-control" value="{{$art->tag}} " placeholder="文本输入 请用空格进行分割 我们会在数据库中提取 短标签 ">
			  </div>


		     

			<div class="form-group">

		     <label for="comment">文章内容</label>
      			<textarea class="form-control" rows="15" id="comment" name="content">
      				{{$art->content}}
      			</textarea>
			</div>
			
			 
			  <div class="form-group">
			    <label class="sr-only" for="inputfile">图片上传</label>
			    <input type="file" id="inputfile"  name="img" value="{{$art->img}}" >
			    <img class="viewimg" src="{{$art->img}}" width="100" alt="">

			  </div>
				

		    @method('PUT')
		    <button type="submit" class="btn btn-primary">发布文章</button>
	  </form>
  
</div>
@include('twbs.foot')
