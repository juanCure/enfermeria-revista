<?php /* Smarty version 2.6.25-dev, created on 2018-04-12 11:40:18
         compiled from controllers/grid/eventLog/eventLogGridFilter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/eventLog/eventLogGridFilter.tpl', 14, false),array('function', 'csrf', 'controllers/grid/eventLog/eventLogGridFilter.tpl', 15, false),array('function', 'fbvElement', 'controllers/grid/eventLog/eventLogGridFilter.tpl', 18, false),array('block', 'fbvFormArea', 'controllers/grid/eventLog/eventLogGridFilter.tpl', 16, false),array('block', 'fbvFormSection', 'controllers/grid/eventLog/eventLogGridFilter.tpl', 17, false),)), $this); ?>
<script type="text/javascript">
	// Attach the form handler to the form.
	$('#eventLogFilterForm').pkpHandler('$.pkp.controllers.form.ToggleFormHandler');
</script>
<form class="pkp_form" id="eventLogFilterForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'fetchGrid'), $this);?>
" method="post">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'allEventsFilterArea')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'allEvents','checked' => $this->_tpl_vars['filterSelectionData']['allEvents'],'label' => "submission.informationCenter.history.allEvents",'size' => $this->_tpl_vars['fbvStyles']['size']['LARGE']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>