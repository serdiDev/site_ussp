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
                    <li class="tg-active">about us</li>
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
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <aside id="tg-sidebar" class="tg-sidebar">
                        <div class="tg-widget tg-widgetaboutusnav">
                            <div class="tg-widgettitle">
                                <h3>à propos de nous</h3>
                            </div>
                            @include('layouts.site.aboutaside')
                        </div>
                    </aside>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-aboutus tg-visionmission">
                            <figure><img src="images/img-05.jpg" alt="image description"></figure>
                            <h3>Notre vision et mission</h3>
                            <p>
                                L'Institut de Santé et Polytechnique de PROCCL est une 
								Institut universitaire d'enseignement privé, qui participe au PSGE du gouvernement.
                                Crée en 2017, dans le but de répondre aux besoins
                                de qualité des soins de santé et des techniciens qualifiés
                                dans les secteurs socio-économiques clés.
                            </p>
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