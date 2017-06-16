<?php
/**
 *
 * @package       QuickReply Reloaded
 * @copyright (c) 2014 - 2017 Tatiana5 and LavIgor
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// PLURALS-START
	'NOTIFICATION_QUICKNICK' => array(
		1 => '<strong>Mentioned</strong> by %1$s in the message:',
	),
	// PLURALS-END

	'NOTIFICATION_TYPE_QUICKNICK' => 'Du wurdest erwähnt in der Nachricht ',

	'QR_BBPOST' => 'Ursprung des Beitrags',
));
