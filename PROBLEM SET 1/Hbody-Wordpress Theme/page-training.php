<?php get_header();?>
<?php
	    $args = array(
	          'page_id' =>  '98'
	    );
	    $wp_query = new WP_Query($args);

	   
	 $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );

?>	

<section class="hero-wrap js-fullheight">
      <div class="overlay" style="background-image: url(<?php bloginfo("template_url") ?>/images/bg_2.jpg);" data-stellar-background-ratio="0.5"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end">
          <div class="col-md-12 text-center ftco-animate">
            <h1 class="mb-3 bread" style="background-image: url(<?php bloginfo("template_url") ?>/images/bg_1.jpg);" data-stellar-background-ratio="0.5"><?php the_title(); ?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="dev-ohmybobo.pantheonsite.io">Home.</a></span> <span><?php the_title(); ?></span></p>
          </div>
        </div>
      </div>
    </section>

   <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">
          		<i class="db-left"></i>
          		Trainer 
          		<i class="db-right"></i>
          	</span>
            <h2 class="mb-3">Our Coaches</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row no-gutters">
    			<div class="col-lg-6 d-flex">
    				<div class="coach d-sm-flex align-items-stretch">
	    				<div class="img" style="background-image: url(<?php bloginfo("template_url") ?>/images/trainer-1.jpg);"></div>
	    				<div class="text py-4 px-5 ftco-animate">
	    					<span class="subheading">Head Coach</span>
	    					<h3><a href="#">Travor James</a></h3>
	    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

	    					<p></p>
	    				</div>
	    			</div>
    			</div>
    			<div class="col-lg-6 d-flex">
    				<div class="coach d-sm-flex align-items-stretch">
	    				<div class="img" style="background-image: url(<?php bloginfo("template_url") ?>/images/trainer-2.jpg);"></div>
	    				<div class="text py-4 px-5 ftco-animate">
	    					<span class="subheading">Lead Trainer</span>
	    					<h3><a href="#">Leonard Smith</a></h3>
	    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	    			
	    					<p></p>
	    				</div>
	    			</div>
    			</div>
    			<div class="col-lg-6 d-flex">
    				<div class="coach d-sm-flex align-items-stretch">
	    				<div class="img order-xl-last" style="background-image: url(<?php bloginfo("template_url") ?>/images/trainer-3.jpg);"></div>
	    				<div class="text py-4 px-5 ftco-animate">
	    					<span class="subheading">Lead Trainer</span>
	    					<h3><a href="#">James Buffer</a></h3>
	    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	    					
	    					<p></p>
	    				</div>
	    			</div>
    			</div>
    			<div class="col-lg-6 d-flex">
    				<div class="coach d-sm-flex align-items-stretch">
	    				<div class="img order-xl-last" style="background-image: url(<?php bloginfo("template_url") ?>/images/trainer-4.jpg);"></div>
	    				<div class="text py-4 px-5 ftco-animate">
	    					<span class="subheading">Trainer</span>
	    					<h3><a href="#">Maricar Collins</a></h3>
	    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	    					
	    					<p></p>
	    				</div>
	    			</div>
    			</div>
    		</div>
    	</div>
    </section>
<?php get_footer();?>