
<div id="sidebar-primary" class="sidebar">

	<?php if ( is_active_sidebar( 'primary' ) ) : ?>

		<?php dynamic_sidebar( 'primary' ); ?>

	<?php else : ?>

		<div id="sidebar">
          <h2 class="sidebartitle"><?php _e('Categories'); ?></h2>
          <ul class="list-cat">
            <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
          </ul>
  
          <h2 class="sidebartitle"><?php _e('Archives'); ?></h2>
          <ul class="list-archives">
            <?php wp_get_archives('type=monthly'); ?>
          </ul>
        </div><!-- Create some custom HTML or call the_widget().  It's up to you. -->

	<?php endif; ?>	

</div>
