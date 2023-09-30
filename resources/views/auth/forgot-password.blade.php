@extends('layouts.admin.template')

@section('content')
<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center ps-recovered">
            <h3><img src="{{asset('images/logo.png')}}" alt=""></h3>
        </div>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body poss-recover">
                    <p>
                        Vous avez oublié votre mot de passe ? Pas de problème. Indiquez-nous votre adresse 
                        électronique et nous vous enverrons un lien de réinitialisation du mot de passe qui 
                        vous permettra d'en choisir un nouveau.
                    </p>
                    <form method="POST" action="{{ route('password.email') }}" id="loginForm">
                    @csrf
                        <div class="form-group">
                            <label class="control-label" for="username">Email</label>
                            <input type="text" placeholder="exemple@gmail.com" title="Veuillez saisir votre adresse e-mail" required="" value="" name="email" id="username" class="form-control">
                            
                        </div>

                        <button class="btn btn-success btn-block">Réinitialiser le mot de passe</button>
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
