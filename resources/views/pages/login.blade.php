@extends('layouts.template')

@section('content')

	<div class="d-flex justify-content-center">
		<form action="/connexion" method="post">
		@csrf
			<p><input type="text" name="email" placeholder="Votre adresse email"></p>
			<p><input type="password" name="password" placeholder="Votre mot de passe"></p>
			<button type="submit" class="site-btn" >Connexion</button>
		</form>
    </div>

@endsection