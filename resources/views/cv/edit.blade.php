@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<form action="{{url('cvs/'.$cv->id)}}" method="post" enctype="multipart/form-data">
					<input type="hidden" name="_method" value="PUT">
					{{csrf_field()}}

					<div class="form-group">
						<label for="">Titre</label>
						<input type="text" class="form-control" name="titre" value="{{$cv->titre}}">
						@if($errors->get('titre'))

								<div class="alert alert-danger" role="alert">
									<ul>
									@foreach($errors->get('titre') as $m)
										<li>{{$m}}</li>
									@endforeach
									</ul>
								</div>
						@endif
					</div>
					<div class="form-group">
						<label for="">Presentation</label>
						<textarea  name="presentation"  class="form-control">{{$cv->presentation}}</textarea>
						@if($errors->get('presentation'))

								<div class="alert alert-danger" role="alert">
									<ul>
									@foreach($errors->get('presentation') as $m)
										<li>{{$m}}</li>
									@endforeach
									</ul>
								</div>
						@endif
					</div>
					<div class="form-group">
						<label for="">photo</label>
						<input type="file" name="photo" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" class="form-control btn btn-danger" value="Update">
					</div>
				</form>

			</div>
		</div>
	</div>

@endsection