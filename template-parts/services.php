<?php 
/*
* Template Name: Services
*/
get_header(); ?>
<div id="primary" class="content">
<div class="tjanster-hero-image">
    <div class="container text-center">
      <div> 
        <div class="flex-container">
          <div class="row d-block">
            <div class="flex-item"><? the_field('tjanster_hero_text')?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <section class="services-first-section">
    </section>
    <section class="services-second-section pb-5">
      <div class="container">
    <!-- <h1 class="text-center"><strong>Text about our services</h1></strong> -->
        <?php if( have_rows('services_repeater') ):
        while ( have_rows('services_repeater') ) : the_row(); ?>
          <div class="w-100 d-flex case-container">
            <div class="col-lg-6 col-sm-12 fade-y" data-delighter="start:0.90;">
              <img src="<?php the_sub_field('services'); ?>" class="clients-container w-100"/>
            </div>
            <div class="col-lg-6 col-sm-12 fade-y clients-text-container" data-delighter="start:0.90;">
              <div>
              <p><?php the_sub_field('case_text'); ?></p>
              </div>
            </div>
          </div>
        <?php endwhile;	else :endif; ?>
        </div>
    </section>
</div><!-- #primary -->

<?php get_footer();