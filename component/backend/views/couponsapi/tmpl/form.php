<?php
/**
 *  @package AkeebaSubs
 *  @copyright Copyright (c)2010-2013 Nicholas K. Dionysopoulos
 *  @license GNU General Public License version 3, or later
 */

defined('_JEXEC') or die();

JHtml::_('behavior.tooltip');
if(version_compare(JVERSION, '3.0', 'ge')) {
	JHTML::_('behavior.framework');
} else {
	JHTML::_('behavior.mootools');
}
?>
<form action="index.php" method="post" name="adminForm" id="adminForm" class="form form-horizontal">
	<input type="hidden" name="option" value="com_akeebasubs" />
	<input type="hidden" name="view" value="couponsapi" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="akeebasubs_couponsapi_id" value="<?php echo $this->item->akeebasubs_couponsapi_id ?>" />
	<input type="hidden" name="<?php echo JFactory::getSession()->getFormToken();?>" value="1" />

	<div class="row-fluid">
		<div class="span6">
			<h3><?php echo JText::_('COM_AKEEBASUBS_COUPON_BASIC_TITLE')?></h3>

			<div class="control-group">
				<label for="title_field" class="control-label">
					<?php echo  JText::_('COM_AKEEBASUBS_COUPON_FIELD_TITLE'); ?>
				</label>
				<div class="controls">
					<input type="text" size="30" id="title_field" name="title" value="<?php echo  $this->escape($this->item->title) ?>" />
				</div>
			</div>
			<div class="control-group">
				<label for="key_field" class="control-label">
					<?php echo  JText::_('COM_AKEEBASUBS_COUPONSAPIS_KEY'); ?>
				</label>
				<div class="controls">
					<input type="text" size="25" id="key_field" name="key" value="<?php echo  $this->escape($this->item->key) ?>" />
				</div>
			</div>
			<div class="control-group">
				<label for="password_field" class="control-label">
					<?php echo  JText::_('COM_AKEEBASUBS_COUPONSAPIS_PWD'); ?>
				</label>
				<div class="controls">
					<input type="text" size="20" id="password_field" name="value" value="<?php echo  $this->escape($this->item->password) ?>" />
				</div>
			</div>
			<div class="control-group">
				<label for="enabled" class="control-label">
					<?php echo JText::_('JPUBLISHED'); ?>
				</label>
				<div class="controls">
					<?php echo JHTML::_('select.booleanlist', 'enabled', null, $this->item->enabled); ?>
				</div>
			</div>
		</div>
	</div>
</form>