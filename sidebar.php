<div id="sidebar-primary" class="sidebar">
    <!-- check  to see if the sidebar is active; if it is,
         grab the content. If not, just make an empty block with
       some useless placeholder text. -->    
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>

	<?php dynamic_sidebar( 'primary' ); ?>

    <?php else : ?>

	<div id="sidebar">
            <h2 class="sidebartitle">Here is the Sidebar</h2>          
        </div>

    <?php endif; ?>	

</div>
