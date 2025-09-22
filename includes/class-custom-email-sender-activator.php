<?php
/**
 * Fired during plugin activation
 *
 * @link https://kallisteo.com
 * @since 1.0.0
 *
 * @package Custom_Email_Sender
 * @subpackage Custom_Email_Sender/includes
*/

/**
 * Class `Custom_Email_Sender_Activator`
 * This class defines all code necessary to run during the plugin's activation
 * @since 1.0.0
 * @package Custom_Email_Sender
 * @subpackage Custom_Email_Sender/includes
 * @author Kallisteo <contact@kallisteo.com>
*/
class Custom_Email_Sender_Activator
{
	/**
	 * Activate plugin
	 * @since 1.0.0
	*/
	public static function activate()
	{
		$option = add_option('_custom_email_sender', false);
	}
}

?>