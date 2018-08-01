<style>
	hr
	{
		display: none !important;
	}
</style>
</div></div><!-- container -->
{if $displayCreativeCommons}
    {translate key="common.ccLicense"}
{/if}
{call_hook name="Templates::Common::Footer::PageFooter"}
{if $pageFooter}
	<br><br><br>
	<div id="innerHeaderWrp" class="container-fluid" style="background: #E0E0E0;background: #E0E0E0;
    position: fixed;
    width: 100%;
    bottom: 0;">
		<div class="container">
            {$pageFooter}
		</div>
	</div>
{/if}
{get_debug_info}
{if $enableDebugStats}{include file=$pqpTemplate}{/if}
</body>
</html>
