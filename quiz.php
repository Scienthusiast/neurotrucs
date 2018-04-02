<?php 
include("conn.php");

$quiz_done = false;

if($_POST)
{
  // return (json_encode($_POST));
	if(isset($_POST['answers']))
	{
		$ans = explode(",", $_POST['answers']);
		if(count($ans) == 15)
		{
			$quiz_done = true;
			for ($i = 0; $i <= 14; $i++) 
			{
			    if ($ans[$i] > 7 OR $ans[$i] < 0) //should be 1
			    {
			    	$quiz_done = false;
			    }
			}
		}
		if ($quiz_done)
		{

			$req = $bdd->prepare('INSERT INTO neurotrucs_quiz VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)');
			$req->execute(array(
				$_POST['email'],
				$ans[0],
				$ans[1],
				$ans[2],
				$ans[3],
				$ans[4],
				$ans[5],
				$ans[6],
				$ans[7],
				$ans[8],
				$ans[9],
				$ans[10],
				$ans[11],
				$ans[12],
				$ans[13],
				$ans[14]
				));
		}	
	}
}


	// $req_SQL = "INSERT INTO ''neurotrucs_quiz''.''neurotrucs_quiz'' VALUES ('', $tab[0], $tab[1], $tab[2], $tab[3], $tab[4], $tab[5], $tab[6], $tab[7], $tab[8], $tab[9], $tab[10], $tab[11], $tab[12], $tab[13], $tab[14], '')";

	// 		}
	// 		else
	// 		{
	// 			$req_SQL = "INSERT INTO ''cestpaschwordp''.''neurotrucs_quiz'' VALUES ('', $tab[0], $tab[1], $tab[2], $tab[3], $tab[4], $tab[5], $tab[6], $tab[7], $tab[8], $tab[9], $tab[10], $tab[11], $tab[12], $tab[13], $tab[14], '')";
	// 		}
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

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" /> -->
	<link href="css/quiz.css" rel="stylesheet">
	<link href="css/nt.css" rel="stylesheet">

</head>

<body>

	<?php include("snipets/header.php");?>


	<section class="page-section about-heading">
		<div class="container">
			<div class="about-heading-content">
				<div class="row">
					<div class="col-xl-9 col-lg-10 mx-auto mt-3">
						<div class="bg-faded rounded p-5">
							<h2 class="section-heading mb-4">
								<span class="section-heading-lower">Neuroquiz</span>
							</h2>
							<div> <!-- juste pour debug-->
								<?php 
								if($quiz_done)
								{
									echo ($_POST['answers']);
									if($result)
									{
										echo "<br/>Inclus dans la base de données";
									}
								}

								?>
							</div> <!-- findebug -->
							<p class="mb-0">
								Les mystères entourant le fonctionnement du cerveau produisent de nombreux fantasmes. Souvent par sensationnalisme, un grand nombre d'idées fausses sur le cerveau circulent, mais il est également vrai que le cerveau est capable de certaines choses qui peuvent sembler tout à fait extraordinaires !<br/><br/>

								<div class="text-center">
									<em>Saurez-vous reconnaître le vrai du faux ?</em></p>

									<a href="#quiz-core" class="btn btn-lg btn-secondary" id="btn-quiz">Démarrer le quiz</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="container" id="quiz-core">
				<div class="row">
					<div class="col-xl-9 col-lg-10 mt-3 mx-auto">
						<div class="bg-faded rounded p-5">

							<div class="text-center">
								<p id="phrase_num_question">Affirmation <span id="num_question">1</span> sur 15</p>
							</div>

							<div>
								<div class="questionnaire" id="q1">
									La plupart des gens lisent à une vitesse d'environ 300 mots par minute. Certaines personnes peuvent lire 2000 mots par minute sans endommager leur compréhension.
								</div>
								<div class="questionnaire" id="q2">
									Certaines personnes arrivent à apprendre par cœur une suite de 1000 chiffres (aléatoires) en moins d'une heure et à les rappeler dans l'ordre sans erreur.
								</div>
								<div class="questionnaire" id="q3">
									Écouter de la musique, en particulier du Mozart, rend plus intelligent.
								</div>
								<div class="questionnaire" id="q4">
									On peut vendre plus de Coca-Cola® au cinéma si on montre des bouteilles de Coca-Cola® de manière subliminale pendant un film.
								</div>
								<div class="questionnaire" id="q5">
									Le cerveau gauche est plutôt rationnel, le cerveau droit est plutôt créatif.
								</div>
								<div class="questionnaire" id="q6">
									On peut vivre avec le cerveau coupé en deux. 
								</div>
								<div class="questionnaire" id="q7">
									Certaines personnes peuvent augmenter leur température corporelle par l'imagination.
								</div>
								<div class="questionnaire" id="q8">
									Avec l'IRMf (Imagerie par Résonnance Magnétique fonctionnelle) utilisée pour mesurer l'activité cérébrale, on peut «lire dans les pensées», et voir clairement ce que les gens imaginent.
								</div>
								<div class="questionnaire" id="q9">
									Certaines personnes ne voient pas, mais ne se rendent pas compte qu'elles ne voient rien.
								</div>
								<div class="questionnaire" id="q10">
									On pourrait grandement augmenter l'efficacité de l'enseignement en enseignant différemment aux enfants selon leur modalité sensorielle préférée (vision, audition, kinesthésie).
								</div>
								<div class="questionnaire" id="q11">
									Grâce à la plasticité cérébrale, on pourra bientôt récupérer toutes les fonctions perdues lors d'un AVC (Accident Vasculaire Cérébral).
								</div>
								<div class="questionnaire" id="q12">
									On peut implanter des faux souvenirs.
								</div>
								<div class="questionnaire" id="q13">
									Le cerveau des femmes peut faire plusieurs choses à la fois, et pas celui des hommes.
								</div>
								<div class="questionnaire" id="q14">
									La dopamine est à l'origine de la sensation de bonheur.
								</div>
								<div class="questionnaire" id="q15">
									Lire un roman modifie le cerveau. 
								</div>
							</div>
							<div class="text-center">
								<p><em>Que pensez-vous de cette affirmation ?</em></p>
							</div>



							<div id="likert" class="col-md-12">

								<!-- <a href="#" class="btn btn-lg btn-secondary likert-ans" id="likert1">Je suis convaincu <br>que c'est vrai</a>-->
								<button class="likert-ans" id="likert1" >Je suis convaincu que c'est vrai</button> 
								<button class="likert-ans" id="likert2" >Je pense que c'est vrai</button>
								<button class="likert-ans" id="likert3" >Ça a plus de chances d'être vrai que faux</button>
								<button class="likert-ans" id="likert4" >Aussi probable que ce soit vrai que faux</button>
								<button class="likert-ans" id="likert5" >Ça a plus de chances d'être faux que vrai</button>
								<button class="likert-ans" id="likert6" >Je pense que c'est faux</button>
								<button class="likert-ans" id="likert7" >Je suis convaincu que c'est faux</button>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="page-section about-heading">
			<div class="container d-flex justify-content-center">
				<div class="about-heading-content">
					<div class="row">
						<div class="mx-auto mt-3">       
							<img class="img-fluid rounded about-heading-img mt-1 mb-lg-0" src="img/quiz.jpg" width="480">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<form id="form_quiz" method="post" action="quiz.php">
		<input type="hidden" id="ans_quiz" name="answers" value="">
		<input type="hidden" id="email_quiz" name="email" value="">
	</form>


	<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

<div class="modal fade" id="email_confirm" tabindex="-1" role="dialog" aria-labelledby="email_confirm_label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="email_confirm_label">Quiz terminé ! Entrez votre adresse email pour voir les résultats</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="email-text" class="control-label">Email :</label>
            <input type="text" class="form-control" id="email-text">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" id="email-validation">Valider</button>
      </div>
    </div>
  </div>
</div>



	<?php include("snipets/footer.php");?>

	<!-- Bootstrap core JavaScript -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>


	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/js/bootstrap-dialog.min.js"></script> -->
	<script src="js/quiz.js"></script>
</body>

</html>
