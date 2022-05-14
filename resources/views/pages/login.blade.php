@extends('layouts.template')

@section('content')


<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center;">Connexion</div>
                    <div class="card-body">
                        <form action="/connexion" method="post">
                        @csrf
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Adresse e-mail</label>
                                <div class="col-md-6">
                                    <input type="text" name="email" id="email_address" class="form-control" name="email-address" value="michael@gmail.com" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>
                                <div class="col-md-6">
                                    <input type="password" name="password" id="password" class="form-control" name="password" value="michael123" required>
                                </div>
                            </div>


                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Se connecter
                                </button>
                                <a href="#" class="btn btn-link">
                                    Vous n'avez pas de compte?
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>

    <br>
    @if(session()->has('erreur'))
    <div class="d-flex justify-content-center">
		<div class="alert alert-danger" role="alert">
			{{ session()->get('erreur') }}
		</div>
	</div>
	@endif

	<br><br>
@endsection