<?php
// Register Custom Taxonomy
function wrdsb_achievement_categories() {

	$labels = array(
		'name'                       => _x( 'Achievement Categories', 'Taxonomy General Name', 'wrdsb_achievements' ),
		'singular_name'              => _x( 'Achievement Category', 'Taxonomy Singular Name', 'wrdsb_achievements' ),
		'menu_name'                  => __( 'Achievement Categories', 'wrdsb_achievements' ),
		'all_items'                  => __( 'All Achievement Categories', 'wrdsb_achievements' ),
		'parent_item'                => __( 'Parent Category', 'wrdsb_achievements' ),
		'parent_item_colon'          => __( 'Parent Category:', 'wrdsb_achievements' ),
		'new_item_name'              => __( 'New Achievement Category Name', 'wrdsb_achievements' ),
		'add_new_item'               => __( 'Add New Achievement Category', 'wrdsb_achievements' ),
		'edit_item'                  => __( 'Edit Achievement Category', 'wrdsb_achievements' ),
		'update_item'                => __( 'Update Achievement Category', 'wrdsb_achievements' ),
		'view_item'                  => __( 'View Achievement Category', 'wrdsb_achievements' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'wrdsb_achievements' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'wrdsb_achievements' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wrdsb_achievements' ),
		'popular_items'              => __( 'Popular Categories', 'wrdsb_achievements' ),
		'search_items'               => __( 'Search Achievement Categories', 'wrdsb_achievements' ),
		'not_found'                  => __( 'Not Found', 'wrdsb_achievements' ),
		'no_terms'                   => __( 'No categories', 'wrdsb_achievements' ),
		'items_list'                 => __( 'Achievement Categories list', 'wrdsb_achievements' ),
		'items_list_navigation'      => __( 'Achievement Categories list navigation', 'wrdsb_achievements' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'wrdsb_achievement_category', array( 'badge', 'achievement', 'certification', 'skill', 'quest', 'path', 'course-completion' ), $args );

}
add_action( 'init', 'wrdsb_achievement_categories', 0 );
