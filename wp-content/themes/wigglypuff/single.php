<?php
/**
 * The template for displaying all single posts and attachments
 *
 */
get_header(); ?>
<section class="post_container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="left_aside">
            <h2><span><?php $category_detail = get_the_category(get_the_ID()); echo $category_detail[0]->name;?></span><?php the_title();?></h2>
            <h3>Posted by <?php echo get_the_author();?>  on <?php echo get_the_date();?></h3>
            <figure><img src="<?php echo get_the_post_thumbnail_url()?>" alt=""/></figure>
            <?php while ( have_posts() ) : the_post();?>
            <?php the_content();?>
            <?php endwhile;?>
            
			<?php  
				$images = acf_photo_gallery('post_cards', $post->ID);
				if( count($images) ){
			?>
			
			<div class="related_post share_post">
				<h4><span>Share Postcards</span></h4>
				
				<?php 
				
				foreach($images as $image){
				
				$id = $image['id'];
				$title = $image['title']; 
				$caption= $image['caption']; 
				$full_image_url= $image['full_image_url']; 
				//$full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); 
				$thumbnail_image_url= $image['thumbnail_image_url']; 
				$target= $image['target']; 
				$alt = get_field('photo_gallery_alt', $id); 
				$class = get_field('photo_gallery_class', $id); ?>				
				
				<div class="share_img">
					<img src="<?php echo $full_image_url; ?>" alt=""/>
					<div class="overlay_bg">
						<div class="text_icon"> 
							<a onclick="window.open('https://www.facebook.com/sharer.php?u=<?php echo $full_image_url; ?>&title=<?php echo $caption;?>', 'newwindow', 'width=900, height=650'); return false;" href="javascript:void(0);" target="_blank">
								<img src="http://blog.wigglypuff.com/wp-content/themes/wigglypuff/images/facebook.png" alt="<?php echo $title;?>">
							</a>
							<a onclick="window.open('https://twitter.com/intent/tweet?text=<?php echo $caption;?>&amp;via=WigglyPuff&amp;url=<?php echo $full_image_url; ?>', 'newwindow', 'width=900, height=650'); return false;" href="javascript:void(0);" target="_blank">
								<img src="http://blog.wigglypuff.com/wp-content/themes/wigglypuff/images/twitter_1.png" alt="<?php echo $title;?>">
							</a>
							<a href="https://www.instagram.com/wigglypuff.app/" target="_blank">
								<img src="http://blog.wigglypuff.com/wp-content/themes/wigglypuff/images/instagram.png" alt="<?php echo $title;?>">
							</a>
							<a href="whatsapp://send?text=<?php echo $caption;?> - <?php echo $full_image_url; ?>" data-text="<?php echo $title;?>" >
								<img src="http://blog.wigglypuff.com/wp-content/themes/wigglypuff/images/whatsapp.png" alt="<?php echo $title;?>">
							</a>
						</div>
					</div>
				</div>	
				<?php } ?>				
			</div>
			<?php } ?>
			
			<div class="tag_blog"><?php the_tags( 'Tags: ', ', ' ); ?></div>
            
			
			
			
			
			<div class="comment_sec">
              <ul>
                <li><?php echo get_comments_number();?> Comments</li>
                <li><span>Write a comment</span></li>
                <li> <a href="#"><img src="<?php bloginfo('template_directory')?>/images/media_icon1.png" alt=""/></a> <a href="#"><img src="images/media_icon2.png" alt=""/></a> <a href="#"><img src="images/media_icon3.png" alt=""/></a> <a href="#"><img src="images/media_icon5.png" alt=""/></a> </li>
              </ul>
            </div>
            <div class="comment_box clearfix"></div>
			
			
			
            <div class="related_post">
              <h4><span>Related Posts</span></h4>
              <ul id="owl-demo3" class="owlCarousel">
              <?php  
	
	$category_detail = get_the_category(get_the_ID());
   $args = array( 'category_name'    => $category_detail[0]->slug
	, 'posts_per_page'  => '10'
	, 'order' => 'DESC'
	, 'post__not_in' => array(get_the_ID()));
	query_posts($args); 
	?>
    <?php while ( have_posts() ) : the_post();?>
                <li>
                  <figure><a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url();?>" alt=""/></a></figure>
                  <h5><span><?php echo get_the_date();?></span><?php the_title();?></h5>
                </li>
               <?php endwhile; wp_reset_query();?>
              </ul>
              <h4><span>Comments</span></h4>
              <div class="commet_form">
                
                <?php if ( comments_open() || get_comments_number() ) :
comments_template();
endif;?>
              </div>
            </div>
          </div>
        </div>
	
      </div>
 
    </div>
  </section>
<?php get_footer(); ?>
