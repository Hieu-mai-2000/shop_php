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
		@include('partials.contentHeader',['name'=>'Menus','key'=>'add'])
		<!-- /.content-header -->
		<div class="container-fluid">
			<div class="row mt-2">
				<div class="col-md-12">
					<a href="{{route('home')}}" class="btn btn-success float-right m-3 pl-3 pr-3">Home</a>
					
				</div>
				<div class="col-md-8">
					<form action="{{route('menus.createPost')}}" method="POST">
						@csrf
						<div class="form-group">
							<label for="name">Menu</label>
							<input type="text" class="form-control" name="name" placeholder="Menu">
						</div>
						<div class="form-group">
							<label for="parent">Id Parent Menu</label>
							<select class="form-control" name="parent_id" id="parent">
								<option value="0">root parent</option>
								{!! $htmlOption !!}
								
							</select>
						</div>
						
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /.content-wrapper -->
	@endsection