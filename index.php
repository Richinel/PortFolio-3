<?php 
	include('includes/header.php'); 
	include('includes/nav.php');
?>

	<div class="main_banner">
		<div class="wrapper">
			<img src="assets/images/rrj_white.png">

			<h1>Richinel Jarbandhan</h1>

				<hr>

			<h3>
				<a href="" class="typewrite" data-period="2000" data-type='[ "Webdeveloper", "Also a student", "Who happens to love football", "And fitness when there is some spare time"]'>
   					<span class="wrap"></span>
  				</a>
			</h3>
		</div>
	</div>

	<div class="info-1">
		<div class="wrapper">
			<i class="fa fa-university" aria-hidden="true"></i>

			<h2>Welcome</h2>

				<hr>

			<p>
				My name is <span>Richinel Jarbandhan</span> and I am a <span>23-year-old student</span>. At the moment I am following the course of <span>Application Developer</span> at <span>Albeda College in Rotterdam, the Netherlands.</span> I chose this course because I have been into computers pretty much my entire life. Since I was a child I was interested in computers and everything that had to do with them.
			</p>
		</div>
	</div>

	<div class="banner-2">
		<div class="wrapper">
			<img src="assets/images/rrj2.jpg">

			<h2>Why Programming?</h2>

			<hr>

			<p>
				It all began with repairing computers and laptops from friends and/or family. I always wanted to know how everything works and that is how I got most of my knowledge about computers. I always experimented and did a lot of research myself. This is also the reason that I chose a course that suited my interests well. After high school I enrolled for the course of “Assistant IT Worker”. During this course I also had a subject that was called “Webdesign”. In this subject you basically learn how to create simple websites and you learn the basics of HTML and CSS. At first I really did not like this subject, because I had never coded before. But the more I tried to understand it, the more fun and interesting it got for me. This is why I chose the course of Application Developer.
			</p>
		</div>
	</div>

	<div class="info-2">
		<div class="wrapper">
			<i class="fa fa-briefcase" aria-hidden="true"></i>

			<h2>Projects</h2>

				<hr>

				

			<div class="row gutters auto projects">
				<div class="col col-4 project_item">
					<h5>Encaasa Bewindvoering</h5>

					<span class="label outline success upper">Completed</span>

					<hr>

					<p>
						U hebt geprobeerd uw geldproblemen zelf op te lossen, maar u komt er niet meer uit. Als mensen er zelf niet meer uitkomen dan kunnen zij hulp krijgen van Encaasa Bewindvoering.
					</p>

					<a href="http://www.encaasabewindvoering.nl" target="_blank" class='button primary'>
						Launch website
					</a>
				</div>

				<div class="col col-4 project_item">
					<h5>Harmonie Slikkerveer</h5>

					<span class="label outline warning upper">Under construction</span>

					<hr>

					<p>
						Muziekvereniging "Harmonie" Slikkerveer is de oudste (muziek-)vereniging van Ridderkerk. Zij is opgericht op 15 juni 1892 en daarmee in 2017 al 125 jaar
					</p>

					<a href="http://www.test-rj.nl" target="_blank" class='button primary'>
						Live demo
					</a>
				</div>

				<div class="col col-4 project_item">
					<h5>Casa Vastgoed BV</h5>

					<span class="label outline warning upper">Under construction</span>

					<hr>

					<p>
						Casa-vastgoed is een dynamisch bedrijf met veel specialistische kennis in huis op het gebied van makelaardij in onroerend goed.
					</p>

					<a href="#" target="_blank" class='button primary outline disabled'>
						Coming soon!
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="contact">
		<div class="wrapper">
			<h3>
				Do you have any questions or suggestions, or do you just want to talk?
			</h3>

			<div class="button outline inverted form_btn">
				E-mail me!
			</div>

			<form class='c_form'>
				<input type="text" name="name" placeholder="Your name" required>

				<input type="email" name="mail" placeholder="Your e-mailadress" required>

				<input type="text" name="subject" placeholder="The subject of the matter.." required>

				<textarea name='msg' required>Your message..</textarea>

				<div class="row gutters auto">
					<div class="col col-4">
						<button type='submit' name='submit' class='submit_btn button inverted outline'>
							<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
							Send
						</button>
					</div>

					<div class="col col-4">
						<button type='reset' class='submit_btn button inverted outline'>
							<i class="fa fa-history" aria-hidden="true"></i>
							Reset fields
						</button>
					</div>

					<div class="col col-4">
						<div class='collapse_btn button inverted outline'>
							<i class="fa fa-arrow-up" aria-hidden="true"></i>
							Collapse
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

<?php include('includes/footer.php'); ?>