<?php
get_header(); ?>
<?php $category = single_term_title("", false);
$catid = get_cat_ID( $category );?>

<div class="container">
    
    <section class="middle_sec">
      <div class="row">
        <div class="col-md-8 col-sm-7">
        
          <div class="left_aside">        
            <ul class="story_box">
            <?php $args = array(
	'posts_per_page' =>12,
    'cat'       => $catid,
    'order'          => 'DESC',
    'paged'          => $paged,
);?>
                    <?php query_posts($args)?>
          <?php $i=1; while ( have_posts() ) : the_post();?>
            <li>
                <figure><a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url()?>" alt=""/></a></figure>
                <h2><span><?php $category_detail = get_the_category(get_the_ID()); echo $category_detail[0]->name;?></span><?php the_title();?></h2>
                <h3>Posted by <?php echo get_the_author();?>  on <?php echo get_the_date();?></h3>
               <p><?php echo wp_trim_words(get_the_content(),40,true);?>...</p>
              </li>
             <?php endwhile; wp_reset_query();?>
            </ul>
          
            <div class="load_more"><a class="loadmore" id="more_category_post" href="javascript:void(0)">Load More</a></div>
            <span class="aoo"></span>
          </div>
        </div>
        <?php get_sidebar();?>
      </div>
    </section>
    <div class="row">
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
    </div>
  </div>
  <script type="text/javascript">
    var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";
    var page = 1; // What page we are on.
    var ppp = 12; // Post per page
	var cat_id= '<?php echo $catid;?>';
    jQuery("#more_category_post").on("click",function(){ // When btn is pressed.
	jQuery('.nonee').show();
        jQuery("#more_author_opinion").attr("disabled",true); // Disable the button, temp.
        jQuery.post(ajaxUrl, {
            action:"more_category_post",
            offset: (page * ppp) + 0,
            ppp: ppp,
           cat_id: cat_id,
			
        }).success(function(posts){
            page++;
            jQuery(".story_box").append(posts); // CHANGE THIS!
var trimmedResponse = jQuery.trim(posts);
if(trimmedResponse =='') { 
  jQuery("#more_category_post").hide();
jQuery("<span class='loadmore'><span class='center'>No More Articles!</span></span>").insertAfter(".aoo");
}
            jQuery("#more_category_post").attr("disabled",false);
			jQuery('.nonee').hide();
        });

   });

</script>
<?php get_footer(); ?>
