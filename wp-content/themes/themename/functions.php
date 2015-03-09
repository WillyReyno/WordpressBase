<?php
require_once('functions/wp_bootstrap_navwalker.php');

function register_my_menu() {
    register_nav_menu('principal',__( 'Menu Principal' ));
}
add_action( 'init', 'register_my_menu' );