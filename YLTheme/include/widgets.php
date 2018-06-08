<?php

function yl_widgets() {
    register_sidebar( 
        array(
            'id' => 'yl_sidebar',
            'name' => 'Main Sidebar',
            'description' => 'Main Sidebar for YLTheme',
            'class' => '',
        )
    );
}

?>