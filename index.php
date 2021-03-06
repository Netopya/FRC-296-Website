<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>FRC Team 296</title>
	
	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />


	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
        <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<!--<link href='https://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'> style="font-family: Ubuntu, sans-serif;" -->
	
	<link rel="stylesheet" href="css/bootstrap.override.css">
	<link rel="stylesheet" href="css/stylesheet.css">

	<script type="text/javascript">
		/*
		var translations;
		$.getJSON('json/translations.json', function(data) { 
			translations=data;
		}); 
		
		function _(key)
		{
			return translations[key]["en"];
		}
		*/
	</script>
	
	<?php 
		
		$json_data = file_get_contents('json/translations.json');
		$translations = json_decode($json_data, true);
		/*$translations = json_decode('{
		  "template": {
			"en": "b",
			"fr": "d"
		  },
		  "home_nav": {
			"en": "Home",
			"fr": "Acceuil"
		  },
		  "title" : {
			"en": "Two Schools, One Team",
			"fr": "Deux Écoles, Un Équipe"
		  }
		}');*/
		
		function t($key)
		{
			return "foo";
			return $translations['title']['en'];
			return $translations[$key]['en'];
		}
	?>
	
  </head>
  <body data-spy="scroll" data-target="#navbar-main">
	<div class="container">
		<nav id="navbar-main" class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#home">
				<img alt="Brand" src="img/brand.png" height="50px">
			  </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#home" data-scroll="#home"><?php echo "Home"; ?></a></li>
				<li><a href="https://moodle.loyola.ca/course/view.php?id=549">Moodle <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></a>
				<li ><a href="#news" data-scroll="#news">News</a></li>
				<li ><a href="#aboutus" data-scroll="#aboutus">About Us</a></li>
				<li ><a href="#aboutfirst" data-scroll="#aboutfirst">About First</a></li>
				<li ><a href="#sponsors" data-scroll="#sponsors">Sponsors</a></li>
                <li ><a href="#vision" data-scroll="#vision">Robotic Vision</a></li>
				<li ><a href="#contact" data-scroll="#contact">Contact Us</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="#">English</a></li>
					<li><a href="#">Français (Traduction en cours)</a></li>
				  </ul>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
	<!--
	<div class="">
		<div class="cover_photo" style="background-image:url('img/ChairmansAward_Winner.jpg');background-repeat: no-repeat;
    background-size: cover;
    height: 550px;
    background-position: center bottom;">
			
		</div>
		-->
	<div id="home" class="background_cover">
		<div class="container" style="padding-top:61px;padding-bottom:10px;">
			<img class="img-rounded" style="width:100%;height:auto;" src="img/ChairmansAward_Winner.jpg"/>
		</div>
	</div>
	</div>
	<div  class="container" style="padding-top:15px;padding-bottom:15px;">
		<div class="row">
			<div class="col-xs-12">
				<div class="">
					<h1>Two Schools, One Team</h1>
					<blockquote><p>Since 1999, the Northern Knights, a high school robotics team bringing together students from Loyola High School and the Sacred Heart School of Montreal, has competed in the FIRST (For Inspiration and Recognition of Science and Technology) Robotics Competition (“FRC”). FRC is an international student robotics competition brings together over 2900 teams from over 19 countries, to complete in the annual challenge designed by FIRST. A challenge, which allows us students to experience the practical side of the sciences and develop invaluable real-world skills.</p></blockquote>
					
					<?php
						//var_dump($translations);
						//var_dump(t('title'));
						//var_dump($translations['title']['en']);
					?>
				</div>
			</div>
		</div>
        <div class="sp_top_container">
			<div class="sp__item">
				<img class="img-responsive sp_image" src="img/unnamed.jpg"/>
			</div>
			<div class="sp__item">
				<img class="img-responsive sp_image" src="img/unnamed.png"/>
			</div>
            <div class="sp__item">
				<img class="img-responsive sp_image" src="img/RFQ.jpg"/>
			</div>	
		</div>
	</div>
	<div id="news" style="" data-offset="51">
		<div class="container">
			<h1>Latest News</h1>
			<div class="row">
				<div class="col-lg-6">					
					<a class="twitter-timeline" href="https://twitter.com/FRC296" data-widget-id="688369344640864256">Tweets by @FRC296</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<div class="col-lg-6">
					<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="6" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:32.1875% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BCHC7MkIXLa/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Counting down the days until Oshawa! #firststronghold</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A photo posted by Northern Knights (@frc296) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-02-23T01:19:17+00:00">Feb 22, 2016 at 5:19pm PST</time></p></div></blockquote>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
				</div>
			</div>
		</div>
	</div>
	<div class="background_cover about_us_cover" id="aboutus" data-offset="51">
		
	</div>
	<div class="main_background_cover">
		<div class="container">
			<div class="jumbotron">
				<h1>About Us</h1>
				<p>The Northern Knights, Team 296, are a high school robotics team bringing together students from Loyola High School and the Sacred Heart School of Montreal to compete in the FIRST Robotics Competition (FRC).</p>
				<p>Founded in 1999, the Northern Knights are the second Canadian team as well as the first Quebec team to join the FRC. Throughout its history, the team has won numerous awards for their robots’ prowess at various levels of competitions. Most notably in 2006, the team went on to be the first ever Canadian team to win the World Championship as the captain of its alliance. </p>
				<p>Off the field, the team has strived to play an active role in the community with the goal of increasing the accessibility of and interest in science and technology. Over the years, our outreach efforts have reached over a hundred thousand students through various interactive events. The team has also partnered with FIRST Quebec to provide mentorship and guidance to other teams in the province. Moreover, through its partnership with Sacred Heart, the team aims to support and encourage women to consider careers in the sciences.</p>
			</div>
		</div>
	</div>
	<div id="aboutfirst" data-offset="51">
		<div class="container">
			<img src="img/FIRSThorz.gif" class="img-responsive centered_image" height="200px"/>
		</div>
	</div>
	<div class="main_background_cover">
		<div class="container">
			<div class="jumbotron">
				<h1>About First</h1>
				<p>The FIRST Robotics Competition (FRC), is an international high school competition in which students from various high schools around the world team up with volunteer professional mentors to build robots that compete in high intensity robo-sports. In only 6 weeks, students must build from scratch, robots to compete in the annual challenge, which this year, is FIRST Stronghold. FRC is a combination of the excitement of sport with the rigors of science and technology. Students are challenged to raise funds, design a team "brand", work together, and build and program robots to play a difficult field game against like-minded competitors. In the process, FRC participants develop real world competencies, all the while improving their organization, communication, and leadership skills.</p>
				<p>For more information about FIRST or the FRC, we encourage you to visit: <a href="http://www.firstinspires.org">firstinspires.org</a></p>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/VqOKzoHJDjA" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<div class="background_cover sponsors_cover" id="sponsors" data-offset="51">
		
	</div>
	<div class="main_background_cover">
		<div class="container">
			<div class="jumbotron">
				<h1>Our sponsors</h1>
				<br/>
				<div class="row sp_container">
					<div class="col-md-3">
						<a href="http://loyola.ca/"><img class="img-responsive sp_image" src="img/unnamed.jpg"/></a>
					</div>
					<div class="col-md-9">
						<p><strong>Loyola High School</strong> is a Jesuit, Catholic school for boys in Montreal, Quebec. Founded in 1896, Loyola has a long tradition of excellence of educating "Men for Others" who are intellectually competent, open to growth, religious, loving and committed to doing justice.</p>
					</div>
				</div>
				<div class="row sp_container">
					<div class="col-md-3 col-md-push-9">
						<a href="http://www.sacredheart.qc.ca/"><img class="img-responsive sp_image" src="img/unnamed.png"/></a>
					</div>
					<div class="col-md-9 col-md-pull-3">
						<p><strong>The Sacred Heart School</strong> of Montreal is a Catholic school for girls in Montreal, Quebec. Founded in 1861, Sacred Heart aims to instil the values that Saint Madeleine Sophie so valued all the while promoting creative education and leadership framed by the five goals of a Sacred Heart education. The truly international character of a Sacred Heart School aids in fostering a global education and citizenship in our girls.</p>
					</div>
				</div>
				<div class="row sp_container">
					<div class="col-md-3">
						<a href="http://www.robotiquefirstquebec.org/"><img class="img-responsive sp_image" src="img/RFQ.jpg"/></a>
					</div>
					<div class="col-md-9">
						<p><strong>Robotique FIRST Quebec</strong> is an international competition that fosters inspiration and recognition of science and technology among young people of Quebec by; engaging in an innovative mentoring program in robotics that relies on the expertise of engineers and academics, while promoting a balance of life, including-self confidence, communication and leadership. FIRST encourages more involvement in society, while enjoying the satisfaction of acting and competing with respect and integrity.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="background_cover vision_us_cover" id="vision" data-offset="51">
		
	</div>
    <div class="main_background_cover">
        <div class="container">
			<div class="jumbotron">
                <div class="row">
					<div class="col-lg-12">
                        <h1>Vision for our Robots</h1>
                        <p>One of the challenges in controls for the FIRST robotics competition is to integrate automation and assisted controls in game to achieve the point scoring objectives. We use a variety of encoders and sensors to try and provide feedback to the robot in autonomous mode and to the driver in tele-operated mode.  One such challenge is the integration of vision for our robot. While <a href="http://www.cctvcameraworld.com/ip-cameras.html">network based cameras like these</a> are inexpensive and readily available in different shapes and sizes, we have had some problems integrating it with the control system, and since have moved to USB type cameras.</p>
                        <p>To integrate vision, we are using a 4-channel USB DVR along with small analog cameras to take advantage of multiple points of view (POV) to have both forward and rear-view vision.</p>
                        <p>There is a 15 second autonomous mode at the start of each match where the robot must run solely on pre-programmed instructions and feedback loops from the sensors. The small camera can be used to locate the retro-reflective tape installed around the goals. Additionally, during tele-operated mode, the driver is across the playing field from the goals, and the view of the robot is often obstructed by the field elements and other robots.</p>
                        <p>The vision tracking is used to identify and automate end effector actuation to manipulate the game pieces. The front POV camera is used to drive the robot up to the game piece in order to manipulate the game piece, and to identify where the robot must drive to in order to score the game piece. The rear POV camera is often used by the driver, when the robot cannot be seen from the driver station, to orient the robot on the field and defend against incoming opponents.</p>
                        <p>Our current implementation uses the front POV camera and an alternating color light in order to find the grey game balls. This is used to drive up to the ball and lower the end effector to pick it up. The proximity to the ball is determined using size and position in the POV. The rear view camera is used to help the driver orient the robot when his view is obstructed.</p>
                        <p>As explained in this <a href="http://www.cctvcameraworld.com/wireless-ip-camera-setup-guide/">wireless ip camera setup guide</a>, IP cameras offer several advantages over analog cameras, especially the ability to send video wirelessly for several cameras over one stream. They also provide the possibility to stitch video together to form a 360 view in a way similar to <a href="http://www.360heros.com/">360heros</a>. For the future, we will continue to experiment with the implementation of IP cameras as they offer different possibilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="background_cover contact_us_cover" id="contact" data-offset="51">
		
	</div>
	<div class="main_background_cover">
		<div class="container">
			<div class="jumbotron">
				<h1>Contact Us</h1>
				<div class="row">
					<div class="col-lg-12">
						<address>
							Email: <a href="mailto:robotics296@loyola.ca">robotics296@loyola.ca</a></br>
							Twitter: <a href="https://twitter.com/frc296">https://twitter.com/frc296</a> </br>
							Instagram: <a href="https://www.instagram.com/team296/">https://www.instagram.com/team296/</a></br>
							Youtube: <a href="https://www.youtube.com/channel/UC3WtrZ3iW2__iUDID5-4jqA">https://www.youtube.com/user/FRC296</a> </br>
						</address>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<h2>Robotics Lab and Workshop</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<address>
						  <strong>Loyola High School</strong><br>
						  7272 Sherbrooke St. W.<br>
						  Montreal, Qc. Canada H4B 1R2<br>
						  <abbr title="Phone">P:</abbr> (514) 486-1101<br>
						  <abbr title="Fax">F:</abbr> (514) 486-7266<br>
						</address>
					</div>
					<div class="col-lg-8">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5597.2893432162555!2d-73.639569!3d45.456816!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9fdb325f59c5816c!2sLoyola+High+School!5e0!3m2!1sen!2sca!4v1452886502054" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				</br>
				<div class="row">
					<div class="col-lg-12">
						<h2>Special Operations</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-lg-push-8">
						<address>
							<strong>The Sacred Heart School of Montreal</strong></br>
							3635 Avenue Atwater</br>
							Montréal, Quebec</br>
							Canada, H3H 1Y4</br>
							<abbr title="Phone">P:</abbr> (514) 937-2845
						</address>
					</div>
					<div class="col-lg-8 col-lg-pull-4">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.7382213487963!2d-73.59066058489142!3d45.495216039395075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a1413511f67%3A0x62a608cf77c96e50!2sSacred+Heart+School+of+Montr%C3%A9al+(The)!5e0!3m2!1sen!2sca!4v1453492800571" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	
    <script type="text/javascript">
		//$('body').scrollspy({ target: '#navbar-main' });
		
		offsetHeight = 51;
		
		$('body').scrollspy({
		   offset: offsetHeight
		});
		
		$('.navbar li a[data-scroll]').click(function (event) {
			event.preventDefault();
			
			console.log($(this).data('scroll'));
			
			//var scrollPos = $('body > div').find($(this).data('scroll')).offset().top - (offsetHeight - 1);
			var scrollPos = $(($(this).data('scroll'))).offset().top - (offsetHeight - 1);
			$('body,html').animate({
				scrollTop: scrollPos
			}, 100, function () {
				$(".btn-navbar").click();
			});
			return false;
		});
	</script>
  </body>
</html>