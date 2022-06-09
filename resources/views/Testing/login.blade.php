<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"> 

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<form method="post" action="{{ route('loginuser') }}"   style="margin-top:90px" >
			{{-- @if (Session::has('success'))
			<div class="has-background-success columns">
				<div class="column is-offset-5 has-background-success">
				{{ Session::get('success') }}</div>
		</div> --}}
		{{-- @endif --}}
		@if (Session::has('fail'))
			<div class="has-background-danger">{{ Session::get('fail') }}</div>
		@endif
		
		@csrf
		
		<div class="columns">
		<div class="column is-offset-4 is-4">

		{{-- 	@error('username') 
				<p class="has-text-weight-semibold has-text-danger">{{ $message }}</p>
			@enderror

			<label for="" class="has-text-weight-semibold ">Username </label>
			<input value="{{ old('username') }}" type="text" class="@error('username') is-danger @enderror
			input " name="username" placeholder=""> --}}


			@error('email')
				<p class="has-text-weight-semibold has-text-danger">{{ $message }}</p>
			@enderror

			<label for="" class="has-text-weight-semibold  ">Emaill </label>
			<input value="{{ old('email') }}" type="text" class="input @error('username') is-danger @enderror "name="email">

		

			<button class="button mt-6 is-primary is-outlined is-fullwidth"type="submit">Login</button>
		</div>
	</div>

	



	</form>

</body>
</html>