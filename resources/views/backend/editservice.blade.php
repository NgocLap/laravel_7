@extends('backend.master')
@section('title','Sửa Danh Mục Dịch Vụ')
@section('main')
	<div class="content-wrapper col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="padding-left: 30px">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục dịch vụ</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa danh mục
						</div>
						<div class="panel-body">
							@include('errors.note')
							
							<form method="post">
							<div class="form-group">
								<label>Tên danh mục:</label>
    							<input required type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$ser->ser_name}}">
							</div>
							<div class="form-group">
								<label>MenuList danh mục:</label>
    							<select required name="menu" class="form-control">
									@foreach ($menus as $menu)
										<option value="{{$menu->menu_id}}" @if($ser->ser_menu == $menu->menu_id) selected @endif>{{$menu->menu_name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
    							<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên danh mục..." value="Sửa">
							</div>
							<div class="form-group">
    							<a href="{{asset('admin/service')}}" class="form-control btn btn-danger">Hủy bỏ</a>
							</div>
							{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop