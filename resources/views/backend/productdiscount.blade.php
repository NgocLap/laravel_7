@extends('backend.master')
@section('title','Danh Sách Sản Phẩm Giảm Giá');
@section('main')
	<div class="content-wrapper col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="padding-left: 30px">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm Giảm Giá</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách sản phẩm giảm giá</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/productdiscount/add')}}" class="btn btn-primary">Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="15%">Tên Sản phẩm</th>
											<th width="15%">Slug</th>
											<th width="10%">Tác giả</th>
                                            <th width="10%">Giá sản phẩm</th>
                                            <th width="5%">Giảm Giá</th>
											<th width="15%">Ảnh sản phẩm</th>
											<th>Danh mục</th>
											<th >Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($productdiscountlist as $product)
										<tr>
											<td>{{$product->discount_id}}</td>
											<td>{{$product->discount_name}}</td>
											<td>{{$product->discount_slug}}</td>
											<td>{{$product->discount_author}}</td>
                                            <td>{{number_format($product->discount_price,0,',','.')}} VND</td>
                                            <td>{{number_format($product->discount_promotion,0,',','.')}} %</td>
											<td>
												<img width="200px" src="{{asset('library/storage/app/avatar/'.$product->discount_img)}}" class="thumbnail">
											</td>
											<td>{{$product->catediscount_name}}</td>
											<td>
												<a href="{{asset('admin/productdiscount/edit/'.$product->discount_id)}}" class="btn btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Sửa</a>
												<a onclick="return confirm('Bạn có chắc chắn muốn xóa !')" href="{{asset('admin/productdiscount/delete/'.$product->discount_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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