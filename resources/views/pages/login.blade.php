@extends('layouts.template')

@section('title','Connexion | '.config('app.name'))

@section('content')

<<<<<<< HEAD
	
   
=======
>>>>>>> 2057928 (mise en place du prix total dans panier)

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
<<<<<<< HEAD
                    <div class="card-header">Connexion</div>
=======
                    <div class="card-header" style="text-align: center;">Connexion</div>
>>>>>>> 2057928 (mise en place du prix total dans panier)
                    <div class="card-body">
                        <form action="/connexion" method="post">
                        @csrf
                            <div class="form-group row">
<<<<<<< HEAD
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" name="email" id="email_address" class="form-control" name="email-address" required autofocus>
=======
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Adresse e-mail</label>
                                <div class="col-md-6">
                                    <input type="text" name="email" id="email_address" class="form-control" name="email-address" value="michael@gmail.com" required autofocus>
>>>>>>> 2057928 (mise en place du prix total dans panier)
                                </div>
                            </div>

                            <div class="form-group row">
<<<<<<< HEAD
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" name="password" id="password" class="form-control" name="password" required>
=======
                                <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>
                                <div class="col-md-6">
                                    <input type="password" name="password" id="password" class="form-control" name="password" value="michael123" required>
>>>>>>> 2057928 (mise en place du prix total dans panier)
                                </div>
                            </div>


                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Se connecter
                                </button>
                                <a href="#" class="btn btn-link">
<<<<<<< HEAD
                                    Forgot Your Password?
=======
                                    Vous n'avez pas de compte?
>>>>>>> 2057928 (mise en place du prix total dans panier)
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

<<<<<<< HEAD
	
=======
    <br>
>>>>>>> 2057928 (mise en place du prix total dans panier)
    @if(session()->has('erreur'))
    <div class="d-flex justify-content-center">
		<div class="alert alert-danger" role="alert">
			{{ session()->get('erreur') }}
		</div>
	</div>
	@endif

<<<<<<< HEAD

=======
	<br><br>
>>>>>>> 2057928 (mise en place du prix total dans panier)
@endsection