@extends('layouts.admin.template')

@section('content')
<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center custom-login">
            <h3><img src="{{asset('images/logo.png')}}" alt=""></h3>
        </div>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                    <form method="POST" action="/inscription" id="loginForm">
                    @csrf
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="name">Nom d'utilisateur</label>
                                <input id="name" name="name" class="form-control" require="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="password">Mot de passe</label>
                                <input id="password" type="password" name="password" class="form-control" require="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="password_confirmation">Répéter le mot de passe</label>
                                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" require="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="email">Email</label>
                                <input id="email" type="email" name="email" class="form-control" require="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="email_confirmation">Répéter l'email</label>
                                <input id="email_confirmation" type="email" name="email_confirmation" class="form-control" require="">
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success btn-block loginbtn">S'inscrire</button>
                            <a href="{{ route('login') }}" class="btn btn-default btn-block loginbtn">Connexion</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center login-footer">
            <p>Copyright © 2023. Tous droits réservés. Modèle par <a href="/">ISPP</a></p>
        </div>
    </div>   
</div>
@endsection
