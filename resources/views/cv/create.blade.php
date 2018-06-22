@extends('layouts.app')

@section('content')
	
	

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<form  action="{{url('cvs')}}" method="post" enctype="multipart/form-data">

					{{csrf_field()}}

					<div class="form-group">
						<label for="">Titre</label>
						<input type="text" class="form-control" name="titre" value="{{old('titre')}}">
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
						<textarea name="presentation"  class="form-control">{{old('presentation')}}</textarea>
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
						<input type="submit" class="form-control btn btn-primary" value="save">
					</div>
				</form>

			</div>
		</div>
	</div>

@endsection