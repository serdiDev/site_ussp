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
                                <h3>About Us</h3>
                            </div>
                            @include('layouts.site.aboutaside')
                        </div>
                    </aside>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-aboutus tg-rectormessage">
                            <figure><img src="images/img-04.jpg" alt="image description"></figure>
                            <h3>Message du recteur</h3>
                            <p  class="text-justify">Consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore msagna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaasmco laboris nisi uiat aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit etssse cillum dolore eu fugiat nulla pariatur sintasr occaecat cupidatat proident, sunt in culpa qui officia deserunt mollit anim laboruma lota toaks alukamation.</p>
                            <p  class="text-justify">Sedpiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium sasi totam rem aperiam eaque ipsa quae ab illo inventore veritatis etanas quasi architecto beatae vitae dicta explicabo Nemo enim ipsam.</p>
                            <p  class="text-justify">Ait aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
                            <div class="tg-nameanddesignation">
                                <strong>Prof. Dieudonné NJAMEN</strong>
                                <span>Directeur</span>
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