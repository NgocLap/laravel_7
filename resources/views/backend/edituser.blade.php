@extends('backend.master')
@section('title','Sửa Thông Tin User')
@section('main')
	<div class="content-wrapper col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="padding-left: 30px">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách User</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa thông tin User
						</div>
						<div class="panel-body">
							@include('errors.note')
							<form method="post">
							<div class="form-group">
								<label>Tên User:</label>
                                <input required type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$user->username}}">
                                <label>Email User:</label>
                                <input required type="email" name="email" class="form-control" placeholder="Tên danh mục..." value="{{$user->email}}">
                                <label > Password User <a style="color: red">(Đề nghị nhập lại Password để đảm bảo an toàn):</a>  </label>
                                <input required type="password" name="password" class="form-control" placeholder="Tên danh mục..." value="{{$user->password}}">
                                <label>Level User:</label>
    							<input required type="text" name="level" class="form-control" placeholder="Tên danh mục..." value="{{$user->level}}">
							</div>
							<div class="form-group">
    							<input  onclick="return confirm('Bạn đã chắc chắn nhập lại mật khẩu chưa ?')" type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên danh mục..." value="Sửa">
							</div>
							<div class="form-group">
    							<a href="{{asset('admin/user/register')}}" class="form-control btn btn-danger">Hủy bỏ</a>
							</div>
							{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop