<?php 
include_once 'Bmanager.php';
if(isset($_POST['submit'])){

	extract($_POST);
	$rep=  new Connection('localhost', 'casabdd', 'utf8', 'root', '');
    $answer=$rep->dbconnect();
	$user = new Bmanager($answer);
	$user->addUser($nom, $prenom, $email, $tel, $password);
	header("Location:logincasa.php");
}

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="fr" is_ie6 lt_ie7 lt_ie8 lt_ie9 lt_ie10 isIE"><![endif]-->
<!--[if IE 7 ]><html lang="fr" is_ie7 lt_ie8 lt_ie9 lt_ie10 isIE"><![endif]-->
<!--[if IE 8 ]><html lang="fr" is_ie8 lt_ie9 lt_ie10 isIE"><![endif]-->
<!--[if IE 9 ]><html lang="fr" is_ie9 lt_ie10 isIE"><![endif]-->
<!--[if gt IE 9]><html lang="fr" is_ie10 is_ie11 isIE"><![endif]-->
<!--[if !IE]><!--><html lang=fr><!--<![endif]-->
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
	<title>Inscription </title>
<meta name="description" content="Services à domicile, services à la personne et petits travaux en trois clics" />
<meta itemprop="name" content="Inscription | hellocasa.fr">
<meta itemprop="description" content="Services à domicile, services à la personne et petits travaux en trois clics">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="https://hellocasa.fr/signup">
<meta name="twitter:title" content="Inscription | hellocasa.fr">
<meta name="twitter:description" content="Services à domicile, services à la personne et petits travaux en trois clics">
<meta name="twitter:creator" content="@hellocasafr">
<meta name="twitter:image" content="https://cdn.hellocasa.fr/hellocasa/bundles/herculepage/images/hellocasa-twitter.png?v=1547221926" />
<meta name="p:domain_verify" content="3f9bd05a845ab35d3f30406e1d7f8312" />

<meta property="og:title" content="Inscription | hellocasa.fr" />
<meta property="og:url" content="https://hellocasa.fr/signup" />
<meta property="og:description" content="Services à domicile, services à la personne et petits travaux en trois clics" />
<meta property="og:site_name" content="hellocasa.fr" />
<meta property="og:image" content="https://cdn.hellocasa.fr/hellocasa/bundles/herculepage/images/hellocasa-facebook.png?v=1547221926" />

<!-- Head -->
<link rel="author" href="https://plus.google.com/110655365172842681966">
<link rel="publisher" href="https://plus.google.com/110655365172842681966">
<link rel="icon" type="image/png" href="logo.png" />

<!-- Icons for Mobile Devices -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://cdn.hellocasa.fr/hellocasa/bundles/herculepage/images/touch-icon/touch-icon-retina.png?v=1547221926" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://cdn.hellocasa.fr/hellocasa/bundles/herculepage/images/touch-icon/touch-icon-ipad.png?v=1547221926" />
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://cdn.hellocasa.fr/hellocasa/bundles/herculepage/images/touch-icon/touch-icon.png?v=1547221926" />
<link rel="icon" sizes="114x114" href="https://cdn.hellocasa.fr/hellocasa/bundles/herculepage/images/touch-icon/touch-icon-retina.png?v=1547221926" />

<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#3499a4">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#3499a4">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#3499a4">

<!-- Canonical -->
				<link rel="canonical" href="https://hellocasa.fr/signup" />

<!-- !Head -->
<!--[if lt IE 9]>
    <script type="text/javascript"
        src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
    </script>
<![endif]-->


<link rel="alternate" href="https://hellocasa.fr/signup" hreflang="fr-fr" />
<link rel="stylesheet" type="text/css" href="https://cdn.hellocasa.fr/hellocasa/bundles/bmatznerfontawesome/css/font-awesome.min.css?v=1547221926"/>
<link rel="stylesheet" href="https://cdn.hellocasa.fr/hellocasa/css/style.css?v=1547221926" media="screen" type="text/css"/>


    
            <link rel="stylesheet" href="https://cdn.hellocasa.fr/hellocasa/css/9931353.css?v=1547221926">
    
</head>
<body data-route="register" style="background-color : #fff !important">
<!-- Header --><!-- !Header --><div id="blurred-background"></div><div id="register-form" class="user-form-container"><div class="container"><div class="form-content"><div class="logo-container"><a href="/"><img src="logo.png" width="200" height="70" alt="Commandez tous vos travaux du bricolage à la rénovation" class="mainLogo"></a></div><h2>Créer votre compte, et bénéficier de nos services en ligne devis par email au format pdf, gestion de l'historique, paiement en ligne</h2><div>


<form class="user-form" method="post" action="inscription.php">
<input type="hidden" id="RegisterType__token" name="RegisterType[_token]" value="sRCoV_sS7Hp0xchYl5Vn4jFUml1RYAmljnSk-Kq5-sE" /><div class="form-group">
<input type="email" id="RegisterType_email" name="email" required="required" class="form-control" placeholder="Email" /><i class="fa fa-envelope"></i></div><div class="form-group">
<input type="number" id="RegisterType_email" name="tel" required="required" class="form-control" placeholder="Tel" /><i class="fa fa-envelope"></i></div><div class="form-group">
<input type="password" id="RegisterType_clearPassword" name="password" required="required" class="form-control" placeholder="Mot de passe" /><i class="fa fa-lock"></i><div id="RegisterType_clearPasswordStrength" class="password-strength"><meter max="4" id="RegisterType_clearPasswordStrengthMeter" class="password-strength-meter"></meter><span id="RegisterType_clearPasswordStrengthText" class="password-strength-text"></span></div><div id="RegisterType_clearPasswordHelper" class="password-helper">
    Le mot de passe doit contenir au moins 8 caractères dont une minuscule, une majuscule et un chiffre
</div><script defer>
    var messages = [
            'Mot de passe invalide',
            'Mot de passe vulnérable',
            'Mot de passe faible',
            'Mot de passe moyen',
            'Mot de passe fort'
        ],
        password = document.getElementById('RegisterType_clearPassword'),
        strength = document.getElementById('RegisterType_clearPasswordStrength'),
        meter = document.getElementById('RegisterType_clearPasswordStrengthMeter'),
        text = document.getElementById('RegisterType_clearPasswordStrengthText');
        helper = document.getElementById('RegisterType_clearPasswordHelper');

    password.addEventListener('input', function() {
        var result = zxcvbn(password.value),
            score = result.score,
            validity = password.value.length >= 8 && password.value.match(/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])/);

        meter.value = score;
        text.innerHTML = messages[score];
        strength.style.display = password.value && validity ? 'block' : 'none';
        helper.style.display = password.value && !validity ? 'block' : 'none';
    });
</script></div><div class="form-group">
<input type="text" id="RegisterType_firstName" name="prenom" required="required" class="form-control" placeholder="Prénom" /><i class="fa fa-user"></i></div><div class="form-group">
<input type="text" id="RegisterType_lastName" name="nom" required="required" class="form-control" placeholder="Nom" /><i class="fa fa-user"></i></div><div class="form-group"><select id="RegisterType_gender" name="RegisterType[gender]" class="form-control"><option value="">Civilité</option><option value="0">M.</option><option value="1">Mme</option></select><i class="fa fa-user"></i></div>
<input type="hidden" id="RegisterType_origin" name="RegisterType[origin]" value="SITE" /><div class="checkbox"><label for="RegisterType_cguAccepted"><input type="checkbox" id="RegisterType_cguAccepted" name="RegisterType[cguAccepted]" required="required" class="checkbox" value="1" /><a target="_blank" href="/page/terms">J'accepte les conditions générales</a></label></div><div class="form-group btnLogin">
<input type="submit" class="button button-primary width-100" style="background-color : #000080 !important" id="buttonRegister" value ="Je m'inscris" name="submit"></input></div></form>
</div></div></div></div>









<!-- Footer --><div class="md-overlay"></div><div id="simpleModal"><i class="zmdi zmdi-plaster"></i><p>Votre navigateur est un peu trop vieux ;-( Pour vous garantir une expérience optimale sur note site, nous vous conseillons de le mettre à jour.</p><a class="btn btn-default btn-old" href="https://whatbrowser.org/" rel="nofollow" target="_blank">Mettre a jour</a><a id="fancybox-closeOld" style="display: inline;"></a></div><script>
var g_partner = 'hellocasa whitelabel';
var g_support = 'whitelabel';
var algolia_app_id = 'LOHR4YUVVF';
var algolia_search_key = '97da92c82c8048f0614c588d9960214b';
var algolia_index_offers = 'Offer_prod';
var g_cdnUrl = 'https://cdn.hellocasa.fr/hellocasa';
var g_reference_support = 'hellocasa_catalog';
var g_is_manage = false;
var dataLayer = window.dataLayer || [];
var g_portalId = '3808276';
var g_formId = '663c55c5-bc79-438d-8be7-e7f93a712db7';

var g_userInfo = { id: 'a7e84439a7a9d99ccb4b23d26d0055e7',
  name: 'Vous',
  email: '',
  support: g_partner, role: '-', uid: '-',
  path: ''
};
var g_logoPath = 'https://cdn.hellocasa.fr/hellocasa/bundles/partner/hellocasa/images/drawable-xxxhdpi-icon.png?v=1547221926';
var g_websitename = 'hellocasa.fr';
</script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script><script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDixEdOItjFSTCe4na_ZpMuB-_PrQULvmc&sensor=false&libraries=places"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/algoliasearch/3.30.0/algoliasearch.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/fr.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/3.1.1/jquery.bootstrap-touchspin.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/locales/bootstrap-datepicker.fr.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><!--[if lte IE 8]><script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script><![endif]--><script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script><!-- SCRIPT POUR IE 9 WITHOUT defer --><script src="https://cdn.hellocasa.fr/hellocasa/bundles/fosjsrouting/js/router.min.js?v=1547221926"></script><script src="https://cdn.hellocasa.fr/hellocasa/js/9494a4e.js?v=1547221926"></script><!-- END SCRIPT POUR IE 9 --><script src="https://cdn.hellocasa.fr/hellocasa/js/main.js?v=1547221926" defer></script><script defer>
  $('.navbar-univers li').mouseover(function() {
    $('.item-' + $(this).attr('data-class')).css('display', 'block');
    $('.' + $(this).attr('data-class')).addClass('hoverUnivers');
  }).mouseout(function() {
    $('.navbar-univers li').removeClass('hoverUnivers');
    $('.mega-menu').css('display', 'none');
  });
  $('.mega-menu').mouseout(function() {
    $('.navbar-univers li').removeClass('hoverUnivers');
    $(this).css('display', 'none');
  }).mouseover(function() {
    $('.' + $(this).attr('data-class')).addClass('hoverUnivers');
    $('.item-' + $(this).attr('data-class')).css('display', 'block');
  });
  $('.autocompletionbox').select2();
</script>  
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NJTGQ3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer', 'GTM-NJTGQ3');</script>
<!-- End Google Tag Manager -->

<script type="text/javascript">
(function(a,e,c,f,g,b,d){var h={ak:"978985312",cl:"3DDlCJPsjGEQ4MLo0gM"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[f]||(a[f]=h.ak);b=e.createElement(g);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(g)[0];d.parentNode.insertBefore(b,d);a._googWcmGet=function(b,d,e){a[c](2,b,h,d,null,new Date,e)}})(window,document,"_googWcmImpl","_googWcmAk","script");
</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({google_ad_client: "ca-pub-2243039739185824",
    enable_page_level_ads: true
  });
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '329823100555114'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript>
  <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=329823100555114&ev=PageView&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->
<script src="https://cdn.hellocasa.fr/hellocasa/js/dfac802.js?v=1547221926" async></script></body>
</html>

