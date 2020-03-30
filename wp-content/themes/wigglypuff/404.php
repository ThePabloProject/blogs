<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<section class="post_container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="left_aside">
          <div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
           </div>
      </div>
      
    </div>
  </section>
<?php get_footer(); ?>
