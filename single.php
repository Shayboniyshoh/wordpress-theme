<?php get_header(); ?>
<div class="page-banner">
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title" style="text-align: center;"><?php echo the_title(); ?></h1>
    </div>
</div>
<div class="page-banner__content container container--narrow">
<?php
while (have_posts()) {
    the_post(); ?>
     <p><?php the_content(); }?> </p>
</div>
<?php get_footer(); ?>