@extends('backend.master')
@section('title','Cập Nhập Dịch Vụ');
@section('main')
	<div class="content-wrapper col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="padding-left: 30px">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dịch vụ</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa dịch vụ</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Ảnh Dịch Vụ</label>
										<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('library/storage/app/avatar/'.$contentsv->content_img)}}">
									</div>
									
									<div class="form-group" >
										<label>Miêu tả Dịch Vụ</label>
										<textarea required class="ckeditor" required name="description">{{$contentsv->content_description}}</textarea>
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

									<div class="form-group" >
										<label>Danh mục tin tức</label>
										<select required name="cate" class="form-control">
											@foreach ($listser as $infor)
												<option value="{{$infor->ser_id}}" @if($contentsv->content_cate == $infor->ser_id) selected @endif >{{$infor->ser_name}}</option>
											@endforeach
					                    </select>
									</div>
									<input type="submit" name="submit" value="Cập nhập" class="btn btn-primary">
									<a href="{{asset('admin/contentsv')}}" class="btn btn-danger">Hủy bỏ</a>
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