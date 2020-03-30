<footer class="footer_sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul>
            <li><a href="https://www.facebook.com/wigglypuffapp/" target="_blank">facebook</a></li>            <li><a href="https://www.instagram.com/wigglypuff.app/" target="_blank">instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
    <p>Copyright © <?php echo date('Y')?> WigglyPuff. All rights reserved.</P>
  </footer>
</div>

<script src='<?php bloginfo('template_directory')?>/js/bootstrap.min.js'></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/owl.carousel.js"></script> 
<script>
//search
jQuery('#buttonsearch').click(function(){
   jQuery('#formsearch').slideToggle( "fast",function(){
	 jQuery( '#content' ).toggleClass( "moremargin" );
	} );
	jQuery('#searchbox').focus()
	jQuery('.openclosesearch').toggle();
});


/* Hide Header on on scroll down*/
jQuery(window).scroll(function(){
  var sticky = jQuery('header'),
      scroll = jQuery(window).scrollTop();

  if (scroll >= 50) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});


/* mobile mene */
jQuery('.btnmenu a').click(function() {
    jQuery('.mobileback').fadeIn("fast");
    jQuery('#mobilemenu').stop(true, true).show("").animate({
        'right': '0%'
    });
});

jQuery('.mobilemenuclose, .mobileback').click(function() {
    jQuery('#mobilemenu').stop(true, true).animate({
        'right': '-280px'
    });
    jQuery('#mobilemenu, .mobileback').fadeOut("fast");
});

</script>
<?php if(is_single()) { ?>
<script>
jQuery("#owl-demo3").owlCarousel({ 
        autoPlay: 3000,
        items :4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });
</script>
<?php } ?>
<?php wp_footer();?>
</body>
</html>
