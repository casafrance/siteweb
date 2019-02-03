<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>Casa France</title>
<meta name="description" content="Rénovation d’appartement et maison : vos travaux facilement avec Hellocasa" />
<meta name="keywords" content="travaux, bricolage, devis travaux, rénovation, plomberie, électricité, peinture, prix, tarifs, devis, garantie">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="https://hellocasa.fr/">
<meta name="twitter:title" content="hellocasa.fr">
<meta name="twitter:description" content="Rénovation d’appartement et maison : vos travaux facilement avec Hellocasa">
<meta name="twitter:creator" content="@hellocasafr">
<meta name="twitter:image" content="logo.png" />
<meta name="p:domain_verify" content="3f9bd05a845ab35d3f30406e1d7f8312" />

<link rel="alternate" href="https://hellocasa.fr/" hreflang="fr-fr" />
<link rel="stylesheet" type="text/css" href="https://cdn.hellocasa.fr/hellocasa/bundles/bmatznerfontawesome/css/font-awesome.min.css?v=1547221926"/>
<link rel="stylesheet" href="https://cdn.hellocasa.fr/hellocasa/css/style.css?v=1547221926" media="screen" type="text/css"/>
<link rel="stylesheet" href="https://cdn.hellocasa.fr/hellocasa/css/homepage.css?v=1547221926" media="screen" type="text/css"/>

<link href='https://plus.google.com/100637584327411911215' rel='publisher'>
<link href='/images/layouts/principal/favicon.ico' rel='shortcut icon' type='image/x-icon'>
<!--[if IE]> <link rel="icon" type="image/vnd.microsoft.icon" href="/images/layouts/principal/favicon.ico" /> <![endif]-->
<link href='http://feeds.feedburner.com/QuelleEnergie' rel='alternate' title='Demander un devis gratuit' type='application/rss+xml'>
<!--[if IE]><link rel="stylesheet" media="screen" href="//static3.quelleenergie.net/assets/front_v3_bootstrap-15cccb4809f1b3470a3060e0149ed0c1.css" /><link rel="stylesheet" media="screen" href="//static2.quelleenergie.net/assets/front_v3_lib-839a01adc0c18a06cafbe23ffce24144.css" /><link rel="stylesheet" media="screen" href="//static2.quelleenergie.net/assets/front_v3_partials-3eb8ee9879caa261f971a5b8c9b2ed68.css" /><![endif]--><!--[if !IE]><!--><link rel="stylesheet" media="screen" href="//static2.quelleenergie.net/assets/front_v3-e121fac2c9ce94e88b969650ce1cbc31.css" /><!--<![endif]-->
<link rel="stylesheet" media="screen" href="//static0.quelleenergie.net/stylesheets/jquery-ui.custom.css" />
<style>
  #existing-user input#password {
    float: left;
    margin-right: 10px; }
  #existing-user small {
    line-height:22px;
    font-size:90%; }
</style>

<script src="//static1.quelleenergie.net/assets/jquery-2.0.3.min-46e729f0b1f1d159ee810e7eb901e1de.js"></script>
<script src="//static2.quelleenergie.net/assets/front_v3-11e198a3c606ef673acaef7fbfc81f30.js"></script>

</head>
<body class='quote_requests_controller v3  ' onload=''>
<div class='simulator' id='quote-request-form'>
<!-- Header -->  <div class="navWrapper hellocasa-header">
    <div id="hcHeader" data-spy="affix" data-offset-top="117">
              <nav class="navbar navbar-default" style="background-color : #000080 !important">
        <div class="container">
          <div class="navBlock navBlockLogo">
              <div class="logoNav">
                  <div class="logo-container">
                                            <a href="index.html">
                                                      <img src="logo.png" width="200" height="70" alt="Commandez tous vos travaux du bricolage à la rénovation" class="mainLogo">
                                                  </a>
                                      </div>
              </div>
          </div>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div id="navbar" class="navbar-collapse collapse">
                      <div class="navBlock navBlockAccount">
                          <ul class="nav navbar-nav navbar-right navbarToolbar">
		<li class="dropdown custormer-serivce" data-gaevent="page" data-category="phone" data-action="click" data-trigger="click" data-label="show contact">
		<a href="contact.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="phoneBox">Contactez-nous</span></a>
		<ul class="dropdown-menu dropdown-contact new-charte" style="width:350px;">
			<li class="padding--m">
				<p class="margin--0 font-s">Besoin d'aide pour passer commande ? Une question ? Nous sommes là pour vous répondre !</p>
			</li>
			<li class="padding--m">
				<span class="font-s">Service client du lundi au vendredi de 8H à 19H30 et le samedi de 9H à 18H</span>
			</li>
			<li class="padding--m">
				<a class="maincolor-text default-link" href="/contact">Contactez-nous <i class="fa fa-arrow-right"></i></a>
			</li>
		</ul>
	</li>
				<li>
				<a class="login" href="inscription.php" data-toggle="modal" data-target="#login-modal">
					<span class="accountBox">
						<span>Mon compte</span>
					</span>
				</a>
			</li>
							<li class="itemShop">
				<a href="/checkout/cart" role="button" aria-haspopup="true" aria-expanded="false">
					<span class="shopBox">
						<i class="hellocasa-icon hidden-xs margin-right--m">shop</i>
						<span class="hidden-lg hidden-md hidden-sm margin-right--m">Panier</span>
						<span class="badge" style="background-color : #000080 !important">0</span>
					</span>
				</a>
			</li>
			</ul>
                        </div>
                                        <div class="navBlock navBlockSearch">
                                  <div class="navbar-form" role="search">
                    <div id="searchbar-header-content" class="pull-right new-charte">
	<div id="searchBar-header" class="suggest-holder">

		<span class="button button-close searchbar-close">
			<i class="hellocasa-icon">close</i>
		</span>

		<div class="search-zone">
			<div class="input-group">
				<span class="input-group-button">
					<button class="search-button-header" type="button">
						<i class="hellocasa-icon">search</i>
					</button>
				</span>
					<input type="text" class="form-control hc-input search-input-header width-search-input-header" placeholder="Commencez à taper votre recherche">
			</div>
		</div>
		<div id="result-wrapper" class="padding--l container-form margin--0">
							<p class="margin-bottom--l title-result-wrapper">Explorer nos services</p>
				<div id="searchbar-default" class="searchbar-default row">
																								
	

																								
				<div class="clearfix"></div>
				</div>
				<div id="searchbar-result" class="searchbar-result row"></div>
			</div>
	</div>
</div>


                  </div>
                                </div>
                                                <div class="container-fluid popopo noPadding">
  <div class="container">
    <div class="row">
      <ul class="nav navbar-nav navbar-univers">
           <li data-class="bricolage" class="bricolage ">
            <a href="isolation1.html" data-gaevent="header" data-category="univers" data-action="click" data-trigger="click" data-label="Aménagement intérieur">Isolation</a>
        <li data-class="renovation" class="renovation ">
          <a class="navbar-section-highlighted" href="/offre/renovation-salle-de-bain" data-gaevent="header" data-category="univers" data-action="click" data-trigger="click" data-label="Rénovation">Traitement des charpentes</a>
        </li>
                  <li data-class="peinture" class="peinture ">
            <a href="/univers/peinture" data-gaevent="header" data-category="univers" data-action="click" data-trigger="click" data-label="Peinture, Murs &amp; Sols">
                Démoussage des toitures
              </a>
        </li>
 
                <li data-class="electricite" class="electricite ">
            <a href="/univers/electricite" data-gaevent="header" data-category="univers" data-action="click" data-trigger="click" data-label="Électricité &amp; Domotique">Électricité</a>

            </ul>
    </div>
  </div>
</div>
                                                    
          </div>
        </div>
      </nav>
    </div>
  </div>
<div class='short-header'>
<div class='top-page'>
<div class='container'>
<h1>
Devis gratuit et instantané en ligne
</h1>
</div>
</div>
</div>
<div class='container'>
<div class='row'>
<form class="new_accommodation" id="new_accommodation" action="isolation4devis.php" accept-charset="UTF-8" method="post">
<div class="big-title"><h3>Votre logement</h3><span></span></div><div class="form-line"><div class="title"><span><label for="accommodation_housing_type">Type de maison</label></span></div><div class="choice"><label class="item-choice item-choice-housing_type " data-value="house"><div class="picto-wrapper"><span class="icon-house"></span></div><span class="radio-button title">plain-pied</span><span class="icon-checked"></span><span><input type="radio" value="house" checked="checked" name="accommodation[housing_type]" id="accommodation_housing_type_house" /></span></label><label class="item-choice item-choice-housing_type " data-value="apartment"><div class="picto-wrapper"><span class="icon-apartment"></span></div><span class="radio-button title">à étage</span><span class="icon-checked"></span><span><input type="radio" value="apartment" name="accommodation[housing_type]" id="accommodation_housing_type_apartment" /></span></label></div></div>
<div class="form-line"><div class="title"><span><label for="accommodation_zip_code">Code postal du logement</label></span></div><div class="choice"><span><input size="20" placeholder="" value=""  type="text" name="codepostal" id="codepostal" required="required" /></span></div></div>
<div class="form-line"><div class="title"><span><label for="accommodation_surface_area">Surface au sol (m²)</label></span></div><div class="choice"><span><input type="number" class="form-text" placeholder="" name="surface" id="surface" required="required"/></span></div></div>


<div class="big-title"><h3>Votre situation</h3><span></span></div><div label="Nom / Prénom" class="form-line"><div class="title"><span><label for="accommodation_user_attributes_civilite">Nom / Prénom</label></span></div><div class="choice"><span><select class="civilite" data-width="auto" name="accommodation[user_attributes][civilite]" id="accommodation_user_attributes_civilite"><option value="">- Civilité -</option>
<option value="1">M.</option>
<option value="2">Mme</option>
<option value="3">Mlle</option></select></span>
<span><input size="20" style="margin-right: 20px;" class="form-text" placeholder="Nom" type="text" name="accommodation[user_attributes][nom]" id="accommodation_user_attributes_nom" required="required"/></span>
<span><input size="20" style="margin-right: 0;" class="form-text" placeholder="Prénom" type="text" name="accommodation[user_attributes][prenom]" id="accommodation_user_attributes_prenom" required="required"/></span>
</div><div class="info"></div></div><div class="form-line"><div class="title"><span><label for="accommodation_user_attributes_email">Email</label></span></div><div class="choice"><span><input data-remote="true" data-type="html" data-method="POST" data-url="/simulation/validate_email" type="email" name="accommodation[user_attributes][email]" id="accommodation_user_attributes_email" required="required"/></span>
<div id='email_message'></div>
</div><div class="info"></div></div><div class='password_wrapper'>
<div id='new-user'>
<div label="Choisissez votre mot de passe" class="form-line"><div class="title"><span><label for="accommodation_user_attributes_password">Choisissez votre mot de passe</label></span></div><div class="choice"><span><input size="21" class="single-pw-field form-text" placeholder="Mot de passe" type="password" name="accommodation[user_attributes][password]" id="accommodation_user_attributes_password" /></span><div class="inline-infos">Pour être valide, votre mot de passe doit comporter plus de 5 caractères.</div></div><div class="info"></div></div>
</div>
<div id="existing-user" label="Mot de passe" class="form-line"><div class="title"><span><label for="accommodation_user_attributes_password">Mot de passe</label></span></div><div class="choice"><input type="password" name="password" id="password" class="form-text single-pw-field" />
<small>
<a class="green_link" id="new_password" rel="nofollow" data-remote="true" data-type="html" data-method="POST" href="/simulation/new_password">Mot de passe oublié ?</a>
</small>
<div class='cb'></div>
<div id='password_message'></div>
</div><div class="info"></div></div></div>
<div class="form-line"><div class="title"><span><label for="accommodation_user_attributes_telephone_perso">Téléphone</label></span></div><div class="choice"><span><input no_inline_help="true" class="check_phone form-text" pattern="^0[1-9](?:\s?\d{2}){4}$" required="required" title="Le numéro doit être valide" autocomplete="off" data-remote="true" data-type="html" data-method="POST" data-url="/simulation/validate_phone" type="tel" placeholder="Téléphone" name="accommodation[user_attributes][telephone_perso]" id="accommodation_user_attributes_telephone_perso" /></span>
<div id='phone_message'></div>
</div><div class="info"></div></div><div id='region-modal-cgu'></div>
<div class="form-line"><div class="title"><span><label for="accommodation_heating_system_1_attributes_annual_invoice_known">Être rappelé par un conseiller ?</label></span></div><div class="choice"><label class="item-choice item-choice-annual_invoice_known tiny" data-value="true"><span class="radio-button title">Oui</span><span class="icon-checked"></span><span><input type="radio" value="true" name="accommodation[heating_system_1_attributes][annual_invoice_known]" id="accommodation_heating_system_1_attributes_annual_invoice_known_true" /></span></label><label class="item-choice item-choice-annual_invoice_known tiny" data-value="false"><span class="radio-button title">Non</span><span class="icon-checked"></span><span><input type="radio" value="false" checked="checked" name="accommodation[heating_system_1_attributes][annual_invoice_known]" id="accommodation_heating_system_1_attributes_annual_invoice_known_false" /></span></label></div></div>
<div class="form-button"><input type="submit" name="commit" value="Obtenir mon devis" class="btn btn-simulator" /></div></form>
</body>
</html>
