<?php 
$portfolio_array = array(
          array(
            'title'         => 'Just a Thought',
            'description'   => 'A simple & clean website using the Wordpress platform. This site uses W3C standard HTML & CSS2.',
            'url'           => 'justa-thought.co.uk',
            'image'         => 'test'
          ),
          array(
            'title'         => 'Envy Bathrooms',
            'description'   => 'A website built for a small bathroom-fitting company that uses the brand colours.',
            'url'           => 'envybathrooms.co.uk',
            'image'         => 'test'
          ),
          array(
            'title'         => 'Inspired Hair Supplies',
            'description'   => 'Inspired Hair Supplies - an online retailer for specialist hair products. I was able to successfully meet the clients requirements by using jQuery to implement a modern slideshow effect and an interactive navigation bar. HTML, CSS were also used.',
            'url'           => 'inspiredhairsupplies.co.uk',
            'image'         => 'test'
          ),
        );
?>
<div class="container">
	<div class="row">
		<div class="span6 head_marg">
			<img src="assets/img/head_logo.png" />
		</div>
		<div class="span6">
			Nav here
		</div>
		<div class="span12">
			<h1 class="intro_text">Hi I'm Carl Taylor and I build websites.</h1>
			<h2 class="intro_subtext">This is how it works - you give me your ideas, I create them &amp; in return you get a beautifully designed website. Simple.</h2>
		</div>
	</div>
</div>
<div class="beige_container">
	<div class="container">
		<div class="row">
			<div id="portfolio" class="span12">
				<h3>Featured Work</h3>
				<div id="featured">
			      <?php
			      for($i = 0; $i < count($portfolio_array); $i++){
			        $a = $portfolio_array;
			        echo '<div class="content" style="background: #DADDCA;"><div class="main_banner_left"><h4 class="main_banner_title">'.$a[$i]["title"].'</h4><p class="main_banner_para">'.$a[$i]["description"].'<br /><br /><a href="http://www.'.$a[$i]["url"].'" target="_blank">'.$a[$i]["url"].'</a></p></div></div>';
			      }
			      ?>
			      <img src="http://www.zurb.com/playground/playground/jquery-image-slider-plugin/features.jpg" alt="Overflow: Hidden No More" />
			    </div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="span4">
			<h5>SwishWebs, what do you offer?</h5>
			<p class="box_copy">I offer different types of websites such as static, content managed, eCommerce &amp; blogs. I can guarantee that I put every bit of my passion for web design into each and every website.</p>
			<span id="paint_brush"></span>
		</div>
		<div class="span4">
			<h5>Sounds good, how long does it take?</h5>
			<p class="box_copy">Ofcourse depending on what type of site you choose - it can vary between 4 - 5 days to 2 - 3 weeks. I ensure that with every site that I make, I try to make to the best of my ability, using everything that I know.</p>
			<span id="clock"></span>
		</div>
		<div class="span4">
			<h5>I’m interested, where can I get a quote?</h5>
			<p class="box_copy">You can simply contact me using the contact form below or by clicking here. All you’ll need to do is to fill the form out and I will get in contact within 24 hours with a quote.</p>
			<span id="contract"></span>
		</div>
	</div>
	<div class="row">
		<div id="skill-section" class="span12 skills">
			<a href="#skill-section" id="skillsDiv" class="btn btn-danger btn-skills scroll">View my skills</a>
		</div>
	</div>
</div>
<div class="beige_container skills-graph" style="display: none;">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="skills">
					<div id="divForGraph"></div>
				</div>
			</div>
		</div>
	</div>
</div>