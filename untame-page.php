<?php
/*
 * Template Name: Untame1
 */
get_header(); ?>
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
	<!-- If not a game page, show untame generic social box. -->
	<?php if ( ! is_page('games') && the_parent_slug() != 'games' ) {?>
		<div class="social">  
    		<div class="fb-like" data-href="https://www.facebook.com/untamegames" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
    		<a href="https://twitter.com/untamegames" class="twitter-follow-button" data-show-count="false">Follow @untamegames</a>
		</div><!-- .social -->
	<?php } ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
	<?php endwhile; // end of the loop. ?>
</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>