<?php
session_start();


?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<!-- Head -->
<link rel="author" href="https://plus.google.com/110655365172842681966">
<link rel="publisher"
	href="https://plus.google.com/110655365172842681966">
<link rel="icon" type="image/png"
	href="logo.png">

<link rel="alternate"
	href="https://hellocasa.fr/offre/pose-revetement-de-sol"
	hreflang="fr-fr">
<link rel="stylesheet" type="text/css"
	href="./isolation4devis_files/font-awesome.min.css">
<link rel="stylesheet" href="./isolation4devis_files/style.css"
	media="screen" type="text/css">

<link type="text/css" href="./isolation4devis_files/cookie-consent.css"
	rel="stylesheet">

<meta
	content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no"
	name="viewport">
<link rel="amphtml"
	href="https://hellocasa.fr/amp/offre/pose-revetement-de-sol">

<link rel="stylesheet"
	href="./isolation4devis_files/jquery.fancybox.min.css" media="screen"
	type="text/css">
<link rel="stylesheet" href="./isolation4devis_files/offerV2.css"
	media="screen" type="text/css">
<link rel="stylesheet"
	href="./isolation4devis_files/font-awesome.min(1).css">


</head>
<body data-route="offer_slug" class="modal-open">
	<!-- Header -->


	<div class="navWrapper hellocasa-header">
		<div id="hcHeader" data-spy="affix" data-offset-top="117">
			<nav class="navbar navbar-default"
				style="background-color: #000080 !important">
				<div class="container">
					<div class="navBlock navBlockLogo">
						<div class="logoNav">
							<div class="logo-container">
								<a href="index.html"> <img src="logo.png" width="200"
									height="70"
									alt="Commandez tous vos travaux du bricolage � la r�novation"
									class="mainLogo">
								</a>
							</div>
						</div>
					</div>

					<button type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#navbar" aria-expanded="false"
						aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<div id="navbar" class="navbar-collapse collapse">
						<div class="navBlock navBlockAccount">
							<ul class="nav navbar-nav navbar-right navbarToolbar">
								<li class="dropdown custormer-serivce" data-gaevent="page"
									data-category="phone" data-action="click" data-trigger="click"
									data-label="show contact"><a href="contact.html"
									class="dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false"><span
										class="phoneBox">Contactez-nous</span></a>
									<ul class="dropdown-menu dropdown-contact new-charte"
										style="width: 350px;">
										<li class="padding--m">
											<p class="margin--0 font-s">Besoin d'aide pour passer
												commande ? Une question ? Nous sommes là pour vous répondre
												!</p>
										</li>
										<li class="padding--m"><span class="font-s">Service client du
												lundi au vendredi de 8H à 19H30 et le samedi de 9H à 18H</span>
										</li>
										<li class="padding--m"><a class="maincolor-text default-link"
											href="/contact">Contactez-nous <i class="fa fa-arrow-right"></i></a>
										</li>
									</ul></li>
								<li><a class="login" href="inscription.php" data-toggle="modal"
									data-target="#login-modal"> <span class="accountBox"> <span>Mon
												compte</span>
									</span>
								</a></li>
								<li class="itemShop"><a href="/checkout/cart" role="button"
									aria-haspopup="true" aria-expanded="false"> <span
										class="shopBox"> <i
											class="hellocasa-icon hidden-xs margin-right--m">shop</i> <span
											class="hidden-lg hidden-md hidden-sm margin-right--m">Panier</span>
											<span class="badge" id="commandito"
											style="background-color: #000080 !important"><script>var commande =0;
											document.write(commande);</script></span>
									</span>
								</a></li>
							</ul>
						</div>
						<div class="navBlock navBlockSearch">
							<form class="navbar-form" role="search">
								<div id="searchbar-header-content" class="pull-right new-charte">
									<div id="searchBar-header" class="suggest-holder">

										<span class="button button-close searchbar-close"> <i
											class="hellocasa-icon">close</i>
										</span>

										<div class="search-zone">
											<div class="input-group">
												<span class="input-group-button">
													<button class="search-button-header" type="button">
														<i class="hellocasa-icon">search</i>
													</button>
												</span> <input type="text"
													class="form-control hc-input search-input-header width-search-input-header"
													placeholder="Commencez à taper votre recherche">
											</div>
										</div>
										<div id="result-wrapper"
											class="padding--l container-form margin--0">
											<p class="margin-bottom--l title-result-wrapper">Explorer nos
												services</p>
											<div id="searchbar-default" class="searchbar-default row">




												<div class="clearfix"></div>
											</div>
											<div id="searchbar-result" class="searchbar-result row"></div>
										</div>
									</div>
								</div>
								<script>
	searchSupport = document.getElementById('searchBySupport')
    if(searchSupport){
	    searchSupport.addEventListener('change', function(){
	    	g_reference_support = document.getElementById("searchBySupport").value;
	    }, false);
	}
</script>

								<script defer>

	document.addEventListener("DOMContentLoaded", function(event) {
		(function($) {

			var	morphSearchHeader = document.getElementById( 'searchBar-header' ),
			containerHeader = document.getElementById( 'searchbar-header-content' ),
			inputHeader = morphSearchHeader.querySelector( 'input.search-input-header' ),
			btnHeader = morphSearchHeader.querySelector( '.search-button-header' ),
			ctrlCloseHeader = morphSearchHeader.querySelector( 'span.searchbar-close' ),
			bodyHeader = document.getElementsByTagName( 'html' )[0];
			isOpenHeader = isAnimating = false,
					// show/hide search area
					toggleSearchHeader = function(evt) {

						// return if open and the input gets focused
						if( evt.type.toLowerCase() === 'focus' && isOpenHeader ) return false;

						if( isOpenHeader ) {
							$('.affix').css('transform', 'translate3d(0, 0, 0)');
							$('#searchBySupport').addClass('hidden');
							classie.remove( morphSearchHeader, 'open' );
							classie.remove( containerHeader, 'open' );
							classie.remove( bodyHeader, 'modal-open' );

							// if( navigator.userAgent.match(/iPhone|iPad|iPod/i) ) {
							// 	morphSearch.style.marginTop = "0px";
							// }

							// trick to hide input text once the search overlay closes
							// todo: hardcoded times, should be done after transition ends
							if( inputHeader.value !== '' ) {
								setTimeout(function() {
									classie.add( morphSearchHeader, 'hideInput' );
									setTimeout(function() {
										classie.remove( morphSearchHeader, 'hideInput' );
									}, 300 );
								}, 500);
							}
						}
						else {
							$('.affix').css('transform', 'none');
							$('#searchBySupport').removeClass('hidden');
							classie.add( morphSearchHeader, 'open' );
							classie.add( containerHeader, 'open' );
							classie.add( bodyHeader, 'modal-open' );
							if( navigator.userAgent.match(/iPhone|iPad|iPod/i) ) {
								setTimeout(function(){
									var viewportOffset = morphSearchHeader.getBoundingClientRect();
									var h = viewportOffset.top;
									window.scrollTo(0, h);
								}, 500);
							}
						}
						setTimeout(function() {
							isOpenHeader = !isOpenHeader;
						}, 300 );
					};

				// events
				ctrlCloseHeader.addEventListener( 'click', toggleSearchHeader );
				btnHeader.onclick = function(e) {
					if( !isOpenHeader ){
						toggleSearchHeader(e);
					}
				}

				// esc key closes search overlay
				// keyboard navigation events
				//inputHeader.focus().blur();
				document.addEventListener( 'keyup', function( e ) {
					var keyCode = e.keyCode || e.which;
					if( keyCode === 27 && isOpenHeader ) {
						toggleSearchHeader(e);
						inputHeader.blur();
					}
				} );

				//hide onclick outside modal
				document.addEventListener( 'click', function( e ) {
					if(e.target != document.getElementById('searchBar-header') && !$(e.target).parents('#searchBar-header').length) {
						$('.affix').css('height', 'none');
						if( isOpenHeader ){
							toggleSearchHeader(e);
						}
					}
				});

				//launch modal keyup
				inputHeader.onkeypress= function(e) {
					if( !isOpenHeader ){
						toggleSearchHeader(e);
					}
				}

				inputHeader.onclick= function(evt) {
					if( !isOpenHeader ){
						toggleSearchHeader(evt);
					}
				}

				//We do not want to send the form
				morphSearchHeader.querySelector( 'button[type="button"]' ).addEventListener( 'click', function(ev) { ev.preventDefault(); } );

			})(jQuery);
		});

	</script>
							</form>
						</div>
						<div class="container-fluid popopo noPadding">
							<div class="container">
								<div class="row">
									<ul class="nav navbar-nav navbar-univers">
										<li data-class="bricolage" class="bricolage "><a
											href="isolation1.html" data-gaevent="header"
											data-category="univers" data-action="click"
											data-trigger="click" data-label="Am�nagement int�rieur">Isolation</a>
										
										<li data-class="renovation" class="renovation "><a
											class="navbar-section-highlighted"
											href="/offre/renovation-salle-de-bain" data-gaevent="header"
											data-category="univers" data-action="click"
											data-trigger="click" data-label="Rénovation">Traitement des
												charpentes</a></li>
										<li data-class="peinture" class="peinture "><a
											href="/univers/peinture" data-gaevent="header"
											data-category="univers" data-action="click"
											data-trigger="click" data-label="Peinture, Murs &amp; Sols">
												Démoussage des toitures </a></li>

										<li data-class="electricite" class="electricite "><a
											href="/univers/electricite" data-gaevent="header"
											data-category="univers" data-action="click"
											data-trigger="click" data-label="Électricité &amp; Domotique">Électricité</a>
									
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</nav>
		</div>
	</div>









	<!-- end -->

	<div id="hc-pack-preview" data-is-authenticated="true">
		<h1 class="text-center hc-pack-title padding-bottom--m">
			Votre devis CasaFrance : «&nbsp;<span class="font-bold">Isolation des
				combles</span>&nbsp;»
		</h1>
		<!-- top container with sum up -->
		<div class="hc-pack-preview-container">
			<div class="hc-pack-price-container">
				<h4 class="hc-pack-price-title">budget total</h4>
				<p class="hc-pack-total-price">
            <?php
            if(!empty($_POST['surface'])){
            $surface = $_POST['surface'];
            $_SESSION['surface']=$surface;
            $budget = $surface * 39.90;
            $_SESSION['budget']=$budget;
            echo $_SESSION['budget'];
            }?>€
            <span class="hc-pack-total-price-taxes">ttc</span>
				</p>
				<div class="hidden hc-pack-total-price-raw" data-raw="423"></div>
				<p class="hc-pack-total-price-included">Comprenant</p>
				<p class="hc-pack-total-price-sub-category">
					Main-d'oeuvre : <span
						class="hc-pack-total-price-sub-category-amount"><?php
						if(!empty($_POST['surface'])){
    $maindoeuvre = $budget * 0.9;
    echo $maindoeuvre;}?> €</span>
				</p>


				<p class="hc-pack-total-price-sub-category">
					Déplacement : <span class="hc-pack-total-price-sub-category-amount"><?php
					if(!empty($_POST['surface'])){
    $deplacement = $budget * 0.1;
    echo $deplacement;}?>€</span>
				</p>
				<p class="hc-pack-total-price-sub-category margin-top--s">
					Durée des travaux : <span><?php
					if(!empty($_POST['surface'])){
                  $hours = $surface/5;
                  echo $hours;
					}
					?> heures</span>
				</p>
			</div>
			<div class="hc-pack-cta-container">
				<button
					class="hc-cta medium-normal-filled-dark hc-pack-main-cta button-finish-question hc-pack-add-to-cart-btn "
					style="opacity: 1;" >
					<i class="hellocasa-icon margin-right--s hc-shop-icon">shop</i>
					Ajouter au panier
				</button>
				<div style="display: none;"
					class="zero-price-msg-preview hc-pack-invalid-zip-container input-information-message">Vous
					n'avez aucune prestation sélectionnée.</div>

				<div class="hc-pack-intervention-date">
						
					<span> <img width="90%" src="30.jfif"><h3><span style="color:red"><?php echo $budget * 0.7; ?></span> au lieu de <strike><?php echo $budget;?></strike> si vous confirmez votre devis <span style="color:red">avant
					<script type="text/javascript"> 
 				 	d = new Date();
 				 	var m=d.getMinutes();
 				 	if (m<10) {m = "0" + m}
 				 	var heures = d.getHours();
 				 	var heures2= heures+2;
 				 	if (heures2<10) {heures2 = "0" + heures2}
  					document.write(heures2+':'+m); 
					</script> </span>
					</h3></span>
				</div>
			</div>
		</div>
		<!-- end -->




		<!-- check if there are excluded materials -->
		<!-- end -->






		<div class="hc-pack-preview-detail-bottom-container container">
			<div class="hc-pack-preview-section-header">
				<div class="col-xs-7 col-md-10 col-sm-9 padding--0">
					<h4 class="hc-pack-preview-section-header-title padding-bottom--s">Confirmer votre devis</h4>
					<span class="hc-pack-preview-section-header-subtitle">Payez un acompte de <h4>10%</h4> et accédez à notre calendrier pour choisir la date de démarrage des travaux</span>
				</div>
				<span class="hc-pack-preview-section-header-total-price"><?php echo $deplacement;?> €</span>
			</div>
		</div>
		<!-- endlisting -->