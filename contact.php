<?php 
	$notre_email = "neurotrucs@gmail.com";
	$objet = '';
	$visiteur = '';
	$email_visiteur = '';
	$message_visiteur = '';
	$mail_envoye = false;
	// if(isset($_POST))
	// {
	// 	$visiteur = $_POST['prenom']." ".$_POST['nom'];
	// 	$email_visiteur = $_POST['email'];
	// 	$objet = $_POST['objet'];
	// 	$message_visiteur= $_POST['message'];
	// 	$to  = $notre_email; 
	// 	$sujet = 'Formulaire contact neurotrucs:'. $objet;
	// 	$headers  = 'MIME-Version: 1.0' . "\r\n";
	// 	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	// 	$headers .= 'From: '.$visiteur.'<'.$email_visiteur.'>'. "\r\n";
	// 	if (mail($to, $sujet, $message_visiteur, $headers))
	// 	{
	// 		$mail_envoye = true;
	// 	}
	// }

?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Projet transmédia de vulgarisation scientifique">
	<meta name="author" content="Timothée Behra">
	<link rel="icon" href="img/favicon/apple-icon-180x180.png">
	<title>Neurotrucs</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/nt.css" rel="stylesheet">
</head>

<body>

	<?php include("snipets/header.php");?>
	

	<section class="page-section about-heading">
		<div class="container">
			<div class="about-heading-content">
				<div class="row">
					<div class="col-xl-9 col-lg-10 mx-auto mt-5">
						<div class="bg-faded rounded pt-3 pb-2 text-center">

							<p>
								Pour suivre toute l'actualité du projet, n'hésitez pas à visiter notre
								<a href="https://www.facebook.com/projetneurotrucs"> page facebook</a>.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="page-section about-heading">
		<div class="container">
			<div class="about-heading-content">
				<div class="row">
					<div class="col-xl-9 col-lg-10 mx-auto mt-3">
						<div class="bg-faded rounded p-3">
							<h2 class="section-heading">
								<span class="section-heading-lower">Formulaire de contact</span>
							</h2>
							<form method="POST" action="contact.php" id="form_contact">
								<div class="form-group">
									<label for="nom">Nom :</label>
									<input type="text" class="form-control" id="nom" placeholder="Nom">
								</div>
								<div class="form-group">
									<label for="prenom">Prénom :</label>
									<input type="text" class="form-control" id="prenom" placeholder="Prénom">
								</div>
								<div class="form-group">
									<label for="email">Email :</label>
									<input type="text" class="form-control" id="email" placeholder="Votre email">
								</div>
								<div class="form-group">
									<label for="objet">Objet :</label>
									<select name="object">
										<option value="renseignement">demande de renseignement</option>
										<option value="financement">financement</option>
										<option value="production">production</option>
										<option value="autre">autre</option>
									</select>
								</div>
								<div class="form-group">
									<label for="message">Message :</label>
									<textarea class="form-control" id="message" rows="10"></textarea>
								</div>

								<div class="text-center">
									<button type="button" class="btn btn-default" id="bouton-form">Envoyer</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="modal fade" id="mail_incorrect" tabindex="-1" role="dialog" aria-labelledby="mail_incorrect_lbl">
			<div class="modal-dialog" role="dialog">
				<div class="modal-content">
					<div class="modal-header">

						<h4 class="modal-title" id="mail_incorrect_lbl">L'email entré est incorrect, merci de le corriger</h4>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" id="ok">D'accord</button>
					</div>
				</div>
			</div>
		</div>

		<?php include("snipets/footer.php");?>

		<!-- Bootstrap core JavaScript -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/contact.js"></script>
	</body>

	</html>
