<?php
	return [
		'' => [
			'controller' => 'main',
			'action' => 'index',
		],
		'about' => [
			'controller' => 'about',
			'action' => 'index',
		],
		'conditions(\?([a-z]+)=([0-9]+)&([a-z]+)=([0-9]+)&([a-z]+)=([0-9]+))*' => [
			'controller' => 'conditions',
			'action' => 'index',
		],
		'news' => [
			'controller' => 'news',
			'action' => 'showAll',
		],
		'news/show/([0-9]+)$' => [
			'controller' => 'news',
			'action' => 'showOne',
		],
		'questionare' => [
			'controller' => 'questionare',
			'action' => 'index',
		],
		'contacts' => [
			'controller' => 'contacts',
			'action' => 'index',
		],
		'account' => [
			'controller' => 'account',
			'action' => 'index',
		],
		'account/login' => [
			'controller' => 'account',
			'action' => 'login',
		],
		'account/register' => [
			'controller' => 'account',
			'action' => 'register',
		],
		'account/logout' => [
			'controller' => 'account',
			'action' => 'logout',
		],
	];