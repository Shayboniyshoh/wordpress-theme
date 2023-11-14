<?php get_header(); ?>

<?php
while (have_posts()) {
    the_post(); ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title" style="text-align: center;"><?php echo the_title(); ?></h1>
        </div>
    </div>
    <div class="page-banner__content container container--narrow">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blogs'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Blogs</a> 
            <span class="metabox__main">Posted by: <?php the_author_posts_link() ?> on <?php the_time('n-M-Y'); ?> in <?php echo get_the_category_list(', '); ?>
            </span>
            </p>
        </div>
     <p><?php the_content(); }?> </p>
</div>
<?php get_footer(); ?>