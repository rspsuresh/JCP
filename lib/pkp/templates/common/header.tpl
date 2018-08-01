{**
 * header.tpl
 *
 * Copyright (c) 2013-2018 Simon Fraser University
 * Copyright (c) 2000-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site header.
 *}
{strip}
    {if !$pageTitleTranslated}{translate|assign:"pageTitleTranslated" key=$pageTitle}{/if}
    {if $pageCrumbTitle}
        {translate|assign:"pageCrumbTitleTranslated" key=$pageCrumbTitle}
    {elseif !$pageCrumbTitleTranslated}
        {assign var="pageCrumbTitleTranslated" value=$pageTitleTranslated}
    {/if}
{/strip}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset={$defaultCharset|escape}" />
	<title>{$pageTitleTranslated}</title>
	<meta name="description" content="{$metaSearchDescription|escape}" />
	<meta name="keywords" content="{$metaSearchKeywords|escape}" />
	<meta name="generator" content="{$applicationName} {$currentVersionString|escape}" />
    {$metaCustomHeaders}
    {if $displayFavicon}<link rel="icon" href="{$faviconDir}/{$displayFavicon.uploadName|escape:"url"}" type="{$displayFavicon.mimeType|escape}" />{/if}
	<link rel="stylesheet" href="{$baseUrl}/lib/pkp/styles/pkp.css" type="text/css" />
	<link rel="stylesheet" href="{$baseUrl}/lib/pkp/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="{$baseUrl}/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="{$baseUrl}/styles/compiled.css" type="text/css" />
	<!---aaded by suresh ---------------->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700" type="text/css" />
	<link rel="stylesheet" href="{$baseUrl}/lib/pkp/styles/newtheme.css" type="text/css" />
	<link rel="stylesheet" href="{$baseUrl}/lib/pkp/styles/responsive.css" type="text/css" />
	<link rel="stylesheet" href="{$baseUrl}/lib/pkp/styles/name.css" type="text/css" />
	<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>


	<!--<link rel="alternate" type="application/atom+xml" href="http://ojs3modern13.openjournalsystems.com/index.php/dja/gateway/plugin/WebFeedGatewayPlugin/atom">
	<link rel="alternate" type="application/rdf+xml" href="http://ojs3modern13.openjournalsystems.com/index.php/dja/gateway/plugin/WebFeedGatewayPlugin/rss">
	<link rel="alternate" type="application/rss+xml" href="http://ojs3modern13.openjournalsystems.com/index.php/dja/gateway/plugin/WebFeedGatewayPlugin/rss2">-->
	<!---end suresh section --->
	<!-- Base Jquery -->
    {if $allowCDN}<script type="text/javascript" src="//www.google.com/jsapi"></script>
		<script type="text/javascript">{literal}
            <!--
            // Provide a local fallback if the CDN cannot be reached
            if (typeof google == 'undefined') {
                document.write(unescape("%3Cscript src='{/literal}{$baseUrl}{literal}/lib/pkp/js/lib/jquery/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));
                document.write(unescape("%3Cscript src='{/literal}{$baseUrl}{literal}/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js' type='text/javascript'%3E%3C/script%3E"));
            } else {
                google.load("jquery", "{/literal}{$smarty.const.CDN_JQUERY_VERSION}{literal}");
                google.load("jqueryui", "{/literal}{$smarty.const.CDN_JQUERY_UI_VERSION}{literal}");
            }
            // -->
            {/literal}</script>
    {else}
		<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/lib/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js"></script>
    {/if}

    {call_hook|assign:"leftSidebarCode" name="Templates::Common::LeftSidebar"}
    {call_hook|assign:"rightSidebarCode" name="Templates::Common::RightSidebar"}
    {if $leftSidebarCode || $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/sidebar.css" type="text/css" />{/if}
    {if $leftSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/leftSidebar.css" type="text/css" />{/if}
    {if $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/rightSidebar.css" type="text/css" />{/if}
    {if $leftSidebarCode && $rightSidebarCode}<link rel="stylesheet" href="{$baseUrl}/styles/bothSidebars.css" type="text/css" />{/if}

    {foreach from=$stylesheets item=cssUrl}
		<link rel="stylesheet" href="{$cssUrl}" type="text/css" />
    {/foreach}

	<!-- Default global locale keys for JavaScript -->
    {include file="common/jsLocaleKeys.tpl" }

	<!-- Compiled scripts -->
    {if $useMinifiedJavaScript}
		<script type="text/javascript" src="{$baseUrl}/js/pkp.min.js"></script>
    {else}
        {include file="common/minifiedScripts.tpl"}
    {/if}

	<!-- Form validation -->
	<script type="text/javascript" src="{$baseUrl}/lib/pkp/js/lib/jquery/plugins/validate/jquery.validate.js"></script>
	<script type="text/javascript">
        <!--
        // initialise plugins
        {literal}
        $(function(){
            jqueryValidatorI18n("{/literal}{$baseUrl}{literal}", "{/literal}{$currentLocale}{literal}"); // include the appropriate validation localization
            {/literal}{if $validateId}{literal}
            $("form[name={/literal}{$validateId}{literal}]").validate({
                errorClass: "error",
                highlight: function(element, errorClass) {
                    $(element).parent().parent().addClass(errorClass);
                },
                unhighlight: function(element, errorClass) {
                    $(element).parent().parent().removeClass(errorClass);
                }
            });
            {/literal}{/if}{literal}
            $(".tagit").live('click', function() {
                $(this).find('input').focus();
            });
        });
        // -->
        {/literal}
	</script>

    {if $hasSystemNotifications}
        {url|assign:fetchNotificationUrl page='notification' op='fetchNotification' escape=false}
		<script type="text/javascript">
            $(function(){ldelim}
                $.get('{$fetchNotificationUrl}', null,
                    function(data){ldelim}
                        var notifications = data.content;
                        var i, l;
                        if (notifications && notifications.general) {ldelim}
                            $.each(notifications.general, function(notificationLevel, notificationList) {ldelim}
                                $.each(notificationList, function(notificationId, notification) {ldelim}
                                    $.pnotify(notification);
                                    {rdelim});
                                {rdelim});
                            {rdelim}
                        {rdelim}, 'json');
                {rdelim});
		</script>
    {/if}{* hasSystemNotifications *}

    {$additionalHeadData}
</head>
<style>
	.innerHeaderWrp {
		background: #c9d4cc url(http://promotionalcommunications.org/public/custom/header-bg.jpg) repeat fixed !important;
	}
</style>
<body class="pkp_page_index pkp_op_index has_site_logo"  id="pkp-{$pageTitle|replace:'.':'-'}">
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
                    {include file="common/navbar.tpl"}
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
	#customblock-newssection { display: none}
</style>
<div id="body" style="margin-top:80px">
	<div id="content">
