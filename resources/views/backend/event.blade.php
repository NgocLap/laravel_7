@extends('backend.master')
@section('title','Danh Mục Sự Kiện')
@section('main')
	<div class="content-wrapper col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="padding-left: 30px">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sự kiện</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading" style="font-weight: bold">
							Thêm danh mục
						</div>
						<div class="panel-body">
						@include('errors.note')
							<form method="post" enctype="multipart/form-data" role="form" action="">
							<div class="form-group">
								<label>Tên danh mục:</label>
    							<input required type="text" name="name" class="form-control" placeholder="Tên sự kiện...">
                            </div>
                            <div class="form-group">
								<label>Ảnh danh mục:</label>
                                {{-- <input required type="text" name="name" class="form-control" placeholder="Tên sự kiện..."> --}}
                                <input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                <img id="avatar" class="thumbnail" width="150px" src="{{asset('public/layout/backend/img/new_seo-10-512.png')}}">
                            </div>
							<div class="form-group">
								<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên danh mục..." value="Thêm mới">
							</div>
							{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách danh mục</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
                                      <th>Tên sự kiện</th>
                                      <th>Ảnh sự kiện</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
								@foreach ($eventlist as $cate)
								<tr>
                                <td>{{$cate->event_name}}</td>
                                <td>
                                    <img width="200px" src="{{asset('library/storage/app/avatar/'.$cate->event_img)}}" class="thumbnail">
                                </td>
									<td>
										<a href="{{asset('admin/event/edit/'.$cate->event_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span><i class="fas fa-pencil-alt" aria-hidden="true"></i> Sửa</a>
			                    		<a href="{{asset('admin/event/delete/'.$cate->event_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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