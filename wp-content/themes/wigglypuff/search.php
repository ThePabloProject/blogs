<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="container">
    
    <section class="middle_sec">
      <div class="row">
        <div class="col-md-8 col-sm-7">
        
          <div class="left_aside">        
            <ul class="story_box">
            <?php if ( have_posts() ) : ?>
            <header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->
			 <?php $i=1; while ( have_posts() ) : the_post();?>
            <li>
                <figure><a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url()?>" alt=""/></a></figure>
                <h2><span><?php $category_detail = get_the_category(get_the_ID()); echo $category_detail[0]->name;?></span><?php the_title();?></h2>
                <h3>Posted by <?php echo get_the_author();?>  on <?php echo get_the_date();?></h3>
               <p><?php echo wp_trim_words(get_the_content(),40,true);?>...</p>
              </li>
             <?php endwhile; wp_reset_query();?>
            </ul>
          <?php else :?>
          <h2>No post found</h2>
          <?php endif;?>
            
          </div>
        </div>
        <?php get_sidebar();?>
      </div>
    </section>
    </div>
    <?php get_footer(); ?>