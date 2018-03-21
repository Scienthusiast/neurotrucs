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

  <!-- Custom styles for this template -->
  <link href="css/neurotrucs.css" rel="stylesheet">
  <link href="css/quiz.css" rel="stylesheet">
</head>

<body class="text-center">

  <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <?php include("snipets/header.php");?>


    <div class="row">

      <div class="col-md-12">
        <main role="main">

          <div id="intro-quiz">
            <h1 class="cover-heading">QUIZ</h1>
            <p class="lead">Les mystères entourant le fonctionnement du cerveau produisent de nombreux fantasmes. Souvent par sensationnalisme, un grand nombre d'idées fausses sur le cerveau circulent, mais il est également vrai que le cerveau est capable de certaines choses qui peuvent sembler tout à fait extraordinaires !<br/><br/>

             <em>Saurez-vous reconnaître le vrai du faux ?</em></p>
             <a href="#" class="btn btn-lg btn-secondary" id="btn-quiz">Démarrer le quiz</a>
           </p>
         </div>


       </main>
     </div>
   </div>




   <div id="quiz-core">
    <p id="phrase_num_question">Question <span id="num_question">1</span> sur 15</p>
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


 <p>Que pensez-vous de cette affirmation ?</p>




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


<!--
   <div class="row">
     <div class="col-md-2">
      <button id="likert1" >Je suis convaincu que c'est vrai</button>
    </div>
    <div class="col-md-1">
      <button id="likert2" >Je pense que c'est vrai</button>
    </div>
    <div class="col-md-1">
      <button id="likert3" >Ça a plus de chances d'être vrai que faux</button>
    </div>
    <div class="col-md-2">
      <button id="likert4" >Aussi probable que ce soit vrai que faux</button>
    </div>
    <div class="col-md-1">
      <button id="likert5" >Ça a plus de chances d'être faux que vrai</button>
    </div>
    <div class="col-md-1">
      <button id="likert6" >Je pense que c'est faux</button>
    </div>
    <div class="col-md-2">
      <button id="likert7" >Je suis convaincu que c'est faux</button>
    </div>
  </div>

 
            <table>
              <tr>
                <td class="col-md-1">
                  <button id="likert1">
                </td>
                <td class="col-md-1">
                  <button id="likert2">
                </td>
                <td class="col-md-1">
                  <button id="likert3"> 
                </td>
                <td class="col-md-1">
                  <button id="likert4">
                </td>
                <td class="col-md-1">
                  <button id="likert5">
                </td>
                <td class="col-md-1">
                  <button id="likert6">
                </td>
                <td class="col-md-1">
                  <button id="likert7">
                </td>
              </tr>

              
              <tr>
                <td class="col-md-1">
                  Je suis convaincu que c'est vrai
                </td>
                <td class="col-md-1"></td>
                <td class="col-md-1"></td>
                <td class="col-md-1">
                  Aussi probable que ce soit vrai que faux
                </td>
                <td class="col-md-1"></td>
                <td class="col-md-1"></td>
                <td class="col-md-1">
                  Je suis convaincu que c'est faux
                </td>
              </tr>

              
            </table>
          -->





        </div>


        <?php include("snipets/footer.php");?>



    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/quiz.js"></script>
    </body>
    </html>

