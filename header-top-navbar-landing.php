<!-- Landing page navigation -->
<header class="banner navbar navbar-default navbar-static-top" role="banner">
    <div class="header-container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php echo ci_get_logo_html(); ?></a>
        </div>

        <nav class="collapse navbar-collapse" role="navigation">
            <?php
            if( has_nav_menu('landing_navigation') ) {
                wp_nav_menu(array('theme_location' => 'landing_navigation', 'menu_class' => 'nav navbar-nav'));
            }
            ?>
        </nav>
    </div>
</header>
