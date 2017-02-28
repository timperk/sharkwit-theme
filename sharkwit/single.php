<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sharkwit
 */

get_header(); ?>

	<div id="primary" class="content-area portfolio-page">
		<main id="main" class="site-main" role="main">

            
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-single', get_post_format() );

			the_post_navigation( array(
                'prev_text'  => __( '<img src="' . get_template_directory_uri(). '/images/prev-arrow.png" />' ),
                'next_text'  => __( '<img src="' . get_template_directory_uri(). '/images/next-arrow.png" />' ),
            ) );
            
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
     
    <div class="portfolio-wht">
        <div class="container">
            
            <img src="<?php the_field('large_image'); ?>" alt="" />     
            <?php
                if(get_field('description'))
                {
                    echo get_field('description');
                }
            ?>
            
            <img src="<?php the_field('large_image_2'); ?>" alt="" />     
            <?php
                if(get_field('description_2'))
                {
                    echo get_field('description_2');
                }
            ?>
            
            <img src="<?php the_field('large_image_3'); ?>" alt="" />     
            <?php
                if(get_field('description_3'))
                {
                    echo get_field('description_3');
                }
            ?>
            
            <img src="<?php the_field('large_image_4'); ?>" alt="" />     
            <?php
                if(get_field('description_4'))
                {
                    echo get_field('description_4');
                }
            ?>
            
            <img src="<?php the_field('large_image_5'); ?>" alt="" />     
            <?php
                if(get_field('description_5'))
                {
                    echo get_field('description_5');
                }
            ?>
         
        </div>    
    </div>  

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
