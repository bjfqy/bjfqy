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

      <tr>
        <th>#</th>
        <th>名称</th>
        <th>City</th>
        <th>上次登录时间</th>
        <th>状态</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>New York</td>
        <td>2019年1月20日 20:18:53</td>
        <td>开启</td>
        <td>删除 编辑</td>
        
      </tr>
    </tbody>
  </table>
  </div>
</div>
@endsection