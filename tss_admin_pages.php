<?php


add_action('admin_menu','tss_admin_menupage');
function tss_admin_menupage(){

	add_menu_page( 'Testimonial Slider', "Testimonial Slider",'administrator', 'tss_slider','TssFrontpageUI','dashicons-admin-plugins');
}