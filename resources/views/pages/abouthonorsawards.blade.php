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
                    <li class="tg-active">Honors &amp; Awards</li>
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
                    <div class="row">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-aboutus tg-honorawards">
                                <div class="tg-honoraward">
                                    <figure><img src="images/img-13.jpg" alt="image description"></figure>
                                    <div class="tg-honorawardcontent">
                                        <h3>Best Teching Award 2016</h3>
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore msagna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaasmco laboris nisi uiat aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit etssse cillum dolore eu fugiat nulla pariatur sintasr occaecat cupidatat proident, sunt in culpa qui ad minim veniam, quis nostrud exercitation ullaasmco laboris nisi uiat aliquip officia deserunt mollit anim laboruma lota toaks alukamation.</p>
                                    </div>
                                </div>
                                <div class="tg-honoraward">
                                    <figure><img src="images/img-14.jpg" alt="image description"></figure>
                                    <div class="tg-honorawardcontent">
                                        <h3>Science Quiz Winner 2015</h3>
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore msagna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaasmco laboris nisi uiat aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit etssse cillum dolore eu fugiat nulla pariatur sintasr occaecat cupidatat proident, sunt in culpa qui ad minim veniam, quis nostrud exercitation ullaasmco laboris nisi uiat aliquip officia deserunt mollit anim laboruma lota toaks alukamation.</p>
                                    </div>
                                </div>
                                <div class="tg-honoraward">
                                    <figure><img src="images/img-15.jpg" alt="image description"></figure>
                                    <div class="tg-honorawardcontent">
                                        <h3>Life Time Achievment Awards 2014</h3>
                                        <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore msagna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaasmco laboris nisi uiat aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit etssse cillum dolore eu fugiat nulla pariatur sintasr occaecat cupidatat proident, sunt in culpa qui ad minim veniam, quis nostrud exercitation ullaasmco laboris nisi uiat aliquip officia deserunt mollit anim laboruma lota toaks alukamation.</p>
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