<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CasaFrance</title>
<!-- logo title -->
<link rel="icon"  href="img/title.png"  />
<!-- Font awesome -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- SmartMenus jQuery Bootstrap Addon CSS -->
<link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
<!-- Product view slider -->
<link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
<!-- slick slider -->
<link rel="stylesheet" type="text/css" href="css/slick.css">
<!-- price picker slider -->
<link rel="stylesheet" type="text/css" href="css/nouislider.css">
<!-- Theme color -->
<link id="switcher" href="css/theme-color/red-theme.css"
	rel="stylesheet">
<!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
<!-- Top Slider CSS -->
<link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet"
	media="all">

<!-- Main style sheet -->
<link href="css/style.css" rel="stylesheet">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Lato'
	rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway'
	rel='stylesheet' type='text/css'>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<!-- ajouter crisp -->

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="5eff2dec-04cf-4379-ae7a-86903f4f204a";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>
<body>
	<!-- wpf loader Two -->
	<div id="wpf-loader-two">
		<div class="wpf-loader-two-inner">
			<span>Loading</span>
		</div>
	</div>
	<!-- / wpf loader Two -->
	<!-- SCROLL TOP BUTTON -->
	<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
	<!-- END SCROLL TOP BUTTON -->


	<!-- Start header section -->
	<header id="aa-header">
		<!-- start header top  -->
		<div class="aa-header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="aa-header-top-area">
							  <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <img src="img/flag/french.jpg" alt="english flag">FRANÇAIS
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="img/flag/french.jpg" alt="">Français</a></li>
                      <li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-euro"></i>EURO
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-usd"></i>USD</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span><b><b>0 806 07 95 21 appel gratuit</b></b></p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
				<div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li class="hidden-xs"><a href="cart.php">Mes projets</a></li>
                  <li class="hidden-xs"><a href="checkout.php">Paiement sécurisé</a></li>
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Espace Pro</a></li>
                   <li><a href="account.php"><?php 
                  if (isset($_SESSION['prenomclient'])){
                      echo $_SESSION['prenomclient'];
                  }else 
                      echo "Mon compte"; 
                  ?>
                      
                      </a></li>
                </ul>
              </div>
              
              
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / header top  -->

		<!-- start header bottom  -->
		<div class="aa-header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="aa-header-bottom-area">
							<!-- logo  -->
							<div class="aa-logo">
								<!-- Text based logo -->
<!-- 								<a href="index.html"> <span class="fa fa-shopping-cart"></span> -->
<!-- 									<p> -->
<!-- 										daily<strong>Shop</strong> <span>Your Shopping Partner</span> -->
<!-- 									</p> -->
<!-- 								</a> -->
								<!-- img based logo -->
								<a href="index.php"><img src="img/logo.png" alt="logo img" ></a>
							</div>
							<!-- / logo  -->
							<!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">Mes projets</span>
                  <span class="aa-cart-notify">2</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Isolation</a></h4>
                        <p>1 x 250 €</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Peinture</a></h4>
                        <p>1 x 250 €</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        500 €
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="#">Paiement sécurisé</a>
                </div>
              </div>
              <!-- / cart box -->
							<!-- search box -->
							<div class="aa-search-box">
								<form action="">
									<input type="text" name="" id=""
										placeholder="Effectuez une recherche ici ex. 'isolation' ">
									<button type="submit">
										<span class="fa fa-search"></span>
									</button>
								</form>
							</div>
							<!-- / search box -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / header bottom  -->
	</header>
	<!-- / header section -->
	<!-- menu -->
	<section id="menu">
		<div class="container">
			<div class="menu-area">
				<!-- Navbar -->
				<div class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span> <span
								class="icon-bar"></span> <span class="icon-bar"></span> <span
								class="icon-bar"></span>
						</button>
					</div>
					          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.php">Accueil </a></li>
                  <li><a href="isolation.php">Isolation <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="isolationCombles.php">Isolation des combles </a></li>
                  <li><a href="isolationToitures.html">Isolation sous toiture</a></li>
                </ul>
              </li>
              <li><a href="traitementCharpente.php">Traitement de charpente <span class="caret"></span></a>
              </li>
              <li><a href="nettoyage.php">Nettoyage de toiture <span class="caret"></span></a>
              </li>
              <li><a href="#">Façade</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
	</section>
	<!-- / menu -->
	<!-- Start slider -->
	<section id="aa-slider">
		<div class="aa-slider-area">
			<div id="sequence" class="seq">
				<div class="seq-screen">
					<ul class="seq-canvas">
						<!-- single slide item -->
						<li>
							<div class="seq-model">
								<img data-seq src="img/slider/1.jpg" alt="Men slide img" width="1920px" height="700px"/>
							</div>
							<div class="seq-title">
								<span data-seq>CasaFrance à votre service</span>
								<h2 data-seq>Démarrez vos travaux</h2>
								<p data-seq>Simplifiez-vous la vie,
tous les services pour réussir
vos projets sont ici !</p>
								<a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">DEVIS EN LIGNE</a>
							</div>
						</li>
						<!-- single slide item -->
						<li>
							<div class="seq-model">
								<img data-seq src="img/slider/2.jpg"  />
							</div>
							<div class="seq-title">
								<span data-seq>À partir de 39.90 €/ m2</span>
								<h2 data-seq>Isolation des combles</h2>
								<p data-seq>Besoin d'un professionnel pour l'isolation de vos combles ?</p>
								<a data-seq href="isolation.php" class="aa-shop-now-btn aa-secondary-btn">DEVIS EN LIGNE</a>
							</div>
						</li>
						<!-- single slide item -->
						<li>
							<div class="seq-model">
								<img data-seq src="img/slider/3.jpeg" width="1920px" height="700px" />
							</div>
							<div class="seq-title">
								<span data-seq>À partir de 19.90 €/ m2</span>
								<h2 data-seq>Traitement de charpente</h2>
								<p data-seq>Besoin d'un charpentier pour la rénovation de votre charpente ?</p>
								<a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">DEVIS EN LIGNE</a>
							</div>
						</li>
						<!-- single slide item -->
						<li>
							<div class="seq-model">
								<img data-seq src="img/slider/4.jpg" width="1920px" height="700px" />
							</div>
							<div class="seq-title">
								<span data-seq>À partir de 9.90 €/ m2</span>
								<h2 data-seq>Démoussage et hydrofugation des toitures</h2>
								<p data-seq>La toiture est un élément important pour l’esthétique mais aussi pour l’isolation de votre maison. Il est essentiel d’assurer son traitement régulier en procédant à son nettoyage et à son démoussage.</p>
								<a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">DEVIS EN LIGNE</a>
							</div>
						</li>
						<!-- single slide item -->
						<li>
							<div class="seq-model">
								<img data-seq src="img/slider/5.jpg" width="1920px" height="700px" />
							</div>
							<div class="seq-title">
								<span data-seq>Profitez de nos promotions</span>
								<h2 data-seq>Périodes creuses -30%</h2>
								<p data-seq>Certains artisans proposent -30% de réduction sur des périodes de baisse d'activité</p>
								<a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Je trouve un artisan</a>
							</div>
						</li>
					</ul>
				</div>
				<!-- slider navigation btn -->
				<fieldset class="seq-nav" aria-controls="sequence"
					aria-label="Slider buttons">
					<a type="button" class="seq-prev" aria-label="Previous"><span
						class="fa fa-angle-left"></span></a> <a type="button" class="seq-next"
						aria-label="Next"><span class="fa fa-angle-right"></span></a>
				</fieldset>
			</div>
		</div>
	</section>
	<!-- / slider -->
	<!-- Start Promo section -->
	<section id="aa-promo">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="aa-promo-area">
						<div class="row">
							<!-- promo left -->
							<div class="col-md-5 no-padding">
								<div class="aa-promo-left">
									<div class="aa-promo-banner">
										<img src="img/1euro.png" alt="img" width="450px" height="450px">
										<div class="aa-prom-content">
											<span>ISOLATION À 1 EURO</span>
											<h4>
												<a href="#">Testez votre éligibilité</a>
											</h4>
										</div>
									</div>
								</div>
							</div>
							<!-- promo right -->
							<div class="col-md-7 no-padding">
								<div class="aa-promo-right">
									<div class="aa-single-promo-right">
										<div class="aa-promo-banner">
											<img src="img/slider/2.jpg" alt="img">
											<div class="aa-prom-content">
												<a href="#"><span>Le pourquoi du comment</span></a>
												<h4>
													<a href="#">Je trouve un artisan</a>
												</h4>
											</div>
										</div>
									</div>
									<div class="aa-single-promo-right">
										<div class="aa-promo-banner">
											<img src="img/slider/3.jpeg" alt="img">
											<div class="aa-prom-content">
												<span>Traitement de charpente</span>
												<h4>
													<a href="#">Demande de devis</a>
												</h4>
											</div>
										</div>
									</div>
									<div class="aa-single-promo-right">
										<div class="aa-promo-banner">
											<img src="img/clientsatisfait.png" alt="img">
											<div class="aa-prom-content">
												<span>99% de clients satisfaits</span>
												<h4>
													<a href="#">Voir Témoignages</a>
												</h4>
											</div>
										</div>
									</div>
									<div class="aa-single-promo-right">
										<div class="aa-promo-banner">
											<img src="img/conseilgratuit.jpg" alt="img">
											<div class="aa-prom-content">
												<span>Conseil gratuit</span>
												<h4>
													<a href="#">Échangeons sur votre projet</a>
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- / Promo section -->
	<!-- Support section -->
	<section id="aa-support">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="aa-support-area">
						<!-- single support -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="aa-support-single">
								<span class="fa fa-truck"></span>
								<h4>Exécution et suivi de vos travaux.</h4>
								<P>Intervention rapide sous 2 à 7 jours.</P>
							</div>
						</div>
						<!-- single support -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="aa-support-single">
								<span class="fa fa-clock-o"></span>
								<h4>Paiement 100% sécurisé</h4>
								<P>Vous pouvez régler votre commande par carte bancaire.
les transactions effectuées sur ce site sont sécurisées par la plateforme de paiement en ligne payzen. 
</P>
							</div>
						</div>
						<!-- single support -->
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="aa-support-single">
								<span class="fa fa-phone"></span>
								<h4>Support 9h-18h 5/7</h4>
								<P>Besoin d'aide pour passer votre commande ? Une question ? Nous sommes là pour vous répondre !.</P>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- / Support section -->
	<!-- Latest Blog -->
	<section id="aa-latest-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="aa-latest-blog-area">
						<h2>Témoignages</h2>
						<div class="row">
							<!-- single latest blog -->
							<div class="col-md-4 col-sm-4">
								<div class="aa-latest-blog-single">
									<figure class="aa-blog-img">
										<a href="#"><img src="img/conseilExpert.png" alt="img"></a>
										<figcaption class="aa-blog-img-caption">
											<span href="#"><i class="fa fa-eye"></i>3K</span> <a href="#"><i
												class="fa fa-thumbs-o-up"></i>26</a> <a href="#"><i
												class="fa fa-comment-o"></i>18</a> <span href="#"><i
												class="fa fa-clock-o"></i>December 26, 2018</span>
										</figcaption>
									</figure>
									<div class="aa-blog-info">
										<h3 class="aa-blog-title">
											<a href="#">Conseil de qualité</a>
										</h3>
										<p> "Bonne prise en compte de mes différentes problématiques, conseillère à l'écoute et efficace, je recommande."</p>
										<a href="#" class="aa-read-mor-btn">Lire la suite .. <span
											class="fa fa-long-arrow-right"></span></a>
									</div>
								</div>
							</div>
							<!-- single latest blog -->
							<div class="col-md-4 col-sm-4">
								<div class="aa-latest-blog-single">
									<figure class="aa-blog-img">
										<a href="#"><img src="img/artisansqualifie.jpg" alt="img"></a>
										<figcaption class="aa-blog-img-caption">
											<span href="#"><i class="fa fa-eye"></i>1K</span> <a href="#"><i
												class="fa fa-thumbs-o-up"></i>26</a> <a href="#"><i
												class="fa fa-comment-o"></i>15</a> <span href="#"><i
												class="fa fa-clock-o"></i>February 1, 2019</span>
										</figcaption>
									</figure>
									<div class="aa-blog-info">
										<h3 class="aa-blog-title">
											<a href="#">Artisans qualifiés</a>
										</h3>
										<p>"Je trouve qu'il a été réactif, il a tout de suite compris mon besoin. Je le recommande pour la réactivité, son professionnalisme et la qualité du service."</p>
										<a href="#" class="aa-read-mor-btn">Lire la suite .. <span
											class="fa fa-long-arrow-right"></span></a>
									</div>
								</div>
							</div>
							<!-- single latest blog -->
							<div class="col-md-4 col-sm-4">
								<div class="aa-latest-blog-single">
									<figure class="aa-blog-img">
										<a href="#"><img src="img/isolationcomble.jpg" alt="img"></a>
										<figcaption class="aa-blog-img-caption">
											<span href="#"><i class="fa fa-eye"></i>4K</span> <a href="#"><i
												class="fa fa-thumbs-o-up"></i>46</a> <a href="#"><i
												class="fa fa-comment-o"></i>10</a> <span href="#"><i
												class="fa fa-clock-o"></i>January 16, 2019</span>
										</figcaption>
									</figure>
									<div class="aa-blog-info">
										<h3 class="aa-blog-title">
											<a href="#">Mes travaux d’isolation</a>
										</h3>
										<p>"Les travaux se sont bien passés, et ils ont été bien réalisés. Et le temps annoncé pour leur réalisation a été respecté."</p>
										<a href="#" class="aa-read-mor-btn">Lire la suite .. <span
											class="fa fa-long-arrow-right"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- / Latest Blog -->

	<!-- Client Brand -->
	<section id="aa-client-brand">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="aa-client-brand-area">
						<ul class="aa-client-brand-slider">
							<li><a href="#"><img src="img/artisansdusudouest.png" width="135px" height="33px"
									alt="artisan"></a></li>
							<li><a href="#"><img src="img/sthenplus.jpg" width="135px" height="33px"
									alt="sthenplus"></a></li>
							<li><a href="#"><img src="img/adso.png" width="135px" height="33px"
									alt="adso"></a></li>
							<li><a href="#"><img src="img/ROCKWOOL.png" width="135px" height="33px"
									alt="leroymerlin"></a></li>
							<li><a href="#"><img
									src="img/qualibat.jpg" alt="qualibat" width="135px" height="33px"></a></li>
							<li><a href="#"><img src="img/artisansdusudouest.png" width="135px" height="33px"
									alt="artisan"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- / Client Brand -->



	<!-- footer -->
	<footer id="aa-footer">
		  <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Accueil</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Isolation</a></li>
                    <li><a href="#">Traitement de charpente</a></li>
                    <li><a href="#">Démoussage de toiture</a></li>
                    <li><a href="#">Qui sommes-nous</a></li>
                    <li><a href="#">Contactez-nous</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contactez-nous</h3>
                    <address>
                      <p> 25 rue Saint François Xavier Bordeaux</p>
                      <p><span class="fa fa-phone"></span>0 806 07 95 21 appel gratuit</p>
                      <p><span class="fa fa-envelope"></span>contact@casafrance.fr</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
		<div class="aa-footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="aa-footer-bottom-area">
							<p>
								Copyright 2019 | CasaFrance
							</p>
							<div class="aa-footer-payment">
								<span class="fa fa-cc-mastercard"></span> <span
									class="fa fa-cc-visa"></span> <span class="fa fa-paypal"></span>
								<span class="fa fa-cc-discover"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- / footer -->

	 <!-- Login Modal -->   
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Se connecter ou s'inscrire</h4>
          <form class="aa-login-form" action="index.php" method="post">
            <label for="">Email<span>*</span></label>
            <input type="text" placeholder="Email" name="email">
            <label for="">Mot de passe<span>*</span></label>
            <input type="password" placeholder="Mot de passe" name="password">
            <button class="aa-browse-btn" type="submit" name="meconnecter">Valider</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Se souvenir de moi </label>
            <p class="aa-lost-password"><a href="#">Mot de passe oublié?</a></p>
            <div class="aa-register-now">
              Je n'ai pas de compte ?<a href="account.php">M'inscrire maintenant!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
	<!-- jQuery library -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.js"></script>
	<!-- SmartMenus jQuery plugin -->
	<script type="text/javascript" src="js/jquery.smartmenus.js"></script>
	<!-- SmartMenus jQuery Bootstrap Addon -->
	<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
	<!-- To Slider JS -->
	<script src="js/sequence.js"></script>
	<script src="js/sequence-theme.modern-slide-in.js"></script>
	<!-- Product view slider -->
	<script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
	<script type="text/javascript" src="js/jquery.simpleLens.js"></script>
	<!-- slick slider -->
	<script type="text/javascript" src="js/slick.js"></script>
	<!-- Price picker slider -->
	<script type="text/javascript" src="js/nouislider.js"></script>
	<!-- Custom js -->
	<script src="js/custom.js"></script>

</body>
</html>