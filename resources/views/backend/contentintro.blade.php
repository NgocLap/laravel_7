@extends('backend.master')
@section('title','Danh Sách Phần Giới Thiệu');
@section('main')
		
	<div class="content-wrapper col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="padding-left: 30px">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Giới Thiệu</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách phần giới thiệu</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/contentintro/add')}}" class="btn btn-primary">Thêm phần giới thiệu</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
                                            <th width="40%">Nội Dung Giới Thiệu</th>
                                            <th width="20%">Ảnh Giới Thiệu</th>
											<th width="20%">Danh mục</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($contentlist as $content)
										<tr>
											<td>{{$content->contentintro_id}}</td>
											<td>{!!$content->contentintro_description!!}</td>
											<td>
												<img width="200px" src="{{asset('library/storage/app/avatar/'.$content->contentintro_img)}}" class="thumbnail">
											</td>
											<td>{{$content->intro_name}}</td>
											<td>
												<a href="{{asset('admin/contentintro/edit/'.$content->contentintro_id)}}" class="btn btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Sửa</a>
												<a onclick="return confirm('Bạn có chắc chắn muốn xóa !')" href="{{asset('admin/contentintro/delete/'.$content->contentintro_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop