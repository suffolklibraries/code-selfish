<?php
// This file checks for the page slug
// If conditions are matched it'll display a submenu
?>

<?php if ( is_page( array( 'presents', 'about-suffolk-libraries-presents' ) ) ) { ?>

    <?php wp_nav_menu( array( 'theme_location' => 'presents-menu', 'container' => false, 'menu_class' => 'bg bg-text bg-dark inline-nav text-center sub-nav' ) ); ?>

<?php } ?>
