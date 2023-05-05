@extends('admin_layout')
@section('admin_content')
<style>
  span.text-alert {
    color: red;

}
</style>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản Lý Tài Khoản Khách Hàng
    </div>
    <div class="row w3-res-tb">
    
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-primary" type="button">Tìm kiếm</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
          
            <th>Tên User</th>
            <th>Email</th>
            <th>Password</th>
            <th>Số điện thoại</th>
          </tr>
        </thead>
        <tbody>
             @foreach($users as $row)
          <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->password}}</td>
            <td>{{$row->phone}}</td>    
             <td>
            
             </td>
          </tr>
          @endforeach
             
          
         </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
       
        <div class="col-sm-12 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection