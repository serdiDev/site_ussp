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
                    <li><a href="/">Accueil</a></li>
                    <li class="tg-active">Actualités</li>
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
            <h2>Actualités</h2>
        </div>
        <div class="row">
            <div id="tg-twocolumns" class="tg-twocolumns">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-events tg-grid">
                            <div class="row">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <article class="tg-themepost tg-eventpost">
                                        <figure class="tg-featuredimg">
                                            <a href="javascript:void(0);">
                                                <img src="images/events/img-11.jpg" alt="image description">
                                            </a>
                                        </figure>
                                        <div class="tg-themepostcontent">
                                            <ul class="tg-themeposttags">
                                                <li><a href="javascript:void(0);">IMSISS</a></li>
                                            </ul>
                                            <div class="tg-themeposttitle">
                                                <h3><a href="javascript:void(0);">La soutenance des étudiants de l'IMSISS</a></h3>
                                            </div>
                                            <ul class="tg-matadata">
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="fa fa-calendar"></i>
                                                        <span>Mercredi 28 Décembre 2023</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>8:00 - 15:00</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="fa fa-location-arrow"></i>
                                                        <span>Cité Octra, OWENDO</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tg-btnsbox">
                                                <a class="tg-btn" href="javascript:void(0);">en savoir plus</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <nav class="tg-pagination">
                            <ul>
                                <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li class="tg-active"><a href="#">5</a></li>
                                <li>...</li>
                                <li><a href="#">10</a></li>
                                <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
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