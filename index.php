<?php
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['email']))
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "Invalid input";
    }
  else
    {//send email
    $email = $_REQUEST['email'] ;
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    mail("zkellerdevelops@gmail.com", "Subject: $subject",
    $message, "From: $email" );
    header("location: index.php");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>

		<meta charset="utf-8">
		<meta name="author" content="Zach Keller">
		<meta name="description" content="This portfolio site of Zach Keller">
		<meta name="viewport" content="width=device-width">

		<title>Zach | Keller</title>

		<link rel="stylesheet" type="text/css" media="screen and (min-device-width: 900px)" href="stylesheet.css" />
		<link rel="stylesheet" type="text/css" media="screen and (min-width: 481px) and (max-width: 899px)" href="tablet.css" />
		<link rel="stylesheet" type="text/css" media="screen and (min-width: 320px) and (max-width: 480px)" href="smartphone.css" />
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/scripts.js"></script>

		<!-- Fancy box Plugin -->
		<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>
		<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
		<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
		<script src="js/slides.min.jquery.js"></script>
	</head>

	<!-- Body Content Starts Here -->

	<body>
		<div class="wrapper">
			<div class="header clearfix">
				<div class="nav">
  					<p><a href="#Home" alt="home" id="homebutton"> Home &nbsp; </a><a href="#Portfolio" alt="portfolio" id="portfoliobutton">What I do &nbsp; </a><a href="#Contact" alt="contact" id="contactbutton">Say hello &nbsp; </a></p>
				</div>
				<div class="social">
					<a href="http://www.github.com/zkellerdevelops/" target="_blank" id="github"><img src="images/github.png" alt="Github"></a>
					<a href="http://www.linkedin.com/in/zkellerdevelops/" target="_blank" id="linkedin"><img src="images/linkedin.png" alt="Linked In"></a>
					<a href="http://www.twitter.com/zlkeller" target="_blank" id="twitter"><img src="images/twitter.png" alt="Twitter"></a>
					<a href="http://instagram.com/eloist" target="_blank" id="instagram"><img src="images/instagram.png" alt="Instagram"></a>
					<a href="http://gplus.to/zachkeller" target="_blank" id="gplus"><img src="images/gplus.png" alt="Google Plus"></a>
				</div>
			</div>

			<!-- SLIDER markup STARTS here -->

			<div class="content" id="home">
				<div id="slides">
					<div class="slides_container">

						<a href="#" title="The 3rd slide" target="_blank"><img src="images/slide/slide3.jpg" width="1100" height="300" alt="Slide 3"></a>

						<a href="#" title="The 1st slide" target="_blank"><img src="images/slide/slide1.jpg" width="1100" height="300" alt="Slide 1"></a>

						<a href="#" title="The 2nd slide" target="_blank"><img src="images/slide/slide2.jpg" width="1100" height="300" alt="Slide 2"></a>

					</div>
					<a href="#" class="next"><img src="images/slide/arrow-next.png" width="35" height="43" alt="Arrow Next"></a>
					<a href="#" class="prev"><img src="images/slide/arrow-prev.png" width="35" height="43" alt="Arrow Prev"></a>
				</div>
			</div>

			<!-- SLIDER markup ENDS here -->


			<div class="content">

					<!-- hero image for tablet.css -->
					<div id="tablet_hero">
						<img src="images/hero_tablet.jpg">
					</div>

				<!--<img src="images/divider.png">-->
				<div class="story_left">
					<p><h1>Hello. I'm Zach.</h1></p>
					<!--<p><h2>and I'd love to meet you</h2></p>-->
					<!--<img src="images/divider_small.png">-->
					<p>My name is Zach Keller. I've been working tirelessly as a graphic designer in Nashville, TN and Atlanta, GA for the last 9 years. I've had the pleasure of working in an Atlanta startup agency called Foundation One Studios. I've opened my own design business called Identity Crisis with my best friend, and most recently, I've worked a three year stint with the in-house design team at Thomas Nelson Publishers.

					<p>I'm about to finish <a href="http://www.nashvillesoftwareschool.com" target="blank">Nashville Software School</a>. It's a 6 month web developer bootcamp teaching the basic fundamentals of front-end and back-end web development. I enrolled in order to take my visual design skills to the next level, and am looking forward to shifting gears to this next chapter of my design and development career. Currently, I'm available for freelance, long-term contract, or full-time web development, print, and identity design.</p>

					<p>Have a look around and say hello. <i>I love meeting new people.</i></p>
				</div>

				<div class="story_right">
					<p><h1>You can find me:</h1></p><br>
						<h2>&bull; Building beautiful websites</h2>
						<h2>&bull; Developing engaging user experiences</h2>
						<h2>&bull; Studying mobile app design</h2>
						<h2>&bull; Building brands and brand identities</h2>
						<h2>&bull; Creating stunning book covers</h2>
						<h2>&bull; Delivering print and web advertising</h2>
						<h2>&bull; Making trade show displays</h2>
						<h2>&bull; Obsessing over typography</h2>
						<h2>&bull; Meeting deadlines</h2>
						<h2>&bull; Watching unhealthy amounts of football</h2>
				</div>
				<img src="images/divider.png" class="divider">
			</div>

			<div id="portfolio_fancybox">
					<p><h1>What I do</h1></p>
        <div class="content" id="portfolio">
          <a class="fancybox" rel="group" href="images/fancy/travel_big.jpg" title="Travel Stars - website"><img src="images/fancy/travel_thumb.jpg" alt="Travel For the Stars" /></a>
          <a class="fancybox" rel="group" href="images/fancy/nokia_big.jpg" title="Nokia Share 2008 - trade show collateral"><img src="images/fancy/nokia_thumb.jpg" alt="Nokia Share 2008" /></a>
					<a class="fancybox" rel="group" href="images/fancy/paris_big.jpg" title="The Truth About Paris - book cover"><img src="images/fancy/paris_thumb.jpg" alt="The Trouble With Paris" /></a>
					<a class="fancybox" rel="group" href="images/fancy/idc_big.jpg" title="Identity Crisis - agency poster"><img src="images/fancy/idc_thumb.jpg" alt="Identity Crisis" /></a>
					<a class="fancybox" rel="group" href="images/fancy/invite_big.jpg" title="Foil stamp/embossed wedding invite"><img src="images/fancy/invite_thumb.jpg" alt="Wedding Invite" /></a>
          <a class="fancybox" rel="group" href="images/fancy/sprint_big.jpg" title="BYOV Sprint Races - poster"><img src="images/fancy/sprint_thumb.jpg" alt="BYOV Sprint Races" /></a>
					<a class="fancybox" rel="group" href="images/fancy/lost_big.jpg" title="The Gospel According to Lost - book cover"><img src="images/fancy/lost_thumb.jpg" alt="The Gospel According to Lost" /></a>
					<a class="fancybox" rel="group" href="images/fancy/church_big.jpg" title="Permission to Speak Freely - print ad"><img src="images/fancy/church_thumb.jpg" alt="Permission to Speak Freely" /></a>
					<a class="fancybox" rel="group" href="images/fancy/shoes_big.jpg" title="Journeys Kidz - in store signage"><img src="images/fancy/shoes_thumb.jpg" alt="Journeys Kidz" /></a>
					<a class="fancybox" rel="group" href="images/fancy/gaither_big.jpg" title="Gaither Homecoming - publishing proposal"><img src="images/fancy/gaither_thumb.jpg" alt="Gaither Homecoming" /></a>
					<a class="fancybox" rel="group" href="images/fancy/story_big.jpg" title="Story Conference - print spread ad"><img src="images/fancy/story_thumb.jpg" alt="Story Conference" /></a>
					<a class="fancybox" rel="group" href="images/fancy/blah_big.jpg" title="From Blah to Awe - print ad"><img src="images/fancy/blah_thumb.jpg" alt="From Blah to Awe" /></a>
					<a class="fancybox" rel="group" href="images/fancy/angel_big.jpg" title="Angel Eyes - poster"><img src="images/fancy/angel_thumb.jpg" alt="Angel Eyes" /></a>
          <a class="fancybox" rel="group" href="images/fancy/summer_big.jpg" title="Thomas Nelson Summer 2013 - product catalog"><img src="images/fancy/summer_thumb.jpg" alt="Thomas Nelson Summer 2013" /></a>
					<a class="fancybox" rel="group" href="images/fancy/jcteen_big.jpg" title="Jesus Calling for Teens - print ad"><img src="images/fancy/jcteen_thumb.jpg" alt="Jesus Calling for Teens" /></a>
          <a class="fancybox" rel="group" href="images/fancy/kjvsb_big.jpg" title="KJV Study Bible - book cover"><img src="images/fancy/kjvsb_thumb.jpg" alt="KJV Study Bible" /></a>
          <a class="fancybox" rel="group" href="images/fancy/frankfort_big.jpg" title="Frankfort Book Show Banner - large format"><img src="images/fancy/frankfort_thumb.jpg" alt="Frankfort Book Show Banner" /></a>
          <a class="fancybox" rel="group" href="images/fancy/empty_big.jpg" title="Empty Promises - print ad"><img src="images/fancy/empty_thumb.jpg" alt="Empty Promises" /></a>
				</div>
      </div>

      <div class="content" id="contact">
				<div class="contact">
					<p><h1>Say hello</h1></p>
					<?php
					if (isset($_REQUEST['email'])) {
					echo "<h4>Success!</h4>";
					}
					$mail_form = include('php/mail_form.php'); ?>
				</div>
			</div>

			<div class="footer clearfooter">
				<div class="content">
					<div id="footerlogo">
						<img src="images/zlk.png">
            <div class="footer_social">
              <a href="http://www.github.com/zkellerdevelops/" target="_blank" id="githubfoot"><img src="images/github.png" alt="Github"></a>
              <a href="http://www.linkedin.com/in/zkellerdevelops/" target="_blank" id="linkedinfoot"><img src="images/linkedin.png" alt="Linked In"></a>
              <a href="http://www.twitter.com/zlkeller" target="_blank" id="twitterfoot"><img src="images/twitter.png" alt="Twitter"></a>
              <a href="http://instagram.com/eloist" target="_blank" id="instagramfoot"><img src="images/instagram.png" alt="Instagram"></a>
              <a href="http://gplus.to/zachkeller" target="_blank" id="gplusfoot"><img src="images/gplus.png" alt="Google Plus"></a>
            </div>
						<h4>All work &copy; Zach Keller, 2013. Proudly crafted in Nashville, Tennessee.</h4>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>