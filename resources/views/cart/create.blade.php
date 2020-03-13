@include('cart.header')
<body class="container">
	<form action="{{url('cart')}}" method="post">
		{{csrf_field()}}
		用户名<input type="text" name="mobile" value="{{old('mobile')}}">
		
		@if(count($errors)>0)
		<div class="alert alert-success">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<input type="submit" value="提交">
	</form>
</body>
</html>