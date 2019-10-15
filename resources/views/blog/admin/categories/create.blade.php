@extends('layouts.admin')

@section('title', 'Create Blog Category')

@section('breadcrumbs')
	
	<li class="breadcrumb-item">
	    <a href="#">Blog</a>
	</li>
	<li class="breadcrumb-item">
	    <a href="#">Categories</a>
	</li>
	<li class="breadcrumb-item active">Create</li>

@endsection

@section('content')

	{{ Form::open(['route' => 'admin.blog.categories.store']) }}
		
		<div class="row justify-content-center">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="name">Category Name</label>
					<input type="text" name="name" class="form-control" placeholder="Cannabis News" autofocus required>
				</div>
				
				<button class="btn btn-block btn-success">Save New Category</button>
			</div>
		</div>

	{{ Form::close() }}

@endsection