<?php /* Smarty version 2.6.26, created on 2018-07-28 16:26:57
         compiled from core:common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'core:common/footer.tpl', 7, false),array('function', 'call_hook', 'core:common/footer.tpl', 9, false),array('function', 'get_debug_info', 'core:common/footer.tpl', 21, false),)), $this); ?>
<style>
	hr
	</style>
</div></div><!-- container -->
<?php if ($this->_tpl_vars['displayCreativeCommons']): ?>
    <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.ccLicense"), $this);?>

<?php endif; ?>
<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>

<?php if ($this->_tpl_vars['pageFooter']): ?>
	<br><br><br>
	<div id="innerHeaderWrp" class="container-fluid" style="background: #E0E0E0;background: #E0E0E0;
    position: fixed;
    width: 100%;
    bottom: 0;">
		<div class="container">
            <?php echo $this->_tpl_vars['pageFooter']; ?>

		</div>
	</div>
<?php endif; ?>
<?php echo $this->_plugins['function']['get_debug_info'][0][0]->smartyGetDebugInfo(array(), $this);?>

<?php if ($this->_tpl_vars['enableDebugStats']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['pqpTemplate'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
</body>
</html>