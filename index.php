<?php get_header(); ?>
<!--  instead of the regular opening tags like <html><head>, we
     invoke the get_header() command, and include the output of
     header.php in this file.-->

  <!-- this id lets us address the content area i nstyle.css -->
  <div id="content">
      <h1>Main Content Area -- Plus Stupid Notice</h1>
      <!-- this is called "the loop"; it's a little complicated.
           there are many tutorials but you can read more about it here:
           https://codex.wordpress.org/The_Loop_in_Action
         --> 
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2>
            <!-- create a link whose href is the permanent link to this post,
               and whose textual content is the post or page title-->
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <!-- use php's strange time parsing functions to write out the time -->
        <h4>
            Posted on <?php the_time('F jS, Y') ?>
        </h4>
        <!-- add the content -->
        <p><?php the_content(__('(more...)')); ?></p>

    <?php endwhile; else: ?>
    <!-- see the "else" just above this line? If you've stumbled on a bad url,
         this "no posts found" will tell you there's nothing to see here.-->
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  </div>
  <!-- add the sidepar -->
  <?php get_sidebar(); ?>

  </div>
<!-- just showing you how to draw a line with an empty div -->
<div id="delimiter"></div>
<!-- get the footer now as well. THis wil lclose al lthe tags that opened in header.php -->
<?php get_footer(); ?>
