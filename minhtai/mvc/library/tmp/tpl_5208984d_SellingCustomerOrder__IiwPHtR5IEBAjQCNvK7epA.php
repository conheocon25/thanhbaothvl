<?php 
function tpl_5208984d_SellingCustomerOrder__IiwPHtR5IEBAjQCNvK7epA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "div" from line 1 */ ;
?>
<div data-role="page">
	<?php /* tag "div" from line 2 */; ?>
<div data-role="header" data-theme="d">
		<?php /* tag "h1" from line 3 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
		<?php /* tag "a" from line 4 */; ?>
<a href="#" data-icon="back" data-rel="back" data-role="button">Lui</a>
	</div>
	<?php /* tag "div" from line 6 */; ?>
<div data-role="content" data-theme="a">
		<?php 
/* tag "form" from line 7 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->OED, 'getURLDelExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form data-ajax="false" method="post" class="ui-body ui-body-a ui-corner-all"<?php echo $_tmp_1 ?>
>
			<?php /* tag "button" from line 8 */; ?>
<button type="submit" data-theme="b" data-icon="check" name="submit" value="submit-value">Đồng ý</button>
		</form>
	</div>	
</div><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/spnsoft/public_html/minhtai/mvc/templates/SellingCustomerOrderDelLoad.html (edit that file instead) */; ?>