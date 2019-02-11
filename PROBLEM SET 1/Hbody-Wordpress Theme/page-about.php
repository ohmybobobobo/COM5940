<?php get_header()?>
<?php
	    $args = array(
	          'page_id' =>  '94'
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
            <p class="breadcrumbs"><span class="mr-2"><a href="http://dev-ohmybobo.pantheonsite.io/">Home.</a></span><span><?php the_title(); ?></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
						 
			  
<?php
$query = new AirpressQuery();
$query->setConfig("Default");
$query->table("exercises");

$events = new AirpressCollection($query);

foreach($events as $e){
echo "<h2>".$e["Name"]."</h2>"
."<img src='".$e["pic_name"]."' width=100%>"
."<br>"
."<p>".$e["Where"]."</p>"
."<br><hr><br>";
}
?>			 

			  

<?php get_footer()?>

   