<?php
// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
$params = $this->form->getFieldsets('params');
?>
<form action="<?php echo JRoute::_('index.php?option=com_sportsmanagement&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" >
 
	
 
<div class="col50">
		<?php
echo JHTML::_('tabs.start','tabs', array('useCookie'=>1));
echo JHTML::_('tabs.panel',JText::_('COM_SPORTSMANAGEMENT_TABS_DETAILS'), 'panel1');
echo $this->loadTemplate('details');
echo JHTML::_('tabs.panel',JText::_('COM_SPORTSMANAGEMENT_TABS_PICTURE'), 'panel2');
echo $this->loadTemplate('picture');


// echo JHTML::_('tabs.panel',JText::_('COM_SPORTSMANAGEMENT_TABS_PARAM'), 'panel3');
// echo $this->loadTemplate('param');
// echo JHTML::_('tabs.panel',JText::_('COM_SPORTSMANAGEMENT_TABS_GPARAM'), 'panel4');
// echo $this->loadTemplate('gparam');


echo JHTML::_('tabs.end');
		?>
	</div>		
  	
 
	<div>
		<input type="hidden" name="task" value="statistic.edit" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>