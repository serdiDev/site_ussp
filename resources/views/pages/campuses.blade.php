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
                    <li><a href="javascript:void(0);">home</a></li>
                    <li class="tg-active">Campuses</li>
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
                <div class="tg-titleborder">
                    <h2>Main Campus</h2>
                </div>
                <div class="tg-maincampuses">
                    <div class="tg-themepost tg-campuses tg-maincampus">
                        <figure class="tg-campusimg">
                            <img src="images/campuses/img-03.jpg" alt="image description">
                        </figure>
                        <div class="tg-themepostcontent">
                            <ul class="tg-capmusinfo">
                                <li>
                                    <i class="icon-location"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class="icon-phone-handset"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class="icon-printer"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href="mailto:query@domain.com">
                                        <i class="icon-envelope"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:complaint@domain.com">
                                        <i class="icon-construction"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                            <button type="submit" class="tg-btn">Get Directions</button>
                        </div>
                    </div>
                    <div class="tg-mapholder">
                        <div id="tg-campuseslocation" class="tg-campuseslocation"></div>
                        <div class="tg-map-controls">
                            <span id="doc-mapplus" class="doc-mapplus"><i class="fa fa-plus"></i></span>
                            <span id="doc-mapminus" class="doc-mapminus"><i class="fa fa-minus"></i></span>
                            <span id="doc-lock" class="doc-lock"><i class="fa fa-lock"></i></span>
                            <span id="tg-geolocation" class="tg-geolocation"><i class="fa fa-crosshairs"></i></span>
                        </div>
                    </div>
                </div>
                <div class="tg-othercampuses tg-campuses">
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-campus">
                                <div class="tg-themepost">
                                    <figure class="tg-othercampusimg">
                                        <img src="images/campuses/img-04.jpg" alt="image description">
                                    </figure>
                                </div>
                                <ul class="tg-capmusinfo">
                                    <li>
                                        <i class="icon-location"></i>
                                        <address>Abc, xyz street London, HG521A</address>
                                    </li>
                                    <li>
                                        <i class="icon-phone-handset"></i>
                                        <span>0800 - 1234 - 562 - 6</span>
                                    </li>
                                    <li>
                                        <i class="icon-printer"></i>
                                        <span>+4 1234 567 - 9</span>
                                    </li>
                                    <li>
                                        <a href="mailto:query@domain.com">
                                            <i class="icon-envelope"></i>
                                            <span>query@domain.com</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:complaint@domain.com">
                                            <i class="icon-construction"></i>
                                            <span>complaint@domain.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-campus">
                                <div class="tg-themepost">
                                    <figure class="tg-othercampusimg">
                                        <img src="images/campuses/img-05.jpg" alt="image description">
                                    </figure>
                                </div>
                                <ul class="tg-capmusinfo">
                                    <li>
                                        <i class="icon-location"></i>
                                        <address>Abc, xyz street London, HG521A</address>
                                    </li>
                                    <li>
                                        <i class="icon-phone-handset"></i>
                                        <span>0800 - 1234 - 562 - 6</span>
                                    </li>
                                    <li>
                                        <i class="icon-printer"></i>
                                        <span>+4 1234 567 - 9</span>
                                    </li>
                                    <li>
                                        <a href="mailto:query@domain.com">
                                            <i class="icon-envelope"></i>
                                            <span>query@domain.com</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:complaint@domain.com">
                                            <i class="icon-construction"></i>
                                            <span>complaint@domain.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-campus">
                                <div class="tg-themepost">
                                    <figure class="tg-othercampusimg">
                                        <img src="images/campuses/img-06.jpg" alt="image description">
                                    </figure>
                                </div>
                                <ul class="tg-capmusinfo">
                                    <li>
                                        <i class="icon-location"></i>
                                        <address>Abc, xyz street London, HG521A</address>
                                    </li>
                                    <li>
                                        <i class="icon-phone-handset"></i>
                                        <span>0800 - 1234 - 562 - 6</span>
                                    </li>
                                    <li>
                                        <i class="icon-printer"></i>
                                        <span>+4 1234 567 - 9</span>
                                    </li>
                                    <li>
                                        <a href="mailto:query@domain.com">
                                            <i class="icon-envelope"></i>
                                            <span>query@domain.com</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:complaint@domain.com">
                                            <i class="icon-construction"></i>
                                            <span>complaint@domain.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-campus">
                                <div class="tg-themepost">
                                    <figure class="tg-othercampusimg">
                                        <img src="images/campuses/img-07.jpg" alt="image description">
                                    </figure>
                                </div>
                                <ul class="tg-capmusinfo">
                                    <li>
                                        <i class="icon-location"></i>
                                        <address>Abc, xyz street London, HG521A</address>
                                    </li>
                                    <li>
                                        <i class="icon-phone-handset"></i>
                                        <span>0800 - 1234 - 562 - 6</span>
                                    </li>
                                    <li>
                                        <i class="icon-printer"></i>
                                        <span>+4 1234 567 - 9</span>
                                    </li>
                                    <li>
                                        <a href="mailto:query@domain.com">
                                            <i class="icon-envelope"></i>
                                            <span>query@domain.com</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:complaint@domain.com">
                                            <i class="icon-construction"></i>
                                            <span>complaint@domain.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-campus">
                                <div class="tg-themepost">
                                    <figure class="tg-othercampusimg">
                                        <img src="images/campuses/img-08.jpg" alt="image description">
                                    </figure>
                                </div>
                                <ul class="tg-capmusinfo">
                                    <li>
                                        <i class="icon-location"></i>
                                        <address>Abc, xyz street London, HG521A</address>
                                    </li>
                                    <li>
                                        <i class="icon-phone-handset"></i>
                                        <span>0800 - 1234 - 562 - 6</span>
                                    </li>
                                    <li>
                                        <i class="icon-printer"></i>
                                        <span>+4 1234 567 - 9</span>
                                    </li>
                                    <li>
                                        <a href="mailto:query@domain.com">
                                            <i class="icon-envelope"></i>
                                            <span>query@domain.com</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:complaint@domain.com">
                                            <i class="icon-construction"></i>
                                            <span>complaint@domain.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-campus">
                                <div class="tg-themepost">
                                    <figure class="tg-othercampusimg">
                                        <img src="images/campuses/img-09.jpg" alt="image description">
                                    </figure>
                                </div>
                                <ul class="tg-capmusinfo">
                                    <li>
                                        <i class="icon-location"></i>
                                        <address>Abc, xyz street London, HG521A</address>
                                    </li>
                                    <li>
                                        <i class="icon-phone-handset"></i>
                                        <span>0800 - 1234 - 562 - 6</span>
                                    </li>
                                    <li>
                                        <i class="icon-printer"></i>
                                        <span>+4 1234 567 - 9</span>
                                    </li>
                                    <li>
                                        <a href="mailto:query@domain.com">
                                            <i class="icon-envelope"></i>
                                            <span>query@domain.com</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:complaint@domain.com">
                                            <i class="icon-construction"></i>
                                            <span>complaint@domain.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
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