<?php get_header(); ?>
<section id="about" class="container content-section text-center">
<div class="row">
<div class="col-md-12 text-center">
<h1>Main Area</h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
<!--</div>
<div id="delimiter">
</div>-->
</section>
<?php get_footer(); ?>