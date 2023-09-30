@extends('layouts.admin.template')

@section('content')
<div class="error-pagewrap">
  <div class="error-page-int">
    <div class="text-center m-b-md custom-login">
      <h3><img src="{{asset('images/logo.png')}}" alt=""></h3>
    </div>
    <div class="content-error">
        <div class="hpanel">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div class="panel-body">
                <form method="POST" action="/connexion" id="loginForm">
                @csrf
                    <div class="form-group">
                        <label class="control-label" for="username">Email</label>
                        <input type="text" placeholder="exemple@gmail.com" title="Veuillez entrer votre email" required="" value="" name="email" id="username" class="form-control" autofocus>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password">Mot de passe</label>
                        <input type="password" title="Veuillez saisir votre mot de passe" placeholder="******" required="" value="" name="password" id="password" class="form-control" autocomplete="current-password">
                        <span class="help-block small">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublié?') }}
                            </a>
                        @endif
                        </span>
                    </div>
                    <div class="checkbox login-checkbox">
                        <label>
                        <input type="checkbox" name="remember" class="i-checks"> Souvenez-vous de moi </label>
                        
                    </div>
                    <button class="btn btn-success btn-block loginbtn">Se connecter</button>
                    <a class="btn btn-default btn-block" href="{{ route('register') }}">S'inscrire</a>
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
