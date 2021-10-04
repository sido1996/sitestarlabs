<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codecanyon.kreativdev.com/plusagency/car/packages by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Aug 2021 12:28:35 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Star-labs, société de transformation digitale">
    <meta name="keywords" content="Star-labs">
    <meta name="csrf-token" content="MojPpMj40RwLzzXLe9DdKWX4wZ6Ez5ufjQb2qvVq">
    <title>Star-Labs - La croissance par la transformation digital </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/front/img/logo11.png" width="600px" height="320px" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <!-- plugin css -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/plugin.min.css') }}">
    <!--default css-->
    <link rel="stylesheet" href="{{asset('assets/front/css/default.css')}}">
    <!-- common css -->
    <link rel="stylesheet" href="{{asset('assets/front/css/common-style.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('assets/front/css/car-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/styles.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css') }}">
    <!-- car responsive css -->
    <link rel="stylesheet" href="{{asset('assets/front/css/car-responsive.css')}}">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <style>
        #scroll_up {
            right: auto;
            left: 20px;
        }
    </style>
    <!-- base color change -->
    <link href="{{ asset('assets/front/css/car-base-colorcf56.css?color=FF3737') }}" rel="stylesheet">
    <!-- common base color change -->
    <link href="{{ asset('assets/front/css/common-base-colorcf56.css?color=FF3737') }}" rel="stylesheet">
    <!-- jquery js -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('carousel/carousel3d/css/mdb.min.css') }}" rel="stylesheet">
    <!-- Carousel styles -->
    <link href="{{asset('carousel/carousel3d/css/addons/mdb-carousel-3d.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('carousel/carousel3d/css/style.css') }}" rel="stylesheet">
</head>
<style>
    .carousel {
        position: relative;
    }

    .carousel-item img {
        object-fit: cover;
    }

    #carousel-thumbs {
        background: rgba(255, 255, 255, .3);
        bottom: 0;
        left: 0;
        padding: 0 50px;
        right: 0;
    }

    #carousel-thumbs img {
        border: 5px solid transparent;
        cursor: pointer;
    }

    #carousel-thumbs img:hover {
        border-color: rgba(255, 255, 255, .3);
    }

    #carousel-thumbs .selected img {
        border-color: #fff;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 50px;
    }

    @media all and (max-width: 767px) {
        .carousel-container #carousel-thumbs img {
            border-width: 3px;
        }
    }

    @media all and (min-width: 576px) {
        .carousel-container #carousel-thumbs {
            position: absolute;
        }
    }

    @media all and (max-width: 576px) {
        .carousel-container #carousel-thumbs {
            background: #ccccce;
        }
    }
</style>

<style>
    .hovereffect {
        width: 100%;
        height: 100%;
        float: left;
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: default;
    }

    .hovereffect .overlay {
        width: 100%;
        height: 100%;
        position: absolute;
        overflow: hidden;
        top: 0;
        left: 0;
        opacity: 0;
        background-color: rgba(0, 0, 0, 0.5);
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out
    }

    .hovereffect img {
        display: block;
        position: relative;
        -webkit-transition: all .4s linear;
        transition: all .4s linear;
    }

    .hovereffect h2 {
        text-transform: uppercase;
        color: #fff;
        text-align: center;
        position: relative;
        font-size: 17px;
        background: rgba(0, 0, 0, 0.6);
        -webkit-transform: translatey(-100px);
        -ms-transform: translatey(-100px);
        transform: translatey(-100px);
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        padding: 10px;
    }

    .hovereffect a.info {
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        color: #fff;
        border: 1px solid #fff;
        background-color: transparent;
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        margin: 50px 0 0;
        padding: 7px 14px;
    }

    .hovereffect a.info:hover {
        box-shadow: 0 0 5px #fff;
    }

    .hovereffect:hover img {
        -ms-transform: scale(1.2);
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
    }

    .hovereffect:hover .overlay {
        opacity: 1;
        filter: alpha(opacity=100);
    }

    .hovereffect:hover h2,
    .hovereffect:hover a.info {
        opacity: 1;
        filter: alpha(opacity=100);
        -ms-transform: translatey(0);
        -webkit-transform: translatey(0);
        transform: translatey(0);
    }

    .hovereffect:hover a.info {
        -webkit-transition-delay: .2s;
        transition-delay: .2s;
    }
</style>

<style>
    /* Use a wide full screen for small screens like tablets. */
    @media (min-width: 768px) and (max-width:992px) {
        .container {
            width: initial;
            padding-left: 2em;
            padding-right: 2em;
        }
    }

    /* --- Plans ---------------------------- */
    a {
        text-decoration: none !important
    }

    .my_planHeader {
        text-align: center;
        color: white;
        padding-top: 0.2em;
        padding-bottom: 0.2em;
    }

    .my_planTitle {
        font-size: 2em;
        font-weight: bold;
    }

    .my_planPrice {
        font-size: 1.4em;
        font-weight: bold;
    }

    .my_planDuration {
        margin-top: -0.6em;
    }

    @media (max-width: 768px) {
        .my_planTitle {
            font-size: small;
        }
    }

    /* --- Features ------------------------- */

    .my_feature {
        line-height: 2.8em;
        text-align: left;
    }

    @media (max-width: 768px) {
        .my_feature {
            text-align: center
        }
    }

    .my_featureRow {
        margin-top: 0.2em;
        margin-bottom: 0.2em;
        border: 0.1em solid rgb(163, 163, 163);
    }

    /* --- Plan 1 --------------------------- */
    .my_plan1 {
        background: rgb(224, 234, 242);
    }

    .my_planHeader.my_plan1 a {
        background: rgb(72, 109, 139);
        color: white;
    }

    .my_planHeader.my_plan1 {
        background: rgb(105, 153, 193);
        border-bottom: thick solid rgb(72, 109, 139);
    }

    /* --- Plan 2 --------------------------- */
    .my_plan2 {
        background: rgb(230, 235, 218);
    }

    .my_planHeader.my_plan2 a {
        background: rgb(108, 131, 62);
        color: white;
    }

    .my_planHeader.my_plan2 {
        background: rgb(134, 162, 77);
        border-bottom: thick solid rgb(108, 131, 62);
    }

    /* --- Plan 3 --------------------------- */
    .my_plan3 {
        background: rgb(254, 235, 212);
    }

    .my_planHeader.my_plan3 a {
        background: rgb(199, 127, 40);
        color: white;
    }

    .my_planHeader.my_plan3 {
        background: rgb(253, 161, 49);
        border-bottom: thick solid rgb(199, 127, 40);
    }




    .my_planFeature {
        text-align: center;
        font-size: 2em;
    }

    .my_planFeature i.my_check {
        color: green;
    }

    .my_planFeature i.my_delete {
        color: red;
    }

    .my_planFeature i.my_star {
        color: #faa23e;
    }

    .my_planFeature i.my_infinity {
        color: #2d3097;
    }
</style>

<body>


    <!-- Start finlance_header area -->
    <!-- Start finlance_header area -->
    @include('header')
    <!-- End finlance_header area -->

    <!--   breadcrumb area start   -->

    <!--   breadcrumb area end    -->
    <!-- Start finlance_pricing section -->
    <section class="finlance_blog blog_v1 " style="background-image: url('assets/front/img/pattern_bg.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section_title col-10" style="text-align:center">
                    <h2 style="color:#2d3097">Création de site internet responsive de qualité</h2>
                </div>
            </div>
        </div>
    </section>

    <!--   breadcrumb area end    -->
    <!-- Start finlance_pricing section -->
    <section class="finlance_pricing pricing_v1 pt-115 pb-80 " id="masonry-package">
        <div class="container ">
            <!-- <div class="row">
                <div class="col-12">
                    <div class="demo alert alert-warning text-center alert-dismissable">
                        <div>
                            Package category can be enabled / disabled by Admin (Package Management > Settings)
                            <br>
                            <small>[This text is only written in demo version]</small>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div> -->
            <div class="row justify-content-center ">
                <div class="col-lg-10">
                    <div class="filter-nav text-center mb-15">
                        <ul class="filter-btn ">
                            <li data-filter="*" class="active" style="font-size:20px">All |</li>

                            <li data-filter=".site-vitrine" style="font-size:20px">Site Vitrine |</li>
                            <li data-filter=".site-blog" style="font-size:20px">Blog |</li>
                            <li data-filter=".site-actualite" style="font-size:20px">Site Actualités |</li>
                            <li data-filter=".site-commerce" style="font-size:20px">Site E-commerce </li>
                            <!-- <li data-filter=".marketting">Site Immobilier</li> -->
                            <!-- <li data-filter=".marketting"> Refonte Site</li>
                            <li data-filter=".marketting"> Référencement</li> -->

                        </ul>
                    </div>
                </div>
            </div>

            <div class="masonry-row ">
                <div class="pricing_slide">

                    <div class="row">
                        <div class="col-lg-12 mb-5 package-column site-blog ">
                            <div class="text-center">
                                <div class="container ">
                                    <div class="row ">
                                        <div class="col-xs-12 col-sm-offset-4 col-sm-8 ">
                                            <div class="row">
                                                <div class="col-xs-12 my_planHeader my_plan1" style="background-color:#6f6f80 !important">
                                                    <div class="my_planTitle">BLOG</div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-offset-4 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 my_planHeader my_plan1">
                                                    <div class="my_planTitle">PackMega</div>
                                                    <div class="my_planPrice">180€</div>
                                                    <!-- <div class="my_planDuration"> </div> -->

                                                    <a type="button" class="btn btn-default" href="https://wa.me/22995403031/?text=Bienvenu%20à%20Starlabs%20!%20Comment%20puis-je%20vous%20aider%20?" target="_blank">Commander </a>
                                                </div>
                                                <div class="col-xs-4 my_planHeader my_plan2">
                                                    <div class="my_planTitle">PackGiga</div>
                                                    <div class="my_planPrice">275€</div>
                                                    <!-- <a type="button" class="btn btn-default" href="" target="_blank">Payer</a> -->

                                                    <!-- <div class="my_planDuration">per month</div> -->
                                                    <a type="button" class="btn btn-default" href="https://wa.me/22995403031/?text=Bienvenu%20à%20Starlabs%20!%20Comment%20puis-je%20vous%20aider%20?" target="_blank">Commander </a>
                                                </div>
                                                <div class="col-xs-4 my_planHeader my_plan3">
                                                    <div class="my_planTitle">PackYotta</div>
                                                    <div class="my_planPrice">350€</div>
                                                    <!-- <a type="button" class="btn btn-default" href="" target="_blank">Payer</a> -->

                                                    <!-- <div class="my_planDuration">per month</div> -->
                                                    <a type="button" class="btn btn-default" href="https://wa.me/22995403031/?text=Bienvenu%20à%20Starlabs%20!%20Comment%20puis-je%20vous%20aider%20?" target="_blank">Commander </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Design</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Le template est la partie visuelle de votre site. Nous l'adaptons à votre charte graphique.">
                                            Template
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-star my_star"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-star my_star"></i>
                                                    <i class="fas fa-star my_star"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fas fa-star my_star"></i>
                                                    <i class="fas fa-star my_star"></i>
                                                    <i class="fas fa-star my_star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Le design de votre site est compatible smartphones et tablettes">
                                            Responsive Design
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Votre logo intégré dans le design de votre site.">
                                            Intégration Logo
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Contenu</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" title="Tous nos sites sont facilement administrables grâce à une interface graphique.">
                                            Administrable
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">

                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Vous pouvez ajouter autant d'articles et gérer leur contenus. Notre outil est sans limite !">
                                            Ajout des articles et leur contenus
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-infinity my_infinity"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-infinity my_infinity"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fas fa-infinity  my_infinity"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nous intégrons quelques articles et liens de menu pour vous. Pages d'accueil et de contact inclus. Page premium : mise en page plus élaborée, idéale pour les longs contenus">
                                            Intégration de pages (textes + photos...)
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong>5</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong>10</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fas fa-infinity  my_infinity"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Les mentions légales sont obligatoires sur un site internet afin de préciser le propriétaire du site, l'agence de sa création et la société qui l'héberge.">
                                            Intégration des mentions légales
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il s'agit de visuels cliquables renvoyant sur des pages stratégiques de votre site, par exemple inciter vos visiteurs à vous contacter.">
                                            Boutons graphiques
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong>1</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong>2</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Affichez de nombreuses photos sous forme de vignettes zoomables afin d'illustrer un article, une réalisation...">
                                            Galerie photos
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Faites défiler quelques photos dans un article.">
                                            Diaporama photos
                                        </div>
                                        <div class=" col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Permettez à vos clients de venir facilement à votre société grâce à une carte Google.">
                                            Plan d'accès Google Map
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Fonctionnalités</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Elle permet de modifier le contenu de votre site par vous-même (disponible uniquement après une formation).">
                                            Console d'administration
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature">
                                        RGPD / Barre cookies
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Retrouvez facilement vos articles, modules, menus... grâce au moteur de recherche interne.">
                                            Moteur de recherche
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet à vos visiteurs de vous laisser un message.">
                                            Formulaire de contact
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet à vos visiteurs de s'abonner pour reçevoir des nouvelles informations spécifiques par mail.">
                                            Formulaire gestion des Newsletters
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet de créer des galeries photos pour vos articles.">
                                            Gestionnaire de galeries photos
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Cloud</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Votre site sera hébergé sur un serveur doté des dernières technologies, ce qui vous garantit un site toujours ultra performant et rapide .">
                                            Hébergement
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 6 mois</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 1 an</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 2 ans</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Votre site sera hébergé sur un serveur doté des dernières technologies, ce qui vous garantit un site toujours ultra performant et rapide .">
                                            Espace disque
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 150Go</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 250Go</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 350Go </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Profitez d’un nom de domaine gratuit(.com .fr .bj .net…) pour un site professionnel.">
                                            Nom de domaine
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 1 </strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 1 </strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 1 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nous configurons vos adresses e-mails professionnelles selon votre nom de domaine qui vous permettent de communiquer facilement en les personnalisant selon votre nom de domaine.">
                                            Adresses mail
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 1 </strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 3</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 5</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Référencement</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Des URLs enrichies en mots-clés pour un meilleur référencement">
                                            Réécriture d'URL
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Intégration d'une description et de quelques mots-clés en relation avec le contenu de votre site.">
                                            Intégration Métadonnées
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nombres de visiteurs, temps des sessions, taux de rebond... Toutes les informations utiles pour améliorer votre site et son référencement.">
                                            Statistiques Google Analytics
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Le plan du site permet aux robots des moteurs de recherche de scanner votre site plus facilement.">
                                            Plan du site
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature">
                                        Webmaster Tools
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nous prévenons Google et Bing de la mise en ligne de votre site pour une indexation plus rapide.">
                                            Soumission site (Google/Bing)
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="La page Google+ aide le référencement naturel de son site auprès de Google : lien dans Google Map, recherches de lieu à proximité, affichage des informations de contact directement dans les résultats de recherche...">
                                            Création d'une page Google
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Facebook est le réseau social le plus utilisé en France. Soyez présent et communiquez facilement auprès de 24 millions d'utilisateurs.">
                                            Création d'une page Facebook
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Sécurité</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="En cas de piratage de votre site, nous pouvons mettre en ligne une restauration de votre site des 7 derniers jours ou d'il y a 30 jours.">
                                            Sauvegarde (Backup)
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title=" Nous assurons une connexion sécurisée entre le serveur web et le navigateur à travers le certificat SSL généralement utilisé pour sécuriser les transactions bancaires, le transfert de données et les informations de connexions. ">
                                            Certificat SSL
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                                @include('pack_blog')
                            </div>

                        </div>

                    </div>

                    <div class="row ">
                        <div class="col-lg-12 mb-5 package-column site-vitrine">
                            <div class=" text-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-offset-4 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-12 my_planHeader my_plan1" style="background-color:#6f6f80 !important">
                                                    <div class="my_planTitle">SITE VITRINE</div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-offset-4 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 my_planHeader my_plan1">
                                                    <div class="my_planTitle">PackMega</div>
                                                    <div class="my_planPrice">200€</div>
                                                    <!-- <div class="my_planDuration"> </div> -->
                                                    {{-- <a type="button" class="btn btn-default" href="" target="_blank">Payer</a> --}}

                                                    <a type="button" class="btn btn-default" href="https://wa.me/22995403031/?text=Bienvenu%20à%20Starlabs%20!%20Comment%20puis-je%20vous%20aider%20?" target="_blank">Commander </a>
                                                </div>
                                                <div class="col-xs-4 my_planHeader my_plan2">
                                                    <div class="my_planTitle">PackGiga</div>
                                                    <div class="my_planPrice">350€</div>
                                                    {{-- <a type="button" class="btn btn-default" href="" target="_blank">Payer</a> --}}

                                                    <!-- <div class="my_planDuration">per month</div> -->
                                                    <a type="button" class="btn btn-default" href="https://wa.me/22995403031/?text=Bienvenu%20à%20Starlabs%20!%20Comment%20puis-je%20vous%20aider%20?" target="_blank">Commander </a>
                                                </div>
                                                <div class="col-xs-4 my_planHeader my_plan3">
                                                    <div class="my_planTitle">PackYotta</div>
                                                    <div class="my_planPrice">500€</div>
                                                    {{-- <a type="button" class="btn btn-default" href="" target="_blank">Payer</a> --}}

                                                    <!-- <div class="my_planDuration">per month</div> -->
                                                    <a type="button" class="btn btn-default" href="https://wa.me/22995403031/?text=Bienvenu%20à%20Starlabs%20!%20Comment%20puis-je%20vous%20aider%20?" target="_blank">Commander </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Design</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Le template est la partie visuelle de votre site. Nous l'adaptons à votre charte graphique.">
                                            Template
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-star my_star"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-star my_star"></i>
                                                    <i class="fas fa-star my_star"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fas fa-star my_star"></i>
                                                    <i class="fas fa-star my_star"></i>
                                                    <i class="fas fa-star my_star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Le design de votre site est compatible smartphones et tablettes">
                                            Responsive Design
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Votre logo intégré dans le design de votre site.">
                                            Intégration Logo
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Contenu</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" title="Tous nos sites sont facilement administrables grâce à une interface graphique.">
                                            Administrable
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">

                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Vous pouvez ajouter autant de contenus que vous le souhaitez. Notre outil est sans limite !">
                                            Ajout de contenus
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-infinity my_infinity"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fas fa-infinity  my_infinity"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nous intégrons quelques pages et liens de menu pour vous. Pages d'accueil et de contact inclus. Page premium : mise en page plus élaborée, idéale pour les longs contenus">
                                            Intégration de pages (textes + photos + vidéos...)
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong>2</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong>4</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong>6</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Les mentions légales sont obligatoires sur un site internet afin de préciser le propriétaire du site, l'agence de sa création et la société qui l'héberge.">
                                            Intégration des mentions légales
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Les bannières sont des compositions graphiques mettant en avant une accroche, une information.">
                                            Bannières graphiques
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong>1</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong>2</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong>4</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il s'agit de visuels cliquables renvoyant sur des pages stratégiques de votre site, par exemple inciter vos visiteurs à vous contacter.">
                                            Boutons graphiques
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong>1</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong>2</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Affichez de nombreuses photos sous forme de vignettes zoomables afin d'illustrer un article, une réalisation...">
                                            Galerie photos
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Faites défiler quelques photos dans un article.">
                                            Diaporama photos
                                        </div>
                                        <div class=" col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Permettez à vos clients de venir facilement à votre société grâce à une carte Google.">
                                            Plan d'accès Google Map
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Fonctionnalités</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Elle permet de modifier le contenu de votre site par vous-même (disponible uniquement après une formation).">
                                            Console d'administration
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature">
                                        RGPD / Barre cookies
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Retrouvez facilement vos articles, modules, menus... grâce au moteur de recherche interne.">
                                            Moteur de recherche
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet à vos visiteurs de vous laisser un message.">
                                            Formulaire de contact
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet à vos visiteurs de s'abonner pour reçevoir des nouvelles informations spécifiques par mail.">
                                            Formulaire gestion des Newsletters
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet à vos visiteurs de vous laisser des informations utiles à la création d'un devis.">
                                            Formulaire de devis
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet de créer des galeries photos pour vos articles.">
                                            Gestionnaire de galeries photos
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet de créer des bannières scénarisées.">
                                            Gestionnaire de bannières animées
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet de créer une base de données PDF à télécharger.">
                                            Gestionnaire de documentation
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Cloud</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Votre site sera hébergé sur un serveur doté des dernières technologies, ce qui vous garantit un site toujours ultra performant et rapide .">
                                            Hébergement
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 6 mois</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 1 an</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 2 ans</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Votre site sera hébergé sur un serveur doté des dernières technologies, ce qui vous garantit un site toujours ultra performant et rapide .">
                                            Espace disque
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 100Go</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 150Go</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 250Go </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Profitez d’un nom de domaine gratuit(.com .fr .bj .net…) pour un site professionnel.">
                                            Nom de domaine
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 1 </strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 1 </strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 1 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nous configurons vos adresses e-mails professionnelles selon votre nom de domaine qui vous permettent de communiquer facilement en les personnalisant selon votre nom de domaine.">
                                            Adresses mail
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 1 </strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 3</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 5</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Référencement</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Des URLs enrichies en mots-clés pour un meilleur référencement">
                                            Réécriture d'URL
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Intégration d'une description et de quelques mots-clés en relation avec le contenu de votre site.">
                                            Intégration Métadonnées
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nombres de visiteurs, temps des sessions, taux de rebond... Toutes les informations utiles pour améliorer votre site et son référencement.">
                                            Statistiques Google Analytics
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Le plan du site permet aux robots des moteurs de recherche de scanner votre site plus facilement.">
                                            Plan du site
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature">
                                        Webmaster Tools
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nous prévenons Google et Bing de la mise en ligne de votre site pour une indexation plus rapide.">
                                            Soumission site (Google/Bing)
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="La page Google+ aide le référencement naturel de son site auprès de Google : lien dans Google Map, recherches de lieu à proximité, affichage des informations de contact directement dans les résultats de recherche...">
                                            Création d'une page Google
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Facebook est le réseau social le plus utilisé en France. Soyez présent et communiquez facilement auprès de 24 millions d'utilisateurs.">
                                            Création d'une page Facebook
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Sécurité</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="En cas de piratage de votre site, nous pouvons mettre en ligne une restauration de votre site des 7 derniers jours ou d'il y a 30 jours.">
                                            Sauvegarde (Backup)
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title=" Nous assurons une connexion sécurisée entre le serveur web et le navigateur à travers le certificat SSL généralement utilisé pour sécuriser les transactions bancaires, le transfert de données et les informations de connexions. ">
                                            Certificat SSL
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                               @include('pack_vitrine')
                            </div>


                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-5 package-column site-actualite">
                            <div class=" text-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-offset-4 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-12 my_planHeader my_plan1" style="background-color:#6f6f80 !important">
                                                    <div class="my_planTitle">SITE ACTUALITES</div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-offset-4 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 my_planHeader my_plan1">
                                                    <div class="my_planTitle">PackMega</div>
                                                    <div class="my_planPrice">500€</div>
                                                    <!-- <div class="my_planDuration"> </div> -->
                                                    {{-- <a type="button" class="btn btn-default" href="" target="_blank">Payer</a> --}}

                                                    <a type="button" class="btn btn-default" href="https://wa.me/22995403031/?text=Bienvenu%20à%20Starlabs%20!%20Comment%20puis-je%20vous%20aider%20?" target="_blank">Commander </a>
                                                </div>
                                                <div class="col-xs-4 my_planHeader my_plan2">
                                                    <div class="my_planTitle">PackGiga</div>
                                                    <div class="my_planPrice">750€</div>
                                                    {{-- <a type="button" class="btn btn-default" href="" target="_blank">Payer</a> --}}

                                                    <!-- <div class="my_planDuration">per month</div> -->
                                                    <a type="button" class="btn btn-default" href="https://wa.me/22995403031/?text=Bienvenu%20à%20Starlabs%20!%20Comment%20puis-je%20vous%20aider%20?" target="_blank">Commander </a>
                                                </div>
                                                <div class="col-xs-4 my_planHeader my_plan3">
                                                    <div class="my_planTitle">PackYotta</div>
                                                    <div class="my_planPrice">850€</div>
                                                    {{-- <a type="button" class="btn btn-default" href="" target="_blank">Payer</a> --}}

                                                    <!-- <div class="my_planDuration">per month</div> -->
                                                    <a type="button" class="btn btn-default" href="https://wa.me/22995403031/?text=Bienvenu%20à%20Starlabs%20!%20Comment%20puis-je%20vous%20aider%20?" target="_blank">Commander </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Design</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Le template est la partie visuelle de votre site. Nous l'adaptons à votre charte graphique.">
                                            Template
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-star my_star"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-star my_star"></i>
                                                    <i class="fas fa-star my_star"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fas fa-star my_star"></i>
                                                    <i class="fas fa-star my_star"></i>
                                                    <i class="fas fa-star my_star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Le design de votre site est compatible smartphones et tablettes">
                                            Responsive Design
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Votre logo intégré dans le design de votre site.">
                                            Intégration Logo
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Contenu</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" title="Tous nos sites sont facilement administrables grâce à une interface graphique.">
                                            Administrable
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">

                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Vous pouvez ajouter autant de contenus que vous le souhaitez. Notre outil est sans limite !">
                                            Ajout de contenus
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-infinity my_infinity"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-infinity my_infinity"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fas fa-infinity  my_infinity"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Vous pouvez ajouter autant d'articles et gérer leur contenus. Notre outil est sans limite !">
                                            Ajout des artcicles et leur contenus
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-infinity my_infinity"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-infinity my_infinity"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fas fa-infinity  my_infinity"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nous intégrons quelques articles et liens de menu pour vous. Pages d'accueil et de contact inclus. Page premium : mise en page plus élaborée, idéale pour les longs contenus">
                                            Intégration de pages (textes + photos...)
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong>5</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong>10</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fas fa-infinity  my_infinity"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Les mentions légales sont obligatoires sur un site internet afin de préciser le propriétaire du site, l'agence de sa création et la société qui l'héberge.">
                                            Intégration des mentions légales
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Les bannières sont des compositions graphiques mettant en avant une accroche, une information ou faire la publicité à une entreprise">
                                            Bannières graphiques / Bannière publicité
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong>1</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong>3</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong>6</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il s'agit de visuels cliquables renvoyant sur des pages stratégiques de votre site, par exemple inciter vos visiteurs à vous contacter.">
                                            Boutons graphiques
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong>1</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong>2</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il s'agit d'un bouton graphique cliquables permettant à un visiteur de s'abonner sur votre site pour reçevoir les dernières articles publiés et les derniers journaux publiés.">
                                            Boutons abonnements
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong>1</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong>2</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Affichez de nombreuses photos sous forme de vignettes zoomables afin d'illustrer un article, une réalisation...">
                                            Galerie photos
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Faites défiler quelques photos dans un article.">
                                            Diaporama photos
                                        </div>
                                        <div class=" col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Permettez à vos clients de venir facilement à votre société grâce à une carte Google.">
                                            Plan d'accès Google Map
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Fonctionnalités</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Elle permet de modifier le contenu de votre site par vous-même (disponible uniquement après une formation).">
                                            Console d'administration
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature">
                                        RGPD / Barre cookies
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Retrouvez facilement vos articles, modules, menus... grâce au moteur de recherche interne.">
                                            Moteur de recherche
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet à vos visiteurs de vous laisser un message.">
                                            Formulaire de contact
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet à vos visiteurs de s'abonner pour reçevoir des nouvelles informations spécifiques par mail.">
                                            Formulaire gestion des Newsletters
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet à vos visiteurs de se connecter à leur interface utilisateur permettant de gerer l'utilisateurs et de visualiser les details de ces abonnements.">
                                            Formulaire connexion
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet à vos visiteurs de s'inscrire pour reçevoir des nouvelles informations spécifiques.">
                                            Formulaire inscription
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet à vos visiteurs de vous payer par une methode de payement(Fedapay, carte visa...).">
                                            Formulaire payement
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet de créer des galeries photos pour vos articles.">
                                            Gestionnaire de galeries photos
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet de créer des bannières scénarisées.">
                                            Gestionnaire de bannières animées
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet de créer une base de données PDF à télécharger.">
                                            Gestionnaire de documentation
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Cloud</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Votre site sera hébergé sur un serveur doté des dernières technologies, ce qui vous garantit un site toujours ultra performant et rapide .">
                                            Hébergement
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 6 mois</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 1 an</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 2 ans</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Votre site sera hébergé sur un serveur doté des dernières technologies, ce qui vous garantit un site toujours ultra performant et rapide .">
                                            Espace disque
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 150Go</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 250Go</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 350Go </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Profitez d’un nom de domaine gratuit(.com .fr .bj .net…) pour un site professionnel.">
                                            Nom de domaine
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 1 </strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 1 </strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 1 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nous configurons vos adresses e-mails professionnelles selon votre nom de domaine qui vous permettent de communiquer facilement en les personnalisant selon votre nom de domaine.">
                                            Adresses mail
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 1 </strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 3</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 5</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Référencement</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Des URLs enrichies en mots-clés pour un meilleur référencement">
                                            Réécriture d'URL
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Intégration d'une description et de quelques mots-clés en relation avec le contenu de votre site.">
                                            Intégration Métadonnées
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nombres de visiteurs, temps des sessions, taux de rebond... Toutes les informations utiles pour améliorer votre site et son référencement.">
                                            Statistiques Google Analytics
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Le plan du site permet aux robots des moteurs de recherche de scanner votre site plus facilement.">
                                            Plan du site
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature">
                                        Webmaster Tools
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nous prévenons Google et Bing de la mise en ligne de votre site pour une indexation plus rapide.">
                                            Soumission site (Google/Bing)
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="La page Google+ aide le référencement naturel de son site auprès de Google : lien dans Google Map, recherches de lieu à proximité, affichage des informations de contact directement dans les résultats de recherche...">
                                            Création d'une page Google
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Facebook est le réseau social le plus utilisé en France. Soyez présent et communiquez facilement auprès de 24 millions d'utilisateurs.">
                                            Création d'une page Facebook
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Sécurité</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="En cas de piratage de votre site, nous pouvons mettre en ligne une restauration de votre site des 7 derniers jours ou d'il y a 30 jours.">
                                            Sauvegarde (Backup)
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title=" Nous assurons une connexion sécurisée entre le serveur web et le navigateur à travers le certificat SSL généralement utilisé pour sécuriser les transactions bancaires, le transfert de données et les informations de connexions. ">
                                            Certificat SSL
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                @include('pack_actualite')
                            </div>

                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-5 package-column site-commerce">
                            <div class=" text-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-offset-4 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-12 my_planHeader my_plan1" style="background-color:#6f6f80 !important">
                                                    <div class="my_planTitle">SITE E-COMMERCE</div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-offset-4 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 my_planHeader my_plan1">
                                                    <div class="my_planTitle">PackMega</div>
                                                    <div class="my_planPrice">750€</div>
                                                    <!-- <div class="my_planDuration"> </div> -->
                                                    {{-- <a type="button" class="btn btn-default" href="" target="_blank">Payer</a> --}}

                                                    <a type="button" class="btn btn-default" href="https://wa.me/22995403031/?text=Bienvenu%20à%20Starlabs%20!%20Comment%20puis-je%20vous%20aider%20?" target="_blank">Commander </a>
                                                </div>
                                                <div class="col-xs-4 my_planHeader my_plan2">
                                                    <div class="my_planTitle">PackGiga</div>
                                                    <div class="my_planPrice">950€</div>
                                                    {{-- <a type="button" class="btn btn-default" href="" target="_blank">Payer</a> --}}

                                                    <!-- <div class="my_planDuration">per month</div> -->
                                                    <a type="button" class="btn btn-default" href="https://wa.me/22995403031/?text=Bienvenu%20à%20Starlabs%20!%20Comment%20puis-je%20vous%20aider%20?" target="_blank">Commander </a>
                                                </div>
                                                <div class="col-xs-4 my_planHeader my_plan3">
                                                    <div class="my_planTitle">PackYotta</div>
                                                    <div class="my_planPrice">1250€</div>
                                                    {{-- <a type="button" class="btn btn-default" href="" target="_blank">Payer</a> --}}

                                                    <!-- <div class="my_planDuration">per month</div> -->
                                                    <a type="button" class="btn btn-default" href="https://wa.me/22995403031/?text=Bienvenu%20à%20Starlabs%20!%20Comment%20puis-je%20vous%20aider%20?" target="_blank">Commander </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Design</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Le template est la partie visuelle de votre site. Nous l'adaptons à votre charte graphique.">
                                            Template
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-star my_star"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-star my_star"></i>
                                                    <i class="fas fa-star my_star"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fas fa-star my_star"></i>
                                                    <i class="fas fa-star my_star"></i>
                                                    <i class="fas fa-star my_star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Le design de votre site est compatible smartphones et tablettes">
                                            Responsive Design
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Votre logo intégré dans le design de votre site.">
                                            Intégration Logo
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Contenu</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" title="Tous nos sites sont facilement administrables grâce à une interface graphique.">
                                            Administrable
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">

                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Vous pouvez ajouter autant de contenus que vous le souhaitez. Notre outil est sans limite !">
                                            Ajout de contenus
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-infinity my_infinity"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-infinity my_infinity"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fas fa-infinity  my_infinity"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nous intégrons quelques articles et liens de menu pour vous. Pages d'accueil et de contact inclus.">
                                            Intégration de pages
                                        </div>
                                        <div class=" col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong>3</strong>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong>6</strong>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong>10</strong>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nous intégrons quelques fiches produits pour vous.">
                                            Intégration de fiches produits
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong>10</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong>15</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong>20</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nous intégrons quelques fiches produits et avec déclinaisons pour vous.">
                                            Intégration de fiches produits avec déclinaison
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong>5</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong>10</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Les mentions légales sont obligatoires sur un site internet afin de préciser le propriétaire du site, l'agence de sa création et la société qui l'héberge.">
                                            Intégration des mentions légales
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Les bannières sont des compositions graphiques mettant en avant une accroche, une information ou faire la publicité à une entreprise">
                                            Bannières graphiques
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong>1</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong>2</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong>5</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il s'agit de visuels cliquables renvoyant sur des pages stratégiques de votre site, par exemple inciter vos visiteurs à vous contacter.">
                                            Boutons graphiques
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong>1</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong>2</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Permettez à vos clients de venir facilement à votre société grâce à une carte Google.">
                                            Plan d'accès Google Map
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Fonctionnalités</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Elle permet de modifier le contenu de votre site par vous-même (disponible uniquement après une formation).">
                                            Console d'administration
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature">
                                        RGPD / Barre cookies
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Retrouvez facilement vos articles, modules, menus... grâce au moteur de recherche interne.">
                                            Moteur de recherche
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet à vos visiteurs de vous laisser un message.">
                                            Formulaire de contact
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Donnez la possibilité à vos clients de s'inscrire à votre newsletter.">
                                            Formulaire d'inscription newsletter
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Les déclinaisons permettent de configurer des variantes (couleur, taille...) à vos produits.">
                                            Déclinaisons de produits
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Il permet à vos visiteurs de vous payer par une methode de payement(Fedapay, carte visa...).">
                                            Méthodes de payement(Paypal, Fedapay...)
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Permettez à vos clients de comparer vos produits afin de choisir celui qu'ils préfèrent.">
                                            Comparaison de produits
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Gérez vos stocks produits par entrepôt.">
                                            Gestion des stocks
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Vendez vos produits en France et à l'international">
                                            Vente et expédition à l'internationnale
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Permet de faire des recherches multi-critères : tailles, couleurs, prix...">
                                            Navigation à facettes
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Cloud</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Votre site sera hébergé sur un serveur doté des dernières technologies, ce qui vous garantit un site toujours ultra performant et rapide .">
                                            Hébergement
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 6 mois</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 1 an</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 2 ans</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Votre site sera hébergé sur un serveur doté des dernières technologies, ce qui vous garantit un site toujours ultra performant et rapide .">
                                            Espace disque
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 150Go</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 250Go</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 350Go </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Profitez d’un nom de domaine gratuit(.com .fr .bj .net…) pour un site professionnel.">
                                            Nom de domaine
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 1 </strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 1 </strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 1 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nous configurons vos adresses e-mails professionnelles selon votre nom de domaine qui vous permettent de communiquer facilement en les personnalisant selon votre nom de domaine.">
                                            Adresses mail
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <strong> 1 </strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <strong> 3</strong>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <strong> 5</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Référencement</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Des URLs enrichies en mots-clés pour un meilleur référencement">
                                            Réécriture d'URL
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Intégration d'une description et de quelques mots-clés en relation avec le contenu de votre site.">
                                            Intégration Métadonnées
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nombres de visiteurs, temps des sessions, taux de rebond... Toutes les informations utiles pour améliorer votre site et son référencement.">
                                            Statistiques Google Analytics
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Le plan du site permet aux robots des moteurs de recherche de scanner votre site plus facilement.">
                                            Plan du site
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature">
                                        Webmaster Tools
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Nous prévenons Google et Bing de la mise en ligne de votre site pour une indexation plus rapide.">
                                            Soumission site (Google/Bing)
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="ptimisation des métadonnées en masse">
                                            Optimisation des métadonnées en masse
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="La page Google+ aide le référencement naturel de son site auprès de Google : lien dans Google Map, recherches de lieu à proximité, affichage des informations de contact directement dans les résultats de recherche...">
                                            Création d'une page Google
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="Facebook est le réseau social le plus utilisé en France. Soyez présent et communiquez facilement auprès de 24 millions d'utilisateurs.">
                                            Création d'une page Facebook
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature col-md-12 " style="background-color:#2d3097; color:white">
                                            <span style="font-size: 20px"> <strong>Sécurité</strong> </span>
                                        </div>
                                    </div>
                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title="En cas de piratage de votre site, nous pouvons mettre en ligne une restauration de votre site des 7 derniers jours ou d'il y a 30 jours.">
                                            Sauvegarde (Backup)
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fas fa-times my_delete"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row my_featureRow">
                                        <div class="col-xs-12 col-sm-4 my_feature" data-toggle="tooltip" data-placement="left" title=" Nous assurons une connexion sécurisée entre le serveur web et le navigateur à travers le certificat SSL généralement utilisé pour sécuriser les transactions bancaires, le transfert de données et les informations de connexions. ">
                                            Certificat SSL
                                        </div>
                                        <div class="col-xs-12 col-sm-8">
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                                                    <i class="fa fa-check my_check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                @include('pack_commerce')
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End finlance_pricing section -->


    <!-- Start finlance_footer section -->
    @include('footer')


    <div id="WAButton"></div>


    <!--====== PRELOADER PART START ======-->
    <div id="preloader">
        <div class="loader revolve">
            <img src="{{ asset('assets/front/img/608900813a3b1.gif') }}" alt="">
        </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

    <!--Scroll-up-->
    <a id="scroll_up"><i class="fas fa-angle-up"></i></a>




    <!-- <script>
        window.laravelCookieConsent = (function() {

            const COOKIE_VALUE = 1;
            const COOKIE_DOMAIN = 'codecanyon.kreativdev.com';

            function consentWithCookies() {
                setCookie('laravel_cookie_consent', COOKIE_VALUE, 7300);
                hideCookieDialog();
            }

            function cookieExists(name) {
                return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
            }

            function hideCookieDialog() {
                const dialogs = document.getElementsByClassName('js-cookie-consent');

                for (let i = 0; i < dialogs.length; ++i) {
                    dialogs[i].style.display = 'none';
                }
            }

            function setCookie(name, value, expirationInDays) {
                const date = new Date();
                date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
                document.cookie = name + '=' + value +
                    ';expires=' + date.toUTCString() +
                    ';domain=' + COOKIE_DOMAIN +
                    ';path=/';
            }

            if (cookieExists('laravel_cookie_consent')) {
                hideCookieDialog();
            }

            const buttons = document.getElementsByClassName('js-cookie-consent-agree');

            for (let i = 0; i < buttons.length; ++i) {
                buttons[i].addEventListener('click', consentWithCookies);
            }

            return {
                consentWithCookies: consentWithCookies,
                hideCookieDialog: hideCookieDialog
            };
        })();
    </script> -->






    <script>
        var mainbs = [];
        var mainurl = "https://codecanyon.kreativdev.com/plusagency/car";
        var vap_pub_key = "BBZdfYl-AY6KtIkFldiBi8_Fwrzq7Y30Ib6N76FgSY5UBHmXku_2zR690B2UtBEyvwiNiix3qZPINeTm4YZCK-o";

        var rtl = 0;
    </script>
    <!-- popper js -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{ asset('carousel/carousel3d/js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('carousel/carousel3d/js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('carousel/carousel3d/js/mdb.min.js') }}"></script>
    <!-- MDB filter JavaScript -->
    <script type="text/javascript" src="{{ asset('carousel/carousel3d/js/addons/mdb-carousel-3d.min.js') }}"></script>

    <script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
    <!-- Plugin js -->
    <script src="{{asset('assets/front/js/plugin.min.js')}}"></script>

    <!-- main js -->
    <script src="{{asset('assets/front/js/car-main.js')}}"></script>
    <!-- pagebuilder custom js -->
    <script src="{{asset('assets/front/js/common-main.js')}}"></script>


    <script type="text/javascript">
        var whatsapp_popup = 1;
        var whatsappImg = "{{ asset('assets/front/img/whatsapp.svg') }}";
        $(function() {
            $('#WAButton').floatingWhatsApp({
                phone: "+22995403031", //WhatsApp Business phone number
                headerTitle: "Bienvenu à Star-Labs", //Popup Title
                popupMessage: `Discuter avec Star-Labs<br />
            Vous avez un projet ? Expliquez-nous tout et obtenez votre devis gratuitement !<br />
Bonjour ! Comment puis-je vous aider ?`, //Popup Message
                showPopup: whatsapp_popup == 1 ? true : false, //Enables popup display
                buttonImage: '<img src="' + whatsappImg + '" />', //Button Image
                position: "right" //Position: left | right

            });
        });
    </script>

    <script>
        $(function() {
            $('.carousel-3d-basic').mdbCarousel3d();
            $('.carousel-3d-controls').mdbCarousel3d();
            $('.carousel-3d-vertical').mdbCarousel3d({
                vertical: true
            });
            $('.carousel-3d-autoplay-off').mdbCarousel3d({
                autoplay: false
            });
        });
    </script>

    <script>
        $('#masonry-package').imagesLoaded(function() {
            // items on button click
            $('.filter-btn').on('click', 'li', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            // menu active class
            $('.filter-btn li').on('click', function(e) {
                $(this).siblings('.active').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            var $grid = $('.masonry-row').isotope({
                itemSelector: '.package-column',
                percentPosition: true,
                masonry: {
                    columnWidth: 0
                }
            });
        });
    </script>




    <!--Start of subscribe functionality-->
    <script>
        $(document).ready(function() {
            $("#subscribeForm, #footerSubscribeForm").on('submit', function(e) {
                // console.log($(this).attr('id'));

                e.preventDefault();

                let formId = $(this).attr('id');
                let fd = new FormData(document.getElementById(formId));
                let $this = $(this);

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        // console.log(data);
                        if ((data.errors)) {
                            $this.find(".err-email").html(data.errors.email[0]);
                        } else {
                            toastr["success"]("You are subscribed successfully!");
                            $this.trigger('reset');
                            $this.find(".err-email").html('');
                        }
                    }
                });
            });

            // lory slider responsive
            $(".gjs-lory-frame").each(function() {
                let id = $(this).parent().attr('id');
                $("#" + id).attr('style', 'width: 100% !important');
            });
        });
    </script>
    <!--End of subscribe functionality-->


    <!--Start of Tawk.to script-->
    <!--End of Tawk.to script-->

    <!--Start of AddThis script-->
    <!--End of AddThis script-->
</body>

<!-- Mirrored from codecanyon.kreativdev.com/plusagency/car/packages by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Aug 2021 12:31:19 GMT -->

</html>
