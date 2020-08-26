<?php

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5f462ad5b88b4',
		'title' => 'Redirect Hub - Post Options',
		'fields' => array(
			array(
				'key' => 'field_5f462afdfabf2',
				'label' => 'Links',
				'name' => 'apt-redirect-hub-urls',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => 'field_5f462b1ffabf3',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => 'Adicionar URL',
				'sub_fields' => array(
					array(
						'key' => 'field_5f462b1ffabf3',
						'label' => 'Nome',
						'name' => 'name',
						'type' => 'text',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '30',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5f462b6afabf4',
						'label' => 'url',
						'name' => 'url',
						'type' => 'url',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '70',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'hub-redirect-post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	endif;

	?>