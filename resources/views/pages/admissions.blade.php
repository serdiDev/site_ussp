@extends('layouts.site.site')

@section('content')
<!--************************************
        Inner Banner Start
*************************************-->
<div class="tg-innerbanner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ol class="tg-breadcrumb">
                    <li><a href="javascript:void(0);">Accueil</a></li>
                    <li class="tg-active">Pré-inscription</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Inner Banner End
*************************************-->
<!--************************************
        Main Start
*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="tg-titleborder">
            <h2>Pré-inscription</h2>
        </div>
        <div class="row">
            <div id="tg-twocolumns" class="tg-twocolumns">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-addmission">
                            <!-- <div id="tg-addmissionslider" class="tg-addmissionslider owl-carousel tg-btnround">
                                <figure class="item"><img src="images/addmission/img-01.jpg" alt="image description"></figure>
                                <figure class="item"><img src="images/addmission/img-02.jpg" alt="image description"></figure>
                                <figure class="item"><img src="images/addmission/img-03.jpg" alt="image description"></figure>
                            </div> -->
                            <!-- <span class="tg-lastmodified">Devenez notre prochain étudiant!!</span> -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                                <div class="tg-pagetitle">
                                    <h1>Pré-inscription !</h1>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-container">
                                    <form class="tg-formtheme tg-formcontactus" method="POST" action="/validerForm">
                                    @csrf
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label for="nom">Nom(s) de famille *</label>
                                                        <input type="text" class="form-control" name="nom" placeholder="Entrer le(s) nom(s) de famille*" require>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label for="prenom">Prénom(s)</label>
                                                        <input type="text" class="form-control" name="prenom" placeholder="Entrer votre(vos) prénom(s)">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label for="nation">Selectionner votre nationalité*</label>
                                                        <select name="nation" class="form-control">
                                                            <option value="Cameroun">Cameroun</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Guinée équatoriale">Guinée équatoriale</option>
                                                            <option value="République centrafricaine">République centrafricaine</option>
                                                            <option value=" République démocratique du Congo">République démocratique du Congo</option>
                                                            <option value="Sao Tomé-et-Principe">Sao Tomé-et-Principe</option>
                                                            <option value=" Tchad">Tchad</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                                    <div class="form-group">
                                                        <label for="dateNais">Né(e) le</label>
                                                        <input type="date" class="form-control" name="dateNais" require>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                                    <div class="form-group">
                                                        <label for="lieuNais">à</label>
                                                        <input type="text" class="form-control" name="lieuNais" placeholder="Où êtes-vous né ?">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label for="parcours">Parcours</label>
                                                        <input type="text" class="form-control" name="parcours" placeholder="Votre formation actuelle">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label for="email">Entrer votre adresse email*</label>
                                                        <input type="email" class="form-control" name="email" placeholder="Email ( Votre email ne sera pas publié. )">
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <h2>Formation</h2>
                                                </div>
                                                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                                    <div class="form-group"> 
                                                        <label for="programme">Faire le choix de la formation*</label>
                                                        <select name="programme" id="" class="form-control" require>
                                                            @foreach($programmes as $programme)
                                                            <option value="{{$programme->id}}">{{$programme->libelle_prog}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                                    <div class="form-group">
                                                        <label for="">Faire le choix du niveau*</label>
                                                        <select name="niveau" class="form-control" require>
                                                            <optgroup label="Cycle Licence">
                                                                <option value="Licence 1">Licence 1</option>
                                                                <option value="Licence 2">Licence 2</option>
                                                                <option value="Licence 3">Licence 3</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="apropo" placeholder="Exprimez-vous !"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <button class="tg-btn" type="submit">Valider</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>

                            <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-widget tg-widgetadmissionform">
                                    <div class="tg-widgetcontent">
                                        <h3>Bon à savoir!!</h3>
                                        <div class="tg-description">
                                            <p>
                                                Après avoir valider vos information, vous allez recevoir dans votre mail votre pré-inscription, 
                                                ensuite vous devriez passer à l'etablissement pour la suite.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>
            </div>
        </div>
    </div>
</main>
@if (Session::has('alert.sweetalert'))
    <script>
        Swal.fire({!! Session::pull('alert.sweetalert') !!});
    </script>
@endif
<!--************************************
        Main End
*************************************-->
@endsection