<?php 
/*
* Template Name: Blog
*/
get_header(); ?>
<div id="primary" class="content">
    <div class="blog-hero">
        <div class="container text-center">
            <div class="flex-container">
           
                <h1>SENASTE NYTT</h1>
        
            </div>
        </div>
    </div>
    </div>
    <section class="services-first-section" style="background-color:#fff;">
        <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <!-- <?php the_title( '<h1>', '</h1>' ); ?> -->

            <?php the_content(); ?>

            <?php endwhile; // end of the loop. ?>

            <?php
                $post = array(
                'post_type' => 'post',
                'order' => 'ASC',
                'post_status' => 'publish'  
            );
            $loop = new WP_Query( $post ); ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="blog-item pt-5 pb-5 row">
                    <div class="col-sm-12 text-part">
                    <?php the_title( '<h1 class="text-center" style="font-weight:bold;">', '</h1>' ); ?>
                        <h5 class="text-center"><? $post_date = get_the_date( 'D M j' ); echo $post_date; ?></h5>
                    <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; // end of the loop. ?>
            <?php wp_reset_postdata();?>
        </div>
    </section>
</div><!-- #primary -->

<?php get_footer(); ?>