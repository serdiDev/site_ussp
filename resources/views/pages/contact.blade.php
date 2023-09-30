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
                    <li class="tg-active">contactez-nous</li>
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
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-contactus tg-contactusvone">
                    <div class="tg-titleborder">
                        <h2>Contactez-nous</h2>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
                            <div class="tg-officelocation">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.751583674114!2d9.494364474957207!3d0.33139346400280234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x107f3fe13db6dd17%3A0xeec1dc1ea6d0bff7!2sInstitut%20de%20Sant%C3%A9%20et%20Polytechnique%20de%20PROCCL%20(ISPP)!5e0!3m2!1sfr!2sga!4v1688809977689!5m2!1sfr!2sga" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                            <form class="tg-formtheme tg-formcontactus">
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Nom*">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email* (Votre email ne sera pas publié.)">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Sujet">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Message"></textarea>
                                    </div>
                                    <button class="tg-btn tg-btn-lg" type="submit">Valider</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->
@endsection