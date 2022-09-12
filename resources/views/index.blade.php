@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		@foreach($categories as $category)

		
		<div class="col-md-12">
			<h1 style="color:blue;">{{$category->name}}</h1>
			<div class="jumbotron" style="background-color: aliceblue; padding: 60px;margin-top: 20px;
">
				<div class="row">
					@foreach(App\Models\Food::where('category_id',$category->id)->get() as $food)
					<div class="col-md-3">
						<img src="{{asset('images')}}/{{$food->image}}" width="250" height="195">
						<p class="text-center mt-3">{{$food->name}}
							<span>${{$food->price}}</span>
						</p>
						<p class="text-center"><a href="{{route('food.view',[$food->id])}}"><button class="btn btn-outline-danger">View</button></a>
						</p>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		@endforeach
	</div>
	
</div>
@endsection