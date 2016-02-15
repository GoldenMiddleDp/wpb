<?php
register_sidebar(array(
        'name' => __('Sidebar', 'MDGM'),
        'description' => __('Widget field one', 'MDGM'),
        'id' => 'widget-one',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
register_sidebar(array(
        'name' => __('WooSidebar', 'MDGM'),
        'description' => __('Widget field one', 'MDGM'),
        'id' => 'widget-two',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));