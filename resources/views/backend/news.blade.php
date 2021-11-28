@extends('backend.master')
@section('title','Danh Sách Tin Tức');
@section('main')
		
	<div class="content-wrapper col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="padding-left: 30px">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tin tức</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách tin tức</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/news/add')}}" class="btn btn-primary">Thêm tin tức</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Tên Tin Tức</th>
											<th>Tác Giả</th>
											<th width="20%">Ảnh Tin tức</th>
											<th>Danh mục</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($newslist as $news)
										<tr>
											<td>{{$news->news_id}}</td>
											<td>{{$news->news_name}}</td>
											<td>{{$news->news_author}}</td>
											{{-- <td>{{number_format($news->prod_price,0,',','.')}} VND</td> --}}
											<td>
												<img width="200px" src="{{asset('library/storage/app/avatar/'.$news->news_img)}}" class="thumbnail">
											</td>
											<td>{{$news->cate_name}}</td>
											<td>
												<a href="{{asset('admin/news/edit/'.$news->news_id)}}" class="btn btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Sửa</a>
												<a onclick="return confirm('Bạn có chắc chắn muốn xóa !')" href="{{asset('admin/news/delete/'.$news->news_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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