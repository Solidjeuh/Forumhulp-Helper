<?php
/**
*
* @package Forumhulp Helper
* @copyright (c) 2015 ForumHulp.com
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
* @license Proprietary
*
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
    'FH_DISABLE_ALL'		=> 'Schakel alle extensies uit',
	
	'LOG_CORE_INSTALLED'	=> '<strong>Forumhulp Helper</strong><br />» Bestanden succesvol gewijzigd',
	'LOG_CORE_DEINSTALLED'	=> '<strong>Forumhulp Helper</strong><br />» Bestanden succesvol hersteld',
	'LOG_CORE_NOT_REPLACED'	=> '<strong>Forumhulp Helper</strong><br />» Kan bestand(en) niet vervangen<br />» %s',
	'LOG_CORE_NOT_UPDATED'	=> '<strong>Forumhulp Helper</strong><br />» Kan bestand(en) niet updaten<br />» %s',

	'ERROR_DISABLE'			=> 'U kan Forumhulp Helper niet uitschakelen wegens actieve Forumhulp extensies<br /><div style="margin: 0px auto; width: 50%%; text-align: left;">» %s</div>'
));
