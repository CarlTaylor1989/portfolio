<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">

<title><?php echo $title; ?></title>
<meta name="description" content="">
<meta name="author" content="">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<link href="assets/less/bootstrap.css" media="all" type="text/css" rel="stylesheet">
<link href="tweet/jquery.tweet.css" media="all" type="text/css" rel="stylesheet" />
<link href="assets/less/instantvalidation.css" media="screen" type="text/css" rel="stylesheet" />
<link href="assets/css/style.css" media="screen" type="text/css" rel="stylesheet">
<script src="assets/js/libs/modernizr-2.5.3.js"></script>
<script src="assets/js/jquery-1.5.1.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.orbit-1.2.3.js" type="text/javascript"></script>
<script src="assets/js/jqBarGraph.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#skillsDiv').click(function(){
	    $('#divForGraph').jqBarGraph({ data: arrayOfData, title: 'My Skills', barSpace: 20, width: 620, postfix: '%', speed: 1.5,}); 
	    $('#skillsDiv').slideUp(400);
	    $('.skills-graph').fadeIn(1000);
	});
	$(".scroll").click(function(event){   
    	event.preventDefault();
    	$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
    });
});
$(window).load(function() {
  $('#featured').orbit();
  $('.orbit-wrapper').click(function(){
    $('.orbit-wrapper').stop();
  });
	$('.orbit-wrapper').hover(function(){
  	$('.left').fadeIn(); 
  	$('.right').fadeIn();
  	$('.timer').fadeIn();
  },
  function() {
    $('.left').fadeOut(); 
    $('.right').fadeOut();
    $('.timer').fadeOut();
  });
});
</script>
<script type="text/javascript">
arrayOfData = new Array(
     [100,'HTML','#AAC1D5'],
     [100,'CSS','#21456F'],
     [60,'PHP','#7E2828'],
     [60,'JavaScript/jQuery','#DBA619'],
     [50,'MySQL','#FFFFFF']
); 
</script>
<script src="http://james.padolsey.com/demos/plugins/jQuery/autoresize.jquery.js" type="text/javascript"></script>
<script src="assets/js/instantvalidation.js" type="text/javascript"></script>
<script src="tweet/jquery.tweet.js" type="text/javascript"></script>
</head>
<body>

<section>
	<div class="container">
		<div class="row">
			<header class="span12">
				<?php //$this->load->view('assets/_navigation'); ?>
			</header>
		</div>
	</div>

	<div id="main">
		<?= $yield; ?>
	</div>

	<footer class="container">
		<div class="row">
			<div class="span12">
				FOOTER!!!
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			</div>
		</div>
	</footer>
</section> <!--!end of section -->

<!-- Javascript at the bottom for fast page loading -->
</body>
</html>