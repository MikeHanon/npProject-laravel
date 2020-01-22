@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-b">
                    <img style="height: 400px;" src="images/bg_main.png" alt="#" />
                    <div class="dit-p">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <div class="profile-right-b">
                               
                                    <a class="fo-btn" href="{{ admin.users.edit, users->id }}" >Modifier</a>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-profile-box">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-4 pr">
                    <div class="profile-pro-left">
                        <div class="left-profile-box-m">
                            <div class="pro-img">
                                <img src="" alt="photo profile" />
                            </div>
                            <div class="pof-text">
                                <h3></h3>
                                <div class="check-box"></div>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>



                <div class="col-md-10 col-sm-8">
                    <div class="profile-pro-right">
                        <div class="panel with-nav-tabs panel-default">
                            <div class="panel-heading clearfix">
                                <ul class="nav nav-tabs pull-left">
                                   
                                        <li class="active"><a href="#tab1default" data-toggle="tab">Vos produit <span></span></a></li>
                                    
                                    <li><a href="#tab2default" data-toggle="tab">A propos</a></li>
                                   
                                        <li><a href="#tab3default" data-toggle="tab">Contact</a></li>
                                    
                                        <li><a href="#tab4default" data-toggle="tab">Message <span></span></a></li>
                                  
                                    <li><a href="#tab5default" data-toggle="tab">Avis</a></li>
                                    
                                    
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                               
                                    <div class="tab-pane fade in active" id="tab1default">
                                       
                                            <div class="product-box-main row">
                                                
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="small-box-c">
                                                            <div class="small-img-b">
                                                               
                                                            </div>
                                                            <div class="dit-t clearfix">
                                                                <div class="left-ti">
                                                                    <h4></h4>
                                                                    <p>par <span><a href="index.php?action=profile&username=</a></span></p>
                                                                </div>
                                                                <a href="index.php?action=article&id="" tabindex="0">€</a>
                                                            </div>
                                                    

                                                        </div>
                                                        
                                                    </div>
                                                    
                                                        <a class="fo-btn" href="index.php?action=createarticle">ajouter un produit</a>
                                            </div>
                                    </div>
                               
                                <div class="tab-pane fade default" id="tab2default">
                                    <div class="about-box">
                                        <h2>A propos de moi</h2>
                                        <p> ville = </p>
                                        <p>code postale = </p>
                                        <p>nom : </p>
                                        <p>prenom: </p>
                                        <p>adresse: </p>
                                        <p>email: </p>
                                        
                                       
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3default">
                                   
                                        <form action="" class="form-group" method="post">
                                            <input type="hidden" name="id" value=">">
                                            <label for="subject">Sujet</label>
                                            <input class="form-control" type="text" name="subject" id="" placeholder="sujet" required>
                                            <br />
                                            <label for="message">message</label>
                                            <textarea style="border : 1px solid black" class="mt-5" name="message" id="" cols="127" rows="10" required></textarea>
                                            <button type="submit" name="btn-send">envoyer</button>
                                        </form>
                                   
                                        <div class="container">
                                            
                                                <div class="row">

                                                    <div class="col-md-2">
                                                    <ul>
                                                   
                                                        <li onclick="display()" style="border-bottom: 1px solid black" >
                                                        <p> </p>
                                                        <p></p>
                                                    </li>
                                                   
                                                    </ul>
                                                    </div>
                                                
                                                    <div class="col-md-10" id="response" style="display:none">
                                                        <p id="username</p>
                                                        <p id="subject</p>
                                                        <p id="message</p>

                                                        <form action="" method="post">
                                                            <input type="hidden" name="id" value="">
                                                            <input type="hidden" name="subject" value="">
                                                            <textarea style="border : 1px solid black" class="my-5" name="message" id="" cols="50" rows="3"></textarea>
                                                            <button type="submit" name="reply">envoyer</button>
                                                        </form>
                                                    </div>
                                               
                                                </div>
                                        </div>
                                  
                                </div>
                                <div class="tab-pane fade" id="tab4default"> 
                                    <div class="comment">
                                      
                                            <p><strong> </strong> <span></span> </p>
                                            <p></p>
                                            <p>note = /5</p>
                                            <hr>
                                       
                                    </div>
                                    
                                    <!-- <form action="" method="post">
                                        <label for="comment">commentaire</label>
                                        <textarea name="comment" id="" cols="80" rows="10" style="border: 1px solid black"></textarea>
                                        <label for="note">note</label>
                                        <select name="note" id="">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <button type="submit" name="addcomment">ajouter un commentaire</button>
                                    </form>
                                     -->
                                <!-- </div>
                               
                               
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

@endsection
@section('script')

   <script src="./js/jquery-1.12.4.min.js"></script>

   <script src="./js/bootstrap.min.js"></script>
   <script src="./js/bootstrap-select.min.js"></script>
   <script src="./js/slick.min.js"></script>
   <script src="./js/wow.min.js"></script>

<script src="./js/custom.js"></script>
@endsection