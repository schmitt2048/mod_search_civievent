<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_search_civievent
 * @copyright	Copyright (C) 2013. Andrew Schmitt. Based on Joomla mod_search for Open Source Matters. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

/**
 * @package		Joomla.Site
 * @subpackage	mod_search_civievent
 * @since		1.5
 */
class modSearchCivieventHelper
{
	/**
	 * Display the search button as an image.
	 *
	 * @param	string	$button_text	The alt text for the button.
	 *
	 * @return	string	The HTML for the image.
	 * @since	1.5
	 */
	public static function getSearchImage($button_text)
	{
		$img = JHtml::_('image', 'searchButton.gif', $button_text, NULL, true, true);
		return $img;
	}
}
