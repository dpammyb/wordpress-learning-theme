<?php get_header(); ?>
   
  <div id="content">
    <h1>Main Content Area -- Plus Stupid Notice</h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
    <h4>
      Posted on <?php the_time('F jS, Y') ?>
    </h4>
    <p><?php the_content(__('(more...)')); ?></p>

    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  </div>

  <?php get_sidebar(); ?>

  </div>

<div id="delimiter"></div>

<?php get_footer(); ?>
