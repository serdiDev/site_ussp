<header id="tg-header" class="tg-header tg-haslayout">
    <div class="tg-topbar">
        <div class="tg-leftbox">
            <span id="tg-datebox" class="tg-datebox"></span>
            <span class="tg-rtltextbox"><em>(+241) 077 63 13 06</em></span>
        </div>
        <div class="tg-rightbox">
            <span class="tg-tollfree"><a href="/dashboard">Se connecter</a></span>
            <div class="tg-themedropdown tg-languagesdropdown">
                <a href="javascript:void(0);" id="tg-languages" class="tg-btndropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span><img src="{{asset('images/flags/img-01.jpg')}}" alt="image description"></span>
                    <span>Fra</span>
                </a>
                <div class="tg-themedropdownbox" aria-labelledby="tg-languages">
                    <ul class="tg-languageslist">
                        <li>
                            <span><img src="{{asset('images/flags/img-01.jpg')}}" alt="image description"></span>
                            <span>Fra</span>
                        </li>
                        <li>
                            <span><img src="{{asset('images/flags/img-02.jpg')}}" alt="image description"></span>
                            <span>Ang</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-logoandnoticeboard">
                    <strong class="tg-logo"><a href="/"><img src="{{asset('images/logo.png')}}" alt="Institut de santé et polytechnique de proccl"></a></strong>
                    <div class="tg-noticeboard hidden-xs">
                        <div class="tg-textbox">
                            <span>Admission ouverte!</span>
                            <span>Date limite d'admission 27-Sept-2023</span>
                        </div>
                        <figure><img src="{{asset('images/img-01.jpg')}}" alt="image description"></figure>
                    </div>
                </div>
                <div class="tg-navigationarea">
                    <nav id="tg-nav" class="tg-nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                            <ul>
                                <li class="{{ (request()->is('/')) ? 'current-menu-item' : '' }}">
                                    <a href="/">Accueil</a>
                                </li>
                                <li class="{{ (request()->is('cours')) ? 'current-menu-item' : '' }}">
                                    <a href="/cours">Formations</a>
                                </li>
                                <li class="{{ (request()->is('evenements')) ? 'current-menu-item' : '' }}"> 
                                    <a href="/evenements" data-new="nouveau">Actualités</a>
                                </li>
                                <li class="{{ (request()->is('departements')) ? 'current-menu-item' : '' }}">
                                    <a href="/departements">Etablissements</a>
                                </li>
                                <li class="{{ (request()->is('contact')) ? 'current-menu-item' : '' }}">
                                    <a href="/contact">Contact</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);">À propos de nous</a>
                                    <ul class="sub-menu">
                                        <!-- <li><a href="la_vie_au_campus">La vie sur le campus</a></li>
                                        <li><a href="honneurs_recompenses">Honneurs &amp; récompenses</a></li>
                                        <li><a href="nos_objectifs">Objectifs</a></li>
                                        <li><a href="notre_identite">Iidentité</a></li> -->
                                        <li><a href="/message_du_recteur">Message du recteur</a></li>
                                        <li><a href="/nos_missions">Mission &amp; Vision</a></li>
                                        <li><a href="/la_galerie">Galerie</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="tg-searchbox">
                        <a href="/admissions" class="tg-btn">Pré-inscription</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>