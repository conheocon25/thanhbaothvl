<?php 
function tpl_5129fe96_ImportSupplierOrderU__usDmM4H3YoyCw6NWMlR21A(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>
 
<?php /* tag "html" from line 2 */; ?>
<html>
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeCSS_Mobile', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeJS_Mobile', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 6 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/ImportSupplierOrderUpdLoad.js"></script>
		<?php /* tag "script" from line 7 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/SCOUpdLoad.js"></script>
	</head>
<?php /* tag "body" from line 9 */; ?>
<body>
	<?php /* tag "div" from line 10 */; ?>
<div id="PageImportSupplierOrderUpdLoad" data-role="page">
		<?php /* tag "div" from line 11 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 12 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
			<?php /* tag "a" from line 13 */; ?>
<a href="#" data-icon="back" data-rel="back" data-role="button">Lui</a>
		</div>
		<?php /* tag "div" from line 15 */; ?>
<div data-role="content" data-theme="a">
			<?php 
/* tag "form" from line 16 */ ;
if (null !== ($_tmp_1 = ($ctx->DetailURLUpdExe))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form id="FormImportSupplierOrderUpdLoad" data-ajax="false" method="post" class="ui-body ui-body-a ui-corner-all"<?php echo $_tmp_1 ?>
>
				<?php /* tag "fieldset" from line 17 */; ?>
<fieldset>
					<?php /* tag "div" from line 18 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 19 */; ?>
<label for="Count">Số lượng:</label>
						<?php 
/* tag "input" from line 20 */ ;
if (null !== ($_tmp_2 = ($ctx->Count))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="required" type="text" name="Count" id="Count"<?php echo $_tmp_2 ?>
/>
					</div>
					<?php /* tag "div" from line 22 */; ?>
<div data-role="fieldcontain">
						<?php /* tag "label" from line 23 */; ?>
<label for="Price">Đơn giá:</label>
						<?php 
/* tag "input" from line 24 */ ;
if (null !== ($_tmp_2 = ($ctx->Price))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="required" type="text" name="Price" id="Price"<?php echo $_tmp_2 ?>
/>
						<?php /* tag "div" from line 25 */; ?>
<div align="center"><?php /* tag "b" from line 25 */; ?>
<b style="color:red;font-size:15pt;" class="readprice"></b> </div>
					</div>
				</fieldset>
				<?php /* tag "button" from line 28 */; ?>
<button type="submit" data-theme="b" data-icon="check" name="submit" value="submit-value">Lưu</button>
			</form>
		</div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/a23app/public_html/minhtai/mvc/templates/ImportSupplierOrderUpdLoad.html (edit that file instead) */; ?>