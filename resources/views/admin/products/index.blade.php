<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.admin')
@section('title')
<title>Product</title>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		@include('partials.contentHeader',['name'=>'Product','key'=>'List'])
		<!-- /.content-header -->
		<div class="container-fluid">
			<div class="row mt-2">
				<div class="col-md-12">
					<a href="{{route('product.createGet')}}" class="btn btn-success float-right m-3 pl-3 pr-3">Add</a>
				</div>
				<div class="col-md-12">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First</th>
								<th scope="col">Last</th>
								<th scope="col">Handle</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-12">
				</div>
			</div>
		</div>
	</div>
	<!-- /.content-wrapper -->
	@endsection