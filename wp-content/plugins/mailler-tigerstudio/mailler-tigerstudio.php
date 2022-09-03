<?php
/**
 * Plugin Name:     Mailler Tigerstudio
 * Description:     This is a plugin that supports sending mail
 * Author:          Hai Huynh - Tigergentlemen
 * Author URI:      https://tigergentlemen.com
 * Text Domain:     mailler-tigerstudio
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Mailler_Tigerstudio
 */

// Your code starts here.
require 'MailConfig.php';

function tg_sent_email ($mailTo, $bodyContent, $subject): bool
{
	$mailler = new MailConfig('info@tigergentlemen.com');

	return $mailler->sendMail($mailTo, $bodyContent, $subject, $bodyContent);
}
