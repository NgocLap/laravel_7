@extends('backend.master')
@section('title','Cập Nhập Tin Tức');
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
					<div class="panel-heading">Sửa tin tức</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên tin tức</label>
										<input required type="text" name="name" class="form-control" value="{{$news->news_name}}">
									</div>
									<div class="form-group" >
										<label>Tác giả</label>
										<input required type="text" name="author" class="form-control" value="{{$news->news_author}}">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('library/storage/app/avatar/'.$news->news_img)}}">
									</div>
									<div class="form-group" >
										<label>Ngày đăng</label>
										<input required type="date" name="date" class="form-control"  value="{{$news->news_date}}">
									</div>
									{{-- <div class="form-group" >
										<label>Bảo hành</label>
										<input required type="text" name="warranty" class="form-control" value="{{$product->prod_warranty}}">
									</div> --}}
									{{-- <div class="form-group" >
										<label>Khuyến mãi</label>
										<input required type="text" name="promotion" class="form-control" value="{{$product->prod_promotion}}">
									</div> --}}
									{{-- <div class="form-group" >
										<label>Tình trạng</label>
										<input required type="text" name="condition" class="form-control" value="{{$product->prod_condition}}">
									</div> --}}
									{{-- <div class="form-group" >
										<label>Trạng thái</label>
										<select required name="status" class="form-control">
											<option value="1" @if($product->prod_status==1) checked @endif>Còn hàng</option>
											<option value="0" @if($product->prod_status==0) checked @endif>Hết hàng</option>
					                    </select>
									</div> --}}
									<div class="form-group" >
										<label>Miêu tả</label>
										<textarea required class="ckeditor" required name="description">{{$news->news_description}}</textarea>
									</div>
									<div class="form-group" >
										<label>Nội dung tin tức</label>
										<textarea required class="ckeditor" required name="content">{{$news->news_content}}</textarea>
									</div>

									<script type="text/javascript">
										var editor = CKEDITOR.replace('description',{
											language:'vi',
											filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
											filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
											filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
											filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
										});
									</script>

									<script type="text/javascript">
										var editor = CKEDITOR.replace('content',{
											language:'vi',
											filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
											filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
											filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
											filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
										});
									</script>
									

									<div class="form-group" >
										<label>Danh mục tin tức</label>
										<select required name="cate" class="form-control">
											@foreach ($inforlist as $infor)
												<option value="{{$infor->cate_id}}" @if($news->news_cate == $infor->cate_id) selected @endif >{{$infor->cate_name}}</option>
											@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Sản phẩm nổi bật</label><br>
										Có: <input type="radio" name="featured" value="1" @if($news->news_featured == 1) selected @endif>
										Không: <input type="radio" checked name="featured" value="0" @if($news->news_featured == 0) selected @endif>
									</div>
									<input type="submit" name="submit" value="Cập nhập" class="btn btn-primary">
									<a href="{{asset('admin/news')}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop