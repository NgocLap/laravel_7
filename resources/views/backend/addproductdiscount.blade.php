@extends('backend.master')
@section('title','Thêm Sản Phẩm Giảm Giá');
@section('main')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<div class="content-wrapper col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="padding-left: 30px">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" >Sản phẩm giảm giá</h1>
			</div>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading" >Thêm sản phẩm</div>
					<div class="panel-body">
						@include('errors.note')
						<form method="post" enctype="multipart/form-data" role="form" action="">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label >Tên sản phẩm</label>
										<input id="name" required type="text" name="name" class="form-control "  >
									</div>
									<div class="form-group" >
										<label >Slug</label>
										<input id="slug" required type="text" name="slug" class="form-control" >
									</div>
									<div class="form-group" >
										<label >Tên tác giả</label>
										<input id="author" required type="text" name="author" class="form-control "  >
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="number" name="price" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('public/layout/backend/img/new_seo-10-512.png')}}">
									</div> 
									<div class="form-group" >
										<label>Phụ kiện</label>
										<input required type="text" name="accessories" class="form-control">
									</div>
									<div class="form-group" >
										<label>Bảo hành</label>
										<input required type="text" name="warranty" class="form-control">
									</div>
									<div class="form-group" >
										<label>Khuyến mãi <a style="color: red">( Lưu ý chỉ nhập số không nhập kí tự đặc biệt)</a></label>
										<input required type="number" name="promotion" class="form-control">
									</div>
									<div class="form-group" >
										<label>Tình trạng</label>
										<input required type="text" name="condition" class="form-control">
									</div>
									<div class="form-group" >
										<label>Trạng thái</label>
										<select required name="status" class="form-control">
											<option value="1">Còn hàng</option>
											<option value="0">Hết hàng</option>
					                    </select>
									</div>
									<div class="form-group" >
										<label>Miêu tả</label>
										<textarea required class="ckeditor" required name="description"></textarea>		
						<script type="text/javascript">
							var editor = CKEDITOR.replace('description',{
								language:'vi',
								filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
								filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
								filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
								filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
							});
						</script>
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="cate" class="form-control">
											@foreach ($catelist as $cate)
												<option value="{{$cate->catediscount_id}}">{{$cate->catediscount_name}}</option>
											@endforeach
					                    </select>
									</div>
									
									<div class="form-group" >
										<label>Sản phẩm nổi bật</label><br>
										Có: <input type="radio" name="featured" value="1">
										Không: <input type="radio" checked name="featured" value="0">
									</div>
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{asset('admin/productdiscount')}}" class="btn btn-danger">Hủy bỏ</a>
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

	{{-- <script>
		$('#name').change(function(e){
			$.get('{{route('admin.posts.checkSlug')}}',
			{'title':$(this).val()},
			function(data){
				$('#slug').val(data.slug);
			}
			);
		});
	</script> --}}
	{{-- // File auto Slug --}}
		{{-- <script src="jquery-1.11.1.min.js"></script> --}}
<script>
	$('input#name').keyup(function(event) {
		/* Act on the event */
		var title, slug;
    //Lấy text từ thẻ input title 
	title = $(this).val();
    //Đổi chữ hoa thành chữ thường
	slug = title.toLowerCase();
	
    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    $('input#slug').val(slug);
});
</script>
	{{-- <script>
		$("#name").keyup(function(){
			var str = $(this).val();
			var trims = $.trim(str)
			var slug = trims.replace(/[^a-z0-9]/gi,'-').replace(/-+/g, '-').replace(/^-|-$/g,'')
			$("slug").val(slug.toLowerCase()+".html")
		})
	</script> --}}
@stop	
	<script src="{{url('/public/layout/backend')}}/js/slug.js"></script>





