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

<link rel="stylesheet" href="assets/less/bootstrap.css">
<link href="tweet/jquery.tweet.css" media="all" type="text/css" rel="stylesheet" />
<link href="assets/less/instantvalidation.css" media="screen" type="text/css" rel="stylesheet" />
<script src="assets/js/libs/modernizr-2.5.3.js"></script>
<script src="assets/js/jquery-1.5.1.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.orbit-1.2.3.js" type="text/javascript"></script>
<script src="assets/js/jqBarGraph.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
arrayOfData = new Array(
     [100,'HTML','#AAC1D5'],
     [100,'CSS','#21456F'],
     [60,'PHP','#7E2828'],
     [50,'JavaScript/jQuery','#DBA619'],
     [40,'MySQL','#FFFFFF']
); 
</script>
<script src="http://james.padolsey.com/demos/plugins/jQuery/autoresize.jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/instantvalidation.js"></script>
<script language="javascript" src="tweet/jquery.tweet.js" type="text/javascript"></script>
<script language="javascript" src="http://www.jtricks.com/download-script/navigation/floating-1.8.js" type="text/javascript"></script>

</head>

<body>

<div id="container">
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
			</div>
		</div>
	</footer>
      
</div> <!--! end of #container -->


<!-- Javascript at the bottom for fast page loading -->

</body>
</html>