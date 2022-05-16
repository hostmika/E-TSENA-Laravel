@extends('layouts.template')

@section('content')


<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center;">Inscription</div>
                    <div class="card-body">
                        <form action="/inscrire" method="post">
                        @csrf
                            <div class="form-group row">
                                <label for="nom" class="col-md-4 col-form-label text-md-right">Nom</label>
                                <div class="col-md-6">
                                    <input type="text" name="nom" id="email_address" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="adresse_email" class="col-md-4 col-form-label text-md-right">Adresse e-mail</label>
                                <div class="col-md-6">
                                    <input type="email" name="email" id="password" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mot_de_passe" class="col-md-4 col-form-label text-md-right">Mot de passe</label>
                                <div class="col-md-6">
                                    <input type="password" name="mdp" id="password" class="form-control" required>
                                </div>
                            </div>


                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Valider
                                </button>
                                
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
    @if(session()->has('message'))
    <div class="d-flex justify-content-center">
        <div class="alert alert-success" role="alert">
            {{ session()->get('message') }}
        </div>
    </div>
    @endif

    <br><br>
@endsection