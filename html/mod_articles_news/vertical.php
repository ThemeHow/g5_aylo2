<?php
/**
 * @package   Gantry 5 Theme
 * @author    szoupi http://szoupi.com
 * @copyright Copyright (C) 2015 - 2016 szoupi
 * @copyright Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license   GNU/GPLv2 and later
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

defined('_JEXEC') or die;
?>
<ul class="newsflash-vert<?php echo $params->get('moduleclass_sfx'); ?>">

	<?php for ($i = 0, $n = count($list); $i < $n; $i ++) : ?>
		<?php $item = $list[$i]; ?>
		
		<!-- SHOW EACH ITEM -->
		<div class="newsflash-item">
			<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
			
			<!-- SHOW LAST SEPERATOR -->
			<?php if ($n > 1 && (($i < $n - 1) || $params->get('showLastSeparator'))) : ?>
				<!-- <span class="article-separator">&#160;</span> -->
				<hr>
			<?php endif; ?>
		</div>
	<?php endfor; ?>
	
</ul>
