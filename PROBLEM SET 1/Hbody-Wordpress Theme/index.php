<?php get_header()?>
    <section class="hero-wrap js-fullheight">
      <div class="overlay" style="background-image: url(<?php bloginfo("template_url") ?>/images/bg_2.jpg);" data-stellar-background-ratio="0.5"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end">
          <div class="col-md-12 text-center ftco-animate">
            <h1 class="mb-3 bread" style="background-image: url(<?php bloginfo("template_url") ?>/images/bg_1.jpg);" data-stellar-background-ratio="0.5">Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="http://dev-ohmybobo.pantheonsite.io/">Home.</a></span> <span>Blog</span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
			
			
			
			<?php if (have_posts()) :
   			while (have_posts()) :
      		the_post();
			?>
			<div class="col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
            <a href="<?php the_permalink(); ?>" class="block-20" style="background-image: url('				<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail_url();
				} 
						?>');"></a>
				<div class="text py-4 d-flex">
              	<div class="meta text-center">
              		<span class="day"><?php the_date(); ?></span>

              	</div>
					 <div class="desc">
						 <a href="<?php the_permalink(); ?>"><h3 class="heading mt-2"><?php the_title(); ?></h3></a>
				<p><?php the_excerpt(); ?></p>
							  

	              </div>
              </div>
            </div>
          </div>
			
   					<?php endwhile;
				endif; ?>


        </div>
      </div>
    </section>

<?php get_footer()?>

   