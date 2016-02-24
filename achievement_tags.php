<?php
// Register Custom Taxonomy
function wrdsb_achievement_tags() {

	$labels = array(
		'name'                       => _x( 'Achievement Tags', 'Taxonomy General Name', 'wrdsb_achievements' ),
		'singular_name'              => _x( 'Achievement Tag', 'Taxonomy Singular Name', 'wrdsb_achievements' ),
		'menu_name'                  => __( 'Achievement Tags', 'wrdsb_achievements' ),
		'all_items'                  => __( 'All Achievement Tags', 'wrdsb_achievements' ),
		'parent_item'                => __( 'Parent Tag', 'wrdsb_achievements' ),
		'parent_item_colon'          => __( 'Parent Tag:', 'wrdsb_achievements' ),
		'new_item_name'              => __( 'New Achievement Tag Name', 'wrdsb_achievements' ),
		'add_new_item'               => __( 'Add New Achievement Tag', 'wrdsb_achievements' ),
		'edit_item'                  => __( 'Edit Achievement Tag', 'wrdsb_achievements' ),
		'update_item'                => __( 'Update Achievement Tag', 'wrdsb_achievements' ),
		'view_item'                  => __( 'View Achievement Tag', 'wrdsb_achievements' ),
		'separate_items_with_commas' => __( 'Separate tags with commas', 'wrdsb_achievements' ),
		'add_or_remove_items'        => __( 'Add or remove tags', 'wrdsb_achievements' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wrdsb_achievements' ),
		'popular_items'              => __( 'Popular Tags', 'wrdsb_achievements' ),
		'search_items'               => __( 'Search Achievement Tags', 'wrdsb_achievements' ),
		'not_found'                  => __( 'Not Found', 'wrdsb_achievements' ),
		'no_terms'                   => __( 'No tags', 'wrdsb_achievements' ),
		'items_list'                 => __( 'Achievement Tags list', 'wrdsb_achievements' ),
		'items_list_navigation'      => __( 'Achievement Tags list navigation', 'wrdsb_achievements' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'wrdsb_achievement_tag', array( 'badge', 'achievement', 'certification', 'skill', 'quest', 'path', 'course-completion' ), $args );

}
add_action( 'init', 'wrdsb_achievement_tags', 0 );
