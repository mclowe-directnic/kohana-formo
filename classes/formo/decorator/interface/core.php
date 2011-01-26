<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Formo Decorator interface
 *
 * @package   Formo
 * @category  Decorators
 */
interface Formo_Decorator_Interface_Core {

	public static function factory(Formo_Container $container, Formo_Driver $driver);
	public function __construct(Formo_Container $container, Formo_Driver $driver);
	public function pre_render();
	public function generate($view, $prefix);
	public function name();

}