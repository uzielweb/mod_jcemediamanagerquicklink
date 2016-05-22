<?php
/**
 * @copyright	Copyright (c) 2015 Ponto mega. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;
defined('_JEXEC') or die;
JHtml::_('behavior.modal');

require_once(JPATH_ADMINISTRATOR . '/components/com_jce/helpers/browser.php');

$language = JFactory::getLanguage();
$language->load('com_jce', JPATH_ADMINISTRATOR);
$icon = 'header/icon-48-media.png';

$link = WFBrowserHelper::getBrowserLink('', $filter);
echo '<p><a href="'.$link.'" class="modal button btn btn-small" rel="{handler: \'iframe\', size: {x: 875, y: 550}, onClose: function() {}}">'.'<i class="icon-pictures"></i>'.JText::_('WF_QUICKICON_BROWSER').'</a></p>';
?>
