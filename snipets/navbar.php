<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav mx-auto">
				<li <?php if(basename($_SERVER['REQUEST_URI'])=='index.php'){echo 'class="active ';} else{echo 'class="';}?>nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="index.php">Accueil</a>
				</li>
				<li <?php if(basename($_SERVER['REQUEST_URI'])=='serie.php'){echo 'class="active ';} else{echo 'class="';}?>nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="serie.php">La série</a>
				</li>
				<li <?php if(basename($_SERVER['REQUEST_URI'])=='ecriture.php'){echo 'class="active ';} else{echo 'class="';}?>nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="ecriture.php">Écriture</a>
				</li>
				<li <?php if(basename($_SERVER['REQUEST_URI'])=='dossiers.php'){echo 'class="active ';} else{echo 'class="';}?>nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="dossiers.php">Neurotrucs en +</a>
				</li>
				<li <?php if(basename($_SERVER['REQUEST_URI'])=='contact.php'){echo 'class="active ';} else{echo 'class="';}?>nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
				</li>
				<li <?php if(basename($_SERVER['REQUEST_URI'])=='quiz.php'){echo 'class="active ';} else{echo 'class="';}?>nav-item px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="quiz.php">Neuroquiz</a>
				</li>
			</ul>
		</div>
	</div>
</nav>



<!-- <li class="nav-item active px-lg-4"> -->
<!-- <span class="sr-only">(current)</span> -->
