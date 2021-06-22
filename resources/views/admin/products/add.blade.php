<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.admin')
@section('title')
<title>Product create</title>
@endsection
@section('css')
	
<link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('admins/products/add/add.css')}}" rel="stylesheet" />
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		@include('partials.contentHeader',['name'=>'Product','key'=>'add'])
		<!-- /.content-header -->
		<div class="container-fluid">
			<div class="row mt-2">
				<div class="col-md-12">
					<a href="{{route('home')}}" class="btn btn-success float-right m-3 pl-3 pr-3">Home</a>
					
				</div>
				<div class="col-md-8">
					<form action="{{route('product.createPost')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="name">Product</label>
							<input type="text" class="form-control" name="name" placeholder="Product,...">
						</div>
						<div class="form-group">
							<label for="name">Price product</label>
							<input type="text" class="form-control" name="price" placeholder="Price product">
						</div>
						<div class="form-group">
							<label for="name">Avatar</label>
							<input type="file" class="form-control-file" name="feature_image" placeholder="Image">
						</div>
						<div class="form-group">
							<label for="name">Image deatail for product</label>
							<input type="file" multiple class="form-control-file" name="image[]" placeholder="Images for product">
						</div>
						<div class="form-group">
							<label for="parent">Id Parent Menu</label>
							<select class="form-control" name="category_parent" id="category_parent">
								<option value="0">root parent</option>
								{!! $htmlOption !!}
								
							</select>
						</div>
						<div class="form-group">
							<select name="tag[]" id="productTag" class="form-control" multiple="multiple">
							</select>
						</div>
						<div class="form-group">
							<label for="content">Content</label>
							<textarea name="contents" id="example" class="form-control content-edit-TinyMCE5" rows="3"></textarea>
							<!-- <input type="file"  name="contents" placeholder="Images for product"> -->
						</div>
						
						
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- /.content-wrapper -->
	@endsection
	@section('js')
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>
	<script src="{{asset('admins/products/add/add.js')}}"></script>

	
	@endsection