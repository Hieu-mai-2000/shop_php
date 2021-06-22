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
    @include('partials.contentHeader',['name'=>'Homee','key'=>'page'])
    <!-- /.content-header -->
	<div class="container-fluid">
		<div class="row mt-2">
			
			<div class="col-md-12">
				Trang chủ
			</div>
			
		</div>
	</div>
</div>
<!-- /.content-wrapper -->
@endsection