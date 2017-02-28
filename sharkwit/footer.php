<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sharkwit
 */

?>

	</div><!-- #content -->
    <div class="header-box">
        <div class="container"><h2>Contact</h2></div>       
    </div>
	<footer id="colophon" class="site-footer" role="contentinfo">
        
        <div class="contact-bar-outer container">
            <div class="contact-bar row">
                <div class="columns four line1"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-phone.png" /> <span>303.905.2394</span></div>
                <div class="columns four"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-mail.png" /> <span>matt@sharkwit.com</span></div>
                <div class="columns four line2"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-loc.png" /> <span>Boulder, CO</span></div>
            </div>
        </div>
        
    <div class="container">
        
        <div class="row launch">
            <div class="columns three">
                &nbsp;
            </div>
            <div class="columns six">
                <a href="mailto:matt@sharkwit.com" class="button foot"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-press.png" /> Launch Email Thingy</a>
            </div>
            <div class="columns three">
                 &nbsp;
            </div>
        </div>    
        
        <div class="row">
            <div class="columns twelve site-info" style="text-align:center;float:none;">
                <a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/images/ft-mark.png" /></a>
            </div><!-- .site-info -->
        </div>   
    </div><!-- /container -->    
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
