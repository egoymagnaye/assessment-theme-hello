<?php
/**
 * Helper methods
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class EM_Theme_Utilities {


	/**
	 * Hooks and methods initiatilization.
	 *
	 */
	public function __construct(){

		//add_action( 'hook', array( $this, 'method_name' ) );

		register_nav_menus(
			array(
				'menu3' => __( 'Footer 2' )
			)
		);

	}


	/**
	 * Method description
	 *
	 */	
	public function method_name(){	
	
		// Method

	}


}

new EM_Theme_Utilities();