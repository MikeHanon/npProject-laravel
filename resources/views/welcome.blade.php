@extends('layouts.app')

@section('content')
<div class="main-product">
    <div class="container">
        <div class="row clearfix">
            <div class="find-box">
                <h1>Bienvenu sur E-artisanat</h1>
                <h4>le premier site d'économie collaborative sur l'artisanat, que se soit pour l'alimentation, le batiments, la fabrication
                    d'objet ou même de petit service vous trouverez tout chez nous
                </h4>
                <div class="row clearfix">
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="index.php?action=category&id=1">
                            <div class="box-img">
                                <h4>Alimentation</h4>
                                <img src="{{ url('/images/product/allimentation.png') }}" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="index.php?action=category&id=2"">
                            <div class="box-img">
                                <h4>Batiment</h4>
                                <img src="{{ url('/images/product/batiment.png') }}" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="index.php?action=category&id=3">
                            <div class="box-img">
                                <h4>Fabrication</h4>
                                <img src="{{ url('/images/product/fabrication.png') }}" alt="" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <a href="index.php?action=category&id=4">
                            <div class="box-img">
                                <h4>Services</h4>
                                <img src="{{ url('/images/product/service.png') }}" alt="" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cat-main-box">
    <div class="container">
        <div class="row panel-row">
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="{{ url('/images/xpann-icon.jpg') }}" class="icon-small" alt="">
                        <h4>Entreprenez</h4>
                        <p>Réaliser des profits jusqu'à 5100 €/an sans taxe <a href="index.php?action=faq">en savoire plus</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="{{ url('/images/create-icon.jpg') }}" class="icon-small" alt="">
                        <h4>Achetez</h4>
                        <p>Acheté de vrai produit artisanaux fais près de chez vous. Des siège, bijoux ou même de bon petit plat
                            <a href="index.php?action=faq">en savoire plus</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="{{ url('/images/get-icon.jpg') }}" class="icon-small" alt="">
                        <h4>Soyez inspirer</h4>
                        <p>Laissé aller votre inspiration pour proposer vos plus belle création <a href="index.php?action=faq">en savoire plus</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="start-free-box">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="main-start-box">
                    <div class="free-box-a clearfix">
                        <div class="col-md-6 col-sm-6">
                            <div class="left-a-f">
                                <h3>E-artisanat, une platforme construite pour vous aider à grandir sur le web</h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="right-a-f">
                                <p>Dans les années avenir la facon de faire du business sur le web changera profondement. E-artisanat est la pour vous aider à faire la difference
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="main-start-box">
                <div class="bg_img_left"><img src="{{ url('/images/bg_img1.png') }}" alt="#" /></div>
                <div class="container">
                    <div class="buyer-box clearfix">
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="left-buyer">
                                <img class="img-responsive" src="{{ url('/images/creat_pro.png') }}" alt="#" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="right-buyer">
                                <h4>Acheteur</h4>
                                <h2>Donné du pouvoir à nos artisants<br>
                                    <span>Avec l'économie collaborative</span>
                                </h2>
                                <p> Acheter des produit 100% certifié artisanal. Tous nos artisant sont validés par notre team, et évalué par la communauté.
                                </p>
                                <p>Laissez votre avis et partagez vos expérience avec nos artisant à la communauté</p>
                                <a href="index.php?action=register">Créer un compte acheteur</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="bg_img_right"><img src="{{ url('/images/bg_img1.png') }}" alt="#" /></div>
            <div class="main-start-box">
                <div class="container">
                    <div class="supplier clearfix">
                        <div class="col-md-5 col-sm-6">
                            <div class="left-supplier">
                                <h4>Vendeur</h4>
                                <h2>Augmenter vos revenus <br><span>Avec l'économie collaborative</span></h2>
                                <p>Ne vous inquiéter plus pour vos fin de mois et gagnez jusqu'à plusieur centaine d'euro par mois.
                                </p>
                                .
                                <a href="index.php?action=registe">Creer un acompte vendeur</a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <div class="right-supplier">
                                <img class="img-responsive" src="{{ url('/images/supplier-pc-img.png') }}" alt="#" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

   <script src="./js/jquery-1.12.4.min.js"></script>

   <script src="./js/bootstrap.min.js"></script>
   <script src="./js/bootstrap-select.min.js"></script>
   <script src="./js/slick.min.js"></script>
   <script src="./js/wow.min.js"></script>

<script src="./js/custom.js"></script>
@endsection
