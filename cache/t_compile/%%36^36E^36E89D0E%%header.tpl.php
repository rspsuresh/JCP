<?php /* Smarty version 2.6.26, created on 2018-07-29 18:00:01
         compiled from core:common/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'core:common/header.tpl', 11, false),array('function', 'call_hook', 'core:common/header.tpl', 66, false),array('function', 'url', 'core:common/header.tpl', 115, false),array('modifier', 'assign', 'core:common/header.tpl', 11, false),array('modifier', 'replace', 'core:common/header.tpl', 20, false),array('modifier', 'escape', 'core:common/header.tpl', 22, false),)), $this); ?>
<?php echo ''; ?><?php if (! $this->_tpl_vars['pageTitleTranslated']): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageTitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated'));?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['pageCrumbTitle']): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageCrumbTitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageCrumbTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageCrumbTitleTranslated'));?><?php echo ''; ?><?php elseif (! $this->_tpl_vars['pageCrumbTitleTranslated']): ?><?php echo ''; ?><?php $this->assign('pageCrumbTitleTranslated', $this->_tpl_vars['pageTitleTranslated']); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=$this->_tpl_vars['defaultCharset'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<title><?php echo $this->_tpl_vars['pageTitleTranslated']; ?>
</title>
	<meta name="description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaSearchDescription'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<meta name="keywords" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['metaSearchKeywords'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<meta name="generator" content="<?php echo $this->_tpl_vars['applicationName']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['currentVersionString'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
    <?php echo $this->_tpl_vars['metaCustomHeaders']; ?>

    <?php if ($this->_tpl_vars['displayFavicon']): ?><link rel="icon" href="<?php echo $this->_tpl_vars['faviconDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayFavicon']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" type="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayFavicon']['mimeType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" /><?php endif; ?>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/pkp.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/compiled.css" type="text/css" />
	<!---aaded by suresh ---------------->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/newtheme.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/responsive.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/name.css" type="text/css" />
	<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>


	<!--<link rel="alternate" type="application/atom+xml" href="http://ojs3modern13.openjournalsystems.com/index.php/dja/gateway/plugin/WebFeedGatewayPlugin/atom">
	<link rel="alternate" type="application/rdf+xml" href="http://ojs3modern13.openjournalsystems.com/index.php/dja/gateway/plugin/WebFeedGatewayPlugin/rss">
	<link rel="alternate" type="application/rss+xml" href="http://ojs3modern13.openjournalsystems.com/index.php/dja/gateway/plugin/WebFeedGatewayPlugin/rss2">-->
	<!---end suresh section --->
	<!-- Base Jquery -->
    <?php if ($this->_tpl_vars['allowCDN']): ?><script type="text/javascript" src="//www.google.com/jsapi"></script>
		<script type="text/javascript"><?php echo '
            <!--
            // Provide a local fallback if the CDN cannot be reached
            if (typeof google == \'undefined\') {
                document.write(unescape("%3Cscript src=\''; ?>
<?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo '/lib/pkp/js/lib/jquery/jquery.min.js\' type=\'text/javascript\'%3E%3C/script%3E"));
                document.write(unescape("%3Cscript src=\''; ?>
<?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo '/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js\' type=\'text/javascript\'%3E%3C/script%3E"));
            } else {
                google.load("jquery", "'; ?>
<?php echo @CDN_JQUERY_VERSION; ?>
<?php echo '");
                google.load("jqueryui", "'; ?>
<?php echo @CDN_JQUERY_UI_VERSION; ?>
<?php echo '");
            }
            // -->
            '; ?>
</script>
    <?php else: ?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js"></script>
    <?php endif; ?>

    <?php echo ((is_array($_tmp=$this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::LeftSidebar"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'leftSidebarCode') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'leftSidebarCode'));?>

    <?php echo ((is_array($_tmp=$this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::RightSidebar"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'rightSidebarCode') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'rightSidebarCode'));?>

    <?php if ($this->_tpl_vars['leftSidebarCode'] || $this->_tpl_vars['rightSidebarCode']): ?><link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/sidebar.css" type="text/css" /><?php endif; ?>
    <?php if ($this->_tpl_vars['leftSidebarCode']): ?><link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/leftSidebar.css" type="text/css" /><?php endif; ?>
    <?php if ($this->_tpl_vars['rightSidebarCode']): ?><link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/rightSidebar.css" type="text/css" /><?php endif; ?>
    <?php if ($this->_tpl_vars['leftSidebarCode'] && $this->_tpl_vars['rightSidebarCode']): ?><link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/bothSidebars.css" type="text/css" /><?php endif; ?>

    <?php $_from = $this->_tpl_vars['stylesheets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cssUrl']):
?>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['cssUrl']; ?>
" type="text/css" />
    <?php endforeach; endif; unset($_from); ?>

	<!-- Default global locale keys for JavaScript -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/jsLocaleKeys.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<!-- Compiled scripts -->
    <?php if ($this->_tpl_vars['useMinifiedJavaScript']): ?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/js/pkp.min.js"></script>
    <?php else: ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/minifiedScripts.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

	<!-- Form validation -->
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/jquery/plugins/validate/jquery.validate.js"></script>
	<script type="text/javascript">
        <!--
        // initialise plugins
        <?php echo '
        $(function(){
            jqueryValidatorI18n("'; ?>
<?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo '", "'; ?>
<?php echo $this->_tpl_vars['currentLocale']; ?>
<?php echo '"); // include the appropriate validation localization
            '; ?>
<?php if ($this->_tpl_vars['validateId']): ?><?php echo '
            $("form[name='; ?>
<?php echo $this->_tpl_vars['validateId']; ?>
<?php echo ']").validate({
                errorClass: "error",
                highlight: function(element, errorClass) {
                    $(element).parent().parent().addClass(errorClass);
                },
                unhighlight: function(element, errorClass) {
                    $(element).parent().parent().removeClass(errorClass);
                }
            });
            '; ?>
<?php endif; ?><?php echo '
            $(".tagit").live(\'click\', function() {
                $(this).find(\'input\').focus();
            });
        });
        // -->
        '; ?>

	</script>

    <?php if ($this->_tpl_vars['hasSystemNotifications']): ?>
        <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'notification','op' => 'fetchNotification','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'fetchNotificationUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'fetchNotificationUrl'));?>

		<script type="text/javascript">
            $(function(){
                $.get('<?php echo $this->_tpl_vars['fetchNotificationUrl']; ?>
', null,
                    function(data){
                        var notifications = data.content;
                        var i, l;
                        if (notifications && notifications.general) {
                            $.each(notifications.general, function(notificationLevel, notificationList) {
                                $.each(notificationList, function(notificationId, notification) {
                                    $.pnotify(notification);
                                    });
                                });
                            }
                        }, 'json');
                });
		</script>
    <?php endif; ?>
    <?php echo $this->_tpl_vars['additionalHeadData']; ?>

</head>
<style>
	.innerHeaderWrp </style>
<body class="pkp_page_index pkp_op_index has_site_logo"  id="pkp-<?php echo ((is_array($_tmp=$this->_tpl_vars['pageTitle'])) ? $this->_run_mod_handler('replace', true, $_tmp, '.', '-') : smarty_modifier_replace($_tmp, '.', '-')); ?>
">
<div class="pkp_structure_page">
	<nav id="accessibility-nav" class="sr-only" role="navigation" aria-labelled-by="accessible-menu-label">
		<h2 id="accessible-menu-label">
			##plugins.themes.bootstrap3.accessible_menu.label##
		</h2>
		<ul>
			<li><a href="#main-navigation">##plugins.themes.bootstrap3.accessible_menu.main_navigation##</a></li>
			<li><a href="#main-content">##plugins.themes.bootstrap3.accessible_menu.main_content##</a></li>
			<li><a href="#sidebar">##plugins.themes.bootstrap3.accessible_menu.sidebar##</a></li>
		</ul>
	</nav>
	<label for="menuOnTop">
		<i class="fa fa-bars" aria-hidden="true"></i>
		<i class="fa fa-times" aria-hidden="true"></i>
	</label>
	<header class="navbar navbar-default bcdimge" id="headerNavigationContainer" role="banner">
		<div class="innerHeaderWrp">
			<div class="mainNavigation">
				<div class="navbar-header">
					<a href="#">
						<img src="http://ojs3modern13.openjournalsystems.com/public/journals/7/pageHeaderLogoImage_en_US.png" alt="D" class="img-responsive">
					</a>
				</div>
			</div>
			<div id="primaryMenuWrp">
				<ul id="main-navigation" class="nav navbar-nav ">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/navbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</ul>
			</div>
		</div> <!-- close innerHeaderWrp -->
	</header><!-- .pkp_structure_head -->
	<div class="pkp_structure_content container" id="mainContainer">
		<main class="pkp_structure_main col-md-9" role="main">
			<div id="main-content" class="page_index_journal" role="content">
				<div id="newsslide" style="">
					<div class="carousel-inner" role="listbox">
						<div id="latestnews-53" class="item active">
							<div id="latestnews-title">Recent News</div>
							<div id="latestnews-content">
								<a class="action" href="#"><strong>Test Article A: Lorem ipsum dolor sit amet, consectetur adipiscing elit. </strong></a></div>
						</div>
					</div>
				</div>
			</div><!-- .page -->
		</main>
	</div>
</div>
<!--<script src="odc_files/jquery_002.js" type="text/javascript"></script><script src="odc_files/jquery-ui.js" type="text/javascript"></script><script src="odc_files/jquery.js" type="text/javascript"></script><script src="odc_files/bootstrap.js" type="text/javascript"></script><script src="odc_files/article.js" type="text/javascript"></script><script id="esdfd513251" type="text/javascript" src="odc_files/article_002.js"></script><script src="odc_files/api.js" type="text/javascript"></script>-->
<style type="text/css">
	#customblock-newssection </style>
<div id="body" style="margin-top:80px">
	<div id="content">