<?php
/* Template Name: Works Details */
?>
<?php get_header(); ?>

<div id="contents">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
        <div id="page-content">
          <?php the_content(); ?>
        <h2><?php the_title(); ?></h2>
      <!-- Controls -->
        <a class="left carousel-control" href="#carousel-nathalie" role="button" data-slide="prev">
          <span class="fa fa-caret-left fa-2x" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-nathalie" role="button" data-slide="next">
          <span class="fa fa-caret-right fa-2x" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div><!--#pageContent -->
    </div><!--#post-# .post-->

  <?php endwhile; ?>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
