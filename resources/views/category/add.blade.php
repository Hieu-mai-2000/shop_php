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
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark">Starter Page</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Starter Page</li>
							</ol>
							</div><!-- /.col -->
							</div><!-- /.row -->
							</div><!-- /.container-fluid -->
						</div>
						<!-- /.content-header -->
						<div class="container-fluid">
							<div class="row mt-2">
								<div class="col-md-12">
									<a href="{{route('home')}}" class="btn btn-success float-right m-3 pl-3 pr-3">Add</a>
									
								</div>
								<div class="col-md-8">
									<form>
										<div class="form-group">
											<label for="name">Name</label>
											<input type="text" class="form-control" placeholder="Name">
										</div>
										<div class="form-group">
    <label for="parent">Parent</label>
    <select class="form-control" id="parent">
      <option>root parent</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      
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