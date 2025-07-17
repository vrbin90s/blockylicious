<?php
// This file is generated. Do not modify it manually.
return array(
	'clickyButton' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'blockylicious/clicky-button',
		'version' => '0.1.0',
		'title' => 'Clicky Button',
		'category' => 'blockylicious',
		'icon' => 'smiley',
		'description' => 'A call to action button that links to particular page or post rather to the hardcoded URL',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'text' => true,
				'link' => false,
				'gradients' => true,
				'enableContrastChecker' => true
			),
			'spacing' => array(
				'padding' => true
			)
		),
		'attributes' => array(
			'postType' => array(
				'type' => 'string',
				'default' => ''
			),
			'linkedPost' => array(
				'type' => 'number'
			),
			'labelText' => array(
				'type' => 'string',
				'default' => ''
			),
			'style' => array(
				'type' => 'object',
				'default' => array(
					'color' => array(
						'background' => '#000',
						'text' => '#fff'
					),
					'spacing' => array(
						'padding' => array(
							'top' => '15px',
							'bottom' => '15px',
							'left' => '15px',
							'right' => '15px'
						)
					)
				)
			)
		),
		'textdomain' => 'blockylicious',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'parent' => array(
			'blockylicious/clicky-group'
		)
	),
	'clickyGroup' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'blockylicious/clicky-group',
		'version' => '0.1.0',
		'title' => 'Clicky Group',
		'category' => 'blockylicious',
		'icon' => 'smiley',
		'description' => 'A group of clicky buttons that link to particulal post or page rather than hardcoding the destination url',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'spacing' => array(
				'blockGap' => true
			)
		),
		'attributes' => array(
			'justifyContent' => array(
				'type' => 'string',
				'enum' => array(
					'left',
					'center',
					'right'
				),
				'default' => 'left'
			)
		),
		'textdomain' => 'blockylicious',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'render' => 'file:./render.php'
	),
	'curvy' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'blockylicious/curvy',
		'version' => '0.1.0',
		'title' => 'Curvy',
		'category' => 'blockylicious',
		'icon' => 'smiley',
		'description' => 'Curvy shape divider to make dividing page content more interesting',
		'example' => array(
			'innerBlocks' => array(
				array(
					'name' => 'core/heading',
					'attributes' => array(
						'content' => 'Lorem Ipsum'
					)
				),
				array(
					'name' => 'core/paragraph',
					'attributes' => array(
						'content' => 'This is an example curvy block'
					)
				)
			)
		),
		'supports' => array(
			'html' => false,
			'color' => array(
				'background' => true,
				'link' => true,
				'text' => true
			),
			'spacing' => array(
				'padding' => true
			)
		),
		'variations' => array(
			array(
				'name' => 'top-only',
				'title' => 'Curvy - Top only',
				'attributes' => array(
					'enableBottomCurve' => false,
					'enableTopCurve' => true
				)
			),
			array(
				'name' => 'bottom-only',
				'title' => 'Curvy - Bottom only',
				'attributes' => array(
					'enableBottomCurve' => true,
					'enableTopCurve' => false
				)
			)
		),
		'attributes' => array(
			'style' => array(
				'type' => 'object',
				'default' => array(
					'color' => array(
						'background' => '#ec4899'
					),
					'spacing' => array(
						'padding' => array(
							'top' => '80px',
							'bottom' => '80px',
							'left' => '50px',
							'right' => '50px'
						)
					)
				)
			),
			'enableTopCurve' => array(
				'type' => 'boolean',
				'default' => true
			),
			'topWidth' => array(
				'type' => 'number',
				'default' => 100
			),
			'topHeight' => array(
				'type' => 'number',
				'default' => 100
			),
			'topFlipX' => array(
				'type' => 'boolean',
				'default' => false
			),
			'topFlipY' => array(
				'type' => 'boolean',
				'default' => false
			),
			'topColor' => array(
				'type' => 'string',
				'default' => '#FFFFFF'
			),
			'enableBottomCurve' => array(
				'type' => 'boolean',
				'default' => true
			),
			'bottomWidth' => array(
				'type' => 'number',
				'default' => 100
			),
			'bottomHeight' => array(
				'type' => 'number',
				'default' => 100
			),
			'bottomFlipX' => array(
				'type' => 'boolean',
				'default' => false
			),
			'bottomFlipY' => array(
				'type' => 'boolean',
				'default' => false
			),
			'bottomColor' => array(
				'type' => 'string',
				'default' => '#FFFFFF'
			)
		),
		'textdomain' => 'blockylicious',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'render' => 'file:./render.php'
	),
	'piccyGallery' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'blockylicious/piccy-gallery',
		'version' => '0.1.0',
		'title' => 'Piccy Gallery',
		'category' => 'blockylicious',
		'icon' => 'images-alt2',
		'description' => 'An interactive image gallery',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'blockylicious',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./script.js',
		'render' => 'file:./render.php'
	),
	'piccyImage' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'blockylicious/piccy-image',
		'version' => '0.1.0',
		'title' => 'Piccy Image',
		'category' => 'blockylicious',
		'icon' => 'format-image',
		'description' => 'An image to render within the Piccy Gallery',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'imageId' => array(
				'type' => 'number'
			)
		),
		'textdomain' => 'blockylicious',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'parent' => array(
			'blockylicious/piccy-gallery'
		)
	)
);
