<?php get_header(); ?>
<div class="page-banner">
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title" style="text-align: center;">Welcome to our Blogs!</h1>
        <div class="page-banner__intro">
          <p style="text-align: center;">Learn how the school of your dreams got started.</p>
        </div>
    </div>
</div>
<div class="spacing"></div>
<div class="page-banner__content container container--narrow">
<?php
while (have_posts()) {
  the_post(); ?>
      <div class="post-item">
        <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="metabox">
          <p>Posted by: <?php the_author_posts_link() ?> on <?php the_time('n-M-Y'); ?> in <?php echo get_the_category_list(', '); ?> </p>
        </div>
        <div class="generic-content">
          <?php the_excerpt() ?>
          <p><a href="<?php the_permalink(); ?>" class="btn btn--blue">Read More &raquo;</a></p>
        </div>
      </div>
      <?php } ?>
</div>
<?php get_footer(); ?>