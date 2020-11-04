<?php 
/*
* Template Name: Home
*/
get_header(); ?>
<div id="primary" class="content">
  <div class="hero-image">  
    <div class="hero-text d-flex">
      <h1>TULLIFY - We simplify customs.</h1>
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
        <div class="container">
        <?php if( have_rows('sektion_1') ):
							while ( have_rows('sektion_1') ) : the_row(); ?>
        <div class="col-sm-12 col-lg-12 fade-y" data-delighter="start:0.90;">
          <div>
            <? the_sub_field('sektion_1_text');?>
          </div>
        </div>
        <?php endwhile;	else :endif; ?>
      </div>
      </div>
    </section>
    <section class="second-section card-3">
    <h1 class="text-center"><strong>Våra tjänster</strong></h1>
      <div class="section-wrapper row">
      <div class="row our-expertise">
      <?php if( have_rows('sektion_2') ):
							while ( have_rows('sektion_2') ) : the_row(); ?>
        <div class="col-lg-3 col-md-6 col-sm-12 fade-y" data-delighter="start:0.95;">
          <div class="clients-container">
            <img src="<? the_sub_field('our_expertise_image');?>"/>
            <div><? the_sub_field('our_expertise_text');?></div>
          </div>
        </div>
        <?php endwhile;	else :endif; ?>
        </div>
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
  <section class="third-section card-3">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/_LIT75442.jpg"/>
      </section>
  <section class="fifth-section pt-0">

    <div class="section-wrapper">
    <h1 class="pt-5 text-center"><strong>Om oss</strong></h1>

      <div class="container">
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
    </div>
  </section>

</div><!-- #primary -->

<?php get_footer();