{{-- Primary Alert --}}
@if(Session::has('primary'))
	<div class="notice notice-primary alert fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>

		<strong>Something to note:</strong>
		<br>
		{{ Session::get('primary') }}
	</div>
@endif

{{-- Secondary Alert --}}
@if(Session::has('secondary'))
	<div class="notice notice-secondary alert fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>

		<strong>Something to note:</strong>
		<br>
		{{ Session::get('secondary') }}
	</div>
@endif

{{-- Success Alert --}}
@if(Session::has('success'))
	<div class="notice notice-success alert fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>

		<strong>You've done it!</strong>
		<br>
		{{ Session::get('success') }}
	</div>
@endif

{{-- Informational Alert --}}
@if(Session::has('info'))
	<div class="notice notice-info alert fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>

		<strong>Here's a little information:</strong>
		<br>
		{{ Session::get('info') }}
	</div>
@endif

{{-- Warning Alert --}}
@if(Session::has('warning'))
	<div class="notice notice-warning alert fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>

		<strong>Something Went Wrong!</strong>
		<br>
		{{ Session::get('warning') }}
	</div>
@endif

{{-- Danger Alert --}}
@if(Session::has('danger'))
	<div class="notice notice-danger alert fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>

		<strong>Something went horribly wrong!</strong>
		<br>
		 {{ Session::get('danger') }}
	</div>
@endif

{{-- Authentication Alerts --}}
@if (session('status'))
	<div class="notice notice-warning alert fade show" role="alert">
		<strong>Note to User:</strong> {{ session('status') }}

		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif

{{-- If the page has any errors passed to it --}}
@if(count($errors) > 0)
	<div class="notice notice-danger alert fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>

		<strong>Something went horribly wrong!</strong>
		<br>

		<ul>
			@foreach($errors->all() as $error)
				
				<li>{{ $error }}</li>

			@endforeach
		</ul>
	</div>
@endif