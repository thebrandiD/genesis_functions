<?php

    //Functions for brandiD starter theme

    //* BrandiD Footer
    remove_action( 'genesis_footer', 'genesis_do_footer' );
    add_action( 'genesis_footer', 'sp_custom_footer' );
    function sp_custom_footer() {
    ?>
    <p>&copy;2014 CLIENT NAME. All Rights Reserved.</p><img src="http://www.thebrandid.com/wp-content/uploads/2014/10/brandid_logo.png" width="60" style="float: right; margin-top: -20px;">
    <?php
    }

    //* Adding shortcodes to widget areas
    add_filter('widget_text', 'do_shortcode');

    //* Register widget areas
    genesis_register_sidebar( array(
        'id'          => 'homepage-banner',
        'name'        => __( 'Homepage Banner', 'brandid' ),
        'description' => __( 'This is the banner widget area on the homepage.', 'brandid' ),
    ) );

    genesis_register_sidebar( array(
        'id'          => 'homepage-cta',
        'name'        => __( 'Homepage CTA', 'brandid' ),
        'description' => __( 'This is the homepage call to action widget area.', 'brandid' ),
    ) );

    genesis_register_sidebar( array(
        'id'          => 'homepage-content',
        'name'        => __( 'Homepage Content', 'brandid' ),
        'description' => __( 'This is the homepage content widget area.', 'brandid' ),
    ) );