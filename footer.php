  </div><!--.container-->
  <div class="clear"></div>
  <footer>
    <div class="container">
    </div><!--.container-->
  </footer>
</div><!--#main-->
<?php wp_footer(); ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/slick.min.js"></script>
<script>
// Site specific js code
(function(){
  'use strict';
  // carousel on the home page uses slick
  jQuery('#home-carousel').slick({
    centerMode: true,
    slidesToShow: 1,
    variableWidth: true,
    centerPadding: '4px',
    prevArrow: '<div class="slick-prev"><span>&lt;</span></div>',
    nextArrow: '<div class="slick-next"><span>&gt;</span></div>'
  });
  // carousel on the details pages is bootstrap
  jQuery('#carousel-nathalie').carousel({
    pause: "false",
    interval: 3000
  });
  // hovering over the big thumbnails on works pages toggles text
  jQuery('a.thumbnail').on('mouseenter', function() {
    jQuery(this).find('span').show();
    jQuery(this).find('img').css({"opacity":0.5, "border": "4px solid #fff"});
  });
  jQuery('a.thumbnail').on('mouseleave', function() {
    jQuery(this).find('span').hide();
    jQuery(this).find('img').css({"opacity":1, "border":"none"});
  });
  // add horizontal rules under nav elements
  jQuery('ul#navbar li').append('<hr>');
  // page-template-works_details
  // details page carousel works using the wordpress gallery
  jQuery('.page-template-works_details #gallery-1').attr('id', 'carousel-nathalie');
  jQuery('.page-template-works_details .gallery').addClass('carousel slide');
  jQuery('.page-template-works_details .gallery').attr('data-ride', 'carousel');
  jQuery('.page-template-works_details dl').addClass('item');
  jQuery('.page-template-works_details dl').eq(0).addClass('active');
  jQuery('.page-template-works_details .gallery').find('br').remove();
  jQuery('.page-template-works_details .item').wrapAll('<div class="carousel-inner" role="listbox">');
  jQuery('.page-template-works_details #page-content').find('style').remove();
}());
</script>
</body>
</html>
