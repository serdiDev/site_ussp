@extends('layouts.admin.template')

@section('content')
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="{{asset('admin/img/logo/logo.png')}}" alt="" /></a>
            <strong><a href="index.html"><img src="{{asset('admin/img/logo/logosn.png')}}" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a  href="index.html">
                            <span class="educate-icon educate-home icon-wrap"></span>
                            <span class="mini-click-non">Accueil</span>
                        </a>
                    <li>
                        <a title="Landing Page" href="events.html" aria-expanded="false">
                        <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> 
                        <span class="mini-click-non">Actualités</span></a>
                    </li>
                    <li>
                        <a href="all-professors.html" aria-expanded="false">
                        <span class="educate-icon educate-professor icon-wrap"></span> 
                        <span class="mini-click-non">Professeurs</span></a>
                    </li>
                    <li>
                        <a href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Etudiants</span></a>
                    </li>
                    <li>
                        <a href="all-courses.html" aria-expanded="false">
                        <span class="educate-icon educate-course icon-wrap"></span> 
                        <span class="mini-click-non">Formations</span></a>
                    </li>
                    <li>
                        <a href="all-courses.html" aria-expanded="false">
                        <span class="educate-icon educate-department icon-wrap"></span> 
                        <span class="mini-click-non">Départements</span></a>
                    </li>
                    <li>
                        <a href="mailbox.html" aria-expanded="false">
                        <span class="educate-icon educate-data-table icon-wrap"></span> 
                        <span class="mini-click-non">Préinscription</span></a>
                    </li>
                    <li>
                        <a href="mailbox.html" aria-expanded="false">
                        <span class="educate-icon educate-message icon-wrap"></span> 
                        <span class="mini-click-non">Messages</span></a>
                    </li>
                    <li id="removable">
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <a href="#" aria-expanded="false" onclick="this.parentNode.submit();">
                            <span class="educate-icon educate-pages icon-wrap"></span> 
                            <span class="mini-click-non">Se déconnecter</span></a>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="{{asset('admin/img/logo/logo.png')}}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item dropdown">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                    <div class="message-single-top">
                                                        <h1>Message</h1>
                                                    </div>
                                                    <ul class="message-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="{{asset('admin/img/contact/1.jpg')}}" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="message-view">
                                                        <a href="#">Tous les messages</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class="notification-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="notification-view">
                                                        <a href="#">Toutes les notifications</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <span class="admin-name">Prof. {{ Auth::user()->name  }}</span>
                                                    <img src="{{asset('admin/img/product/pro4.jpg')}}" alt="" />
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
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li>
                                        <a data-toggle="collapse" href="#">
                                        Accueil 
                                        <span class="admin-project-icon edu-icon edu-down-arrow"></span>
                                        </a>
                                    </li>
                                    <li><a href="events.html">Actualités</a></li>
                                    <li>
                                        <a data-toggle="collapse" href="#">
                                        Professeurs <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" href="#">
                                        Etudiants <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" href="#">
                                        Formations <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" href="#">
                                        Départements <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" href="#">
                                        Préinscription <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" href="#">
                                        Messages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" href="#">
                                        Se déconnecter <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <form role="search" class="sr-input-func">
                                            <input type="text" placeholder="Rechercher..." class="search-int form-control">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><span class="bread-blod">Accueil</span>
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

    @yield('content1')
    
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
