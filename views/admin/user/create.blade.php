@extends('layouts.adminapp')
@section('content')


<div class="container">
  <h2>管理员管理</h2>
  <p>用来添加或者删除管理员操作</p>                                                                                      
  <div class="table-responsive">   

  <table class="table">
    <thead>
    	<tr> <th><a href="/admin/user/create">添加管理</a></th> 
    		<th><a href="/admin/user/edit">批量删除</a></th>
    	</tr>
			 </thead>
        <tbody>  
        <tr>        
            
           </tbody>
           </tr>  
    
      </table>

      <form class="form-horizontal col-4 " action="/" method="post">
                @csrf
                 <div class="form-group">
                    <label for="name">前后台选择</label>
                    <select class="form-control" name="type">
                      <option value="0">前台</option>
                      <option value="1">后台</option>                  
                    </select>               
                  </div>

                <label for="name">管理员名称</label>
                    <input type="text" class="form-control" name="nav_name" placeholder="写入分类名称">
                <div class="form-group">
                    <label for="name">上级领导</label>
                    <select class="form-control" name="pid">
                      <option value="0">顶级分类</option>
                                    
                    </select>               
                </div>
                <label for="name">邀请链接</label>
                <input type="text"  class="form-control" name="link"  placeholder="默认的导航链接"> 

                
               
                <button type="submit" class="btn btn-primary">添加</button>
              </form>
  </div>
</div>
@endsection