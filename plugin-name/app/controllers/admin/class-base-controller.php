<?php
namespace Plugin_Name\App\Controllers\Admin;

use \Plugin_Name\Core\Controller;

/**
 * Defines/implements base methods for admin controller classes
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/controllers/admin
 */

if ( ! class_exists( __NAMESPACE__ . '\\' . 'Base_Controller' ) ) {
	abstract class Base_Controller extends Controller {

		/**
		 * Register callbacks for actions and filters. Most of your add_action/add_filter
		 * go into this method.
		 *
		 * NOTE: register_hook_callbacks method is not called automatically. You
		 * as a developer has to call this method where you see fit. For Example,
		 * You may want to call this in constructor, if you feel hooks/filters
		 * callbacks should be registered when the new instance of the class
		 * is created.
		 *
		 * The purpose of this method is to set the convention that first place to
		 * find add_action/add_filter is register_hook_callbacks method.
		 *
		 * @since    1.0.0
		 */
		abstract protected function register_hook_callbacks();
	}

}
