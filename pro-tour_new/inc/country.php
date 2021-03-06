<?php
add_action('init', 'register_post_types_country');
function register_post_types_country(){
	register_post_type('country', array(
		'label'  => 'country',
		'labels' => array(
			'name'               => 'Страны', // основное название для типа записи
			'singular_name'      => 'Страна', // название для одной записи этого типа
			'add_new'            => 'Добавить страну', // для добавления новой записи
			'add_new_item'       => 'Добавление страну', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование данных', // для редактирования типа записи
			'new_item'           => 'новая страна', // текст новой записи
			'view_item'          => 'Смотреть страну', // для просмотра записи этого типа.
			'search_items'       => 'Искать страну', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Страны', // название меню
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
		'menu_position'       => 9,
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
