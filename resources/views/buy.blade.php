@extends('layout')

@section('content')
<div class="is-widescreen mx-6 mt-4 centered">
	<div class="container">
          <h1 class="title">Buy a drawing of {{ $city }}</h1>
          <p>

            @if (count($errors) > 0)
		    <div class="alert alert-danger">
		     <button type="button" class="close" data-dismiss="alert">×</button>
		     <ul>
		      @foreach ($errors->all() as $error)
		       <li>{{ $error }}</li>
		      @endforeach
		     </ul>
		    </div>
		   @endif
		  
          <form method="POST" action="/sendemail">
    		@csrf
          	<div class="field">
			  <label class="label">Name</label>
			  <div class="control">
			    <input name="name" class="input" type="text" placeholder="">
			  </div>
			</div>
			<div class="field">
			  <label class="label">City</label>
			  <div class="control">
			    <input name="city" value="{{ $city }}" class="input" type="text" placeholder="{{ $city }}">
			  </div>
			</div>
          	<div class="field">
			  <label class="label">Email</label>
			  <div class="control has-icons-left has-icons-right">
			    <input name="email" class="input is-danger" type="email" placeholder="Email" value="">
			    <span class="icon is-small is-left">
			      <i class="fas fa-envelope"></i>
			    </span>
			    <span class="icon is-small is-right">
			      <i class="fas fa-exclamation-triangle"></i>
			    </span>
			  </div>
			  <p class="help is-danger">This email is invalid</p>
			</div>
			<div class="field">
			  <div class="control">
			    <label class="checkbox">
			      <input type="checkbox">
			      I agree to the <a href="#">terms and conditions</a>
			    </label>
			  </div>
			</div>

			<div class="field is-grouped">
			  <div class="control">
			    <button class="button is-link">Submit</button>
			  </div>
			  <div class="control">
			    <button class="button is-link is-light">Cancel</button>
			  </div>
			</div>
          </form>
          </p>
    </div>
</div>
@endsection