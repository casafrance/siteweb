 <!-- Modal login -->
<div class="modal" data-easein="fadeInDown" data-easeout="fadeoutDown" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="display-table">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
				</div>
				<div class="modal-body">
					<div id="login-form" class="user-form-container">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12 text-center">
									<div class="logo-container">
		                    			
		                          				<img src="https://cdn.hellocasa.fr/hellocasa/bundles/partner/hellocasa/images/logo.svg?v=1547221926" width="200" height="70" alt="Commandez tous vos travaux du bricolage à la rénovation" class="mainLogo">

		                    					                  			</div>
									<p>Connectez-vous à l’aide de votre email et mot de passe</p>
								</div>
								<div class="col-md-12">
									<form class="user-form" role="form" action="/login" method="post">
										<div class="form-group">
											<input type="email" name="_username" id="mail" class="form-control" placeholder="Email" required autofocus />
											<i class="fa fa-envelope"></i>
										</div>
										<div class="form-group">
											<input type="password" name="_password" id="password" class="form-control" placeholder="Mot de passe" required/>
											<i class="fa fa-lock"></i>
										</div>
										<div class="form-group text-right">
											<a href="/forgot" id="forgot">Mot de passe oublié ?</a>
										</div>
										<input type="hidden" name="_csrf_token" value="6VIW5ZoDhTeITI65eMeTQOmATrgXDi7sMk2SwSqEsRI">
										
										<div class="form-group btnLogin">
											<button class="button button-primary width-100" type="submit" id="buttonLogin">
												Connexion
											</button>
										</div>
										<div class="form-group text-center" id="registerLink">
											<span>Pas de compte ?<a href="/signup"> Inscrivez-vous !</a></span>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>