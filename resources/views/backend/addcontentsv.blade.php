@extends('backend.master')
@section('title','Thêm Dịch Vụ');
@section('main')
		
	<div class="content-wrapper col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="padding-left: 30px">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dịch Vụ</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm Dịch Vụ</div>
					<div class="panel-body">
						@include('errors.note')
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Ảnh Dịch Vụ</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
									</div>
									<div class="form-group" >
										<label>Nội Dung Dịch Vụ</label>
										<textarea required class="ckeditor" required name="description"></textarea>
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
										<label>Danh mục</label>
										<select required name="cate" class="form-control">
											@foreach ($servicelist as $cate)
												<option value="{{$cate->ser_id}}">{{$cate->ser_name}}</option>
											@endforeach
					                    </select>
									</div>

									{{-- <div class="form-group" >
										<label>Danh mục MenuList</label>
										<select required name="menu" class="form-control">
											@foreach ($menulist as $menu)
												<option value="{{$menu->menu_id}}">{{$menu->menu_name}}</option>
											@endforeach
					                    </select>
									</div> --}}
								
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{asset('admin/contentsv')}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{(csrf_field())}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop	