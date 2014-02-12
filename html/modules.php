<?php
/**
 * $Id: modules.php 5 2013-10-07 05:14:16Z thongta $
 * @package		Speedy Joomla Template - the fastest and simplest Joomla Template ever
 * @author		Thong Tran - joomlaspeedy.com
 * @copyright	(C) 2003 JoomlaSpeedy.com
 * @license		GNU/GPL
 */

defined('_JEXEC') or die;

function modChrome_standard($module, &$params, &$attribs){
	if (!empty ($module->content)): ?>
		<div class="block" style"none">
		<?php if ($module->showtitle != 0) : ?>
			<h1><?php echo $module->title; ?></h1>
		<?php endif; ?>
			<?php echo $module->content; ?>
		</div>
	<?php endif;
}

function modChrome_no($module, &$params, &$attribs)
{
	if ($module->content)
	{
		echo $module->content;
	}
}

function modChrome_well($module, &$params, &$attribs)
{
	if ($module->content)
	{
		echo "<div class=\"well " . htmlspecialchars($params->get('moduleclass_sfx')) . "\">";
		if ($module->showtitle)
		{
			echo "<h3 class=\"page-header\">" . $module->title . "</h3>";
		}
		echo $module->content;
		echo "</div>";
	}
}
