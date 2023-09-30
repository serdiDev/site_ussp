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
                    <li><a href="/cours">Formations</a></li>
                    <li class="tg-active">Detail</li>
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
                        <div class="tg-detailpage tg-coursedetailpage">
                            @foreach($formations as $formation)
                            <article class="tg-themepost tg-newspost">
                                <figure class="tg-featuredimg"><img src="/images/courses/{{$formation->img_prog}}" alt="image description"></figure>
                                
                                <div class="tg-themepostcontent">
                                    <ul class="tg-themeposttags">
                                        <li><a href="javascript:void(0);">{{$formation->libelle_eco}}</a></li>
                                    </ul>
                                    <div class="tg-themeposttitle">
                                        <h1>{{$formation->libelle_prog}}</h1>
                                    </div>
                                    <ul class="tg-themepostinfo">
                                        <li>
                                            <figure><a href="javascript:void(0);"><img src="{{asset('images/authors/img-01.jpg')}}" alt="image description"></a></figure>
                                            <div class="tg-infodata">
                                                <span>Tutor:</span>
                                                <strong><a href="javascript:void(0);">Antione Wattley</a></strong>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-infodata">
                                                <span>Member Joined:</span>
                                                <strong><a href="javascript:void(0);">1205 Members Joined</a></strong>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-infodata">
                                                <span>Total Views:</span>
                                                <strong><a href="javascript:void(0);">1205 People Visited</a></strong>
                                            </div>
                                        </li>
                                    </ul>
                                    <span class="tg-pricebox">
                                        <span>$36</span>
                                        <span>per month</span>
                                        <a class="tg-btn" href="javascript:void(0);">join now</a>
                                    </span>
                                </div>
                            </article>
                            @endforeach

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div id="tg-content" class="tg-content">
                                    <div id="tg-departmentscollapse" class="tg-themecollapse tg-departmentscollapse">
                                        <h3 class="fa fa-angle-down">Liste des options</h3>
                                        <div class="tg-themecollapsecontent">
                                            <ul>
                                                @foreach($options as $option)
                                                <li>
                                                    <span>1</span>
                                                    <a href="javascript:void(0);">View Detail</a>
                                                    <div class="tg-description">
                                                        <p>{{$option->libelle_opt}}</p>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tg-relatedthemeposts">
                                <div class="tg-borderheading">
                                    <h2 style="text-align: left; font-size:20px">Autres Formations</h2>
                                </div>
                                <div id="tg-latestnewsslider" class="tg-latestnewsslider owl-carousel tg-posts">
                                    @foreach($autres as $autre)
                                    <div class="item">
                                        <article class="tg-themepost tg-course">
                                            <figure class="tg-featuredimg">
                                                <a href="/detailFormation/{{$autre->id}}">
                                                    <img src="/images/courses/{{$autre->img_prog}}" alt="image description">
                                                </a>
                                            </figure>
                                            <div class="tg-themepostcontent">
                                                <ul class="tg-themeposttags">
                                                    <li><a href="/detailFormation/{{$autre->id}}">{{$autre->sigle_eco}}</a></li>
                                                </ul>
                                                <div class="tg-themeposttitle">
                                                    <h3><a href="/detailFormation/{{$autre->id}}">{{$autre->libelle_prog}}</a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 pull-left">
                    <aside id="tg-sidebar" class="tg-sidebar">
                        <div class="tg-courseinfo">
                            <div class="tg-schedule">
                                <span class="tg-scheduleicon"><i class="icon-clock"></i></span>
                                <time datetime="2016-02-02" class="tg-timedate">Wed, November 9, 2016 <span>1:00PM - 3:00PM</span></time>
                            </div>
                            <ul class="tg-coursecompunent">
                                <li>
                                    <span>
                                        <i class="icon-select"></i>
                                        <i>Course Code:</i>
                                    </span>
                                    <span>fhg52470</span>
                                </li>
                                <li>
                                    <span>
                                        <i class="icon-book"></i>
                                        <i>Lectures:</i>
                                    </span>
                                    <span>08</span>
                                </li>
                                <li>
                                    <span>
                                        <i class="icon-clock"></i>
                                        <i>Duration:</i>
                                    </span>
                                    <span>02 Hrs</span>
                                </li>
                                <li>
                                    <span>
                                        <i class="icon-dice"></i>
                                        <i>Quizzes:</i>
                                    </span>
                                    <span>04</span>
                                </li>
                                <li>
                                    <span>
                                        <i class="icon-bookmark"></i>
                                        <i>Skill Level:</i>
                                    </span>
                                    <span>All</span>
                                </li>
                                <li>
                                    <span>
                                        <i class="icon-bullhorn"></i>
                                        <i>Languages:</i>
                                    </span>
                                    <span>English</span>
                                </li>
                                <li>
                                    <span>
                                        <i class="icon-user"></i>
                                        <i>Students:</i>
                                    </span>
                                    <span>1205</span>
                                </li>
                                <li>
                                    <span>
                                        <i class="icon-chart-bars"></i>
                                        <i>Assessments:</i>
                                    </span>
                                    <span>Self</span>
                                </li>
                                <li>
                                    <span>
                                        <i class="icon-calendar-full"></i>
                                        <i>Class Days:</i>
                                    </span>
                                    <span>Mo, We, Fr</span>
                                </li>
                            </ul>
                            <div class="tg-btnsbox">
                                <a class="tg-btn" href="javascript:void(0);">Join Now</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->

@endsection