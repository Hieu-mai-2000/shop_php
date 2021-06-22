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
    @include('partials.contentHeader',['name'=>'Menus','key'=>'List'])
    <!-- /.content-header -->
	<div class="container-fluid">
		<div class="row mt-2">
			<div class="col-md-12">
				<a href="{{route('menus.createGet')}}" class="btn btn-success float-right m-3 pl-3 pr-3">Add</a>
	
			</div>
			<div class="col-md-12">

				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Menu</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($menus as $value)
						<tr>
							<th scope="row">{{$value->id}}</th>
							<td>{{$value->name}}</td>
							<td>
								<a href="{{route('menus.editGet',['id'=>$value->id])}}" class="btn btn-warning mr-2">Edit</a>
								<a href="{{route('menus.delete',['id'=>$value->id])}}" class="btn btn-danger">Delete</a>
							</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
			<div class="col-md-12">
				<span class="float-right mr-5">{{$menus->links("pagination::bootstrap-4")}}</span>
			</div>
		</div>
	</div>
</div>
<!-- /.content-wrapper -->
@endsection