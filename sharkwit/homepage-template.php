<?php
/**
 * Template Name: Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sharkwit
 */

get_header(); ?>

<div class="home-banner"><img src="<?php echo get_template_directory_uri(); ?>/images/banner.png" width="2000" height="601" alt="sharkwit Design - the works of Matt Merino" title="Welcome" /></div>

<div class="header-box">
    <div class="container"><h2>Work</h2></div>
</div>
<?php echo do_shortcode ('[wp-tiles grids="News" small_screen_grid="Mobile" breakpoint="640" padding="2" pagination="ajax" post_type="post" order="DESC" orderby="date" exclude_current_post="true"]') ;?>

<div class="header-box">
    <div class="container"><h2>About</h2></div>
</div>    
    <div class="about-banner row">
        <div class="columns six text-zone">
            
            <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
                <div class="txt-zone-content" role="complementary">
                    <?php dynamic_sidebar( 'home_right_1' ); ?>
                </div><!-- #primary-sidebar -->
            <?php endif; ?>
            
        
        
        <p align="center"><a class="button lime" href="<?php echo esc_url( home_url( '' ) ); ?>/work">show more</a></p>
        
        <p>HOBBIES:</p>
            <div class="column one-fourth">square</div>
            <div class="column one-fourth">square</div>
            <div class="column one-fourth">square</div>
            <div class="column one-fourth">square</div>
        </div>    
    </div>
<?php
//get_sidebar();
get_footer();
