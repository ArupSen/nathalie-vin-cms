  </div><!--.container-->
  <div class="clear"></div>
  <footer>
    <div class="container">
    </div><!--.container-->
  </footer>
</div><!--#main-->
<?php wp_footer(); ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="slick.min.js"></script>
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
}());
</body>
</html>
