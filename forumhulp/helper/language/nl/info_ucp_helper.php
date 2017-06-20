<?php
/**
*
* @package Forumhulp Helper
* @copyright (c) 2015 ForumHulp.com
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
* @license Proprietary
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge(
	$lang, array(
		'UCP_IR'				=> 'Afbeelding herschaler',
		'IMAGE_RESIZE'			=> 'Afbeelding herschaler',
		'IMAGE_RESIZE_EXPLAIN'	=> 'Knip je %1$s van de foto en bevestig.',
		// Your avatar will be saved with a height of %1$s pixels and a width of %2$s pixels.',

		'IMAGE_RESIZE_ERROR'	=> 'Geen app of bestand om te verzenden!',
		'IMAGERESIZE_NOTICE'	=> '<div class="phpinfo"><p class="entry">Deze module is verborgen en heeft geen configuratie opties. Maar herinnert je wel om de maximum upload in te stellen in het beheerderspaneel.</p></div>',
		'ERROR_IMAGERESIZE_DISABLE'	=> 'U kan Afbeelding herschaler niet uitschakelen wegens actieve extensies<br /><div class="phpinfo">» %s</div>',
	'FH_HELPER_NOTICE'				=> 'Forumhulp helper applicatie bestaat niet! !<br />Download <a href="https://github.com/ForumHulp/helper" target="_blank">forumhulp/helper</a> en upload de helper folder naar je forumhulp extensie folder.',
	)
);
