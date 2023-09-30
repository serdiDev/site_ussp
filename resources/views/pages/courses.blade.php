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
                    <li class="tg-active">Formations</li>
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
            <h2>Formations</h2>
        </div>
        <div class="row">
            <div id="tg-twocolumns" class="tg-twocolumns">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-right">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-courses tg-grid">
                            <div class="row">

                                @foreach ($programmes as $programme)
          
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                    <article class="tg-themepost tg-course">
                                        <figure class="tg-featuredimg">
                                            <a href="/detailFormation/{{$programme->id}}">
                                                <img src="images/courses/{{$programme->img_prog}}" alt="image description">
                                            </a>
                                        </figure>
                                        <div class="tg-themepostcontent">
                                            <ul class="tg-themeposttags">
                                                <!-- <li><a href="javascript:void(0);">{{$programme->libelle_eco}}</a></li> -->
                                                <li><a href="/detailFormation/{{$programme->id}}">{{$programme->sigle_eco}}</a></li>
                                            </ul>
                                            <div class="tg-themeposttitle">
                                                <h3><a href="/detailFormation/{{$programme->id}}">{{$programme->libelle_prog}}</a></h3>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                @endforeach

                            </div>
                        </div>
                        <div class="align-self-center">
                            {{ $programmes->links() }}
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