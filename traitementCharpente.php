<?php
session_start();
$budget = "";
$_SESSION['jourdetravail'] = "1";

if (isset($_SESSION['surface'])) {
    $surface = $_SESSION['surface'];
    if ($_SESSION['surface'] > 100 && $_SESSION['surface'] < 200) {
        $_SESSION['jourdetravail'] = "2";
    } elseif ($_SESSION['surface'] >= 200 && $_SESSION['surface'] < 400) {
        $_SESSION['jourdetravail'] = "3";
    } elseif ($_SESSION['surface'] >= 400)
        $_SESSION['jourdetravail'] = "Un conseiller va vous contacter, veuillez créer votre compte";

    if ($_SESSION['fermette'] == "N") {
        $budget = $surface *29.90;
        $_SESSION['budget'] = $budget;
    } else {
        $budget = $surface * 9.90;
        $_SESSION['budget'] = $budget;
    }
}
?>
<!DOCTYPE HTML>
<html lang="fr">
<head>
    <!-- SCRIPT STYLE -->
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
    <link id="switcher" href="css/theme-color/red-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">   
    <link rel="stylesheet" href="css/isolationCombles.css" />     
    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
<!-- ajouter crisp -->

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f9e25ccf-1d7f-4254-8d51-28c54f7ae099";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

  </head>
  <body>   

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
                  <p><span class="fa fa-phone"></span><b>0 806 07 95 21 appel gratuit</b></p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                 
                  <li class="hidden-xs"><a href="wishlist.php">Mes Devis</a></li>
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
<!--                 <a href="index.html"> -->
<!--                   <span class="fa fa-shopping-cart"></span> -->
<!--                   <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p> -->
<!--                 </a> -->
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
                        <h4><a href="#">traitement de charpente</a></h4>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                       
                     </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
					  
			
        
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="#">Paiement sécurisé</a>
                 </div>
               </div>
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
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
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
              <li><a href="#">façade</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div> 
      </div>
  </section>
  <!-- / menu -->  

        <div class="textIsolationComble">POURQUOI PROTÉGER SA CHARPENTE DES INSECTES XYLOPHAGES ?
        </div>
        <div class="textdetails">
        
Le bois est un matériau naturel, vivant et d’une grande longévité s’il est correctement entretenu. Il existe différentes essences de bois :

Les « Feuillus »  : le chêne / le châtaignier
Les « résineux » : le pin maritime / le sapin
Les charpentes subissent les attaques de plusieurs variétés de parasites (champignons, insectes, larves…). Les plus répandus et les plus nocifs sont des insectes xylophages appelés aussi capricornes. Ils détruisent les charpentes petit à petit tout au long de leur cycle de vie qui se déroule entièrement à l’intérieur du bois. Pour bien les combattre, il est important de bien les connaître.
<iframe  src="img/insecte.jpeg" frameborder="0"  allowfullscreen autoplay="false" ></iframe>
							<a  href="isolationComblesDevis.php" > 
                                     <div class="col-lg-3 col-md-4 col-sm-3 col-xs-6">
                        <div class="block-picto picto-form picto-hover" data-form-target="category_id" data-form-value="1230">
                            <div class="textIsolation"><b>Devis en ligne</b></div>
                            <div class="pictoIsolationComble" >
                                <img src="img/picto_isolation-combles.png" style="width:100%;" class="isolation"/>
                            </div>
                        </div>
                    </div></a>


</div>


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
            <p>Copyright 2019 | CasaFrance</p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
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
          <form class="aa-login-form" action="">
            <label for="">Email<span>*</span></label>
            <input type="text" placeholder="Email">
            <label for="">Mot de passe<span>*</span></label>
            <input type="password" placeholder="Mot de passe">
            <button class="aa-browse-btn" type="submit">Valider</button>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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