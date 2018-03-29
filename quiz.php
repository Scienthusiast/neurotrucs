
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



<?php include("snipets/footer.php");?>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/quiz.js"></script>

</body>

</html>
