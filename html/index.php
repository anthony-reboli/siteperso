<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<?php
		include('../include/head.php');
	?>
</head>
<body>
	<header>
	<?php
		include('../include/barnav.php');
	?>
	</header>
		<main>
			<div class="contain">
				<h1>Présentation personel</h1>
				<section id="section_personel">
					
						<div id="photomoi">
							<img  width="300px" height="300px" src="../upload/moi.jpg">
						</div>
						<br>
					<section id="section_content_para1">
						
					
						<div id="presentationperso">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>

						<div id="presentationcompétence">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</section>
						<div id="cv">
							<a href="../upload/cv.PNG" download="Anthony.reboli_CV.jpg"><button type="button" class="btn btn-primary btn-lg active">Télécharger mon CV</button></a>
							<br>

							<a href="../upload/motivation.pdf" download="Anthony.reboli_LettreMotivation.pdf"><button type="button" class="btn btn-primary btn-lg active">Télécharger ma lettre de motivation</button></a>
							<br>
						</div>
						<div id="bas1">
							<a href="#section_projets"><img src="../upload/bas.png" height="50px" width="50px"></a>
						</div>
				</section>

				<section id="section_projets">
					<h1>Présentation projets</h1>

					<div id="card_projets">
						<?php
						 include('../include/slide_projets.php');
						?>
					</div>
				</section>

				<section id="section_contact">
					<h1>Contact</h1>
				</section>
			</div>
		
		</main>
</body>
</html>