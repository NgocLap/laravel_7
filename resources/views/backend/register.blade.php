@extends('backend.master')
@section('title','Quản Lý User')
@section('main')
	<div class="content-wrapper col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="padding-left: 30px">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý dữ liệu Users</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						{{-- <div class="panel-heading" style="font-weight: bold">
							Thêm User
						</div> --}}
						<div class="panel-body">
						@include('errors.note')
							<form method="post">
							<div class="form-group">
								<label>Nhập tên User:</label>
                                <input required type="text" name="name" class="form-control" placeholder="Tên user...">
                                <label>Nhập email User:</label>
                                <input required type="email" name="email" class="form-control" placeholder="Email user...">
                                <label>Nhập mật khẩu User:</label>
                                <input required type="password"  name="password" class="form-control" placeholder="Password user...">
                                <label>Nhập lại mật khẩu User:</label>
                                <input required type="password"  name="passwordAgain" class="form-control" placeholder="PasswordAgain user...">
                                <label>Nhập level User:</label>
    							<input required type="text" name="level" class="form-control" placeholder="Level user..." aria-describedby="basic-addon1">
							</div>
							{{csrf_field()}}
							<div class="form-group">
								<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên danh mục..." value="Đăng Ký User">
							</div>
							
							</form>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách Users</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
                                      <th>Tên User</th>
									  <th>Email User</th>
									  <th>Quyền User</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
								@foreach ($userlist as $user)
								<tr>
                                <td>{{$user->username}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->level}}</td>
									<td>
									<a href="{{asset('admin/user/edit/'.$user->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span><i class="fas fa-pencil-alt" aria-hidden="true"></i> Sửa</a>
			                    		<a href="{{asset('admin/user/delete/'.$user->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
			                  		</td>
								  </tr>
								  @endforeach
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop