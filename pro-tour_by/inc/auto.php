<?php
add_action('init', 'register_post_types');
function register_post_types_au(){
	register_post_type('auto', array(
		'label'  => 'auto',
		'labels' => array(
			'name'               => 'Автобусные туры', // основное название для типа записи
			'singular_name'      => 'Автобусный тур', // название для одной записи этого типа
			'add_new'            => 'Добавить автобусный тур', // для добавления новой записи
			'add_new_item'       => 'Добавление автобусного тура', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование автобусного тура', // для редактирования типа записи
			'new_item'           => 'новый автобусный тур', // текст новой записи
			'view_item'          => 'Смотреть автобусный тур', // для просмотра записи этого типа.
			'search_items'       => 'Искать автобусный тур', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Автобусные туры', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'show_ui'             => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 8,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

?>
