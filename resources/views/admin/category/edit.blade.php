<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.admin')
@section('title')
<title>trang chủ</title>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		@include('partials.contentHeader',['name'=>'Category','key'=>'add'])
		<!-- /.content-header -->
		<div class="container-fluid">
			<div class="row mt-2">
				<div class="col-md-12">
					<a href="{{route('home')}}" class="btn btn-success float-right m-3 pl-3 pr-3">Home</a>
					
				</div>
				<div class="col-md-8">
					<form action="{{route('categories.editPost')}}" method="POST">
						@csrf
						<div class="form-group">
							<input type="text" class="form-control" value="{{$category->id}}" name="id" hidden>
						</div>
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" value="{{$category->name}}" name="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="parent">Id Parent</label>
							<select class="form-control" name="parentId" id="parent">
								<option value="0">root parent</option>
								{!! $htmlOption !!}
							</select>
						</div>
						
						<button type="submit" class="btn btn-primary">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /.content-wrapper -->
	@endsection