<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases =
	[
		'csrf'			=> \CodeIgniter\Filters\CSRF::class,
		'toolbar'		=> \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot'		=> \CodeIgniter\Filters\Honeypot::class,
		'IfLoggedIn'	=> \App\Filters\IfLoggedIn::class,
		'IfNotLoggedIn'	=> \App\Filters\IfNotLoggedIn::class,
		'throttle'		=> \App\Filters\Throttle::class,
	];

	// Always applied before every request
	public $globals =
	[
		'before' =>
		[
			'honeypot',
			'csrf',
			'throttle',
			'IfLoggedIn' => ['except' => 'login'],
		],
		
		'after'  =>
		[
			'toolbar',
			'honeypot',
		],
	];

	// Works on all of a particular HTTP method
	// (GET, POST, etc) as BEFORE filters only
	//     like: 'post' => ['CSRF', 'throttle'],
	public $methods = [];

	// List filter aliases and any before/after uri patterns
	// that they should run on, like:
	//    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
	public $filters = [];
}
