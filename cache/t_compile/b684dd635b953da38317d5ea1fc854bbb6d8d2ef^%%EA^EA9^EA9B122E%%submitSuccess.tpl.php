<?php /* Smarty version 2.6.25-dev, created on 2018-04-12 10:04:59
         compiled from file:/var/www/html/enfermeria/plugins/importexport/quickSubmit/templates/submitSuccess.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:/var/www/html/enfermeria/plugins/importexport/quickSubmit/templates/submitSuccess.tpl', 16, false),array('function', 'translate', 'file:/var/www/html/enfermeria/plugins/importexport/quickSubmit/templates/submitSuccess.tpl', 20, false),array('function', 'plugin_url', 'file:/var/www/html/enfermeria/plugins/importexport/quickSubmit/templates/submitSuccess.tpl', 23, false),array('modifier', 'assign', 'file:/var/www/html/enfermeria/plugins/importexport/quickSubmit/templates/submitSuccess.tpl', 16, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.importexport.quickSubmit.success"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'workflow','op' => 'access','stageId' => $this->_tpl_vars['stageId'],'submissionId' => $this->_tpl_vars['submissionId'],'contextId' => 'submission','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionUrl'));?>


<div class="pkp_page_content pkp_successQuickSubmit">
	<p>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.quickSubmit.successDescription"), $this);?>
  
	</p>
	<p> 
		<a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array(), $this);?>
">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.quickSubmit.successReturn"), $this);?>

		</a>
	</p>
	<p> 
		<a href="<?php echo $this->_tpl_vars['submissionUrl']; ?>
">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.quickSubmit.goToSubmission"), $this);?>

		</a>
	</p>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>