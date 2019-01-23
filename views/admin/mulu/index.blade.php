@extends('layouts.adminapp')

@section('content')
  <p>添加类目</p>
            
            <form class="form-horizontal" action="/homeadd" method="post">
                @csrf
                 <div class="form-group">
                    <label for="name">前后台选择</label>
                    <select class="form-control" name="type">
                      <option value="0">前台</option>
                      <option value="1">后台</option>                  
                    </select>               
                  </div>

                <label for="name">分类名称</label>
                    <input type="text" class="form-control" name="nav_name" placeholder="写入分类名称">
                <div class="form-group">
                    <label for="name">上级分类</label>
                    <select class="form-control" name="pid">
                      <option value="0">顶级分类</option>
                                    
                    </select>               
                </div>
                <label for="name">默认链接</label>
                <input type="text"  class="form-control" name="link"  placeholder="默认的导航链接"> 

                
               
                <button type="submit" class="btn btn-primary">添加</button>
              </form>
             

	
@endsection
