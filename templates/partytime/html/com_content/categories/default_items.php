<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$class = ' class="first"';
JHtml::_('bootstrap.tooltip');
$lang	= JFactory::getLanguage();

//die(var_dump($this->items));
if (count($this->items[$this->parent->id]) > 0 && $this->maxLevelcat != 0) :
?>
	<?php foreach($this->items[$this->parent->id] as $id => $item) : ?>
		<?php
		if ($this->params->get('show_empty_categories_cat') || $item->numitems || count($item->getChildren())) :
		if (!isset($this->items[$this->parent->id][$id + 1]))
		{
			$class = ' class="last"';
		}
		?>
		<div <?php echo $class; ?> >
		<?php $class = ''; ?>
			<!--<h3 class="page-header item-title">-->
				<a href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute($item->id));?>" class="category">
					
					<?php if ($this->params->get('show_description_image') && $item->getParams()->get('image')) : ?>
						<figure>
							<img src="<?php echo $item->getParams()->get('image'); ?>" alt="<?php echo $this->escape($item->title); ?>" />
						</figure>
					<?php endif; ?>
	
	                
				<span><?php echo $this->escape($item->title); ?></span></a>
				<?php if ($this->params->get('show_cat_num_articles_cat') == 1) :?>
					<span class="badge badge-info tip hasTooltip" title="<?php echo JHtml::tooltipText('COM_CONTENT_NUM_ITEMS'); ?>">
						<?php echo $item->numitems; ?>
					</span>
				<?php endif; ?>
				<?php if (count($item->getChildren()) > 0 && $this->maxLevelcat > 1) : ?>
					<a href="#category-<?php echo $item->id;?>" data-toggle="collapse" data-toggle="button" class="btn btn-mini pull-right"><span class="icon-plus"></span></a>
				<?php endif;?>
			<!--</h3>-->
			
			<?php if ($this->params->get('show_subcat_desc_cat') == 1) :?>
				<?php if ($item->description) : ?>
					<div class="category-desc">
						<?php echo JHtml::_('content.prepare', $item->description, '', 'com_content.categories'); ?>
					</div>
				<?php endif; ?>
			<?php endif; ?>

			<?php if (count($item->getChildren()) > 0 && $this->maxLevelcat > 1) :?>
				<div class="collapse fade" id="category-<?php echo $item->id;?>">
				<?php
				$this->items[$item->id] = $item->getChildren();
				$this->parent = $item;
				$this->maxLevelcat--;
				echo $this->loadTemplate('items');
				$this->parent = $item->getParent();
				$this->maxLevelcat++;
				?>
				</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>