<?php
/**
Template Name: home-template
*The sidebar has been removed
 */

get_header(); ?>

<div id="primary" ><!--Doesn't define class "content-area" in home page so the width won't be compressed by the css code-->
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?//php get_sidebar(); //get rid of the sidebar ?>
<?php get_footer(); ?>
