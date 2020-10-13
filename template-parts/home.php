<?php 
/*
* Template Name: Home
*/
get_header(); ?>
<div id="primary" class="content">
  <div class="hero-image">  
  <!-- <video autoplay playsinline autoplay muted loop>
    <source src="<?php echo get_stylesheet_directory_uri(); ?>/img/Hemsida-banner04.mp4" type="video/mp4" />
</video> -->
    <div class="hero-text d-flex">
      <h1>Tullify, We simplify customs.</h1>
    </div>
  </div>

  <div class="hero-text-container">
    <div class="hero-title">
    </div>
  </div>
  <div class="section-start">
    <section class="first-section">
      <div class="arrow-scroll">
        <div class="scroller"></div>
      </div>
      <div class="section-wrapper row">
        <?php if( have_rows('sektion_1') ):
							while ( have_rows('sektion_1') ) : the_row(); ?>
        <div class="col-sm-12 col-lg-12 fade-y" data-delighter="start:0.90;">
          <div>
            <? the_sub_field('sektion_1_text');?>
          </div>
        </div>
        <?php endwhile;	else :endif; ?>
      </div>
    </section>
    <section class="second-section card-3">
    <h1 class="text-center"><strong>Vår expertis</strong></h1>
      <div class="section-wrapper row">
      <div class="row our-expertise">
        <div class="col-lg-3 col-sm-12 p-0 fade-y" data-delighter="start:0.95;">
          <div class="clients-container">
            <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/animation.mov" poster="<?php echo get_stylesheet_directory_uri(); ?>/img/animation-img.png" loop="" preload="" playsinline="true" webkit-playsinline="true" muted="" width="100%" height="auto" alt=""></video>
            <h2>Exporthantering</h2>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12 p-0 fade-y middle-animation" data-delighter="start:0.95;">
          <div class="clients-container">
            <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/animation.mov" poster="<?php echo get_stylesheet_directory_uri(); ?>/img/animation-img.png" loop="" preload="" playsinline="true" webkit-playsinline="true" muted="" width="100%" height="auto" alt=""></video>
            <h2>Rådgivning</h2>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12 p-0 fade-y" data-delighter="start:0.95;">
          <div class="clients-container">
            <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/animation.mov" poster="<?php echo get_stylesheet_directory_uri(); ?>/img/animation-img.png" loop="" preload="" playsinline="true" webkit-playsinline="true" muted="" width="100%" height="auto" alt=""></video>
            <h2>Klassificering</h2>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12 p-0 fade-y" data-delighter="start:0.95;">
          <div class="clients-container">
            <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/animation.mov" poster="<?php echo get_stylesheet_directory_uri(); ?>/img/animation-img.png" loop="" preload="" playsinline="true" webkit-playsinline="true" muted="" width="100%" height="auto" alt=""></video>
            <h2>Utbildning</h2>
          </div>
        </div>
        </div>
      </div>
    </section>
    <section class="third-section">
      <div class="">
      <p><?php the_field('sektion_2'); ?></p>

        </div>
    </section>
    <section class="fourth-section">
      <div class="section-wrapper fourth-section-content">
        <h2 class="fade-y" data-delighter="start:0.96;"><strong>Väx tillsammans med oss!</strong></h2>
          <?php if( have_rows('sektion_3') ):
							while ( have_rows('sektion_3') ) : the_row(); ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="d-flex pt-2" style="flex-flow: no-wrap;">
              <?php if( have_rows('direct_impact') ):
							while ( have_rows('direct_impact') ) : the_row(); ?>
              <div class="col col-lg-3 col-md-3 col-sm-3 fade-y" style="" data-delighter="start:0.92;">
                <img class="mt-3 d-flex" style="margin: 0 auto;" src="<? the_sub_field('direct_impact_bild');?>" />
              </div>
              <?php endwhile;	else :endif; ?>
            </div>
          </div>
          <?php endwhile;	else :endif; ?>
        </div>
      </div>

  </section>
  <div class="wave-bottom"></div>
  <section class="fifth-section">
    <div class="section-wrapper">
      <?php if( have_rows('sektion_4') ):
              while ( have_rows('sektion_4') ) : the_row(); ?>
               <div class="row">
      <div class="citat-wrapper" style="width:100%;" data-delighter="start:0.90;">
        <div class="col-sm-12 col-lg-4 pr-0 fade-y">
          <div class="our-team-img-info">
            <div class="col-xs-12 col-sm-12 fade-y personbild pt-5"
              style="background-image:url('<?php the_sub_field('personbild'); ?>')"></div>
            <div class="col-xs-12 col-sm-12 fade-y pt-4" style="max-width: max-content;
    margin: 0 auto; text-align:center;">
              <p><?php the_sub_field('personinfo');?>
            </div>
            </p>
          </div>
        </div>
        <div class="col-md-12 col-lg-8 col-sm-12 fade-y citat-text">
          <div class="pt-2"><?php the_sub_field('personbeskrivning')?></div>
        </div>
      </div>
    </div>
    <hr/>
    <?php endwhile;	else :endif; ?>
    </div>
  </section>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2131.6518343952357!2d11.991958416007227!3d57.705384781120394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464ff382166ab325%3A0xd071d2dad48d24c9!2sDrakegatan%207%2C%20412%2050%20G%C3%B6teborg!5e0!3m2!1ssv!2sse!4v1601044490523!5m2!1ssv!2sse"
    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false"
    tabindex="0"></iframe>
</div><!-- #primary -->

<?php get_footer();