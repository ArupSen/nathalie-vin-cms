<?php
/* Template Name: Home Page */
?>
<?php get_header(); ?>

<div id="content">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
        <div id="page-content">
          <?php the_content(); ?>
        </div><!--#pageContent -->
    <div class="social-icons">
      <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
      <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
      <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
      <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
      </div>
    </div><!--#post-# .post-->

  <?php endwhile; ?>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
