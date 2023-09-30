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
                    <li><a href="/">home</a></li>
                    <li><a href="/departements">Ecoles</a></li>
                    <li class="tg-active">Ecoles detail</li>
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
            <div id="tg-twocolumns" class="tg-twocolumns">
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 pull-right">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-addmission tg-addmissiondetail">
                            <div class="tg-pagetitle">
                                @foreach ($ecoles as $ecole)
                                <h2>{{$ecole->libelle_eco}}</h2>
                                @endforeach
                            </div>
                            <div id="tg-content" class="tg-content">
								<div class="tg-jobs">
									<div class="tg-themecollapsecontent">
										<ul>
											<li>
												<strong>Rentrée</strong>
												<strong>Action</strong>
												<div class="tg-description">
													<strong>Programmes</strong>
												</div>
											</li>
                                            @foreach ($programmes as $programme)
											<li>
                                                <div class="tg-description" data-jobtitle="job title">
													<p>{{$programme->libelle_prog}}</p>
												</div>
												<span data-date="Jun 27, 2017">Jun 27, 2017</span>
												<span data-action="apply now"><a href="javascript:void(0);">s'inscrire</a></span>
											</li>
                                            @endforeach
										</ul>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-left">
                    <div class="tg-widget tg-widgetcampuses">
                        <div class="tg-widgettitle">
                            <h3>Nos campus</h3>
                        </div>
                        <div class="tg-widgetcontent">
                            <div id="tg-campusslider" class="tg-campusslider owl-carousel tg-campuses">
                                <div class="item">
                                    <div class="tg-campus">
                                        <div class="tg-themepost">
                                            <figure class="tg-othercampusimg">
                                                <img src="{{asset('images/campuses/img-04.jpg')}}" alt="image description">
                                            </figure>
                                        </div>
                                        <ul>
                                            <li>
                                                <i class="icon-location"></i>
                                                <address>Cité Octra, Owendo</address>
                                            </li>
                                            <li>
                                                <i class="icon-phone-handset"></i>
                                                <span>(+241) 062 37 78 81 | 077 99 92 73</span>
                                            </li>
                                            <!-- <li>
                                                <i class="icon-printer"></i>
                                                <span>+4 1234 567 - 9</span>
                                            </li> -->
                                            <li>
                                                <a href="mailto:ztf@cmci-gabon.org">
                                                    <i class="icon-envelope"></i>
                                                    <span>ztf@cmci-gabon.org</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tg-campus">
                                        <div class="tg-themepost">
                                            <figure class="tg-othercampusimg">
                                                <img src="{{asset('images/campuses/img-06.jpg')}}" alt="image description">
                                            </figure>
                                        </div>
                                        <ul>
                                            <li>
                                                <i class="icon-location"></i>
                                                <address>Ancien Sobraga</address>
                                            </li>
                                            <li>
                                                <i class="icon-phone-handset"></i>
                                                <span>(+241) 065 38 41 42 | 077 99 92 73</span>
                                            </li>
                                            <li>
                                                <a href="mailto:query@domain.com">
                                                    <i class="icon-envelope"></i>
                                                    <span>ztf@cmci-gabon.org</span>
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
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->
@endsection