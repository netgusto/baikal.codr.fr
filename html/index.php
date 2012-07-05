<?php

$sVersion = "0.2.0";
$sFlatLink = "get/baikal-flat." . $sVersion . ".zip";
$sStockLink = "get/baikal-stock." . $sVersion . ".tgz";
$sDevLink = "http://github.com/jeromeschneider/Baikal";

?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>CalDAV + CardDAV lightweight server: Baïkal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="CalDAV and CardDAV server for calendar and contact data based on PHP, SQLite, and SabreDAV">

  <!-- Le styles -->
  <link href="res/css/bootstrap.css" rel="stylesheet">
  <link href="res/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="res/css/baikal.css" rel="stylesheet">

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
	<script>	
		function goToByScroll(element) {
			$("html,body").animate({scrollTop: $(element).offset().top}, "slow");
		}
	</script>
	<script>
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-31919509-1']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<header id="baikal-hero" class="bigblue">
		<div class="noise"></div>
		<hgroup class="container">
			<h3>Baïkal</h3>
			<h1>Lightweight CalDAV+CardDAV server</h1>
			<button class="btn" onclick="goToByScroll('#download');">Download and get started</button>
		</hgroup>
	</header>
	
	<section id="presentation">
		<div class="container">
			<div class="first row leftside">
				<div class="span7 textual">
					<h3>Your Calendars and Contacts</h3>
					<p>Baïkal offers ubiquitous and synchronized access to your <strong>calendars</strong> and <strong>address books</strong> over <em>CalDAV and CardDAV.</em> Baïkal implements the current IETF recommendation drafts of these industry standards for centralized calendar and address book collections.</p>
				</div>
				<div class="span5 graphic">
					<p>
						<img src="res/img/vcard-emboss.png" style="margin-top: 7px; margin-right: 0em;" alt="Visiting cards with CalDAV"/>
						<img src="res/img/calendar-emboss.png" alt="Calendars with CardDAV"/>
					</p>
				</div>
			</div>
			
			<div class="row rightside">
				<div class="span6 graphic">
					<p style="margin-top: 0.5em;">
						<img src="res/img/apple.png" style="margin-right: 0.9em;" alt="Apple logo"/>
						<img src="res/img/thunderbird.png" style="margin-right: 1em; margin-top: 10px;" alt="Mozilla Thunderbird logo"/>
						<img src="res/img/android.png" alt="Android logo"/>
					</p>
				</div>
				<div class="span6 textual">
					<h3>Compatible with your existing applications</h3>
					<p>Baïkal is compatible with <strong>iOS’</strong> (iPhone, iPad, and iPod) and <strong>Mac OS X’s</strong> Calendar, Reminders, and Address Book apps; <strong>Android’s</strong> calendars and contacts apps; Evolution for <strong>Linux;</strong> Mozilla Thunderbird with Lightning; Atmail; eM Client for <strong>Windows;</strong> and every other <strong>CalDAV and CardDAV</strong> capable application.</p>
				</div>
			</div>
			
			<div class="row leftside">
				<div class="span8 textual">
					<h3>Effortless administration</h3>
					<p>Baïkal include a sleek and extensive <strong>graphical web administration interface</strong> to simplify administrative tasks such as <strong>user, calendar and address book collection management</strong>, and system settings. The dashboard provides a neat overview over the running system and key data.</p>
				</div>
				<div class="span4 graphic">
					<p>
						<img src="res/img/calendars.png" alt="A screenshot of Baïkal"/>
					</p>
				</div>
			</div>

			<div class="row rightside">
				<div class="span4 graphic">
					<p>
						<img src="res/img/wizard-emboss.png" alt="A magic wand"/>
					</p>
				</div>
				<div class="span8 textual">
					<h3>2-click installation</h3>
					<p>Baïkal provides a flat package with an automatic installation tool. Extract the downloaded archive, deploy it over FTP to the server, and it is ready to go. No cumbersome tweaking of configuration files required.</p>
				</div>
			</div>
			
			<div class="row leftside">
				<div class="span7 textual">
					<h3>Lightweight</h3>
					<p>Baïkal’s less than 2MB codebase runs on <strong>PHP 5.3</strong> and newer. User data is stored in an <strong>SQLite</strong> database.</strong> No matter how modest your hosting and resources might be, Baïkal will get the job done.</p>
				</div>
				<div class="span5 graphic">
					<p><img src="res/img/feather-white.png" alt="A feather, symbolizing the lightness of Baïkal"/></p>
				</div>
			</div>

			<div class="row rightside">
				<div class="span5 graphic">
					<p>
						<img src="res/img/osi_standard_logo.png" alt="Open source initiative logo"/>
					</p>
				</div>
				<div class="span7 textual">
					<h3>Free and open source</h3>
					<p>Baïkal is “free” as in “free beer.” You can <strong>use it freely, without time restrictions.</strong> The source code is public, and available to everyone. You can modify, review, and contribute to Baïkal’s development. Baïkal is based on other great <strong>open source</strong> projects like <a href="http://code.google.com/p/sabredav/">SabreDAV,</a> <a href="http://twig.sensiolabs.org/" >Twig,</a> and <a href="http://twitter.github.com/bootstrap/" target="_blank">Twitter Bootstrap</a> to ensure top quality.</p>
					<p>Baïkal is released under the <strong>GNU GPL v3 license</strong>, which is approved by the <a href="http://www.opensource.org/licenses/gpl-3.0">Open Source Initiative</a>.</p>
				</div>
			</div>
		</div>
	</section>
	
	<section id="screenshots">
		<div class="noise"></div>
		<div class="container">
			<div id="myCarousel" class="carousel slide">
				
				<h2 class="pull-left">Screenshots</h2><div class="pull-right carousel-links"><a href="#myCarousel" data-slide="prev">‹ Prev</a> | <a href="#myCarousel" data-slide="next">Next ›</a></div>
				<div style="clear: both;"></div>
				
				<div class="carousel-inner">
					<div class="item active">
						
						<div class="row">
							<div class="span8">
								<img src="res/img/screenshots/dashboard.png" alt="">
							</div>

							<div class="span4">
								<h3>Dashboard</h3>
								<p>This screen presents some key aspects of your system, giving you a bird-eye point of view on the running services.</p>
								<p>Statuses of the running services are displayed, next to some figures about the amount of hosted data.</p>
							</div>
						</div>
						
					</div>
					<div class="item">
						
						<div class="row">
							<div class="span8">
								<img src="res/img/screenshots/users.png" alt="">
							</div>

							<div class="span4">
								<h3>Users</h3>
								<p>This screen displays the list of users that have an account on your Baïkal system.</p>
								<p>You can add and remove users, update their profile, their password; for every user, you also have buttons to <strong>access their calendars and address books</strong>.</p>
							</div>
						</div>
						
					</div>
					<div class="item">
						<div class="row">
							<div class="span8">
								<img src="res/img/screenshots/calendars.png" alt="">
							</div>

							<div class="span4">
								<h3>Calendars</h3>
								<p>This screen displays the <strong>list of calendars</strong> belonging to a specified user.</p>
								<p>You can <strong>add and remove calendars</strong> for this user, and modify the calendar details.</p>
							</div>
						</div>
					</div>
					<div class="item">
						
						<div class="row">
							<div class="span8">
								<img src="res/img/screenshots/settings.png" alt="">
							</div>

							<div class="span4">
								<h3>Baïkal Settings</h3>
								<p>This screen displays some settings that you might want to customize, like for instance the time zone of the server.</p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="download" class="bigblue">
		<div class="noise"></div>
		<div class="container">
			<h3>Get Baïkal</h3>
			<h5>Current version: <?= $sVersion ?></h5>
			<p>&nbsp;</p>
			<div class="row">
				<div class="span3 download-package">
					<div class="description">
						<h4><img src="res/img/download-boat-24px.png" class="pull-left" alt=""/> Flat package</h4>
						<p class="package-explain">Easy installation.</p>
						<p class="package-body">
							<strong>Install via FTP.</strong><br />
							Download this package if you want Baïkal up and running quickly, or <strong>if ou have limited access to the host server.</strong>
						</p>
					</div>
					<p class="download-package-button">
						<a class="btn btn-default btn-download" href="<?= $sFlatLink ?>"><img src="res/img/download-blue-148px.png" alt="" /></a>
					</p>
				</div>
				<div class="span1">
					&nbsp;
				</div>
				<div class="span3 download-package">
					<div class="description">
						<h4><img src="res/img/download-palmes-24px.png" class="pull-left" alt="" /> Stock package</h4>
						<p class="package-explain">For experimented users.</p>
						<p class="package-body">
							<strong>Install via SSH.</strong><br />
							Download this package if you want to install Baïkal and have <strong>shell access</strong> (SSH) to the host server.
						</p>
					</div>
					<p class="download-package-button">
						<a class="btn btn-default btn-download" href="<?= $sStockLink ?>"><img src="res/img/download-blue-148px.png" alt="" /></a>
					</p>
				</div>
				<div class="span1">
					&nbsp;
				</div>
				<div class="span3 download-package">
					<div class="description">
						<h4><img src="res/img/download-scuba-24px.png" class="pull-left" alt="" /> Bleeding-edge</h4>
						<p class="package-explain">For developpers.</p>
						<p class="package-body">
							<strong>Install via SSH+Git.</strong><br />
							Freshly drawn straight from the development repository. Not suitable in a production environment.
						</p>
					</div>
					<p class="download-package-button">
						<a class="btn btn-default btn-download" href="<?= $sDevLink ?>" target="_blank"><img src="res/img/download-blue-148px.png" alt="" /></a>
					</p>
				</div>
			</div>
			<div class="donate">
				<p>I am working hard on continuously developing and maintaining Baïkal. Please consider making a small donation via PayPal to keep the project going strong and me motivated. Click the button below and show your appreciation of my work.</p>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			<div style="margin-top: 50px; text-align: center;">
				<p><a href="https://twitter.com/jeromeschneider" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @jeromeschneider</a> <a href="https://twitter.com/intent/tweet?button_hashtag=BaikalServer&text=Finally%20found%20a%20lightweight%20%23CalDAV%20%2B%20%23CardDAV%20Server%20!%20http%3A%2F%2Fbaikal.codr.fr" class="twitter-hashtag-button" data-size="large" data-related="jeromeschneider">Tweet #BaikalServer</a></p>
			</div>
		</div>
	</section>
	
<!-- End Document
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="res/js/jquery.js"></script>
<script src="res/js/bootstrap-transition.js"></script>
<script src="res/js/bootstrap-carousel.js"></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html>
