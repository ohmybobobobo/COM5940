<?php get_header()?>

    <section class="hero-wrap js-fullheight">
      <div class="overlay" style="background-image: url(<?php bloginfo("template_url") ?>/images/bg_2.jpg);" data-stellar-background-ratio="0.5"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end">
          <div class="col-md-12 text-center ftco-animate">
            <h1 class="mb-3 bread" style="background-image: url(<?php bloginfo("template_url") ?>/images/bg_1.jpg);" data-stellar-background-ratio="0.5"><?php the_title(); ?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="http://dev-ohmybobo.pantheonsite.io/">Home.</a></span><span><?php the_title(); ?></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
						 
			<?php if ($wp_query->have_posts()) :
   					while ($wp_query->have_posts()) :
      					$wp_query->the_post(); ?>		 
						  <div class="post-preview">
							<img src="							  <?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail_url();
				} 
						?>" alt="" class="img-fluid">
							  <br>
				<a href="<?php the_permalink(); ?>"><h2 class="mb-3 font-weight-bold"><?php the_title(); ?></h2></a>

							  <p>
                           		<?php the_content(); ?>
                        	</p>  				 
   					<?php endwhile;
				endif; ?>
			  

<?php get_footer()?>

   