<?php
/*template name: Front page*/
get_header(); ?>
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <section class="banner_container clearfix">
          <div class="banner_left">
            <ul class="demo_pic">
			  
		  <?php
			global $post;
			$args = array( 'numberposts' => 1);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :  setup_postdata($post); ?>
				<li>
                <figure><a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url()?>" alt=""/></a></figure>
                <div class="pic_title">
               <h1> <a href="javascript:void(0);"><span><?php $category_detail = get_the_category(get_the_ID()); echo $category_detail[0]->name;?></span></a></h1>
                  <h1><a href="<?php the_permalink();?>"><br/><?php the_title();?></a></h1>
                </div>
              </li>
			<?php endforeach; wp_reset_postdata(); ?>				 
            </ul>
          </div>
          <div class="banner_right">
            <ul class="demo_pic">
             <?php
			global $post;
			$args = array( 'numberposts' => 2, 'offset'=> 1);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :  setup_postdata($post); ?>
              <li>
                <figure><a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url()?>" alt=""/></a></figure>
                <div class="pic_title">
                    <h1> <a href="javascript:void(0);"><span><?php $category_detail = get_the_category(get_the_ID()); echo $category_detail[0]->name;?></span> </a></h1>
                    <h1><a href="<?php the_permalink();?>"> <br/><?php the_title();?></a></h1>
                </div>
              </li>
             
              <?php endforeach; wp_reset_query();?>
            </ul>
          </div>
        </section>
      </div>
    </div>
    <section class="middle_sec">
      <div class="row">
        <div class="col-md-8 col-sm-7">
        
          <div class="left_aside">
		  <?php
			global $post;
			$args = array( 'numberposts' => 1, 'offset'=> 3);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :  setup_postdata($post); ?>
            <h2><span><?php $category_detail = get_the_category(get_the_ID()); echo $category_detail[0]->name;?></span><?php the_title();?></h2>
            <h3>Posted by <?php echo get_the_author();?>  on <?php echo get_the_date();?></h3>
            <ul class="demo_pic">
              <li>
                <figure><a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url()?>" alt=""/></a></figure>
                
              </li>
            </ul>
            
           <p><?php echo wp_trim_words(get_the_content(),100,true);?></p>
             
            <div class="comment_sec">
              <ul>
                <li><span><?php echo get_comments_number(get_the_ID());?>  Comments</span></li>
              <li> <a href="<?php the_permalink();?>"> <span>Continue Reading</span></a></li>
                <li> <a href="#"><img src="<?php bloginfo('template_directory')?>/images/media_icon1.png" alt=""/></a> <a href="#"><img src="<?php bloginfo('template_directory')?>/images/media_icon2.png" alt=""/></a> <a href="#"><img src="<?php bloginfo('template_directory')?>/images/media_icon3.png" alt=""/></a> <a href="#"><img src="<?php bloginfo('template_directory')?>/images/media_icon5.png" alt=""/></a> </li>
              </ul>
            </div>
            <?php endforeach; wp_reset_query();?>
            <ul class="story_box">
             <?php
			global $post;
			$args = array( 'numberposts' => 6, 'offset'=> 4);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :  setup_postdata($post); ?>			 
            <li>
                <figure><a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url()?>" alt=""/></a></figure>
                <h2><span><?php $category_detail = get_the_category(get_the_ID()); echo $category_detail[0]->name;?></span><?php the_title();?></h2>
                <h3>Posted by <?php echo get_the_author();?>  on <?php echo get_the_date();?></h3>
               <p><?php echo wp_trim_words(get_the_content(),40,true);?>...</p>
              </li>
             <?php endforeach; wp_reset_query();?>
            </ul>
          
            <div class="load_more"><a class="loadmore" id="more_author_opinion" href="javascript:void(0)">Load More</a></div>
          </div>
        </div>
        <?php get_sidebar();?>
      </div>
    </section>
    <!--<div class="row">
      <div class="col-md-12">
        <section class="follow_sec">
          <h4>Follow <span>@Malibu</span></h4>
          <ul>
            <li>
              <figure><a href="#"><img src="<?php bloginfo('template_directory')?>/images/demo_img.jpg" alt=""/></a></figure>
            </li>
            <li>
              <figure><a href="#"><img src="<?php bloginfo('template_directory')?>/images/demo_img.jpg" alt=""/></a></figure>
            </li>
            <li>
              <figure><a href="#"><img src="<?php bloginfo('template_directory')?>/images/demo_img.jpg" alt=""/></a></figure>
            </li>
            <li>
              <figure><a href="#"><img src="<?php bloginfo('template_directory')?>/images/demo_img.jpg" alt=""/></a></figure>
            </li>
            <li>
              <figure><a href="#"><img src="<?php bloginfo('template_directory')?>/images/demo_img.jpg" alt=""/></a></figure>
            </li>
            <li>
              <figure><a href="#"><img src="<?php bloginfo('template_directory')?>/images/demo_img.jpg" alt=""/></a></figure>
            </li>
            <li>
              <figure><a href="#"><img src="<?php bloginfo('template_directory')?>/images/demo_img.jpg" alt=""/></a></figure>
            </li>
            <li>
              <figure><a href="#"><img src="<?php bloginfo('template_directory')?>/images/demo_img.jpg" alt=""/></a></figure>
            </li>
          </ul>
        </section>
      </div>
    </div>-->
  </div>
  <script type="text/javascript">
    var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";
    var page = 1; // What page we are on.
    var ppp = 10; // Post per page
    jQuery("#more_author_opinion").on("click",function(){ // When btn is pressed.
	jQuery('.nonee').show();
        jQuery("#more_author_opinion").attr("disabled",true); // Disable the button, temp.
        jQuery.post(ajaxUrl, {
            action:"more_author_opinion",
            offset: (page * ppp) + 0,
            ppp: ppp,
           
			
        }).success(function(posts){
            page++;
            jQuery(".story_box").append(posts); // CHANGE THIS!
var trimmedResponse = jQuery.trim(posts);
if(trimmedResponse =='') { 
  jQuery("#more_author_opinion").hide();
jQuery("<span class='loadmore'><span class='center'>No More Articles!</span></span>").insertAfter(".aoo");
}
            jQuery("#more_author_opinion").attr("disabled",false);
			jQuery('.nonee').hide();
        });

   });

</script>
<?php get_footer(); ?>
