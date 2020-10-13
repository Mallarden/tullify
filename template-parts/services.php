<?php 
/*
* Template Name: Services
*/
get_header(); ?>
<div id="primary" class="content">
  <div class="tjanster-hero-image">  
    <video autoplay playsinline autoplay muted loop>
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/img/gbg-03.mp4" type="video/mp4" />
  </video>
  </div>
    <section class="services-first-section">
    </section>
    <section class="services-second-section pb-5">
    <h1 class="text-center"><strong>Text about our services</h1></strong>
        <?php if( have_rows('services_repeater') ):
        while ( have_rows('services_repeater') ) : the_row(); ?>
          <div class="w-100 d-flex case-container">
            <div class="col-lg-6 col-sm-12 fade-y" data-delighter="start:0.90;">
              <div class="clients-container card card-3 w-100" style="background-image:url('<?php the_sub_field('services'); ?>')">
              </div>
            </div>
            <div class="col-lg-6 col-sm-12 fade-y clients-text-container" data-delighter="start:0.90;">
              <div>
              <p><?php the_sub_field('case_text'); ?></p>
              </div>
            </div>
          </div>
        <?php endwhile;	else :endif; ?>
    </section>
</div><!-- #primary -->

<?php get_footer();