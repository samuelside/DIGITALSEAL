@extends('layouts.primary')

@section('titre')
    DIGITAL SEAL ARTCI
@endsection

@section('css')
    {{ asset('css/PageAcceuil.css') }}
@endsection

@section('contenu')
    <div class="titre">
        <h4>Bienvenue sur DIGITAL SEAL ARTCI</h4>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/formation-cr-codir1.jpg" class="d-block w-100" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/formation-cr-codir2.jpg" class="d-block w-100" class="img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/Presentation-et-missions-de-lARTCI-Autorite-de-protection.jpg" class="d-block w-100"
                        class="img-fluid" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    <section class="banner pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <h1> Avec Digital Seal ARTCI augmentez votre niveau de certification </h1>
                    <p>
                        <button class="btn ">En savoir plus </button>
                        <button class="btn btn-primary">Se connecter </button>
                    </p>
                </div>
                <section class="available   py-5">
                    <div class="container">
                        <div class="row">
                            <div class="card mb-3 border-0  rounded-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="images/quelle-est-la-valeur-juridique-dune-signature-electronique-5.jpg"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Votre satisfaction ,notre priorité </h5>
                                            <p class="card-text">Digital Seal ARTCI est une plateforme qui offre un
                                                ensemble de services spécialisés </br>aux entreprises .</p>
                                            <p class="card-text"><small class="text-muted"></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-5 border-0  rounded-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Sécuriser vos documents numériques et physiques
                                            </h5>
                                            <p class="card-text">Notre application permet de garantir
                                                l'authenticité et l'intégrité de vos documents.</p>
                                            <p class="card-text"><small class="text-muted"></small></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="images/banIndex-TN-CEV_AR_0_1.jpg" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card my-5 border-0  rounded-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="images/mesurer-productivité-copie-768x427.jpg"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Gagner en temps</h5>
                                            <p class="card-text">Finis les aller-retours à la photocopieuse. Dites
                                                adieu aux documents à signer oubliés au coin d’un bureau. Libérez du
                                                temps pour les tâches essentielles</p>
                                            <p class="card-text"><small class="text-muted"></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
                integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
                integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
        </script>
        <script src="assets/js/bootstrap.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
                integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
                integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
        </script>
        </body>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
            integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


        <!--footer starts from here-->
        <footer class="footer">
            <div class="container bottom_border">
                <div class="row">
                    <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                        <!--headin5_amrc-->
                        <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
                        <p><i class="fa fa-phone"></i> +91-9999878398 </p>
                        <p><i class="fa fa fa-envelope"></i> info@example.com </p>
                    </div>
                    <div class=" col-sm-4 col-md  col-6 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <li><a href="http://webenlance.com">Image Rectoucing</a></li>
                            <li><a href="http://webenlance.com">Clipping Path</a></li>
                            <li><a href="http://webenlance.com">Hollow Man Montage</a></li>
                            <li><a href="http://webenlance.com">Ebay & Amazon</a></li>
                            <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
                            <li><a href="http://webenlance.com">Image Cropping</a></li>
                        </ul>
                        <!--footer_ul_amrc ends here-->
                    </div>
                    <div class=" col-sm-4 col-md  col-6 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <li><a href="http://webenlance.com">Remove Background</a></li>
                            <li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
                            <li><a href="http://webenlance.com">Logo Design</a></li>
                            <li><a href="http://webenlance.com">Vectorization</a></li>
                            <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
                            <li><a href="http://webenlance.com">Image Cropping</a></li>
                        </ul>
                        <!--footer_ul_amrc ends here-->
                    </div>
                    <div class=" col-sm-4 col-md  col-12 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                        <!--headin5_amrc ends here-->
                        <ul class="footer_ul2_amrc">
                            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                                <p>Lorem Ipsum is simply dummy text of the printing...<a
                                        href="#">https://www.lipsum.com/</a>
                                </p>
                            </li>
                            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                                <p>Lorem Ipsum is simply dummy text of the printing...<a
                                        href="#">https://www.lipsum.com/</a>
                                </p>
                            </li>
                            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                                <p>Lorem Ipsum is simply dummy text of the printing...<a
                                        href="#">https://www.lipsum.com/</a>
                                </p>
                            </li>
                        </ul>
                        <!--footer_ul2_amrc ends here-->
                    </div>
                </div>
            </div>
            <div class="container">
                <ul class="foote_bottom_ul_amrc">
                    <li><a href="http://webenlance.com">Home</a></li>
                    <li><a href="http://webenlance.com">About</a></li>
                    <li><a href="http://webenlance.com">Services</a></li>
                    <li><a href="http://webenlance.com">Pricing</a></li>
                    <li><a href="http://webenlance.com">Blog</a></li>
                    <li><a href="http://webenlance.com">Contact</a></li>
                </ul>
                <!--foote_bottom_ul_amrc ends here-->
                <p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>

                <ul class="social_footer_ul">
                    <li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <!--social_footer_ul ends here-->
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
    </section>
        <!-- Crédit to https://bootsnipp.com/snippets/bxDBA -->
    @endsection
