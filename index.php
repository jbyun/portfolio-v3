<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/> 
	<title>Byun Creative | The Online Portfolio of James Byun</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/media.css" />
	<link media="screen" rel="stylesheet" href="css/colorbox.css" /> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> 
	<script src="scripts/jquery.colorbox.js"></script> 

	<script> 
	$(document).ready(function(){
		$("a[rel='showport']").colorbox({transition:"fade"});
		});
	</script> 

</head>

<body>
	
<div id="langbar">
	<p><span class="selected">english</span> | <a href="#">한국어</a></p>
	<p class="wip">
		<span class="gongsa">한국 왭사이트 개발중입니다.</span>
	</p>
</div>

<div id="wrapper">
<article id="left-col">
	
	<header>
		<h1><a href="/dev/">byun<span>creative</span></a></h1>
		<hr /><p><span>is</span></p><hr />
	</header>

	<hgroup>
		<h2>the portfolio</h2>
		<h3>of james byun</h3>
		<h5>designer &amp; illustrator</h5>
		<h4>i make websites</h4>
		<h6>and digital art</h6>
	</hgroup>
	
	<hr class="line" />

	<section id="contact">
		<h2>give me a shout</h2>
	
		<?php
	if (isset($_REQUEST['email']))
	//if "email" is filled out, send email
	  {
	  //send email
	  $name = $_REQUEST ['msg'] ;
	  $email = $_REQUEST['email'] ;
	  $subject = $_REQUEST['subject'] ;
	  $message = $_REQUEST['message'] ;
	  mail("james@byuncreative.com", "Name: $name Subject: $subject",
	  $message, "From:" . $email);
	  echo "<span id='success'>Thanks for getting in touch! I'll do my best to respond within 2-3 business days.</span>";
	  }
	else
	//if "email" is not filled out, display the form
	  {
	  echo "
	<form method='post' action='index.php'>
	<fieldset>
		<ol>
		<li>
		<input type='name' id='name' name='msg' placeholder='Name*' required />
			<p class='nameval'>
				<span class='inval-name'>What's your name?</span>
				<span class='val-name'>Oh that's a nice name!</span>
			</p>
		</li>

		<li>
		<input type='email' id='email' name='email' placeholder='Email*' required />
			<p class='mailval'>
				<span class='inval-mail'>And your email address?</span>
				<span class='val-mail'>Looks good</span>
			</p>
		</li>
		
		<li>
		<input type='subject' id='subject' name='subject' placeholder='Subject*' required />
			<p class='subjectval'>
				<span class='inval-subject'>What would you like to talk about?</span>
				<span class='val-subject'>Sounds good to me</span>
			</p>
		</li>
		
		<li>
		<textarea type='message' name='message' rows='8' cols='25' id='message' placeholder='Message*' required></textarea>
		<p class='msgval'>
			<span class='inval-msg'>Give me a message to read?</span>
			<span class='val-msg'>Thanks! :-)</span>
		</p>
	
		<input type='submit' value='Send' id='submitbtn' />
		</li>
		</ol>
		</fieldset>	
		</form>
		<p>Not a fan of using forms? Feel free to <a href='mailto:james@byuncreative.com'>email me</a> directly!</p>";
		
	  }
	?>
	
	</section>
</article> <!-- end left-col -->

<article id="content-col">
	
	<section id="web">
		<div class="portbox">
			<h2>Web</h2>
			<h3>Stagionis Ristorante</h3>
			<p>Personal | Design &amp; Code</p>
			<hr />
			<h3>Raven Woods Estates</h3>
			<p><a href="http://www.twinfishcreative.com" target="_blank">Twin Fish Creative</a> | Code</p>
			<hr />
			<h3>Basic Responsive Template</h3>
			<p>Based on WordPress Template by <br /><a href="http://www.bluelimemedia.com">Bluelime Media</a></p>
			<p><a href="#">Download</a> | Code </p>
			</div>
		<div class="portbox"><a href="../stagionis/" target="_blank"><img src="images/thumb/stagionis-thumb.jpg" alt="Stagionis Ristorante" title="Stagionis Ristorante" /></a></div>
		<div class="portbox"><a href="http://www.ravenwoods.com" target="_blank"><img src="images/thumb/raven-thumb.jpg" alt="The Signature Estates at Raven Woods" title="The Signature Estates at Raven Woods" /></a></div>
		<div class="portbox"><a href="basic-rwd.html" rel="showport"><img src="images/thumb/rwd-thumb.jpg" alt="Basic Responsive - WordPress Template" title="Basic Responsive - WordPress Template" /></a></div>
	</section>
	
	<section id="illustration">
		<div class="portbox">
			<h2>Illustration</h2>
			<h3>Out of this World</h3>
			<p>Personal</p>
			<hr />
			<h3>MK Tiger</h3>
			<p>Personal</p>
			<hr />
			<h3>Thanks</h3>
			<p>Personal</p>
		</div>
		<div class="portbox"><a href="images/large/luongo.jpg" rel="showport"><img src="images/thumb/luongo-thumb.jpg" alt="Out of This Wolrd" title="Out of this World" /></a></div>
		<div class="portbox"><a href="images/large/tiger.jpg" rel="showport"><img src="images/thumb/tiger-thumb.jpg" alt="MK Tiger" title="MK Tiger" /></a></div>
		<div class="portbox"><a href="images/large/thanks.jpg" rel="showport"><img src="images/thumb/thanks-thumb.jpg" alt="Thanks" title="Thanks" /></a></div>
	</section>
	
	<section id="print">
		<div class="portbox">
			<h2>Print</h2>
			<h3>Moving Sale</h3>
			<p>The Hockey Shop</p>
			<hr />
			<h3>Superfeet Poster</h3>
			<p>The Hockey Shop</p>
		</div>
		<div class="portbox"><a href="images/large/moving.jpg" rel="showport"><img src="images/thumb/moving-thumb.jpg" alt="Moving Sale" title="Moving Sale" /></a></div>
		<div class="portbox"><a href="images/large/super.jpg" rel="showport"><img src="images/thumb/super-thumb.jpg" alt="Superfeet Poster" title="Superfeet Poster" /></a></div>
	</section>
	
</article> <!-- end content-col -->

<footer>
	<div class="social">
		<ul>
		<li id="twitter"><a href="http://www.twitter.com/byunj" target="_blank" title="Follow me on Twitter">Twitter</a></li>
		<li id="forrst"><a href="http://forrst.com/people/jbyun/posts" target="_blank" title="See what I'm doing on Forrst">Forrst</a></li>
		</ul>
	</div>

	<div id="copyright">
		<p>&copy; <?php echo date("Y"); ?> James Byun</p>
	</div>
</footer>

</div><!-- end wrapper -->

</body>
</html>


