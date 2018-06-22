@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			
			<div class="row">
				<h1>la liste de mes cv</h1>
				<div class="pull-right">
					<a class="btn btn-success" href="{{url('cvs/create')}}"> nouveaux cv</a>
				</div>
				
				</div>
				
				<div class="row">
					@foreach($cvs as $cv)
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="{{ asset('storage/'.$cv->photo) }}" alt="...">
				      <div class="caption">
				        <h3>{{$cv->titre}}</h3>
				        <p>...</p>
				        <p><form action="{{url('cvs/'.$cv->id)}}" method="post">
									{{csrf_field()}}
									{{method_field('DELETE')}}
									<a href="" class="btn btn-primary">Details</a>
									<a href="{{url('cvs/'.$cv->id.'/edit')}}"class="btn btn-default">Editer</a>
									<button type="submit" class="btn btn-danger">Supp</button>
								</form></p>
				      </div>
				    </div>
				  </div>
				  @endforeach
				</div>
				



				
			</div>
		</div>
	</div>

@endsection