@if(session()->has('upd'))
			<div class="alert alert-success">
				{{session()->get('upd')}}	
			</div>	
			@endif

			@if(session()->has('suc'))
			<div class="alert alert-success">
				{{session()->get('suc')}}	
			</div>	
			@endif