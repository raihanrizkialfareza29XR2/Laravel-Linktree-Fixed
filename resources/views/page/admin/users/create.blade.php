@extends('layouts.dashboard')

@section('title')
    user
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah user</h1>
</div>

<!-- Content Row -->
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Tambah user</div>
						<a href="{{ route('users.index') }}" class="btn btn-primary btn-sm ml-auto">Back</a>
					</div>
				</div>
				
				<div class="card-body">
					<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						@if ($message = Session::get('gagal'))
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert">×</button> 
								<strong>{{ $message }}</strong>
							</div>
						@endif
                        <div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label for="name">Nama</label>
							<input type="text" class="form-control" name="name">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="text" class="form-control" name="password">
                        </div>
						<div class="form-group">
							<label for="judul">Roles</label>
							<select name="roles" id="">
								<option value="ADMIN">Admin</option>
								<option value="USER">User</option>
								<option value="KETUA">Ketua</option>
							</select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        </div>
					</form>
				</div>
@endsection