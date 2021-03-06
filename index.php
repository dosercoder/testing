<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet"
		href="assets\stylesheets\reset.css">
	<link type="text/css" rel="stylesheet"
		href="assets\stylesheets\responsive.css">
	<link type="text/css" rel="stylesheet"
		href="assets\stylesheets\layout.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Libre+Franklin:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>JS Languages | Translation and Subtitling Services </title>
</head>

<body>
	<header class="flex" id="page-header">
		<div class="logo-block flex" id="header-logo">
			<span class="logo">JS Languages</span>
			<span class="logo-subtext">Translation and subtitling services</span>
		</div>

		<nav id="header-nav">
			<ul class="nav-links">
				<li><a href="#work" class="nav-link">Work</a></li>
				<li><a href="#contact" class="nav-link">Contact</a></li>
				<li><a href="http://jslanguages.es" class="nav-link">Español</a></li>
			</ul>
		</nav>
	</header>

	<div id="container">
		<section class="vh-section flex" id="welcome">
			<header id="welcome-header">
				<h1>Spanish-English translation and subtitling services based in London, UK</h1>
			</header>
				<p><a href="#services">See services</a></p>
		</section>

		<section class="vh-section flex" id="services">
			<header id="services-header">
				<h2>Services</h2>

				<p>Quality range of language services provided:</p>
			</header>
			<div class="flex" id="services-wrapper">
				<article class="services-col flex">
					<header class="services-col-header">
						<h3>Spanish-English translation</h3>
					</header>
					<p>
						Expert specialised translation backed with thorough research and consultation</p>
				</article>

				<article class="services-col flex">
					<header class="services-col-header">
						<h3><a href="#website-translation">Website translation</a></h3>
					</header>
					<p>
						Quality translation of your landing page, business cards, or e-commerce space
					</p>
				</article>

				<article class="services-col flex">
					<header class="services-col-header">
						<h3><a href="#transcription-subtitling">Transcription and subtitling</a></h3>
					</header>
					<p>
						Subtitle creation for your YouTube videos 
					</p>
				</article>
			</div>
		</section>

		<section class="vh-section flex" id="website-translation">
			<header id="website-translation-header">
				<h2>Spanish-English website translation</h2>
			</header>

			<article id="website-translation-article">
				<p>Building a website for your business not only adds a professional touch to your brand, but also opens you up to the profitable world of online marketing.</p>
				
				<p>Website translation is an extra layer you can add to your online marketing strategies, especially if your target audience speaks more than one language. However, it is also great at attracting new audiences. Needless to say, internet users understand a website's content better when it's in their native language, and this in turn is great at boosting your potential of gaining and retaining new clients or customers.</p>

				<p>If you seek an audience from a specific geographical area, a localised translation can boost your website's SEO so it may appear in the searches of consumers you are targeting with your brand.</p>

				<p>You can even target new users by offering a version of your website translated into several languages. With guidance from your web server's analytics, you can tailor your website's SEO to reel in a geographically-oriented group of users.</p>

				<p>At JS Translations, website translations are created with the audience in mind, and bespoke Spanish-English services are suited to your company or project and optimised for search engines to give your website the best marketing.</p>
			</article>
		</section>

		<section class="vh-section flex" id="transcription-subtitling">
			<header id="transcription-subtitling-header">
				<h2>Transcription and subtitling</h2>
			</header>

			<article id="transcription-subtitling-article">
				<p>Video content will be a great addition to your digital marketing strategies. But make sure you consider subtitles!</p>

				<p>Subtitles are great for audience engagement due to their convenience where either there may be audio issues, or the user may have hearing issues. Consideration of both circumstances can reduce bounce time or, in the case of YouTube, increase your watch time.</p>

				<p>Additionally, if you have a target audience that speaks another language, it is also beneficial to have multilingual subtitles. This is killing two birds with one stone!</p>

				<p>The process involves up to three main steps:<br>1) transcribing the source audio<br>2) create a translated version<br>3) synchronisation of one or both transcriptions to create final subtitle file.</p>

				<p>At JS Translations, video transcriptions are done with adequate consultation for good accuracy. These can be done for source language only, or translated to provide multilingual subtitles.</p>
			</article>
		</section>

		<section class="vh-section flex" id="contact">
			<header id="contact-header">
				<h2>Contact</h2>
			</header>

			<article id="contact-article">
				<p id="contact-text">If you are interested in receiving a quote, don't hesitate in sending me a message with a few details about your enquiry.</p>

				<form class="flex" id="contact-form" action="contactform.php" method="post">
					<label for="name">Name</label>
					<input id="name" type="text" name="name" required>
					<label for="email">Email</label>
					<input id="email" type="email" name="email" required>
					
					<fieldset>
						<legend>What type of services are you looking for?</legend>
						<div class="radio-option"><label for="text-translation"><input type="radio" id="text-translation" name="type"> Text translation/website</label></div> 
						<div class="radio-option"><label for="video"><input type="radio" id="video" name="type"> Video/subtitles</label></div>
					</fieldset>

					<label for="count">Please provide the total word count or video minutes:</label>
					<input id="count" type="text" name="count">

					<label for="message">Please give any further necessary details, such as theme of content, or if you are unsure about anything:</label>
					<textarea id="message" rows="15" style="resize:vertical" placeholder="Write message here"></textarea>
					<button type="submit">Send</button>
				</form>
			</article>
		</section>

		<footer class="flex" id="page-footer">
			<div id="main-footer">
					<nav id="footer-nav">
					<ul class="nav-links">
						<li><a href="#work" class="nav-link">Work</a></li>
						<li><a href="#contact" class="nav-link">Contact</a></li>
						<li><a href="http://jslanguages.es" class="nav-link">Español</a></li>
					</ul>
				</nav>
			</div>
			<div id="sub-footer">
				<small>JS Languages © 2020</small>
			</div>
		</footer>
	</div>	
</body>

</html>