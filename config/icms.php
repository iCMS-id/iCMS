<?php 

return [
	'template' => [
		'admin' => 'layouts.base.admin',
		'web'	=> 'layouts.base.web',
	],
	'package_path' => 'package',
	'menu' => [
		'admin' => [
			'container' => 'layouts.menu.admin.container',
			'parent'	=> 'layouts.menu.admin.parent',
			'child'		=> 'layouts.menu.admin.child',
		],
		'web' => [
			'container' => 'layouts.menu.web.container',
			'parent'	=> 'layouts.menu.web.parent',
			'child'		=> 'layouts.menu.web.child',
		],
	],
];