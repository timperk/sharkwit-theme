<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sharkwit
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
	<div class="entry-content container">
		<?php
        
            // check if the post has a Post Thumbnail assigned to it.
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('large', array('class' => 'alignleft'));
            } 
 
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'sharkwit' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sharkwit' ),
				'after'  => '</div>',
			) ); 
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
